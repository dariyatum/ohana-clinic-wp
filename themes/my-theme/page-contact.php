<?php get_header(); ?>


 <div class="scroll">

  </div>
  <link rel="stylesheet" href="style.css">
  
    <section class="intro">
      <div class="container">
        <h2>Contact Ohana Clinic</h2>
        <p style="color:black;">
          If you have any questions regarding our services, appointments, or
          treatments, please feel free to contact us using the form below. Our
          staff will respond as soon as possible.
        </p>
      </div>
    </section>

  
    <section class="form-section">
      <div class="container">
        <form class="inquiry-form">
          <div class="form-group">
            <label>Full Name <span>*</span></label>
            <input type="text" placeholder="Your name" required />
          </div>

          <div class="form-group">
            <label>Email Address <span>*</span></label>
            <input type="email" placeholder="your@email.com" required />
          </div>

          <div class="form-group">
            <label>Phone Number</label>
            <input type="tel" placeholder="+81-xx-xxxx-xxxx" />
          </div>

          <div class="form-group">
            <label>Inquiry Type</label>
            <select>
              <option>General Question</option>
              <option>First Visit</option>
              <option>Appointment</option>
              <option>Fertility Treatment</option>
              <option>Other</option>
            </select>
          </div>

          <div class="form-group full">
            <label>Message <span>*</span></label>
            <textarea
              rows="6"
              placeholder="Please write your inquiry here..."
              required
            ></textarea>
          </div>

          <div class="privacy">
            <input type="checkbox" required />
            <label> I agree to the handling of personal information </label>
          </div>

          <button type="submit" class="submit-btn">Send Inquiry</button>
        </form>
      </div>
    </section>

  
    <section class="contact-info">
      <div class="container info-grid">
        <div class="info-box">
          <h3>Phone</h3>
          <p>133 987 3090</p>
          <p>855 12 386 089</p>
        </div>

        <div class="info-box">
          <h3>Address</h3>
          <p>
            4F Fujiki Building,<br />
            1-12-8 Higashi-Ikebukuro,<br />
            Toshima-ku, Tokyo
          </p>
        </div>

        <div class="info-box">
          <h3>Business Hours</h3>
          <p>
            Weekdays & Saturdays<br />
            ※ Closed on Sundays & Holidays
          </p>
        </div>
      </div>

      <div class="map-wrapper">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d250151.1627713307!2d104.72537401721212!3d11.579654008640548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2skh!4v1766804351171!5m2!1sen!2skh"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>
<?php get_footer();?>


    <style>
        :root {
  --bg: #f0f2f2;
  --surface: #f0f2f2;
  --text: #000;
  --muted: #2e4a70;
  --accent: #cf8a40;
  --line: #7a736b;
  --radius: 14px;
}




/* ================= RESET ================= */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;

}

body {

  line-height: 1.7;
}

/* ================= GLOBAL ================= */
.container {
  max-width: 900px;
  margin: auto;
  padding: 0 20px;
}

section {
  padding: 90px 0;
}

h1, h2, h3 {
  color: #ffffff;
  font-family: "Montserrat",sans-serif ;
}

h2 {
  text-align: center;
  margin-bottom: 40px;
}



/* ================= INTRO ================= */
.intro p {
  max-width: 650px;
  margin: auto;
color: #cf8a40;
  text-align: center;
  
}

.intro{
      background-image: url('https://i.pinimg.com/1200x/c3/15/60/c315609e636d82456e8d2ac8a244ddff.jpg');
}
/* ================= FORM ================= */
.form-section {
  background: #f7fafa;
}

.inquiry-form {
  background: #fff;
  padding: 50px;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,.05);
  display: grid;
  grid-template-columns: repeat(2,1fr);
  gap: 25px;
  border: 2px solid #cf8a40;
}

.form-group {
  display: flex;
  flex-direction: column;
}

.form-group.full {
  grid-column: span 2;
}

label {
  margin-bottom: 8px;
  font-weight: 500;
}

label span {
  color: #e63946;
}

input, select, textarea {
  padding: 14px;
  border-radius: 10px;
  border: 1px solid #dceeee;
  font-size: 0.95rem;
}

input:focus,
select:focus,
textarea:focus {
  outline: none;
  border-color: #cf8a40;
}

/* ================= PRIVACY ================= */
.privacy {
  grid-column: span 2;
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 0.9rem;
}

/* ================= SUBMIT ================= */
.submit-btn {
  grid-column: span 2;
  margin-top: 20px;
  padding: 16px;
  background: #2e4a70;
  color: #fff;
  border: none;
  border-radius: 30px;
  font-size: 1rem;
  cursor: pointer;
}

/* ================= CONTACT INFO ================= */
.container p,h2{
  color: #000;
}




.info-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px,1fr));
  gap: 30px;
}

.info-box {
  background:#2e4a70  ;
  padding: 30px;
  border-radius: 18px;
  text-align: center;
   transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}
.info-box:hover {
  transform: translateY(-8px) scale(1.02);
  box-shadow: 0 16px 40px rgba(0,0,0,0.12);
  background-color: #cf8a40;
}
.footer-block p{
  color:black;
}

.map-wrapper {
  max-width: 900px;      
  margin: 0 auto;       
  border-radius: 15px;
  overflow: hidden;
  margin-top: 50px;
}

.map-wrapper iframe {
  width: 100%;
  border: 0;
  display: block;

}
.container h2,p{
  color:#cf8a40;
}
.container p{
  color:white;
}
    </style>