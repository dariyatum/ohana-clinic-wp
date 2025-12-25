<?php get_header();?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OHANA clinic</title>
  
    <link rel="stylesheet" href="wp-content/themes/my-theme/style.css"/>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  </head>
  <body>
   

    <section class="hero">
      <div class="container hero-content">
        <div class="hero-text">
          <h1>One Of The Patients. How you feel.</h1>
          <p>
            EnoughA warm treatment that can be received Caring for You, Every
            Step of the Way Where Your Health Comes First
          </p>
          <a href="#products" class="btn">Shop Products</a>
        </div>
        <div class="hero-image">
          <img src="/image/doctor.jpg" alt="Perfume Bottle" />
        </div>
      </div>
    </section>

    <section class="products">
      <div class="container">
        <div class="product-grid">
          <div class="product-card">
            <span class="badge">Update</span>
           
            <img src="/image/clook-removebg-preview.png" alt="Milk Orchid" />
            <div class="product-info">
              <p>Close to the station from 8 a.m. to 8 a.m. (Monday, Wednesday, Friday)</p>
              <div class="rating"></div>
              <a href="#about" class="btn-see-more">See More</a>

            </div>
          </div>

          <div class="product-card">
            <span class="badge">New</span>
            <span class="wishlist">♡</span>
            <img src="new.jpg" alt="Ice(d)" />
            <div class="product-info">
              <h3>Ice(d)</h3>
              <div class="rating">★★★★☆ <span>(64)</span></div>
              <p class="price">$34.00 – $155.00</p>
            </div>
          </div>

          <!-- Product Card 3 -->
          <div class="product-card">
            <span class="badge">Bestseller</span>
            <span class="wishlist">♡</span>
            <img src="new.jpg" alt="Milk" />
            <div class="product-info">
              <h3>Milk</h3>
              <div class="rating">★★★★★ <span>(890)</span></div>
              <p class="price">$18.00 – $155.00</p>
            </div>
          </div>

          <div class="product-card">
            <span class="badge">Trending</span>
            <span class="wishlist">♡</span>
            <img src="new.jpg" alt="Gold" />
            <div class="product-info">
              <h3>Gold</h3>
              <div class="rating">★★★★★ <span>(893)</span></div>
              <p class="price">$34.00 – $155.00</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  


<?php get_footer();?>
