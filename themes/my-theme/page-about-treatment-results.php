<?php get_header();?>
<link rel="stylesheet" href="style.css">
<div class="scroll"></div>


<section class="achievement-hero">
  <div class="hero-overlay">
    <h1>Clinic Achievements & Treatment Results</h1>
    <p>Insights into our fertility treatment performance</p>
  </div>
</section>

<section class="achievement-content">
  <div class="achievement-summary">
    <h2>Treatment Overview (2013 – 2024)</h2>
    <div class="achievement-grid">

      <div class="stat-box">
        <h3>Total Egg Retrievals</h3>
        <p>13,034</p>
      </div>

      <div class="stat-box">
        <h3>Total Embryo Transfers</h3>
        <p>12,074</p>
      </div>

      <div class="stat-box">
        <h3>Timing Treatments</h3>
        <p>6,905</p>
      </div>

      <div class="stat-box">
        <h3>Artificial Inseminations</h3>
        <p>7,671</p>
      </div>

    </div>
  </div>

  <div class="achievement-latest">
    <h2>Recent Results (2023–2024)</h2>
    <table class="results-table">
      <thead>
        <tr>
          <th>Category</th>
          <th>Count</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Timing Treatments</td><td>459</td></tr>
        <tr><td>Artificial Insemination</td><td>662</td></tr>
        <tr><td>Egg Retrievals</td><td>1,035</td></tr>
        <tr><td>Embryo Transfers</td><td>1,180</td></tr>
      </tbody>
    </table>
  </div>

  <div class="achievement-details">
    <h2>Embryo Culture Performance</h2>
    <p>
      Based on the ESHRE (European Society of Human Reproduction and Embryology) key performance indicators (KPIs),
      Keiai Clinic meets or exceeds both competency and benchmark values in embryo culture standards.
    </p>

    <h3>Fertilization Rates (2024)</h3>
    <p>
      Normal fertilization rate (C-IVF): <strong>79.0%</strong><br>
      ICSI fertilization rate: <strong>87.8%</strong><br>
      *Both meet global ESHRE competency and benchmark criteria.*
    </p>

    <h3>Blastocyst Development Rates (2024)</h3>
    <p>
      Embryos developing to blastocyst stage show rates exceeding the minimum competency (40%) and benchmark (60%)
      standards for both C-IVF and ICSI methods. All criteria have been successfully satisfied.
    </p>
  </div>

</section>

<style>
  body {
    font-family: Arial, sans-serif;
    color: #333;
    line-height: 1.6;
  }

  .achievement-hero {
    background: url("https://i.pinimg.com/1200x/77/1d/3b/771d3b3f5fcee0e8f7ebc32b93e720ac.jpg") center/cover no-repeat;
    height: 280px;
    position: relative;
  }

  .hero-overlay {
    background: rgba(0,0,0,0.4);
    color: #fff;
    text-align: center;
    padding: 2rem;
  }

  .hero-overlay h1 {
    font-size: 2.4rem;
    margin-bottom: 0.5rem;
  }

  .achievement-content {
    max-width: 1100px;
    margin: 2.5rem auto;
    padding: 1rem;
  }

  .achievement-summary {
    margin-bottom: 2rem;
  }

  .achievement-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
  }

  .stat-box {
    background: #eef6fc;
    padding: 1.5rem;
    border-radius: 8px;
    text-align: center;
  }

  .stat-box h3 {
    color: #0a5c8c;
    margin-bottom: 0.5rem;
  }

  .stat-box p {
    font-size: 1.8rem;
    font-weight: bold;
  }

  .results-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
  }

  .results-table th,
  .results-table td {
    border: 1px solid #ddd;
    padding: 0.9rem;
    text-align: center;
  }

  .results-table th {
    background: #f5faff;
  }

  .achievement-details h3 {
    margin-top: 1.2rem;
    color: #005681;
  }

  .achievement-details p {
    margin-bottom: 1rem;
  }
</style>

<?php get_footer();?>