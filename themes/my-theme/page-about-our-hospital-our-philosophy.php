<section class="clinic-philosophy">
  <div class="container">

    <h1>Our Philosophy & Strengths</h1>

    <!-- Philosophy intro -->
    <div class="philo-block">
      <div class="philo-text">
        <h2>Our Philosophy</h2>
        <p>
          “Friendly and Supportive Fertility Treatment.”
          We believe that strong communication between patients, doctors,
          and staff creates a positive and comfortable treatment experience.
          Our team is dedicated to supporting patients both medically
          and emotionally throughout their journey.
        </p>
      </div>
      <div class="philo-image">
        <img src="https://www.tawara-ivf.jp/en/media/main01.jpg" alt="Doctor consulting patient">
      </div>
    </div>

    <!-- Strength 1 -->
    <div class="philo-block reverse">
      <div class="philo-text">
        <h3>Easy-to-Visit Medical System</h3>
        <p>
          Located just one minute from the station, our clinic offers
          flexible hours including weekends and holidays.
          We continuously improve our services by listening to patient feedback.
        </p>
      </div>
      <div class="philo-image">
        <img src="https://palmprimarycare.com/wp-content/uploads/2025/09/A-family-practice-physician-is-consulting-with-a-little-girl-and-her-mother-in-the-hospital-1024x683.jpg" alt="Modern clinic interior">
      </div>
    </div>

    <!-- Strength 2 -->
    <div class="philo-block">
      <div class="philo-text">
        <h3>Consistent Care by the Same Doctor</h3>
        <p>
          All consultations, treatment planning, and procedures
          are handled consistently by the clinic director,
          ensuring continuity and clear communication.
        </p>
      </div>
      <div class="philo-image">
        <img src="https://www.99mgmt.com/hs-fs/hubfs/iStock-998313080.jpg?name=iStock-998313080.jpg&width=2121" alt="Clinic doctor">
      </div>
    </div>

    <!-- Strength 3 -->
    <div class="philo-block reverse">
      <div class="philo-text">
        <h3>Advanced Technology & Team Support</h3>
        <p>
          We actively adopt the latest medical technologies
          and diagnostic methods. Our skilled medical team
          works together to achieve the best possible outcomes.
        </p>
      </div>
      <div class="philo-image">
        <img src="https://d1ldvf68ux039x.cloudfront.net/thumbs/photos/2302/7638546/1000w_q95.jpg" alt="Medical team">
      </div>
    </div>

  </div>
</section>

<style>
.clinic-philosophy {
  background: #ffffff;
  padding: 80px 20px;

  color: #333;
}

.container {
  max-width: 1000px;
  margin: 0 auto;
}

.clinic-philosophy h1 {
  text-align: center;
  font-size: 2.2rem;
  color: #2e4a70;
  margin-bottom: 60px;
}

.philo-block {
  display: flex;
  align-items: center;
  gap: 40px;
  margin-bottom: 60px;
}

.philo-block.reverse {
  flex-direction: row-reverse;
}

.philo-text {
  flex: 1;
}

.philo-text h2,
.philo-text h3 {
  color: #2e4a70;
  margin-bottom: 12px;
}

.philo-text p {
  line-height: 1.8;
  font-size: 1rem;
}

.philo-image {
  flex: 1;
}

.philo-image img {
  width: 100%;
  border-radius: 14px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

/* Mobile */
@media (max-width: 768px) {
  .philo-block,
  .philo-block.reverse {
    flex-direction: column;
  }

  .clinic-philosophy h1 {
    font-size: 1.8rem;
  }
}


</style>