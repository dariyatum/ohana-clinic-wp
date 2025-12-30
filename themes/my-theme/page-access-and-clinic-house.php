<?php get_header();?>
<link rel="stylesheet" href="style.css">
<div class="scroll"></div>
<section class="access-hero">
  <div class="hero-overlay">
    <h1>Access & Consultation Hours</h1>
    <p>Ohana Clinic – Phnom Penh</p>
  </div>
</section>

<section class="access-container">

  <div class="access-grid">
    <div class="access-text">
      <h2>Clinic Information</h2>

      <div class="info-item">
        <img src="https://i.pinimg.com/736x/3d/7e/db/3d7edbdaea745850186037764a36ed32.jpg" alt="Clinic Icon">
        <div>
          <h3>Address</h3>
          <p>
            4F Fujiki Building<br>
            1-12-8 Higashi-Ikebukuro<br>
            Toshima-ku, Tokyo 170-0013, Japan
          </p>
        </div>
      </div>

      <div class="info-item">
        <img src="https://i.pinimg.com/736x/98/2e/78/982e78e75e3186106b27fbaa039a0dae.jpg" alt="Access Icon">
        <div>
          <h3>Directions</h3>
          <p>1-minute walk from Ikebukuro Station (Exit 35)</p>
        </div>
      </div>

      <div class="info-item">
        <img src="https://i.pinimg.com/736x/13/83/f5/1383f5a14f47748898e7de9e7ec27a18.jpg" alt="Phone Icon">
        <div>
          <h3>Contact</h3>
          <p>
            Phone: <a href="tel:+81339873090">+81-3-3987-3090</a><br>
            <a href="/contact" class="btn-primary">Make an Appointment</a>
          </p>
        </div>
      </div>
    </div>

    <div class="access-map">
     <iframe
    src="https://www.google.com/maps?q=Keiai+Clinic+Ikebukuro+Tokyo&output=embed"
     width="100%"
    height="450"
    style="border:0;"
     loading="lazy"
     referrerpolicy="no-referrer-when-downgrade">
    </iframe>

    </div>
  </div>

</section>

<section class="hours-section">
  <div class="hours-container">
    <h2>Consultation Hours</h2>

    <table class="hours-table">
      <thead>
        <tr>
          <th>Day</th>
          <th>Morning</th>
          <th>Evening</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Monday</td><td>08:00 – 12:00</td><td>18:00 – 20:00</td></tr>
        <tr><td>Tuesday</td><td>08:00 – 12:00</td><td>18:00 – 20:00</td></tr>
        <tr><td>Wednesday</td><td>08:00 – 12:00</td><td>18:00 – 20:00</td></tr>
        <tr><td>Thursday</td><td>08:00 – 12:00</td><td>18:00 – 20:00</td></tr>
        <tr><td>Friday</td><td>09:00 – 12:00</td><td>18:00 – 20:00</td></tr>
        <tr><td>Saturday</td><td colspan="2">Closed</td></tr>
        <tr><td>Sunday & Holidays</td><td colspan="2">Closed</td></tr>
      </tbody>
    </table>

    <p class="hours-note">
      * Appointments are recommended. Hours may vary on public holidays.
    </p>
  </div>
</section>

<style>
  body {
    font-family: "Segoe UI", Arial, sans-serif;
    color: #333;
  }

  .access-hero {
    background: url("https://i.pinimg.com/1200x/77/1d/3b/771d3b3f5fcee0e8f7ebc32b93e720ac.jpg") center/cover no-repeat;
    height: 320px;
    position: relative;
  }

  .hero-overlay {
    background: rgba(0,0,0,0.4);
    color: #fff;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  .hero-overlay h1 {
    font-size: 2.6rem;
    margin-bottom: 0.5rem;
  }

  .access-container {
    max-width: 1200px;
    margin: 4rem auto;
    padding: 0 1rem;
  }

  .access-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
  }

  .access-text h2 {
    margin-bottom: 2rem;
    color: #0a5c8c;
  }

  .info-item {
    display: flex;
    gap: 1rem;
    margin-bottom: 1.8rem;
  }

  .info-item img {
    width: 60px;
    height: 60px;
  }

  .btn-primary {
    display: inline-block;
    margin-top: 0.5rem;
    padding: 0.5rem 1.2rem;
    background: #0a5c8c;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
  }

  .hours-section {
    background: #f7f9fb;
    padding: 4rem 1rem;
  }

  .hours-container {
    max-width: 1000px;
    margin: auto;
    text-align: center;
  }

  .hours-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 2rem;
  }

  .hours-table th,
  .hours-table td {
    border: 1px solid #ddd;
    padding: 1rem;
  }

  .hours-table th {
    background: #eaf2f8;
  }

  .hours-note {
    margin-top: 1.5rem;
    font-style: italic;
    color: #555;
  }

  @media (max-width: 768px) {
    .access-grid {
      grid-template-columns: 1fr;
    }
    .access-hero {
      height: 240px;
    }
  }
</style>
<?php get_footer();?>