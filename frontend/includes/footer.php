<footer class="site-footer">
  <?php $footerBaseUrl = htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8'); ?>
  <div class="page-content-inner">
    <div class="footer-columns">
      <section class="footer-column" aria-labelledby="footer-about-title">
        <a class="footer-brand" href="<?= $footerBaseUrl ?>/">
          <img src="<?= $footerBaseUrl ?>/assets/images/logo.png" alt="Easy Healthcare">
          <span>Easy Healthcare</span>
        </a>
        <p>Your trusted online diagnostic & specialist healthcare consultation platform.</p>
      </section>
      <nav class="footer-column" aria-labelledby="footer-links-title">
        <h2 id="footer-links-title">Quick Links</h2>
        <a href="<?= $footerBaseUrl ?>/">Home</a>
        <a href="<?= $footerBaseUrl ?>/complaint-box">Complaint Box</a>
        <a href="<?= $footerBaseUrl ?>/patient-portal">Patient Portal</a>
      </nav>
      <nav class="footer-column" aria-labelledby="footer-services-title">
        <h2 id="footer-services-title">Services & Support</h2>
        <a href="<?= $footerBaseUrl ?>/lab-report">Online Lab Report</a>
        <a href="<?= $footerBaseUrl ?>/safe-surgery">Safe Surgery</a>
        <a href="<?= $footerBaseUrl ?>/subscription-plan">Subscription Plan</a>
        <a href="<?= $footerBaseUrl ?>/ambulance-booking">Book Ambulance</a>
        <a href="<?= $footerBaseUrl ?>/doctor-portal">Doctor Portal</a>
      </nav>
    </div>
    <div class="footer-bottom">
      <p class="footer-copyright"><i data-lucide="copyright" aria-hidden="true"></i> 2022–2026 All Rights Reserved | Easy Healthcare Diagnostic & Consultation Center</p>
      <p class="footer-credit">Technical Maintenance: Md Himayet Ali Joy</p>
    </div>
  </div>
</footer>
