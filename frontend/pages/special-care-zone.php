<?php
if (!isset($baseUrl)) {
  $baseUrl = (strpos($_SERVER['REQUEST_URI'] ?? '', '/pages/') !== false) ? '..' : '.';
}

$services = [
  [
    'title' => 'মেন কেয়ার',
    'image' => $baseUrl . '/assets/images/special-care/men-care.jpg',
  ],
  [
    'title' => 'ওমেন কেয়ার',
    'image' => $baseUrl . '/assets/images/special-care/women-care.jpg',
  ],
  [
    'title' => 'চাইল্ড অ্যান্ড মাদার কেয়ার',
    'image' => $baseUrl . '/assets/images/special-care/mother-child.jpg',
  ],
  [
    'title' => 'ক্যান্সার কেয়ার',
    'image' => $baseUrl . '/assets/images/special-care/cancer-care.jpg',
  ],
  [
    'title' => 'ডায়াবেটিস কেয়ার',
    'image' => $baseUrl . '/assets/images/special-care/diabetes-care.jpg',
  ],
  [
    'title' => 'মেন্টাল হেলথকেয়ার',
    'image' => $baseUrl . '/assets/images/special-care/mental-health.jpg',
  ],
  [
    'title' => 'হার্ট কেয়ার',
    'image' => $baseUrl . '/assets/images/special-care/heart-care.jpg',
  ],
  [
    'title' => 'স্কিন কেয়ার',
    'image' => $baseUrl . '/assets/images/special-care/skin-care.jpg',
  ],
  [
    'title' => 'ফার্টিলিটি কেয়ার',
    'image' => $baseUrl . '/assets/images/special-care/fertility-care.jpg',
  ],
  [
    'title' => 'হোম কেয়ার সার্ভিস',
    'image' => $baseUrl . '/assets/images/special-care/home-care.jpg',
  ],
  [
    'title' => 'পেশেন্ট অ্যাডভোকেসি সার্ভিস',
    'image' => $baseUrl . '/assets/images/special-care/patient-advocacy.jpg',
  ],
  [
    'title' => 'স্মার্ট হোম কেয়ার',
    'image' => $baseUrl . '/assets/images/special-care/smart-homecare.jpg',
  ],
  [
    'title' => 'পেশেন্ট অ্যাটেনডেন্ট সার্ভিস',
    'image' => $baseUrl . '/assets/images/special-care/patient-attendant.jpg',
  ],
  [
    'title' => 'সিনিয়র সিটিজেন কেয়ার',
    'image' => $baseUrl . '/assets/images/special-care/elderly-care.jpg',
  ],
  [
    'title' => 'ফিজিওথেরাপি ও রিহ্যাব কেয়ার',
    'image' => $baseUrl . '/assets/images/special-care/physiotherapy.jpg',
  ],
  [
    'title' => 'প্যালিয়াটিভ কেয়ার সাপোর্ট',
    'image' => $baseUrl . '/assets/images/special-care/palliative-care.jpg',
  ],
];

$careSteps = [
  [
    'step' => '১',
    'title' => 'প্রয়োজনীয় কেয়ার নির্বাচন',
    'desc' => 'আপনার বা পরিবারের রোগীর শারীরিক অবস্থা অনুযায়ী উপযুক্ত বিশেষায়িত সেবা বেছে নিন।',
  ],
  [
    'step' => '২',
    'title' => 'প্রাথমিক ক্লিনিক্যাল অ্যাসেসমেন্ট',
    'desc' => 'বিশেষজ্ঞ চিকিৎসক রোগীর মেডিকেল হিস্ট্রি ও বর্তমান প্রেসক্রিপশন মূল্যায়ন করবেন।',
  ],
  [
    'step' => '৩',
    'title' => 'পারসোনালাইজড কেয়ার প্ল্যান',
    'desc' => 'ঘরে বসে চিকিৎসা, নার্সিং, থেরাপি বা ডিজিটাল মনিটরিংয়ের সুনির্দিষ্ট পরিকল্পনা প্রণয়ন।',
  ],
  [
    'step' => '৪',
    'title' => 'সার্বক্ষণিক মনিটরিং ও সুস্থতা',
    'desc' => 'কেয়ার ম্যানেজার ও ডাক্তারের নিয়মিত ফলো-আপের মাধ্যমে দ্রুত ও স্থায়ী স্বাস্থ্য পুনরুদ্ধার।',
  ],
];

