<?php
if (!isset($baseUrl)) {
  $baseUrl = (strpos($_SERVER['REQUEST_URI'] ?? '', '/pages/') !== false) ? '..' : '.';
}

$ambulanceTypes = [
  [
    'title' => 'এসি অ্যাম্বুলেন্স',
    'image' => $baseUrl . '/assets/images/ambulance/ac-ambulance.jpg',
  ],
  [
    'title' => 'নন-এসি অ্যাম্বুলেন্স',
    'image' => $baseUrl . '/assets/images/ambulance/non-ac.jpg',
  ],
  [
    'title' => 'আইসিইউ / সিসিইউ অ্যাম্বুলেন্স',
    'image' => $baseUrl . '/assets/images/ambulance/icu-ambulance.jpg',
  ],
  [
    'title' => 'ফ্রিজার অ্যাম্বুলেন্স (লাশবাহী)',
    'image' => $baseUrl . '/assets/images/ambulance/freezer-ambulance.jpg',
  ],
  [
    'title' => 'এনআইসিইউ বেবি অ্যাম্বুলেন্স',
    'image' => $baseUrl . '/assets/images/ambulance/nicu-ambulance.jpg',
  ],
  [
    'title' => 'এয়ার অ্যাম্বুলেন্স (হেলিকপ্টার)',
    'image' => $baseUrl . '/assets/images/ambulance/air-ambulance.jpg',
  ],
];

$bookingSteps = [
  [
    'step' => '১',
    'title' => 'লোকেশন ও অ্যাম্বুলেন্স নির্বাচন',
    'desc' => 'রোগীর বর্তমান অবস্থান এবং শারীরিক অবস্থা অনুযায়ী প্রয়োজনীয় অ্যাম্বুলেন্স সিলেক্ট করুন।',
  ],
  [
    'step' => '২',
    'title' => 'হটলাইনে কল বা অনলাইন রিকোয়েস্ট',
    'desc' => 'আমাদের ২৪/৭ জরুরি হটলাইনে সরাসরি কল দিন অথবা নিচের ফর্মে তথ্য দিয়ে সাবমিট করুন।',
  ],
  [
    'step' => '৩',
    'title' => 'নিকটস্থ অ্যাম্বুলেন্স মুভমেন্ট',
    'desc' => 'আপনার ঠিকানার নিকটতম অ্যাম্বুলেন্সটি তাৎক্ষণিক রওনা দেবে এবং চালকের নম্বর পাবেন।',
  ],
  [
    'step' => '৪',
    'title' => 'হাসপাতালে নিরাপদ স্থানান্তর',
    'desc' => 'অভিজ্ঞ প্যারামেডিক ও দ্রুততম রুটে রোগীকে কাঙ্ক্ষিত হাসপাতালে নিরাপদ পৌঁছে দেওয়া হবে।',
  ],
];

$coverageZones = [
  [
    'icon' => 'map-pin',
    'badge' => '১০-২০ মিনিট রেসপন্স',
    'title' => 'ঢাকা সিটি মেট্রো জোন',
    'desc' => 'ধানমন্ডি, গুলশান, বনানী, উত্তরা, মিরপুর, পুরান ঢাকা, মহাখালী, শ্যামলী সহ ঢাকার প্রতিটি থানায় সার্বক্ষণিক প্রস্তুত ইউনিট।',
  ],
  [
    'icon' => 'building-2',
    'badge' => 'বিভাগীয় হটলাইন',
    'title' => 'বিভাগীয় শহরসমূহ',
    'desc' => 'চট্টগ্রাম, রাজশাহী, খুলনা, সিলেট, বরিশাল, রংপুর এবং ময়মনসিংহে আঞ্চলিক অ্যাম্বুলেন্স নেটওয়ার্ক ও দ্রুত সেবা।',
  ],
  [
    'icon' => 'navigation',
    'badge' => 'সারা বাংলাদেশ',
    'title' => 'ইন্টার-ডিস্ট্রিক্ট দূরপাল্লার সার্ভিস',
    'desc' => 'বাংলাদেশের যেকোনো জেলা বা উপজেলা থেকে মুমূর্ষু রোগীকে উন্নত চিকিৎসার জন্য দ্রুত ঢাকায় নিয়ে আসার বিশেষ ব্যবস্থা।',
  ],
];

