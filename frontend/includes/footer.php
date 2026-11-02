<footer class="site-footer">
  <?php $footerBaseUrl = htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8'); ?>
  <div class="page-content-inner">
    <div class="footer-columns">
      <section class="footer-column" aria-labelledby="footer-about-title">
        <a class="footer-brand" href="<?= $footerBaseUrl ?>/index.php">
          <img src="<?= $footerBaseUrl ?>/assets/images/logo.png" alt="">
          <span>ইজি হেলথকেয়ার</span>
        </a>
        <p>ডায়াগনস্টিক ও কনসালটেশন সেবার অনলাইন প্ল্যাটফর্ম।</p>
      </section>
      <nav class="footer-column" aria-labelledby="footer-links-title">
        <h2 id="footer-links-title">দ্রুত লিংক</h2>
        <a href="<?= $footerBaseUrl ?>/index.php">হোম</a>
        <a href="<?= $footerBaseUrl ?>/pages/complaint-box.php">অভিযোগ বক্স</a>
        <a href="<?= $footerBaseUrl ?>/pages/patient-portal.php">পেশেন্ট পোর্টাল</a>
      </nav>
      <nav class="footer-column" aria-labelledby="footer-services-title">
        <h2 id="footer-services-title">সেবা ও সহায়তা</h2>
        <a href="<?= $footerBaseUrl ?>/pages/lab-report.php">অনলাইন ল্যাব রিপোর্ট</a>
        <a href="<?= $footerBaseUrl ?>/pages/safe-surgery.php">সেফ সার্জারি</a>
        <a href="<?= $footerBaseUrl ?>/pages/subscription-plan.php">সাবস্ক্রিপশন প্ল্যান</a>
        <a href="<?= $footerBaseUrl ?>/pages/ambulance-booking.php">বুক অ্যাম্বুলেন্স</a>
        <a href="<?= $footerBaseUrl ?>/pages/doctor-portal.php">ডাক্তার পোর্টাল</a>
      </nav>
    </div>
    <div class="footer-bottom">
      <p class="footer-copyright"><i data-lucide="copyright" aria-hidden="true"></i> ২০২২–২০২৬ সর্বস্বত্ব সংরক্ষিত | ইজি হেলথকেয়ার ডায়াগনস্টিক কনসালটেশন সেন্টার অনলাইন প্ল্যাটফর্ম</p>
      <p class="footer-credit">কারিগরি ও রক্ষণাবেক্ষণে: মোঃ হিমায়েত আলী জয়</p>
    </div>
  </div>
</footer>