$careStandards = [
  [
    'icon' => 'stethoscope',
    'badge' => 'বিশেষজ্ঞ চিকিৎসকের দল',
    'title' => 'মাল্টিডিসিপ্লিনারি মেডিকেল বোর্ড',
    'desc' => 'প্রতিটি বিশেষায়িত ক্যাটাগরিতে বিএমডিসি নিবন্ধিত অভিজ্ঞ সিনিয়র বিশেষজ্ঞ চিকিৎসকদের নিয়মিত গাইডেন্স ও তত্ত্বাবধান।',
  ],
  [
    'icon' => 'home',
    'badge' => 'হাসপাতাল মানের কেয়ার',
    'title' => 'ঘরে বসেই উন্নত স্বাস্থ্যসেবা',
    'desc' => 'প্রশিক্ষিত মেল/ফিমেল নার্স, দক্ষ ফিজিওথেরাপিস্ট ও কেয়ারগিভারের মাধ্যমে বাড়িতেই সর্বোচ্চ আরাম ও চিকিৎসাসেবা।',
  ],
  [
    'icon' => 'user-check',
    'badge' => '২৪/৭ সহায়তা',
    'title' => 'ডেডিকেটেড কেয়ার কো-অর্ডিনেটর',
    'desc' => 'জরুরি যেকোনো প্রয়োজন, ওষুধ সমন্বয়, ডক্টর ভিজিট ও ল্যাব টেস্ট শিডিউলিংয়ে সার্বক্ষণিক একজন পারসোনাল কেয়ার ম্যানেজার।',
  ],
];

