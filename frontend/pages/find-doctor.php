<?php
if (!isset($baseUrl)) {
  $baseUrl = (strpos($_SERVER['REQUEST_URI'] ?? '', '/pages/') !== false) ? '..' : '.';
}

$specialties = [
  [
    'title' => 'ফাইন্ড ডাক্তার নেয়ার ইউ',
    'image' => $baseUrl . '/assets/images/doctors/medicine.jpg',
  ],
  [
    'title' => 'ইজি হেলথকেয়ার স্পেশাল ডাক্তার',
    'image' => $baseUrl . '/assets/images/doctors/cardiology.jpg',
  ],
  [
    'title' => 'ঢাকা সিটি স্পেশাল ডাক্তার',
    'image' => $baseUrl . '/assets/images/doctors/pediatrics.jpg',
  ],
  [
    'title' => 'মেট্রো সিটি সিলেক্টেড ডাক্তার',
    'image' => $baseUrl . '/assets/images/doctors/gynecology.jpg',
  ],
  [
    'title' => 'সিলেক্টেড হসপিটাল ডাক্তার',
    'image' => $baseUrl . '/assets/images/doctors/orthopedics.jpg',
  ],
  [
    'title' => 'ইন্টারন্যাশনাল স্পেশাল ডাক্তার',
    'image' => $baseUrl . '/assets/images/doctors/dermatology.jpg',
  ],
];

$bookingSteps = [
  [
    'step' => '১',
    'title' => 'ডাক্তার বা ক্যাটাগরি খুঁজুন',
    'desc' => 'আপনার এলাকা, বিশেষত্ব বা হাসপাতাল অনুযায়ী পছন্দের চিকিৎসক বেছে নিন।',
  ],
  [
    'step' => '২',
    'title' => 'তারিখ ও সময় নির্ধারণ করুন',
    'desc' => 'ডাক্তারের চেম্বার শিডিউল দেখে আপনার সুবিধাজনক দিন ও সময় নির্বাচন করুন।',
  ],
  [
    'step' => '৩',
    'title' => 'বুকিং নিশ্চিত করুন',
    'desc' => 'প্রয়োজনীয় তথ্য দিয়ে সরাসরি অনলাইন বুকিং সম্পন্ন করুন এবং কনফার্মেশন নিন।',
  ],
  [
    'step' => '৪',
    'title' => 'পরামর্শ ও সেবা গ্রহণ করুন',
    'desc' => 'নির্দিষ্ট সময়ে সরাসরি চেম্বারে অথবা ঘরে বসেই অনলাইন ভিডিও কলে পরামর্শ নিন।',
  ],
];

$faqs = [
  [
    'q' => 'কীভাবে ইজি হেলথকেয়ারে ডাক্তার অ্যাপয়েন্টমেন্ট বুক করব?',
    'a' => 'খুব সহজেই! উপরে থাকা ক্যাটাগরি বা সার্চ বার থেকে পছন্দের ডাক্তার নির্বাচন করে "সার্চ ডাক্তার" বাটনে ক্লিক করুন। এরপর সময় নির্বাচন করে আপনার নাম ও ফোন নম্বর দিয়ে বুকিং সম্পন্ন করুন।',
  ],
  [
    'q' => 'চেম্বারে যাওয়ার পাশাপাশি কি অনলাইনে ভিডিও কলে পরামর্শ নেওয়া যাবে?',
    'a' => 'হ্যাঁ, আমাদের প্ল্যাটফর্মে চেম্বার সিরিয়ালের পাশাপাশি ঘরে বসেই অভিজ্ঞ চিকিৎসকদের সাথে হাই-কোয়ালিটি ভিডিও কলে সরাসরি কথা বলার পূর্ণ সুবিধা রয়েছে।',
  ],
  [
    'q' => 'বুকিং কনফার্মেশন কীভাবে পাব?',
    'a' => 'বুকিং সম্পন্ন হওয়ার সাথে সাথেই আপনার নিবন্ধিত মোবাইল নম্বরে এসএমএস এবং ইমেইলে সিরিয়াল নম্বর, সময় ও চেম্বারের বিস্তারিত ঠিকানা পাঠিয়ে দেওয়া হবে।',
  ],
  [
    'q' => 'বুকিং করার পর সময় পরিবর্তন বা বাতিল করা যাবে কি?',
    'a' => 'হ্যাঁ, অ্যাপয়েন্টমেন্টের নির্ধারিত সময়ের নির্দিষ্ট সময় আগে আমাদের পেশেন্ট পোর্টাল থেকে অথবা সাপোর্ট হেল্পলাইনে ফোন করে সহজেই সময় পরিবর্তন বা বাতিল করতে পারবেন।',
  ],
  [
    'q' => 'জরুরি চিকিৎসায় বা অ্যাম্বুলেন্সের প্রয়োজনে কী করব?',
    'a' => 'জরুরি যেকোনো প্রয়োজনে আমাদের হেডারে থাকা "বুক অ্যাম্বুলেন্স" বাটনে ক্লিক করে সরাসরি কল করতে পারেন অথবা জরুরি হেল্পলাইনে ২৪/৭ যোগাযোগ করতে পারেন।',
  ],
];
?>
<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#443962">
  <title>ফাইন্ড ডাক্তার — ইজি হেলথকেয়ার</title>
  <link rel="icon" type="image/png" href="<?= $baseUrl ?>/assets/images/fevicon.png">
  <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/header.css">
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>
  <script src="<?= $baseUrl ?>/assets/js/header.js" defer></script>
