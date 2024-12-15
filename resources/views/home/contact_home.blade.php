<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hubungi Kami</title>
  <style>
    /* CSS untuk heading */
.heading_container h2 {
    font-size: 30px;
    font-weight: bold;
    color: #333;
    letter-spacing: 1px;
    margin-bottom: 20px;
    text-align: center;
}

.heading_container h2 .highlight-text {
    color: #ff5722;
    font-style: italic;
}

/* CSS untuk map */
.map-responsive {
    position: relative;
    padding-bottom: 56.25%; /* Menjaga rasio 16:9 */
    height: 0;
    overflow: hidden;
    max-width: 100%;
}

.map-responsive iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

/* CSS untuk form */
.form-container form {
    width: 100%;
    max-width: 500px; /* Batas lebar form */
    margin: 0 auto;
}

.form-container input,
.form-container button {
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-container button {
    background-color: #ff5722;
    color: white;
    cursor: pointer;
}

.form-container button:hover {
    background-color: #e64a19;
}


  </style>
</head>

<body>
<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                <span class="highlight-text">Hubungi</span> Kami
            </h2>
        </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-7 col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
                <div style="width: 100%; height: 400px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.642512162328!2d110.3894574244661!3d-7.767765280482707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59ba6aaae26d%3A0xb4238289a4d0a30e!2sToko%20Surgasepatu%20Jogja!5e0!3m2!1sen!2sid!4v1695002301119!5m2!1sen!2sid"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 px-0">
          <div class="form-container">
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
    </div>
</section>

</body>
</html>
