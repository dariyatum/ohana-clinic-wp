<footer class="site-footer">
  <div class="container footer-content">
    <div class="footer-left">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/components/footer.css">
      
     <div class="footer-info">
  <div class="footer-block">
    <h4>Location</h4>
    <p>
      〒170-0013<br>
      Fujigi Bldg. 4F, 1-12-8 Higashi-Ikebukuro,<br>
      Toshima-ku, Tokyo
    </p>
  </div>

  <div class="footer-block">
    <h4>Medical Subjects</h4>
    <p>Gynecologist</p>
  </div>

  <div class="footer-block">
    <h4>Contact</h4>
    <p class="footer-phone">
      Phone Number 03-3987-3090
    </p>
  </div>
</div>

    </div>

    <div class="footer-right">
      <table class="footer-schedule">
        <thead>
          <tr>
            <th>Mon</th>
            <th>Tue</th>
            <th>Wed</th>
            <th>Thu</th>
            <th>Fri</th>
            <th>Sat</th>
            <th>Sundays and holidays</th>
          </tr>
        </thead>
      <tbody>
<?php
$schedule = clinic_get_schedules();
$weekdays = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

// Max rows
$max_rows = 0;
foreach($schedule as $day) $max_rows = max($max_rows, count($day));

for ($i = 0; $i < $max_rows; $i++){
    echo '<tr>';
    foreach($weekdays as $day){
        echo '<td>' . (isset($schedule[$day][$i]) ? esc_html($schedule[$day][$i]) : '/') . '</td>';
    }
    echo '</tr>';
}
?>
</tbody>

      </table>

      <p class="footer-note">
          It will be a complete reservation system.
          ※1 2nd and 4th Mondays
          *2 2nd and 4th Fridays
          * There are times when Director Takehara is absent on Monday afternoon.
      </p>
    </div>
  </div>
</footer>

<footer class="footer">
  <p>© 2025  OHANA Clinic.All Rights Reserved.</p>
</footer>


<?php wp_footer(); ?>
</body>
</html>
