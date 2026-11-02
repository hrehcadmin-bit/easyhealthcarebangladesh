<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#6e5ad4">
  <title>অ্যাডমিন ড্যাশবোর্ড — ইজি হেলথকেয়ার</title>
  <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/dashboard.css">
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>
  <script src="assets/js/dashboard.js" defer></script>
</head>
<body>
  <main class="login-screen" id="login-screen">
    <section class="login-panel" aria-label="অ্যাডমিন লগইন">
      <div class="login-card">
        <form class="login-form" id="demo-login" aria-label="লগইন ফর্ম">
          <label for="email">ইমেইল অ্যাড্রেস</label>
          <div class="input-wrap">
            <i data-lucide="mail" aria-hidden="true"></i>
            <input id="email" name="email" type="email" value="admin@easyhealthcare.com" autocomplete="username" required>
          </div>
          <label for="password">পাসওয়ার্ড</label>
          <div class="input-wrap">
            <i data-lucide="lock-keyhole" aria-hidden="true"></i>
            <input id="password" name="password" type="password" value="EasyHealth@2026" autocomplete="current-password" required>
            <button class="password-toggle" id="password-toggle" type="button" aria-label="পাসওয়ার্ড দেখান">
              <i data-lucide="eye" aria-hidden="true"></i>
            </button>
          </div>
          <button class="login-button" type="submit">লগিন করুন</button>
        </form>
      </div>
    </section>
  </main>

  <main class="dashboard-screen" id="dashboard-screen" hidden>
    <aside class="sidebar" id="sidebar">
      <a class="brand sidebar-brand" href="#" aria-label="ইজি হেলথকেয়ার">
        <span class="brand-symbol"><i data-lucide="heart-pulse" aria-hidden="true"></i></span>
        <span><strong>ইজি হেলথকেয়ার</strong><small>ADMIN CONSOLE</small></span>
      </a>
      <div class="workspace-label">ওয়ার্কস্পেস</div>
      <nav class="sidebar-nav" aria-label="অ্যাডমিন নেভিগেশন">
        <a class="nav-link active" href="#overview" data-title="ওভারভিউ"><i data-lucide="layout-dashboard" aria-hidden="true"></i><span>ওভারভিউ</span></a>
        <a class="nav-link" href="#appointments" data-title="অ্যাপয়েন্টমেন্ট"><i data-lucide="calendar-days" aria-hidden="true"></i><span>অ্যাপয়েন্টমেন্ট</span><span class="nav-count">৮</span></a>
        <a class="nav-link" href="#doctors" data-title="ডাক্তার"><i data-lucide="stethoscope" aria-hidden="true"></i><span>ডাক্তার</span></a>
        <a class="nav-link" href="#patients" data-title="রোগী"><i data-lucide="users-round" aria-hidden="true"></i><span>রোগী</span></a>
        <a class="nav-link" href="#services" data-title="সেবাসমূহ"><i data-lucide="briefcase-medical" aria-hidden="true"></i><span>সেবাসমূহ</span></a>
        <a class="nav-link" href="#reports" data-title="রিপোর্ট"><i data-lucide="chart-no-axes-column-increasing" aria-hidden="true"></i><span>রিপোর্ট</span></a>
      </nav>
      <div class="sidebar-bottom">
        <a class="nav-link" href="#settings" data-title="সেটিংস"><i data-lucide="settings-2" aria-hidden="true"></i><span>সেটিংস</span></a>
        <div class="sidebar-help"><span class="help-icon"><i data-lucide="life-buoy" aria-hidden="true"></i></span><strong>কোনো সাহায্য লাগবে?</strong><p>আমাদের সাপোর্ট টিম পাশে আছে।</p><a href="mailto:support@easyhealthcare.com">সাপোর্টে যোগাযোগ <i data-lucide="arrow-up-right" aria-hidden="true"></i></a></div>
        <button class="profile-button" id="logout-button" type="button">
          <span class="profile-avatar">আ</span><span class="profile-copy"><strong>অ্যাডমিন</strong><small>admin@easyhealthcare.com</small></span><i data-lucide="log-out" aria-hidden="true"></i>
        </button>
      </div>
    </aside>

    <section class="dashboard-main">
      <header class="topbar">
        <div class="topbar-left">
          <button class="icon-button mobile-menu" id="mobile-menu" type="button" aria-label="মেনু খুলুন"><i data-lucide="menu" aria-hidden="true"></i></button>
          <div class="breadcrumbs"><span>ওয়ার্কস্পেস</span><i data-lucide="chevron-right" aria-hidden="true"></i><strong id="page-title">ওভারভিউ</strong></div>
        </div>
        <div class="topbar-actions">
          <label class="search-box"><i data-lucide="search" aria-hidden="true"></i><input id="dashboard-search" type="search" placeholder="খুঁজুন..." aria-label="ড্যাশবোর্ডে খুঁজুন"><kbd>⌘ K</kbd></label>
          <button class="icon-button notification-button" type="button" aria-label="নোটিফিকেশন"><i data-lucide="bell" aria-hidden="true"></i><span></span></button>
          <span class="topbar-divider"></span>
          <button class="topbar-profile" type="button"><span class="profile-avatar">আ</span><span><strong>অ্যাডমিন</strong><small>সুপার অ্যাডমিন</small></span><i data-lucide="chevron-down" aria-hidden="true"></i></button>
        </div>
      </header>

      <div class="dashboard-content" id="overview">
        <div class="page-heading">
          <div><span class="eyebrow">রবিবার, ১ নভেম্বর ২০২৬</span><h1>শুভ সন্ধ্যা, অ্যাডমিন <span class="wave">✦</span></h1><p>আজকের স্বাস্থ্যসেবার সংক্ষিপ্ত চিত্র এক নজরে দেখে নিন।</p></div>
          <button class="date-button" type="button"><i data-lucide="calendar-days" aria-hidden="true"></i> এই মাস <i data-lucide="chevron-down" aria-hidden="true"></i></button>
        </div>

        <section class="metrics-grid" aria-label="সারসংক্ষেপ">
          <article class="metric-card"><div class="metric-top"><span class="metric-icon purple"><i data-lucide="calendar-check-2" aria-hidden="true"></i></span><span class="metric-change positive"><i data-lucide="trending-up" aria-hidden="true"></i> ১২.৫%</span></div><p>মোট অ্যাপয়েন্টমেন্ট</p><div class="metric-value">১,২৪৮ <span>টি</span></div><div class="metric-foot">গত মাসের তুলনায় <strong>বেশি</strong></div><div class="sparkline purple-line"><svg viewBox="0 0 120 34" preserveAspectRatio="none" aria-hidden="true"><path d="M1 28 C14 24 16 26 26 19 S41 24 51 15 S69 21 79 11 S96 18 105 7 S114 9 119 2"></path></svg></div></article>
          <article class="metric-card"><div class="metric-top"><span class="metric-icon mint"><i data-lucide="user-round-plus" aria-hidden="true"></i></span><span class="metric-change positive"><i data-lucide="trending-up" aria-hidden="true"></i> ৮.২%</span></div><p>নতুন রোগী</p><div class="metric-value">৩৮৬ <span>জন</span></div><div class="metric-foot">গত মাসের তুলনায় <strong>বেশি</strong></div><div class="sparkline mint-line"><svg viewBox="0 0 120 34" preserveAspectRatio="none" aria-hidden="true"><path d="M1 26 C13 19 18 24 28 16 S42 22 52 13 S68 17 77 9 S94 14 103 6 S113 7 119 1"></path></svg></div></article>
          <article class="metric-card"><div class="metric-top"><span class="metric-icon peach"><i data-lucide="stethoscope" aria-hidden="true"></i></span><span class="metric-change positive"><i data-lucide="trending-up" aria-hidden="true"></i> ৪.৬%</span></div><p>সক্রিয় ডাক্তার</p><div class="metric-value">৭২ <span>জন</span></div><div class="metric-foot">মোট নিবন্ধিত <strong>৮৯ জন</strong></div><div class="sparkline peach-line"><svg viewBox="0 0 120 34" preserveAspectRatio="none" aria-hidden="true"><path d="M1 25 C12 27 17 17 28 20 S41 13 51 17 S65 8 77 13 S90 5 102 9 S113 4 119 2"></path></svg></div></article>
          <article class="metric-card"><div class="metric-top"><span class="metric-icon blue"><i data-lucide="wallet" aria-hidden="true"></i></span><span class="metric-change positive"><i data-lucide="trending-up" aria-hidden="true"></i> ১৬.৮%</span></div><p>মোট আয়</p><div class="metric-value">৳ ৪,৮৬,২০০</div><div class="metric-foot">গত মাসের তুলনায় <strong>বেশি</strong></div><div class="sparkline blue-line"><svg viewBox="0 0 120 34" preserveAspectRatio="none" aria-hidden="true"><path d="M1 29 C13 26 20 28 29 18 S43 24 52 15 S67 19 77 12 S92 18 102 8 S113 11 119 2"></path></svg></div></article>
        </section>

        <section class="content-grid">
          <article class="panel appointment-panel" id="appointments">
            <div class="panel-heading"><div><h2>সাম্প্রতিক অ্যাপয়েন্টমেন্ট</h2><p>রোগীদের সাম্প্রতিক বুকিংয়ের তালিকা</p></div><a class="text-link" href="#appointments">সব দেখুন <i data-lucide="arrow-right" aria-hidden="true"></i></a></div>
            <div class="table-wrap">
              <table>
                <thead><tr><th>রোগী</th><th>ডাক্তার</th><th>তারিখ ও সময়</th><th>ধরন</th><th>স্ট্যাটাস</th></tr></thead>
                <tbody>
                  <tr><td><span class="patient-cell"><span class="patient-avatar avatar-lilac">সআ</span><span><strong>সাদিয়া আক্তার</strong><small>#EH-2048</small></span></span></td><td><span class="doctor-cell">ডা. নুসরাত জাহান<small>কার্ডিওলজি</small></span></td><td><span class="date-cell">১ নভে, ২০২৬<small>১০:৩০ AM</small></span></td><td><span class="type-pill"><i data-lucide="video" aria-hidden="true"></i> অনলাইন</span></td><td><span class="status confirmed">নিশ্চিত</span></td></tr>
                  <tr><td><span class="patient-cell"><span class="patient-avatar avatar-green">রহ</span><span><strong>রাকিব হাসান</strong><small>#EH-2047</small></span></span></td><td><span class="doctor-cell">ডা. তানভীর আহমেদ<small>নিউরোলজি</small></span></td><td><span class="date-cell">১ নভে, ২০২৬<small>১১:১৫ AM</small></span></td><td><span class="type-pill"><i data-lucide="building-2" aria-hidden="true"></i> সরাসরি</span></td><td><span class="status pending">অপেক্ষমাণ</span></td></tr>
                  <tr><td><span class="patient-cell"><span class="patient-avatar avatar-peach">মই</span><span><strong>মেহের আফরোজ</strong><small>#EH-2046</small></span></span></td><td><span class="doctor-cell">ডা. ফারহানা কবির<small>গাইনি ও প্রসূতি</small></span></td><td><span class="date-cell">১ নভে, ২০২৬<small>১২:০০ PM</small></span></td><td><span class="type-pill"><i data-lucide="video" aria-hidden="true"></i> অনলাইন</span></td><td><span class="status confirmed">নিশ্চিত</span></td></tr>
                  <tr><td><span class="patient-cell"><span class="patient-avatar avatar-blue">নই</span><span><strong>নাবিল ইকবাল</strong><small>#EH-2045</small></span></span></td><td><span class="doctor-cell">ডা. মাহমুদুল ইসলাম<small>চর্মরোগ</small></span></td><td><span class="date-cell">১ নভে, ২০২৬<small>০১:৩০ PM</small></span></td><td><span class="type-pill"><i data-lucide="building-2" aria-hidden="true"></i> সরাসরি</span></td><td><span class="status cancelled">বাতিল</span></td></tr>
                </tbody>
              </table>
            </div>
          </article>

          <article class="panel activity-panel">
            <div class="panel-heading"><div><h2>আজকের কার্যক্রম</h2><p>১ নভেম্বর, ২০২৬</p></div><button class="icon-button subtle-button" type="button" aria-label="আরও অপশন"><i data-lucide="ellipsis" aria-hidden="true"></i></button></div>
            <div class="activity-summary"><strong>১২</strong><span>টি অ্যাপয়েন্টমেন্ট আজ</span><span class="summary-tag"><i data-lucide="arrow-up-right" aria-hidden="true"></i> ব্যস্ত দিন</span></div>
            <div class="schedule-list">
              <div class="schedule-item"><time>১০:৩০</time><span class="schedule-dot purple-dot"></span><span class="schedule-detail"><strong>সাদিয়া আক্তার</strong><small>ডা. নুসরাত জাহান · কার্ডিওলজি</small></span><i data-lucide="video" aria-label="অনলাইন"></i></div>
              <div class="schedule-item"><time>১১:১৫</time><span class="schedule-dot green-dot"></span><span class="schedule-detail"><strong>রাকিব হাসান</strong><small>ডা. তানভীর আহমেদ · নিউরোলজি</small></span><i data-lucide="building-2" aria-label="সরাসরি"></i></div>
              <div class="schedule-item"><time>১২:০০</time><span class="schedule-dot peach-dot"></span><span class="schedule-detail"><strong>মেহের আফরোজ</strong><small>ডা. ফারহানা কবির · গাইনি</small></span><i data-lucide="video" aria-label="অনলাইন"></i></div>
              <div class="schedule-item"><time>০১:৩০</time><span class="schedule-dot blue-dot"></span><span class="schedule-detail"><strong>নাবিল ইকবাল</strong><small>ডা. মাহমুদুল ইসলাম · চর্মরোগ</small></span><i data-lucide="building-2" aria-label="সরাসরি"></i></div>
            </div>
            <a class="schedule-link" href="#appointments">সম্পূর্ণ সময়সূচি দেখুন <i data-lucide="arrow-right" aria-hidden="true"></i></a>
          </article>
        </section>

        <section class="bottom-grid">
          <article class="panel chart-panel" id="reports">
            <div class="panel-heading"><div><h2>অ্যাপয়েন্টমেন্ট বিশ্লেষণ</h2><p>সময় অনুযায়ী বুকিংয়ের চিত্র</p></div><button class="select-button" type="button">এই সপ্তাহ <i data-lucide="chevron-down" aria-hidden="true"></i></button></div>
            <div class="chart-legend"><span><i class="legend-dot appointments-dot"></i> অ্যাপয়েন্টমেন্ট</span><span><i class="legend-dot patients-dot"></i> নতুন রোগী</span></div>
            <div class="chart-area">
              <div class="chart-y-labels"><span>১৫০</span><span>১২০</span><span>৯০</span><span>৬০</span><span>৩০</span></div>
              <div class="chart-plot">
                <div class="chart-gridlines"><i></i><i></i><i></i><i></i><i></i></div>
                <svg class="chart-svg" viewBox="0 0 700 190" preserveAspectRatio="none" role="img" aria-label="এই সপ্তাহের অ্যাপয়েন্টমেন্টের নমুনা চার্ট">
                  <defs><linearGradient id="chartFill" x1="0" x2="0" y1="0" y2="1"><stop offset="0%" stop-color="#6e5ad4" stop-opacity=".16"></stop><stop offset="100%" stop-color="#6e5ad4" stop-opacity="0"></stop></linearGradient></defs>
                  <path class="area-path" d="M0 142 C38 130 53 119 100 126 S158 92 200 104 S258 116 300 82 S357 97 400 70 S457 87 500 55 S558 75 600 42 S657 51 700 24 L700 190 L0 190 Z"></path>
                  <path class="chart-line primary-chart-line" d="M0 142 C38 130 53 119 100 126 S158 92 200 104 S258 116 300 82 S357 97 400 70 S457 87 500 55 S558 75 600 42 S657 51 700 24"></path>
                  <path class="chart-line secondary-chart-line" d="M0 164 C42 157 55 145 100 151 S160 132 200 140 S255 148 300 121 S355 131 400 111 S460 120 500 96 S560 108 600 82 S655 94 700 68"></path>
                  <circle cx="600" cy="42" r="4" class="chart-point"></circle><circle cx="600" cy="82" r="4" class="chart-point secondary-point"></circle>
                </svg>
                <div class="chart-x-labels"><span>সোম</span><span>মঙ্গল</span><span>বুধ</span><span>বৃহস্পতি</span><span>শুক্র</span><span>শনি</span><span>রবি</span></div>
              </div>
            </div>
          </article>
          <article class="panel doctors-panel" id="doctors">
            <div class="panel-heading"><div><h2>জনপ্রিয় ডাক্তার</h2><p>এই মাসে সবচেয়ে বেশি বুকিং</p></div><a class="text-link" href="#doctors">সব দেখুন <i data-lucide="arrow-right" aria-hidden="true"></i></a></div>
            <div class="doctor-ranking"><span class="rank-number">01</span><span class="doctor-avatar doctor-purple">নজ</span><span class="ranking-copy"><strong>ডা. নুসরাত জাহান</strong><small>কার্ডিওলজি</small></span><span class="ranking-count">১২৮ <small>বুকিং</small></span></div>
            <div class="doctor-ranking"><span class="rank-number">02</span><span class="doctor-avatar doctor-green">তআ</span><span class="ranking-copy"><strong>ডা. তানভীর আহমেদ</strong><small>নিউরোলজি</small></span><span class="ranking-count">১০৬ <small>বুকিং</small></span></div>
            <div class="doctor-ranking"><span class="rank-number">03</span><span class="doctor-avatar doctor-peach">ফক</span><span class="ranking-copy"><strong>ডা. ফারহানা কবির</strong><small>গাইনি ও প্রসূতি</small></span><span class="ranking-count">৯২ <small>বুকিং</small></span></div>
          </article>
        </section>
        <footer class="dashboard-footer">© 2026 Easy Healthcare <span>·</span> অ্যাডমিন ড্যাশবোর্ড <span class="footer-status"><i></i> সিস্টেম সচল</span></footer>
      </div>
    </section>
    <div class="sidebar-backdrop" id="sidebar-backdrop"></div>
  </main>
</body>
</html>
