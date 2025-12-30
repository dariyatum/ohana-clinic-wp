<?php get_header();?>
<link rel="stylesheet" href="style.css">
<div class="scroll"></div>


<section class="facility-hero">
  <div class="hero-overlay">
    <h1>Clinic Facility Tour</h1>
    <p>Inspiration from modern clinic interior design ideas</p>
  </div>
</section>

<section class="facility-content">


  <div class="facility-section">
    <h2>Reception & Waiting Area Inspiration</h2>
    <div class="facility-images-grid">
      <img src="https://keiai-clinic.jp/wp/wp-content/uploads/2023/08/65.jpg" alt="Clinic Waiting Area Design">
      <img src="https://keiai-clinic.jp/wp/wp-content/uploads/2023/08/07.jpg" alt="Clinic Interior 2">
      <img src="https://keiai-clinic.jp/wp/wp-content/uploads/2023/08/04.jpg" alt="Clinic Interior 3">
    </div>
 
    </p>
  </div>

 
  <div class="facility-section">
    <h2>Examination & Treatment Area Inspiration</h2>
    <div class="facility-images-grid">
      <img src="https://keiai-clinic.jp/wp/wp-content/uploads/2023/08/27.jpg" alt="Exam Room Design">
      <img src="https://keiai-clinic.jp/wp/wp-content/uploads/2023/08/33-1.jpg" alt="Medical Treatment Room">
    </div>

  </div>


  <div class="facility-section">
    <h2>Lab & Sterile Area Inspiration</h2>
    <div class="facility-images-grid">
      <img src="https://keiai-clinic.jp/wp/wp-content/uploads/2023/08/37.jpg" alt="Clean Lab Design">
      <img src="https://keiai-clinic.jp/wp/wp-content/uploads/2023/08/47.jpg" alt="Medical Lab Interior">
    </div>
   
  </div>

</section>

<style>
  body {
    font-family: Arial, sans-serif;
    color: #333;
  }
  .facility-hero {
    background: url("https://i.pinimg.com/1200x/eb/af/fb/ebaffb9e3705d21ca429eb9b143ed442.jpg") center/cover no-repeat;
    text-align: center;
    padding: 3rem 1rem;
    color: #fff;
  }
  .facility-hero .hero-overlay h1 {
    font-size: 2.6rem;
    margin-bottom: .5rem;
  }
  .facility-content {
    max-width: 1100px;
    margin: 2.5rem auto;
    padding: 0 1rem;
  }
  .facility-section {
    margin-bottom: 2.5rem;
  }
  .facility-section h2 {
    color: #0a5c8c;
    margin-bottom: 1rem;
    font-size: 1.8rem;
  }
  .facility-images-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 1rem;
  }
  .facility-images-grid img {
    width: 100%;
    border-radius: 8px;
    object-fit: cover;
  }
  .source-note {
    margin-top: .6rem;
    font-size: .9rem;
    color: #666;
  }
</style>

<?php get_footer();?>