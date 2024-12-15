<head>
    @include('home.css')
</head>

<body>
    <!-- Header -->
    @include('home.header')
</body>
</html>
</div>
  <!-- end hero area -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Hubungi Kami
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.642512162328!2d110.3894574244661!3d-7.767765280482707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59ba6aaae26d%3A0xb4238289a4d0a30e!2sToko%20Surgasepatu%20Jogja!5e0!3m2!1sen!2sid!4v1695002301119!5m2!1sen!2sid" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
            <form action="{{ route('send.email') }}" method="POST">
                @csrf
                <div>
                    <input type="text" name="name" placeholder="Name" required />
                </div>
                <div>
                    <input type="email" name="email" placeholder="Email" required />
                </div>
                <div>
                    <input type="text" name="phone" placeholder="Phone" required />
                </div>
                <div>
                    <textarea name="message" placeholder="Message" required></textarea>
                </div>
                <button type="submit">SEND</button>
            </form>

        </div>
      </div>
    </div>
  </section>

    <!-- info section -->
    <footer>
        @include('home.footer')
    </footer>
</body>

</html>