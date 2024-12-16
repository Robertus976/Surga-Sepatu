<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Banner;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use App\Services\MidtransService;

class HomeController extends Controller
{
    public function index()
    {
        // Count the number of users where 'usertype' is 'user'
        $user = User::where('usertype', 'user')->get()->count();
        $product = Product::all()->count();
        $order = Order::all()->count();
        $deliverd = Order::where('status', 'Terkirim')->get()->count();

        // Pass the variable to the view
        return view('admin.index', compact('user', 'product', 'order', 'deliverd'));
    }

    public function home()
    {
        // Mengambil semua banner
        $banners = Banner::all();

        // Mengambil produk terkini berdasarkan waktu penambahan
        $Recent_Products = Product::orderBy('created_at', 'desc') // Urutkan berdasarkan waktu dibuat (terbaru dulu)
            ->take(8) // Batasi jumlah produk (misalnya 8)
            ->get();

        // Hitung jumlah item di keranjang
        $count = $this->getCartCount();

        // Mengirim data ke view
        return view('home.index', compact('banners', 'Recent_Products', 'count'));
    }

    public function product_details($id)
    {
        // Ambil data produk berdasarkan ID dan kategori terkait
        $data = Product::with('category')->findOrFail($id);

        // Hitung jumlah item di keranjang
        $count = $this->getCartCount();

        // Mengirim data ke view
        return view('home.product_details', compact('data', 'count'));
    }

    public function allProducts()
    {
        // Mengambil semua produk
        $Products = Product::all();

        // Hitung jumlah item di keranjang
        $count = $this->getCartCount();

        // Mengirim data ke view
        return view('home.product', compact('Products', 'count'));
    }

    public function whyus()
    {
        return view('home.why');
    }

    public function showForm()
    {
        return view('home.contact');
    }

    public function sendEmail(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:500',
        ]);

        // Kirim email
        Mail::to('kukuhsp5@gmail.com')->send(new ContactMail($validated));

        return back()->with('success', 'Pesan berhasil dikirim!');
    }

    public function search(Request $request)
    {
        // Ambil query pencarian dari request
        $query = $request->input('query');

        // Cari produk berdasarkan title dan muat relasi 'category'
        $products = Product::with('category')
            ->where('title', 'LIKE', "%{$query}%")
            ->get();

        // Hitung jumlah item di keranjang
        $count = $this->getCartCount();

        // Kembalikan ke view dengan data produk dan query
        return view('home.search', compact('products', 'query', 'count'));
    }

    public function add_cart($id)
    {
        // Ambil ID user dan produk
        $user = Auth::user();
        $user_id = $user->id;

        // Tambahkan produk ke keranjang
        $data = new Cart;
        $data->user_id = $user_id;
        $data->product_id = $id;
        $data->save();

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function mycart()
    {
        if (Auth::id()) {
            $user = Auth::user();
            $user_id = $user->id;

            // Ambil item di keranjang
            $cart = Cart::where('user_id', $user_id)->get();
            $count = $cart->count();

            // Hitung total amount dari produk dalam keranjang
            $totalAmount = 0;
            foreach ($cart as $item) {
                $product = Product::find($item->product_id);
                $totalAmount += (float) $product->price; // Menghitung harga produk, pastikan harga produk adalah tipe data yang sesuai
            }

            // Buat Snap Token menggunakan MidtransService
            $midtrans = new MidtransService();
            $order = new \stdClass();
            $order->midtrans_order_id = 'ORDER-' . uniqid();
            $order->name = $user->name;
            $order->phone = $user->phone;

            // Create snap token dengan total amount yang dihitung
            $snapToken = $midtrans->createSnapToken($order, $totalAmount); // Pass total amount yang dihitung
        } else {
            $cart = [];
            $count = 0;
            $snapToken = null;
        }

        return view('home.mycart', compact('cart', 'count', 'snapToken'));
    }

    /**
     * Helper untuk menghitung jumlah item di keranjang
     */
    private function getCartCount()
    {
        // Mengambil ID user yang sedang login
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            return Cart::where('user_id', $user_id)->count();
        }

        return 0;
    }

    public function delete_cart($id)
    {
        // Ambil ID user dan produk
        $user = Auth::user();
        $user_id = $user->id;

        // Cari item keranjang berdasarkan user_id dan product_id
        $cart_item = Cart::where('user_id', $user_id)->where('product_id', $id)->first();

        // Jika item ditemukan, hapus dari keranjang
        if ($cart_item) {
            $cart_item->delete();
            return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang!');
        }

        // Jika item tidak ditemukan
        return redirect()->back()->with('error', 'Produk tidak ditemukan di keranjang!');
    }

    public function confirm_order(Request $request, MidtransService $midtransService)
    {
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;
        $user_id = Auth::user()->id;

        $cart = Cart::where('user_id', $user_id)->get();
        $totalAmount = 0;
        foreach ($cart as $carts) {
            $order = new Order();
            $order->name = $name;
            $order->rec_address = $address;
            $order->phone = $phone;
            $order->user_id = $user_id;
            $order->product_id = $carts->product_id;
            $order->midtrans_order_id = 'ORDER-' . uniqid();
            $order->save();

            // Generate Snap Token menggunakan MidtransService
            $snapToken = $midtransService->createSnapToken($order, $totalAmount);
            $order->snap_token = $snapToken;
            $order->save();
        }

        // Hapus item dari keranjang
        Cart::where('user_id', $user_id)->delete();

        return redirect()->route('home.index')->with('success', 'Pesanan berhasil dikonfirmasi!');
    }
}
