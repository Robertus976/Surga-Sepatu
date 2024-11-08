<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SURGASEPATU</title>
    <!-- link cdn icont font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- link favicon -->
    <link rel="shortcut icon" href="image/asets/favicon/icon-image.jpg" type="image/x-icon">
    <!-- link main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header class="navbar-container">
      <div class="wrapper-header size-container flex-between">
        <div class="header-logo">
          <h1>SURGA<span> SEPATU</span></h1>
        </div>
        <div class="header-search">
          <input type="search" placeholder="Search here..." />
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="header-icon">
          <i class="fa-regular fa-heart"></i>
          <i class="fas fa-shopping-cart"> </i>
        </div>
        <div class="burger-menu">
          <i id="menu-hamburger" class="fa-solid fa-bars"></i>
        </div>
      </div>
      <nav class="wrapper-nav-list size-container">
        <ul>
          <li><a href="#Home">Home</a></li>
          <li><a href="#About">Tentang kami</a></li>
          <li><a href="#Product">Produk</a></li>
          <li><a href="#newArrival">New produk</a></li>
          <li><a href="#Reviews">Review</a></li>
          <li><a href="#Contact">kontak</a></li>
          <li><a href="#Profile">Profile</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section id="Home">
        <div class="wrapper-home">
          <div class="home-content">
            <h1>banyak pilihan untuk style mu</h1>
            <p>Temukan koleksi sepatu terbaru kami yang bergaya dan nyaman. Pilih dari pilihan berkualitas tinggi kami, termasuk sepatu kasual, sepatu olahraga, dan merek terkenal. Mulailah petualangan penampilan Anda sekarang!</p>
            <div class="home-content-btn">
              <button class="style-active-button">Belanja sekarang</button>
              <button class="style-button">Lebih Banyak</button>
            </div>
            <div class="home-content-sosmed">
              <div class="sosmed">
                <a href="https://www.instagram.com/surgasepatujogja_/" target="_blank" class="btn-sosmed">
                  <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.tiktok.com/@surgasepatujogja_" target="_blank" class="btn-sosmed">
                  <i class="fa-brands fa-tiktok"></i>
                </a>
                
                </a>
              </div>
            </div>
          </div>
          <div class="home-image flex-center">
            <img src="image/surgass.jpg" alt="Home profile" />
          </div>
        </div>
      </section>
      <section id="About">
        <h2>Tentang kami</h2>
        <div class="wrapper-about">
          <div class="about-image">
            <img src="image/gambar1.jpg" alt="image-about" />
          </div>
          <article class="about-content">
            <p>
                Selamat datang di [ SURGA SEPATU ]!

                Kami adalah toko sepatu yang berdedikasi untuk menyediakan sepatu berkualitas tinggi dan nyaman untuk segala kebutuhan. Sejak berdiri pada tahun [Tahun Berdiri], kami telah melayani pelanggan dengan berbagai macam koleksi sepatu, mulai dari sepatu kasual, olahraga, hingga sepatu formal. Kami percaya bahwa setiap langkah Anda adalah penting, itulah mengapa kami selalu memilih sepatu dengan bahan terbaik, desain terkini, dan harga yang terjangkau.
            </p>
          </article>
        </div>
      </section>
      <section id="Product">
        <div class="wrapper-product">
          <div class="banner-product">
            <div class="deskripsi-banner-product">
              <h3>koleksi teratas</h3>
              <p>Temukan gaya dan kenyamanan di setiap langkah, Toko sepatu kami menawarkan pilihan terbaik. Dari kasual hingga formal, kami memiliki semuanya, Kualitas unggul, gaya tak tertandingi, oh wow!</p>
              <a href="#Product" class="style-active-button">beli</a>
            </div>
          </div>
          <div class="wrapper-card">
            <div class="box-card flex-between">
              <div class="card-product-promo">
                <div class="flex-between">
                  <h3>PENAWARAN</h3>
                  <a href="#product">lihat</a>
                </div>
                <img src="image/asets/Product/Nike-blazer-mid.png" alt="Nike-blazer-mid" />
                <h3>Nike Blazer Mid</h3>
                <div class="card-product-rating">
                  <i class="fas fa-star active-rating"></i>
                  <i class="fas fa-star active-rating"></i>
                  <i class="fas fa-star active-rating"></i>
                  <i class="fas fa-star active-rating"></i>
                  <i class="fas fa-star"></i>
                </div>
                <div class="harga-product flex-between">
                  <span>321</span>
                  <span class="harga-awal">452</span>
                </div>
              </div>
              <div class="card-product">
                <div class="title-product flex-between">
                  <h2>Product</h2>
                  <a href="#newArrival">More</a>
                </div>
                <div class="list-card flex-between">
                  <div class="card">
                    <img src="image/asets/Product/converse-chuck-70.png" alt="converse-chuck-70" />
                    <h3>Converse Chuck 70</h3>
                    <p>memperkenalkan sepatuh terbaru dari convers dengan kualitas dan teknologi terbaik</p>
                    <div class="card-product-rating">
                      <i class="fas fa-star active-rating"></i>
                      <i class="fas fa-star active-rating"></i>
                      <i class="fas fa-star active-rating"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <div class="harga-product flex-between">
                      <span>345</span>
                      <span class="harga-awal">444</span>
                    </div>
                  </div>
                  <!-- card 2 -->
                  <div class="card">
                    <img src="image/asets/Product/CONVERSE-FFSSBCONA-CONA03500C-Mustard.png" alt="CONVERSE-FFSSBCONA-CONA03500C-Mustard" />
                    <h3>Converse Pro Leather</h3>
                    <p>produk dari Converse yang mendapatkan popularitas karena fitur unik dan gaya klasiknya.</p>
                    <div class="card-product-rating">
                      <i class="fas fa-star active-rating"></i>
                      <i class="fas fa-star active-rating"></i>
                      <i class="fas fa-star active-rating"></i>
                      <i class="fas fa-star active-rating"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <div class="harga-product flex-between">
                      <span>400</span>
                      <span class="harga-awal">441</span>
                    </div>
                  </div>

                  <!-- card 3 -->
                  <div class="card">
                    <img src="image/asets/Product/Nike-Jordan.png" alt="Nike-Jordan" />
                    <h3>Nike Jordan Air</h3>
                    <p>produk satu ini sangat digemari oleh anakak jaman sekarang karena tampilan nya yg moderen .</p>
                    <div class="card-product-rating">
                      <i class="fas fa-star active-rating"></i>
                      <i class="fas fa-star active-rating"></i>
                      <i class="fas fa-star active-rating"></i>
                      <i class="fas fa-star active-rating"></i>
                      <i class="fas fa-star active-rating"></i>
                    </div>
                    <div class="harga-product flex-between">
                      <span>456</span>
                      <span class="harga-awal">532</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="newArrival">
        <div class="wrapper-newArrival">
          <div class="box-newArrival">
            <div class="menu-newArrival">
              <div class="title-product-newArrival flex-between">
                <h1>NEW OFFER</h1>
                <a href="#newArrival">More</a>
              </div>
              <div class="product-newArrival flex-between">
                <img src="image/asets/Product/converse-one-star-Sage.png" alt="converse-one-star-Sage" />
                <div class="deskripsi-product-newArrival">
                  <h3>One Star Sage</h3>
                  <div class="card-product-rating">
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <span class="harga-awal">$227</span>
                </div>
              </div>

              <!-- product 2 -->
              <div class="product-newArrival flex-between">
                <img src="image/asets/Product/Nike-jordan-air.png" alt="nike jordan low" />
                <div class="deskripsi-product-newArrival">
                  <h3>Nike Air Low</h3>
                  <div class="card-product-rating">
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <span class="harga-awal">$311</span>
                </div>
              </div>

              <!-- peoduct 3 -->
              <div class="product-newArrival flex-between">
                <img src="image/asets/Product/converse-one-star-low.png" alt="converse-one-star-low" />
                <div class="deskripsi-product-newArrival">
                  <h3>One Star Low</h3>
                  <div class="card-product-rating">
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <span class="harga-awal">$166</span>
                </div>
              </div>

              <!-- product 4 -->
              <div class="product-newArrival flex-between">
                <img src="image/asets/Product/Converse-one-star-high.png" alt="Converse-one-star-high" />
                <div class="deskripsi-product-newArrival">
                  <h3>One Start High</h3>
                  <div class="card-product-rating">
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas "></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <span class="harga-awal">$232</span>
                </div>
              </div>

              <!-- product 5 -->
              <div class="product-newArrival flex-between">
                <img src="image/asets/Product/Nike-jordan-high.png" alt="Nike-jordan-high" />
                <div class="deskripsi-product-newArrival">
                  <h3>Nike Jordan High</h3>
                  <div class="card-product-rating">
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas active-rating"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <span class="harga-awal">$487</span>
                </div>
              </div>


            </div>
            <div class="box-card-newArrival">
              <div class="banner-newArrival">
                <div class="content-banner-newArrival flex-center">
                  <h3>New Arrival</h3>
                  <p>Discover the latest style with our newest collection, Our shoe store offers the most up-to-date options. From modern designs to the latest trends, Elevate your appearance with our curated selection of shoes!</p>
                  <a href="#Product" class="style-active-button">Shop No</a>
                </div>
              </div>
              <div class="card-newArrival flex-between">
                <div class="card">
                  <img src="image/asets/Product/converse-one-star-Black.png" alt="converse-one-star-Black" />
                  <h3>Converse one star Black</h3>
                  <p>Iconic sneaker product that offers classic and versatile style.</p>
                  <div class="card-product-rating">
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="harga-product flex-between">
                    <span>$330</span>
                    <span class="harga-awal">$440</span>
                  </div>
                </div>
                <!-- card ke 2 -->
                <div class="card">
                  <img src="image/asets/Product/converse-one-star-Denim.png" alt="converse-one-star-Denim" />
                  <h3>Converse one star Denim</h3>
                  <p>Stylish and trendy sneaker that features a denim upper.</p>
                  <div class="card-product-rating">
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="harga-product flex-between">
                    <span>$499</span>
                    <span class="harga-awal">$600</span>
                  </div>
                </div>

                <!-- card ke 3 -->
                <div class="card">
                  <img src="image/asets/Product/converse-one-star-Grey.png" alt="converse-one-star-Grey" />
                  <h3>Converse one star Grey</h3>
                  <p>The grey colorway gives the shoes a cool and understated appearance.</p>
                  <div class="card-product-rating">
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="harga-product flex-between">
                    <span>$399</span>
                    <span class="harga-awal">$455</span>
                  </div>
                </div>

                <!-- card ke 4 -->
                <div class="card">
                  <img src="image/asets/Product/converse-run-star-Blue.png" alt="converse-run-star-Blue" />
                  <h3>Converse run star Blue</h3>
                  <p>Blue colorway adds a bold and playful touch to your outfit.</p>
                  <div class="card-product-rating">
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                  </div>
                  <div class="harga-product flex-between">
                    <span>$444</span>
                    <span class="harga-awal">$566</span>
                  </div>
                </div>

                <!-- card ke 5 -->
                <div class="card">
                  <img src="image/asets/Product/Converse-run-star-hike-Mustard.png" alt="Converse-run-star-hike-Mustard" />
                  <h3>Converse run star hike</h3>
                  <p>Sneaker that combines the best of sporty and outdoor-inspired design.</p>
                  <div class="card-product-rating">
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="harga-product flex-between">
                    <span>$499</span>
                    <span class="harga-awal">$700</span>
                  </div>
                </div>

                <!-- card 6 -->
                <div class="card">
                  <img src="image/asets/Product/converse-one-star-Orange.png" alt="converse-one-star-Orange" />
                  <h3>Converse one star Orange</h3>
                  <p>Color to your footwear collection.The bright orange.</p>
                  <div class="card-product-rating">
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="harga-product flex-between">
                    <span>$311</span>
                    <span class="harga-awal">$400</span>
                  </div>
                </div>

                <!-- card 7 -->
                <div class="card">
                  <img src="image/asets/Product/converse-one-star-Red.png" alt="Converse-run-star-hike-Mustard" />
                  <h3>Converse one star Red</h3>
                  <p>Red colorway instantly commands attention and infuses your outfit.</p>
                  <div class="card-product-rating">
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                  </div>
                  <div class="harga-product flex-between">
                    <span>$199</span>
                    <span class="harga-awal">$299</span>
                  </div>
                </div>
                
                <!-- card 8 -->
                <div class="card">
                  <img src="image/asets/Product/converse-run-star-Black.png" alt="Converse-run-star-hike-Mustard" />
                  <h3>Converse run star Black</h3>
                  <p>Black colorway exudes a sense of sophistication and pairs well.</p>
                  <div class="card-product-rating">
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star active-rating"></i>
                    <i class="fas fa-star "></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="harga-product flex-between">
                    <span>$299</span>
                    <span class="harga-awal">$399</span>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="Contact">
        <div class="wrapper-contact">
          <div class="flex-between">
            <div class="form-contact">
              <h2>Contact Us</h2>
              <form action="">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name ..." />
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="example@gmail.com" />
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="20" rows="10" placeholder="Input message here ..."></textarea>
                <button type="submit" class="style-active-button">Send</button>
              </form>
            </div>
            <div class="image-contact">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1587.980642927764!2d110.39131891900664!3d-7.768017565904233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59ba6aaae26d%3A0xb4238289a4d0a30e!2sToko%20Surgasepatu%20Jogja!5e0!3m2!1sid!2sid!4v1730746566657!5m2!1sid!2sid" 
                width="600" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
            
               
              ></iframe>
            </div>
          </div>
          <div class="info-contact">
            <div class="card-info-contact flex-center">
              <div class="card">
                <div class="icon-info-contact">
                  <i class="fa-solid fa-phone"></i>
                  <h4>Call Us</h4>
                </div>
                <p>kontak kami pada nomor <span>Phone: 085856064117</span></p>
              </div>
              <div class="card">
                <div class="icon-info-contact">
                  <i class="fa-sharp fa-solid fa-location-dot"></i>
                  <h4>Location</h4>
                </div>
                <p>jalan selokan mataram jugjakarta </p>
              </div>
              <div class="card">
                <div class="icon-info-contact">
                  <i class="fa-solid fa-clock"></i>
                  <h4>Hours</h4>
                </div>
                <p>senin - jumat: 9:00 AM - 8:00 PM sabtu: 10:00 AM - 6:00 PM.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="Reviews">
        <div class="wrapper-reviews">
          <h2>Reviews</h2>
          <p>Ulasan dari customer kami</p>
          <div class="card-reviews flex-center">
            <div class="card">
              <div class="box-image-reviews">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill="#FF0066"
                    d="M60.5,-25.2C65.7,-3.5,48.6,19.9,28.4,33.2C8.2,46.4,-15,49.6,-35.7,37.3C-56.3,25.1,-74.3,-2.4,-67.9,-25.7C-61.6,-49,-30.8,-68,-1.6,-67.5C27.6,-66.9,55.2,-46.9,60.5,-25.2Z"
                    transform="translate(100 100)"
                  />
                </svg>
                <img src="image/messi.jpg" alt="Person Reviews messi" />
              </div>
              <h3>lionel messi</h3>
              <span> “ </span>
              <p>
                Saya sangat puas dengan sepatu yang baru saya beli. Desainnya yang stylish dan kualitasnya yang prima membuat saya merasa nyaman memakainya sepanjang hari. Sepatu ini juga memberikan dukungan yang besar untuk kaki saya. Sangat direkomendasikan.
              </p>
            </div>

            <!-- card 2 -->
            <div class="card">
              <div class="box-image-reviews">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill="#FF0066"
                    d="M43.1,-67.9C51.9,-61.5,52.2,-42.7,56.3,-27.5C60.4,-12.3,68.4,-0.7,66,8.8C63.6,18.3,50.8,25.7,40.9,33.1C30.9,40.6,23.6,48.1,14.3,52.9C4.9,57.6,-6.5,59.4,-20.4,59.8C-34.3,60.2,-50.5,59,-56.9,50.2C-63.2,41.3,-59.5,24.7,-62.4,8.6C-65.4,-7.5,-74.9,-23,-72.5,-35.1C-70.1,-47.3,-55.8,-55.9,-41.8,-59.9C-27.7,-64,-13.8,-63.3,1.7,-65.9C17.2,-68.5,34.4,-74.3,43.1,-67.9Z"
                    transform="translate(100 100)"
                  />
                </svg>
                <img src="image/ronaldo.jpg" alt="person reviews ronaldo" />
              </div>
              <h3>ronaldo</h3>
              <span> “ </span>
              <p>
                Sepatu yang saya beli dari toko ini sungguh luar biasa. Tidak hanya terlihat bagus, tetapi juga sangat nyaman. Saya sering kesulitan menemukan sepatu yang sesuai dengan bentuk kaki saya, namun sepatu ini sangat pas. Itu
                kualitasnya juga luar biasa, membuat saya yakin akan bertahan lama.SIUU!!!!
              </p>
            </div>
            <!-- card 3 -->
            <div class="card">
              <div class="box-image-reviews">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                  <path fill="#FF0066" d="M50.4,-6.1C50.4,20.7,25.2,41.4,-1.9,41.4C-29.1,41.4,-58.1,20.7,-58.1,-6.1C-58.1,-33,-29.1,-66,-1.9,-66C25.2,-66,50.4,-33,50.4,-6.1Z" transform="translate(100 100)" />
                </svg>

                <img src="image/antony.png" alt="person reviews antony" />
              </div>
              <h3>goat antony</h3>
              <span> “ </span>

              <p>
                Saya baru saja mendapat sepasang sepatu dari toko ini, dan saya senang dengan pembelian saya. Sepatu ini terasa ringan dan menawarkan perlindungan yang sangat baik untuk kaki saya. Desainnya yang elegan juga menambah rasa percaya diri saya. Layanan pelanggan di
                toko ini luar biasa. Terima kasih!
              </p>
            </div>
          </div>
        </div>
      </section>
      <section id="Profile">
        <div class="wrapper-profile">
          <h2>Profile</h2>
          <p>Toko sepatuh</p>
          <div class="card-profile flex-between">
            <div class="card">
              <h4>Details</h4>
              <h6>Name</h6>
              <span>Surga sepatuh</span>
              <h6>lokasi</h6>
              <span>jalan selokan mataram</span>
              <h6>kota</h6>
              <span>jogjakarta</span>
              <div class="sosmed-profile">
                <a href="https://www.instagram.com/surgasepatujogja_//" target="_blank" class="btn-sosmed">
                  <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.tiktok.com/@surgasepatujogja_" target="_blank" class="btn-sosmed">
                  <i class="fa-brands fa-tiktok"></i>
                </a>

                </a>
              </div>
            </div>

            <!-- card 2 -->
            <div class="card">
              <h4>Misi kami</h4>
              <p>
                misi kami adalah memberikan pengalaman berbelanja yang nyaman dan menyenangkan bagi semua pelanggan. Kami memahami bahwa setiap orang memiliki gaya dan kebutuhan yang berbeda, sehingga kami menawarkan koleksi sepatu yang luas dan beragam. Baik Anda sedang mencari sepatu untuk aktivitas sehari-hari, olahraga, atau acara khusus, kami siap membantu Anda menemukan pasangan yang tepat..
              </p>
              <button type="submit" class="style-active-button">
                <a href="#Contact" class="contact-me">Contact Me</a></button>
            </div>

            <!-- card 3 (aside) -->
            <aside class="flex-center">
              <img src="image/logo.jpg" alt="" />
              <h4>tentang kami</h4>
              <p>Kami selalu berusaha memberikan pelayanan terbaik bagi pelanggan. Kepuasan Anda adalah motivasi utama kami untuk terus berkembang dan menyediakan produk-produk unggulan. Terima kasih telah mempercayakan [surga sepatuh] sebagai pilihan Anda dalam mencari sepatu yang sempurna..</p>
              <button id="showDetail" class="style-active-button">lihat Detail</button>
            </aside>
          </div>
        </div>
        <div class="profile-overlay">
          <div class="wrapper-profil-overlay flex-center">
            <div class="content-profil-overlay">
              <div id="closeProfilOverlay" class="flex-center">
                <i  class="fa-solid fa-xmark"></i>
              </div>
              <h1>toko kami</h2>
              <div class="flex-between">
                <div class="image-profil">
                  <img src="image/logo.jpg" alt="foto profil" />
                </div>
                <div class="deskripsi-profil">
                  <h2>informasi toko</h2>
                  <ul>
                    <li><strong>Nama:</strong>Surga sepatu </li>
                    <li><strong>tanggal berdirih:</strong> 15 januari 2015</li>
                    <li><strong>Alamat:</strong>jln.selokan mataram</li>
                    <li><strong>Email:</strong> surgasepatu@gmail.com</li>
                  </ul>
  
                  <h2>layanan kami </h2>
                  <ul>
                    <li><strong>koleksi sepatuh:</strong>  Sepatu kasual, olahraga, formal, dan anak-anak</li>
                    <li><strong>pengiriman:</strong> seluruh indonesia</li>
                    <li><strong>garansi:</strong> selama 1 bulan</li>
                  </ul>
  
                  <h2>Status</h2>
                  <ul>
                    <li><strong>toko aktif:</strong>buka senin -jumat</li>
                  </ul>
  
                  <h2>Kelebihan</h2>
                  <ul>
                    <li>kualitas terjamin</li>
                    <li>harga terjangkau</li>
                    <li>pengiriman cepat</li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- overlay profile -->
      
     <!--tempat foter wa -->

      <footer>
        <div class="wrapper-footer">
          <div class="footer-content flex-between">
            <div class="footer-logo">
              <h4>Surga<span>Sepatuh</span></h4>
              <p>Discover our latest collection of stylish and comfortable shoes. Choose from our high-quality selection, including casual shoes, sports shoes, and renowned brands. Start your fashion adventure now!</p>
            </div>
            <div class="footer-collection">
              <h4>Collection</h4>
              <ul>
                <li><a href="#Product">Summer</a></li>
                <li><a href="#Product">Converse</a></li>

                <li><a href="#newArrival">Sporty</a></li>

                <li><a href="#newArrival">CLasic</a></li>
              </ul>
            </div>
            <div class="footer-contact">
              <h4>Contact</h4>
              <ul>
                <li>085856064117</li>
                <li>surga sepatu</li>
                <li>surgasepatu@gmail.com</li>
              </ul>
            </div>
            <div class="footer-payment">
              <h4>PAYMENT METHODS</h4>
              <p>Here are some payment methods available for purchases at our shoe store:</p>
              <ul class="flex-between">
                <li>
                  <a href="#">
                    <img src="image/asets/payment/visa.png" alt="logo visa" />
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="image/asets/payment/master card.png" alt="logo master card" />
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="image/asets/payment/ovo.png" alt="logo ovo" />
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="image/asets/payment/dana.png" alt="logo dana" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <p>surga sepatuh,</p>
        </div>
      </footer>
    </main>

    <!-- file javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