$faqs = [
  [
    'q' => 'জরুরি কল করার কতক্ষণের মধ্যে অ্যাম্বুলেন্স রোগীর কাছে পৌঁছাবে?',
    'a' => 'ঢাকা মেট্রোপলিটন এলাকার যেকোনো স্থানে সাধারণত ১০ থেকে ২০ মিনিটের মধ্যে আমাদের নিকটস্থ অ্যাম্বুলেন্স পৌঁছে যায়। ঢাকার বাইরে দূরত্বের ওপর নির্ভর করে দ্রুততম সময়ে অ্যাম্বুলেন্স নিশ্চিত করা হয়।',
  ],
  [
    'q' => 'আইসিইউ অ্যাম্বুলেন্সে কি ডাক্তার বা প্যারামেডিক উপস্থিত থাকেন?',
    'a' => 'হ্যাঁ, আমাদের প্রতিটি আইসিইউ ও সিসিইউ লাইফ সাপোর্ট অ্যাম্বুলেন্সে প্রশিক্ষিত জরুরি প্যারামেডিক উপস্থিত থাকেন এবং পরিবারের চাহিদামতো চিকিৎসক সাপোর্ট নিশ্চিত করার সুযোগ রয়েছে।',
  ],
  [
    'q' => 'অ্যাম্বুলেন্সের ভাড়া বা চার্জ কীভাবে নির্ধারিত হয়?',
    'a' => 'ভাড়া সম্পূর্ণ নির্ভর করে অ্যাম্বুলেন্সের ধরন (এসি, নন-এসি, আইসিইউ বা ফ্রিজার) এবং দূরত্বের ওপর। আমাদের কোনো গোপন চার্জ নেই এবং সরকার নির্ধারিত ও ন্যায্য মূল্যে সেবা প্রদান করা হয়।',
  ],
  [
    'q' => 'ঢাকার বাইরে বা দূরবর্তী জেলায় রোগী স্থানান্তর করা সম্ভব কি?',
    'a' => 'হ্যাঁ, সারা বাংলাদেশের যেকোনো প্রান্ত থেকে ঢাকায় উন্নত চিকিৎসার জন্য রোগী আনা কিংবা ঢাকা থেকে দেশের যেকোনো প্রান্তে রোগী স্থানান্তরের জন্য আমাদের লং-ডিসট্যান্স অ্যাম্বুলেন্স প্রস্তুত রয়েছে।',
  ],
  [
    'q' => 'ফ্রিজার অ্যাম্বুলেন্সে মরদেহ কত সময় পর্যন্ত সংরক্ষণ করা যায়?',
    'a' => 'আমাদের আধুনিক ফ্রিজার অ্যাম্বুলেন্সগুলোতে মাইনাস তাপমাত্রায় দীর্ঘক্ষণ মরদেহ অক্ষত রাখার ব্যবস্থা রয়েছে, যা দেশের যেকোনো জেলায় মরদেহ পরিবহনের জন্য সম্পূর্ণ নিরাপদ।',
  ],
  [
    'q' => 'অ্যাম্বুলেন্সে কি সার্বক্ষণিক সেন্ট্রাল অক্সিজেন ও জরুরি মনিটর সুবিধা রয়েছে?',
    'a' => 'হ্যাঁ, প্রতিটি এসি ও আইসিইউ অ্যাম্বুলেন্সে সেন্ট্রাল অক্সিজেন লাইন, সাকশন মেশিন, পালস অক্সিমিটার এবং আইসিইউ ইউনিটে ভেন্টিলেটর ও কার্ডিয়াক মনিটর সার্বক্ষণিক সক্রিয় থাকে।',
  ],
];
?>
<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0D9488">
  <title>বুক অ্যাম্বুলেন্স — ইজি হেলথকেয়ার</title>
  <link rel="icon" type="image/png" href="<?= $baseUrl ?>/assets/images/fevicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/header.css">
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>
  <script src="<?= $baseUrl ?>/assets/js/header.js" defer></script>
