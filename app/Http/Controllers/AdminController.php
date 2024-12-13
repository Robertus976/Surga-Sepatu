<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Banner;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{

    public function index()
{
    return view('admin.index'); // Halaman dashboard admin
}

    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category;
        $category->save();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Berhasil Dihapus');
        return redirect()->back();
    }

    public function edit_category(Request $request, $id)
    {
        $data = Category::find($id);
        return view('admin.edit_category', compact('data'));
    }

    public function update_category(Request $request, $id)
    {
        $data = Category::find($id);
        $data->category_name = $request->category;
        $data->save();
        toastr()->timeOut(10000)->closeButton()->addSuccess('Berhasil Diedit');
        return redirect('/view_category');
    }

    public function add_product()
    {
        $category = Category::all();
        return view('admin.add_product', compact('category'));
    }

    public function upload_product(Request $request)
    {
        $data = new Product; // Menggunakan Product model
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->category = $request->category;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('produks', $imagename);
            $data->image = $imagename;
        }
        $data->save();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Produk Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function view_product()
    {
        $product = Product::paginate(3); // Menggunakan Product model
        return view('admin.view_product', compact('product'));
    }

    public function hapus_product($id)
    {
        $data = Product::find($id); // Menggunakan Product model

        $image_path = public_path('produks/' . $data->image);

        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $data->delete();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Berhasil di Hapus');
        return redirect()->back();
    }

    public function update_product($id)
    {
        $data = Product::find($id); // Menggunakan Product model
        return view('admin.update_page', compact('data'));
    }

    public function edit_product(Request $request, $id)
    {
        $data = Product::find($id); // Menggunakan Product model
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->category = $request->category;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('produks', $imagename);
            $data->image = $imagename;
        }

        $data->save();

        return redirect('/view_product');
    }

    public function search_product(Request $request)
    {
        $search = $request->search;
        $product = Product::where('title', 'LIKE', '%' . $search . '%')->paginate(3); // Menggunakan Product model
        return view('admin.view_product', compact('product'));
    }

    // Method untuk menampilkan semua banner
    public function view_banner()
{
    $banners = Banner::paginate(5); // Mengambil data dengan paginasi
    return view('admin.view_banner', compact('banners'));
}

    // Method untuk menampilkan form tambah banner
    public function add_banner()
    {
        return view('admin.add_banner');
    }

    // Method untuk upload banner baru
    public function upload_banner(Request $request)
    {
        $banner = new Banner;
        $banner->title = $request->title;
        $banner->description = $request->description;

        $image = $request->file('image');
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('banners'), $imagename); // Simpan gambar ke folder 'banners'
            $banner->image = $imagename;
        }

        $banner->save();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Banner Berhasil Ditambahkan');
        return redirect()->route('view_banner');
    }

    // Method untuk menampilkan form edit banner
    public function update_banner($id)
    {
        $banner = Banner::find($id);
        return view('admin.update_banner', compact('banner'));
    }

    // Method untuk mengedit banner
    public function edit_banner(Request $request, $id)
    {
        $banner = Banner::find($id);
        $banner->title = $request->title;
        $banner->description = $request->description;

        $image = $request->file('image');
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('banners'), $imagename); // Simpan gambar ke folder 'banners'
            $banner->image = $imagename;
        }

        $banner->save();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Banner Berhasil Diedit');
        return redirect()->route('view_banner');
    }

    // Method untuk menghapus banner
    public function delete_banner($id)
    {
        $banner = Banner::find($id);
        $image_path = public_path('banners/' . $banner->image);

        if (file_exists($image_path)) {
            unlink($image_path); // Menghapus gambar dari folder
        }

        $banner->delete();

        toastr()->timeOut(10000)->closeButton()->addSuccess('Banner Berhasil Dihapus');
        return redirect()->route('view_banner');
    }

    public function view_order()
    {
        $data = Order::all();
        return view('admin.order',compact('data'));
    }

    public function dalam_perjalanan($id)
    {

        $data = Order::find($id);

        $data->status = 'Dalam Perjalanan';

        $data->save();

        return redirect('/view_order');

    }

    public function mengantar($id)
    {

        $data = Order::find($id);

        $data->status = 'Mengantar';

        $data->save();

        return redirect('/view_order');

    }

    public function print_pdf($id)
    {

        $data =Order::find($id);

        $pdf = Pdf::loadView('admin.invoice',compact('data'));

        return $pdf->download('invoice.pdf');
    }
}