$faqs = [
  [
    'q' => 'স্পেশাল কেয়ার জোনের সেবাগুলো কি ঘরে বসে পাওয়া সম্ভব?',
    'a' => 'হ্যাঁ, আমাদের বেশিরভাগ বিশেষায়িত সেবা যেমন—হোম কেয়ার, পেশেন্ট অ্যাটেনডেন্ট, ফিজিওথেরাপি, ডায়াবেটিস ফলো-আপ ও স্মার্ট মনিটরিং সেবাগুলো সম্পূর্ণভাবে রোগীর বাড়িতে প্রদান করা হয়।',
  ],
  [
    'q' => 'পেশেন্ট অ্যাটেনডেন্ট ও হোম নার্সিং সার্ভিসের দায়িত্ব কী কী?',
    'a' => 'প্রশিক্ষিত অ্যাটেনডেন্টরা রোগীর ব্যক্তিগত পরিচ্ছন্নতা, সময়মতো ওষুধ খাওয়ানো, চলাফেরায় সাহায্য ও প্রাথমিক ভাইটালস চেক করেন। ডিপ্লোমা নার্সরা ইনজেকশন, স্যালাইন, ড্রেসিং, ক্যাথেটার ও জটিল নার্সিং কেয়ার পরিচালনা করেন।',
  ],
  [
    'q' => 'ক্যান্সার বা দীর্ঘমেয়াদী প্যালিয়াটিভ রোগীদের কী ধরনের সহায়তা দেওয়া হয়?',
    'a' => 'ক্যান্সার ও দীর্ঘমেয়াদী রোগীদের ব্যথা নিয়ন্ত্রণ (Pain Management), পুষ্টি পরামর্শ, সাইকোলজিক্যাল কাউন্সেলিং, বেড-সোর প্রতিরোধ ও সার্বক্ষণিক প্যারামেডিক সাপোর্টের মাধ্যমে সর্বোচ্চ স্বস্তি নিশ্চিত করা হয়।',
  ],
  [
    'q' => 'মেন্টাল হেলথকেয়ারে রোগীর তথ্যের গোপনীয়তা কীভাবে রক্ষা করা হয়?',
    'a' => 'আমাদের প্রতিটি কাউন্সেলিং ও সাইকোথেরাপি সেশন আন্তর্জাতিক মেডিকেল এথিক্স অনুযায়ী শতভাগ গোপনীয়। কোনো তথ্য রোগীর অনুমতি ব্যতীত কারো সাথে শেয়ার করা হয় না।',
  ],
  [
    'q' => 'একক দিন বা খণ্ডকালীন সময়ের জন্য কি অ্যাটেনডেন্ট সার্ভিস পাওয়া যায়?',
    'a' => 'হ্যাঁ, রোগীর প্রয়োজন অনুযায়ী ১২ ঘণ্টা (ডে/নাইট শিফট) অথবা ২৪ ঘণ্টার পূর্ণকালীন মাসিক বা সাপ্তাহিক চুক্তিতে পেশেন্ট অ্যাটেনডেন্ট ও নার্সিং সেবা নেওয়ার সুবিধা রয়েছে।',
  ],
];
?>
<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0D9488">
  <title>স্পেশাল কেয়ার জোন — ইজি হেলথকেয়ার</title>
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
    <section class="doctor-hero" aria-labelledby="care-hero-title">
      <div class="doctor-hero-inner">
        <div class="doctor-hero-badge">
          <i data-lucide="sparkles" aria-hidden="true"></i>
          <span>বিশেষায়িত স্বাস্থ্য ও হোমকেয়ার সেবা</span>
        </div>
        <h1 class="doctor-hero-title" id="care-hero-title">
          আপনার ও পরিবারের জন্য <span>স্পেশাল কেয়ার জোন</span>
        </h1>
        <p class="doctor-hero-desc">
          নির্দিষ্ট স্বাস্থ্য চাহিদায় অভিজ্ঞ চিকিৎসক, বিশেষায়িত থেরাপি ও ঘরে বসে পেশাদার কেয়ারগিভার সাপোর্ট।
        </p>

        <div class="ambulance-hero-actions">
          <a class="hero-search-btn" href="#services-list" style="padding: 11px 24px; font-size: 15px;">
            <span>সবগুলো সেবা দেখুন</span>
            <i data-lucide="arrow-down" aria-hidden="true"></i>
          </a>
          <a class="ambulance-hero-btn" href="tel:09610001234">
            <i data-lucide="phone-call" aria-hidden="true"></i>
            <span>কাউন্সেলিং হটলাইন: ০৯৬১০০০১২৩৪</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Unified White Background Content Wrapper -->
    <div class="doctor-main-wrap" id="services-list">
      <div class="doctor-content-container" style="max-width: 1080px;">

        <!-- 1. Special Care Zone 16 Products Grid -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">আমাদের বিশেষায়িত সেবা বহর</p>
            <h2 class="doctor-block-heading">স্পেশাল কেয়ার জোনের ১৬টি সার্ভিস</h2>
            <p class="doctor-block-sub">আপনার বা পরিবারের রোগীর প্রয়োজনীয় সেবাটি বেছে নিয়ে বিস্তারিত পরামর্শ গ্রহণ করুন</p>
          </div>

          <div class="special-care-grid">
            <?php foreach ($services as $item): ?>
              <article class="doctor-card special-care-card">
                <div class="doctor-card-media">
                  <img src="<?= htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                </div>
                <div class="doctor-card-body">
                  <h3 class="doctor-card-title"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                  <a href="#care-form" class="doctor-card-btn">
                    <span>বিস্তারিত দেখুন</span>
                    <i data-lucide="arrow-right" aria-hidden="true"></i>
                  </a>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- 2. Care Process (Timeline Style) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">সুনির্দিষ্ট কর্মপদ্ধতি</p>
            <h2 class="doctor-block-heading">স্পেশাল কেয়ার প্রসেস</h2>
            <p class="doctor-block-sub">৪টি সমন্বিত ধাপে রোগীর সুস্বাস্থ্য ও সঠিক পরিচর্যা নিশ্চিত করা হয়</p>
          </div>

          <div class="booking-timeline">
            <?php foreach ($careSteps as $step): ?>
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

        <!-- 3. Why Choose Special Care Standards -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">আমাদের অঙ্গীকার</p>
            <h2 class="doctor-block-heading">কেন আমাদের স্পেশাল কেয়ার বেছে নেবেন</h2>
            <p class="doctor-block-sub">রোগীর প্রতি পরম মমতা ও সর্বোচ্চ পেশাদারিত্বে আমরা সার্বক্ষণিক পাশে আছি</p>
          </div>

          <div class="coverage-grid">
            <?php foreach ($careStandards as $std): ?>
              <div class="coverage-card">
                <div class="coverage-card-icon">
                  <i data-lucide="<?= htmlspecialchars($std['icon'], ENT_QUOTES, 'UTF-8') ?>" aria-hidden="true"></i>
                </div>
                <span class="surgery-badge"><?= htmlspecialchars($std['badge'], ENT_QUOTES, 'UTF-8') ?></span>
                <h3><?= htmlspecialchars($std['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                <p><?= htmlspecialchars($std['desc'], ENT_QUOTES, 'UTF-8') ?></p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- 4. Consultation & Service Request Form -->
        <div class="doctor-block" id="care-form">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">বিশেষজ্ঞ কাউন্সেলিং</p>
            <h2 class="doctor-block-heading">ফ্রি পরামর্শ ও কেয়ার রিকোয়েস্ট ফর্ম</h2>
            <p class="doctor-block-sub">আপনার তথ্য দিন, আমাদের অভিজ্ঞ কেয়ার কো-অর্ডিনেটর খুব দ্রুত আপনার সাথে যোগাযোগ করবেন</p>
          </div>

          <div class="booking-form-wrap">
            <div class="booking-form-left">
              <h3>সার্ভিস রিকোয়েস্ট পাঠান</h3>
              <p>রোগীর চাহিদা অনুযায়ী উপযুক্ত সেবা ও খরচের বিস্তারিত তথ্য জানতে ফর্মটি পূরণ করুন।</p>

              <form class="ambulance-form" onsubmit="event.preventDefault(); alert('আপনার কেয়ার রিকোয়েস্ট গ্রহণ করা হয়েছে। আমাদের কেয়ার ম্যানেজার খুব দ্রুত আপনার নম্বরে যোগাযোগ করবেন।');">
                <div class="form-group">
                  <label for="care-name">আবেদনকারী বা রোগীর নাম*</label>
                  <input type="text" id="care-name" name="name" placeholder="নাম লিখুন" required>
                </div>

                <div class="form-group">
                  <label for="care-phone">মোবাইল নম্বর*</label>
                  <input type="tel" id="care-phone" name="phone" placeholder="০১৭xxxxxxxx" required>
                </div>

                <div class="form-group">
                  <label for="care-service">প্রয়োজনীয় সেবা নির্বাচন করুন*</label>
                  <select id="care-service" name="service" required>
                    <option value="">নির্বাচন করুন</option>
                    <?php foreach ($services as $srv): ?>
                      <option value="<?= htmlspecialchars($srv['title'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($srv['title'], ENT_QUOTES, 'UTF-8') ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="care-duration">সার্ভিসের ধরন / সময়কাল</label>
                  <select id="care-duration" name="duration">
                    <option value="home-visit">হোম ভিজিট ও কনসাল্টেশন</option>
                    <option value="12hr">১২ ঘণ্টা শিফট অ্যাটেনডেন্ট</option>
                    <option value="24hr">২৪ ঘণ্টা পূর্ণকালীন কেয়ারগিভার</option>
                    <option value="monthly">মাসিক বিশেষ প্যাকেজ</option>
                  </select>
                </div>

                <div class="form-group form-full">
                  <label for="care-details">রোগীর বর্তমান সমস্যা বা বিশেষ চাহিদা</label>
                  <textarea id="care-details" name="details" rows="3" placeholder="রোগীর বয়স, শারীরিক সমস্যা বা কোনো বিশেষ নির্দেশনার কথা সংক্ষেপে জানান..."></textarea>
                </div>

                <div class="form-group form-full">
                  <button type="submit" class="surgery-submit-btn">
                    <i data-lucide="send" aria-hidden="true"></i>
                    <span>ফ্রি কেয়ার কাউন্সেলিং রিকোয়েস্ট পাঠান</span>
                  </button>
                </div>
              </form>
            </div>

            <!-- Sidebar / Care Hotline -->
            <div class="booking-form-sidebar">
              <div class="quick-call-box">
                <div class="siren-icon" style="background: #f3e8ff; color: var(--health-primary);">
                  <i data-lucide="heart-handshake" aria-hidden="true"></i>
                </div>
                <h4>স্পেশাল কেয়ার হেল্পলাইন</h4>
                <p>প্যাকেজ বাছাই বা দ্রুত কেয়ারগিভার নিয়োগে সরাসরি আমাদের কেয়ার স্পেশালিস্টের সাথে কথা বলুন।</p>
                <a class="quick-call-number" href="tel:09610001234" style="color: var(--health-primary); background: #fbf9ff; border-color: #d8cde9;">
                  ০৯৬১০০০১২৩৪
                </a>
                <p class="text-xs text-gray-500 m-0">সকাল ৮টা থেকে রাত ১১টা</p>
              </div>

              <div class="sidebar-features">
                <h4>আমাদের বিশেষ সেবাসমূহ</h4>
                <ul class="sidebar-feature-list">
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> বিএমডিসি রেজিস্টার্ড ডাক্তার ব্যাকআপ</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> ব্যাকগ্রাউন্ড ভেরিফাইড অ্যাটেনডেন্ট</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> ২৪/৭ পারসোনাল কেয়ার ম্যানেজার</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> ডিজিটাল স্বাস্থ্য মনিটরিং সুবিধা</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- 5. FAQ Section (Light Gray Border, Clean White Background) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">সাধারণ জিজ্ঞাসা</p>
            <h2 class="doctor-block-heading">স্পেশাল কেয়ার সম্পর্কিত প্রশ্নাবলী (FAQ)</h2>
            <p class="doctor-block-sub">হোম কেয়ার, পেশেন্ট অ্যাটেনডেন্ট ও বিশেষায়িত সেবা নিয়ে সাধারণ তথ্যাবলী</p>
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