</head>
<body>
  <?php require __DIR__ . '/../includes/header.php'; ?>

  <main class="page-content">
    <!-- Hero Section (Height: 350px, Primary & Soft White Gradient) -->
    <section class="doctor-hero" aria-labelledby="doctor-hero-title">
      <div class="doctor-hero-inner">
        <div class="doctor-hero-badge">
          <i data-lucide="stethoscope" aria-hidden="true"></i>
          <span>যাচাইকৃত বিশেষজ্ঞ চিকিৎসক ডিরেক্টরি</span>
        </div>
        <h1 class="doctor-hero-title" id="doctor-hero-title">
          আপনার প্রয়োজনীয় বিশেষজ্ঞ <span>ডাক্তার খুঁজুন</span>
        </h1>
        <p class="doctor-hero-desc">
          বিএমডিসি নিবন্ধিত অভিজ্ঞ চিকিৎসকদের তালিকা থেকে আপনার স্বাস্থ্য সমস্যার সঠিক বিশেষজ্ঞ বেছে নিন।
        </p>

        <form class="doctor-hero-search" action="#doctor-list" method="GET" role="search">
          <i data-lucide="search" aria-hidden="true"></i>
          <input type="text" name="q" placeholder="ডাক্তারের নাম, বিশেষত্ব বা হাসপাতাল লিখে খুঁজুন..." aria-label="ডাক্তার অনুসন্ধান">
          <button type="submit" class="hero-search-btn">
            <span>অনুসন্ধান</span>
            <i data-lucide="arrow-right" aria-hidden="true"></i>
          </button>
        </form>
      </div>
    </section>

    <!-- Unified White Background Content Wrapper (Reduces unnecessary gaps) -->
    <div class="doctor-main-wrap" id="doctor-list">
      <div class="doctor-content-container">

        <!-- 1. Doctor Categories Grid (6 Cards, 3 per row) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">ডাক্তার তালিকা ও ক্যাটাগরি</p>
            <h2 class="doctor-block-heading">বিশেষজ্ঞ ডাক্তার ক্যাটাগরি</h2>
            <p class="doctor-block-sub">আপনার পছন্দ ও প্রয়োজন অনুযায়ী বিভাগ নির্বাচন করে দ্রুত ডাক্তার খুঁজুন</p>
          </div>

          <div class="doctor-grid">
            <?php foreach ($specialties as $item): ?>
              <article class="doctor-card">
                <div class="doctor-card-media">
                  <img src="<?= htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                </div>
                <div class="doctor-card-body">
                  <h3 class="doctor-card-title"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                  <a href="<?= htmlspecialchars($baseUrl, ENT_QUOTES, 'UTF-8') ?>/find-doctor?category=<?= urlencode($item['title']) ?>" class="doctor-card-btn">
                    <span>সার্চ ডাক্তার</span>
                    <i data-lucide="arrow-right" aria-hidden="true"></i>
                  </a>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- 2. Booking Process (Clean Timeline Style, No Bulky Boxes) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">খুবই সহজ ও দ্রুত</p>
            <h2 class="doctor-block-heading">আমরা কীভাবে বুকিং করি (বুকিং প্রসেস)</h2>
            <p class="doctor-block-sub">মাত্র ৪টি সহজ ধাপে আপনার কাঙ্ক্ষিত ডাক্তারের অ্যাপয়েন্টমেন্ট নিশ্চিত করুন</p>
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

        <!-- 3. FAQ Section (Light Gray Border, Clean White Background, No Gradient) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">সাধারণ জিজ্ঞাসা</p>
            <h2 class="doctor-block-heading">সচরাচর জিজ্ঞাসিত প্রশ্নাবলী (FAQ)</h2>
            <p class="doctor-block-sub">ডাক্তার দেখানো ও বুকিং সংক্রান্ত সাধারণ প্রশ্নের উত্তর জেনে নিন</p>
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
