<header class="site-header">
  <div class="topbar">
    <div class="header-container topbar-inner">
      <p class="welcome-message">স্বাগতম ইজি হেলথকেয়ার অনলাইন প্ল্যাটফর্মে</p>
      <nav class="utility-nav" aria-label="সহায়ক লিংক">
        <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/complaint-box.php"><i data-lucide="message-square-warning" aria-hidden="true"></i><span>অভিযোগ বক্স</span></a>
        <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/lab-report.php"><i data-lucide="file-heart" aria-hidden="true"></i><span>অনলাইন ল্যাব রিপোর্ট</span></a>
        <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/patient-portal.php"><i data-lucide="user-round" aria-hidden="true"></i><span>পেশেন্ট পোর্টাল</span></a>
        <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/doctor-portal.php"><i data-lucide="stethoscope" aria-hidden="true"></i><span>ডাক্তার পোর্টাল</span></a>
      </nav>
    </div>
  </div>

  <div class="mainbar bg-white">
    <div class="header-container mainbar-inner">
      <a class="brand-mark" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/index.php" aria-label="ইজি হেলথকেয়ার হোম">
        <img src="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/assets/images/logo.png" alt="">
      </a>

      <button class="menu-toggle" type="button" aria-label="মেনু খুলুন" aria-expanded="false" aria-controls="primary-navigation">
        <i data-lucide="menu" aria-hidden="true"></i>
      </button>

      <nav class="primary-navigation" id="primary-navigation" aria-label="প্রধান নেভিগেশন">
        <ul class="navigation-list">
          <li class="navigation-item">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/find-doctor.php">ফাইন্ড ডাক্তার</a>
          </li>
          <li class="navigation-item">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/online-doctor-consult.php">অনলাইন ডাক্তার কনসাল্ট</a>
          </li>
          <li class="navigation-item">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/online-diagnostic-lab.php">অনলাইন ডায়াগনস্টিক ল্যাব</a>
          </li>
          <li class="navigation-item">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/special-care-zone.php">স্পেশাল কেয়ার জোন</a>
          </li>
          <li class="navigation-item">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/safe-surgery.php">সেফ সার্জারি</a>
          </li>
          <li class="navigation-item">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/medical-tourism.php">মেডিক্যাল ট্যুরিজম</a>
          </li>
          <li class="navigation-item">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/partner-plan.php">পার্টনার প্ল্যান</a>
          </li>
        </ul>
        <div class="mobile-utility-links">
          <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/complaint-box.php"><i data-lucide="message-square-warning" aria-hidden="true"></i><span>অভিযোগ বক্স</span></a>
          <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/lab-report.php"><i data-lucide="file-heart" aria-hidden="true"></i><span>অনলাইন ল্যাব রিপোর্ট</span></a>
          <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/patient-portal.php"><i data-lucide="user-round" aria-hidden="true"></i><span>পেশেন্ট পোর্টাল</span></a>
          <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/doctor-portal.php"><i data-lucide="stethoscope" aria-hidden="true"></i><span>ডাক্তার পোর্টাল</span></a>
        </div>
      </nav>

      <div class="header-actions">
        <a class="subscription-button" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/subscription-plan.php">
          <i data-lucide="badge-percent" aria-hidden="true"></i>
          <span>সাবস্ক্রিপশন প্ল্যান</span>
        </a>
        <a class="emergency-button" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/pages/ambulance-booking.php">
          <i data-lucide="ambulance" aria-hidden="true"></i>
          <span>বুক অ্যাম্বুলেন্স</span>
        </a>
      </div>
    </div>
  </div>
</header>