</head>
<body>
  <?php require __DIR__ . '/../includes/header.php'; ?>

  <main class="page-content">
    <!-- Hero Section (Height: 350px, Primary & Soft White Gradient) -->
    <section class="doctor-hero" aria-labelledby="ambulance-hero-title">
      <div class="doctor-hero-inner">
        <div class="doctor-hero-badge">
          <i data-lucide="siren" aria-hidden="true"></i>
          <span>২৪/৭ সার্বক্ষণিক জরুরি অ্যাম্বুলেন্স সহায়তা</span>
        </div>
        <h1 class="doctor-hero-title" id="ambulance-hero-title">
          জরুরি প্রয়োজনে দ্রুততম সময়ে <span>অ্যাম্বুলেন্স কল করুন</span>
        </h1>
        <p class="doctor-hero-desc">
          ঢাকা সহ সারা বাংলাদেশে মুমূর্ষু রোগী স্থানান্তরে প্রস্তুত আধুনিক লাইফ সাপোর্ট ও এসি অ্যাম্বুলেন্স নেটওয়ার্ক।
        </p>

        <div class="ambulance-hero-actions">
          <a class="ambulance-hero-hotline" href="tel:09610001234">
            <i data-lucide="phone-call" aria-hidden="true"></i>
            <span>হটলাইন: ০৯৬১০০০১২৩৪</span>
          </a>
          <a class="ambulance-hero-btn" href="#booking-form">
            <span>অনলাইন বুকিং ফর্ম</span>
            <i data-lucide="arrow-down" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- Unified White Background Content Wrapper -->
    <div class="doctor-main-wrap" id="ambulance-types">
      <div class="doctor-content-container">

        <!-- 1. Ambulance Types Grid (6 Cards, 3 per row) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">আমাদের বহর</p>
            <h2 class="doctor-block-heading">অ্যাম্বুলেন্সের ধরন ও সেবাসমূহ</h2>
            <p class="doctor-block-sub">রোগীর শারীরিক অবস্থা ও প্রয়োজন অনুযায়ী সঠিক অ্যাম্বুলেন্স বেছে নিন</p>
          </div>

          <div class="doctor-grid">
            <?php foreach ($ambulanceTypes as $item): ?>
              <article class="doctor-card">
                <div class="doctor-card-media">
                  <img src="<?= htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                </div>
                <div class="doctor-card-body">
                  <h3 class="doctor-card-title"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                  <a href="#booking-form" class="doctor-card-btn">
                    <span>বুকিং করুন</span>
                    <i data-lucide="arrow-right" aria-hidden="true"></i>
                  </a>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- 2. Booking Process (Clean Timeline Style) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">জরুরি সেবা সহজ ধাপে</p>
            <h2 class="doctor-block-heading">অ্যাম্বুলেন্স বুকিং প্রসেস</h2>
            <p class="doctor-block-sub">মাত্র ৪টি দ্রুত পদক্ষেপে কাঙ্ক্ষিত অ্যাম্বুলেন্স আপনার দরজায় পৌঁছাবে</p>
          </div>

          <div class="booking-timeline">
            <?php foreach ($bookingSteps as $step): ?>
              <div class="timeline-step">
                <div class="timeline-node"><?= htmlspecialchars($step['step'], ENT_QUOTES, 'UTF-8') ?></div>
                <div class="timeline-text">
                  <h3><?= htmlspecialchars($step['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                  <p><?= htmlspecialchars($step['desc'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- 3. Area Coverage Section -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">সারাদেশে নেটওয়ার্ক</p>
            <h2 class="doctor-block-heading">আমাদের এরিয়া কাভারেজ</h2>
            <p class="doctor-block-sub">ঢাকা মহানগর সহ দেশের যেকোনো প্রান্ত থেকে সার্বক্ষণিক অ্যাম্বুলেন্স সাপোর্ট</p>
          </div>

          <div class="coverage-grid">
            <?php foreach ($coverageZones as $zone): ?>
              <div class="coverage-card">
                <div class="coverage-card-icon">
                  <i data-lucide="<?= htmlspecialchars($zone['icon'], ENT_QUOTES, 'UTF-8') ?>" aria-hidden="true"></i>
                </div>
                <span class="coverage-badge"><?= htmlspecialchars($zone['badge'], ENT_QUOTES, 'UTF-8') ?></span>
                <h3><?= htmlspecialchars($zone['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                <p><?= htmlspecialchars($zone['desc'], ENT_QUOTES, 'UTF-8') ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- 4. Emergency Booking Form & Quick Call Panel -->
        <div class="doctor-block" id="booking-form">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">তাৎক্ষণিক বুকিং</p>
            <h2 class="doctor-block-heading">জরুরি অ্যাম্বুলেন্স বুকিং ফর্ম</h2>
            <p class="doctor-block-sub">তথ্য দিয়ে সাবমিট করার সাথে সাথেই আমাদের ডিসপ্যাচ টিম আপনার সাথে যোগাযোগ করবে</p>
          </div>

          <div class="booking-form-wrap">
            <div class="booking-form-left">
              <h3>অনলাইন বুকিং রিকোয়েস্ট</h3>
              <p>সঠিক তথ্য দিন যাতে দ্রুততম অ্যাম্বুলেন্স পাঠানো নিশ্চিত করা যায়।</p>

              <form class="ambulance-form" onsubmit="event.preventDefault(); alert('আপনার বুকিং রিকোয়েস্ট গ্রহণ করা হয়েছে। আমাদের টিম খুব দ্রুত আপনার নম্বরে কল দিচ্ছে।');">
                <div class="form-group">
                  <label for="pickup-loc">পিকআপ লোকেশন (রোগীর বর্তমান অবস্থান)*</label>
                  <input type="text" id="pickup-loc" name="pickup" placeholder="বাসা/রোড, এলাকা, থানা..." required>
                </div>

                <div class="form-group">
                  <label for="drop-loc">গন্তব্য (হাসপাতাল বা ঠিকানা)*</label>
                  <input type="text" id="drop-loc" name="drop" placeholder="হাসপাতালের নাম বা ঠিকানা..." required>
                </div>

                <div class="form-group">
                  <label for="amb-type">অ্যাম্বুলেন্সের ধরন*</label>
                  <select id="amb-type" name="type" required>
                    <option value="">নির্বাচন করুন</option>
                    <option value="ac">এসি অ্যাম্বুলেন্স</option>
                    <option value="non-ac">নন-এসি অ্যাম্বুলেন্স</option>
                    <option value="icu">আইসিইউ / সিসিইউ লাইফ সাপোর্ট</option>
                    <option value="freezer">ফ্রিজার অ্যাম্বুলেন্স (লাশবাহী)</option>
                    <option value="nicu">এনআইসিইউ বেবি অ্যাম্বুলেন্স</option>
                    <option value="air">এয়ার অ্যাম্বুলেন্স</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="patient-status">রোগীর বর্তমান অবস্থা</label>
                  <select id="patient-status" name="status">
                    <option value="normal">সাধারণ স্থানান্তর</option>
                    <option value="oxygen">অক্সিজেন সাপোর্ট প্রয়োজন</option>
                    <option value="critical">আশঙ্কাজনক (ক্রিটিক্যাল কেয়ার)</option>
                    <option value="wheelchair">স্ট্র্যাচার / হুইলচেয়ার প্রয়োজন</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="contact-name">যোগাযোগকারীর নাম*</label>
                  <input type="text" id="contact-name" name="name" placeholder="আপনার নাম লিখুন" required>
                </div>

                <div class="form-group">
                  <label for="contact-phone">জরুরি মোবাইল নম্বর*</label>
                  <input type="tel" id="contact-phone" name="phone" placeholder="০১৭xxxxxxxx" required>
                </div>

                <div class="form-group form-full">
                  <button type="submit" class="ambulance-submit-btn">
                    <i data-lucide="send" aria-hidden="true"></i>
                    <span>জরুরি বুকিং রিকোয়েস্ট পাঠান</span>
                  </button>
                </div>
              </form>
            </div>

            <!-- Booking Sidebar / Quick Hotline -->
            <div class="booking-form-sidebar">
              <div class="quick-call-box">
                <div class="siren-icon">
                  <i data-lucide="phone-incoming" aria-hidden="true"></i>
                </div>
                <h4>সরাসরি ফোনে বুকিং চান?</h4>
                <p>যেকোনো জরুরি মুহূর্তে সরাসরি আমাদের হটলাইনে ফোন দিয়ে তৎক্ষণাৎ অ্যাম্বুলেন্স কনফার্ম করুন।</p>
                <a class="quick-call-number" href="tel:09610001234">
                  ০৯৬১০০০১২৩৪
                </a>
                <p class="text-xs text-gray-500 m-0">২৪ ঘণ্টা / ৭ দিন খোলা</p>
              </div>

              <div class="sidebar-features">
                <h4>ইজি অ্যাম্বুলেন্সের সুবিধাসমূহ</h4>
                <ul class="sidebar-feature-list">
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> জিপিএস লাইভ ট্র্যাকিং সিস্টেম</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> সার্বক্ষণিক সেন্ট্রাল অক্সিজেন</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> বিএমডিসি রেজিস্টার্ড ব্যাকআপ</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> সরকার নির্ধারিত ন্যায্য ভাড়া</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- 5. FAQ Section (Light Gray Border, Clean White Background) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">সাধারণ জিজ্ঞাসা</p>
            <h2 class="doctor-block-heading">সচরাচর জিজ্ঞাসিত প্রশ্নাবলী (FAQ)</h2>
            <p class="doctor-block-sub">জরুরি অ্যাম্বুলেন্স কল ও বুকিং সংক্রান্ত জরুরি তথ্যাবলী</p>
          </div>

          <div class="faq-list">
            <?php foreach ($faqs as $faq): ?>
              <details class="faq-item">
                <summary class="faq-question">
                  <span><?= htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8') ?></span>
                  <i data-lucide="chevron-down" aria-hidden="true"></i>
                </summary>
                <p class="faq-answer"><?= htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8') ?></p>
              </details>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </main>

  <?php require __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
