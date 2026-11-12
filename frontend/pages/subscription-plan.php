<?php
if (!isset($baseUrl)) {
  $baseUrl = (strpos($_SERVER['REQUEST_URI'] ?? '', '/pages/') !== false) ? '..' : '.';
}

$plans = [
  [
    'name' => 'বেসিক কেয়ার',
    'subtitle' => 'একক ব্যক্তিদের স্বাস্থ্য সুরক্ষার জন্য আদর্শ',
    'price' => '৪৯৯',
    'period' => 'টাকা / মাস',
    'featured' => false,
    'badge' => '',
    'btn_text' => 'বেসিক প্ল্যান নিন',
    'btn_class' => 'pricing-card-btn pricing-card-btn-outline',
    'features' => [
      'মাসে ১টি ফ্রি বিশেষজ্ঞ ডাক্তার ভিডিও কনসালটেশন',
      'ডায়াগনস্টিক ও ল্যাব টেস্টে ১৫% ফ্ল্যাট ডিসকাউন্ট',
      'ডিজিটাল প্রেসক্রিপশন ও হেলথ রেকর্ড ক্লাউড সংরক্ষণ',
      '২৪/৭ ডেডিকেটেড অনলাইন স্বাস্থ্য চ্যাট সাপোর্ট',
      'ফার্মেসি মেডিসিন অর্ডারে ৫% অতিরিক্ত ছাড়',
    ],
  ],
  [
    'name' => 'ফ্যামিলি প্রটেক্ট',
    'subtitle' => 'সর্বোচ্চ ৪ জন পরিবারের সদস্যের পূর্ণাঙ্গ যত্ন',
    'price' => '১,১৯৯',
    'period' => 'টাকা / মাস',
    'featured' => true,
    'badge' => 'সর্বাধিক জনপ্রিয়',
    'btn_text' => 'ফ্যামিলি প্ল্যান নিন',
    'btn_class' => 'pricing-card-btn',
    'features' => [
      'পরিবারে ৪ জন সদস্যের কমপ্লিট হেলথ কভারেজ',
      'মাসে ৪টি ফ্রি বিশেষজ্ঞ ডাক্তার ভিডিও কনসালটেশন',
      'সব ধরনের ডায়াগনস্টিক ও ল্যাব টেস্টে ২৫% ছাড়',
      '১টি ফ্রি বার্ষিক ফুল বডি রুটিন হেলথ চেকআপ',
      'বাসা থেকে ফ্রি ব্লাড ও ল্যাব স্যাম্পল কালেকশন',
      'জরুরি অ্যাম্বুলেন্স সার্ভিসে ২০% বিশেষ ছাড়',
    ],
  ],
  [
    'name' => 'প্রিমিয়াম গোল্ড কেয়ার',
    'subtitle' => 'বয়োজ্যেষ্ঠ ও দীর্ঘমেয়াদী রোগীদের জন্য স্পেশাল কেয়ার',
    'price' => '২,৪৯৯',
    'period' => 'টাকা / মাস',
    'featured' => false,
    'badge' => '',
    'btn_text' => 'প্রিমিয়াম প্ল্যান নিন',
    'btn_class' => 'pricing-card-btn pricing-card-btn-outline',
    'features' => [
      'আনলিমিটেড জেনারেল ফিজিশিয়ান কনসালটেশন',
      'মাসে ২টি সিনিয়র স্পেশালিস্ট হোম বা ভিডিও ভিজিট',
      'ডায়াগনস্টিক ও টেস্টে ৩৫% সর্বোচ্চ ছাড়',
      'সার্বক্ষণিক ডেডিকেটেড পারসোনাল কেয়ার ম্যানেজার',
      'বছরে ১টি ফ্রি জরুরি অ্যাম্বুলেন্স সাপোর্ট',
      'ফ্রি মাসিক ডায়াবেটিস ও প্রেশার মনিটরিং হোম ভিজিট',
    ],
  ],
];

$steps = [
  [
    'step' => '১',
    'title' => 'প্ল্যান নির্বাচন করুন',
    'desc' => 'আপনার একক বা পরিবারের চাহিদা অনুযায়ী সুবিধাজনক প্যাকেজ বেছে নিন।',
  ],
  [
    'step' => '২',
    'title' => 'সহজ অনলাইন পেমেন্ট',
    'desc' => 'বিকাশ, নগদ, রকেট বা যেকোনো ব্যাংক কার্ড দিয়ে সুরক্ষিত পেমেন্ট সম্পন্ন করুন।',
  ],
  [
    'step' => '৩',
    'title' => 'মেম্বারশিপ সক্রিয়করণ',
    'desc' => 'পেমেন্ট সম্পন্ন হওয়ার সাথে সাথেই ডিজিটাল মেম্বারশিপ কার্ড ও আইডি চালু হবে।',
  ],
  [
    'step' => '৪',
    'title' => 'স্বাস্থ্যসেবা উপভোগ করুন',
    'desc' => 'ফ্রি ডাক্তারের পরামর্শ এবং পার্টনার হাসপাতালে আকর্ষণীয় ছাড় গ্রহণ করুন।',
  ],
];

$faqs = [
  [
    'q' => 'সাবস্ক্রিপশন প্ল্যানে কী কী সুবিধা নিশ্চিত পাওয়া যাবে?',
    'a' => 'প্ল্যান অনুযায়ী নির্দিষ্ট সংখ্যক ফ্রি বিশেষজ্ঞ ডাক্তার কনসালটেশন, ডায়াগনস্টিক ও ল্যাব টেস্টে সর্বোচ্চ ৩৫% পর্যন্ত ছাড়, ফ্রি হোম স্যাম্পল কালেকশন এবং ২৪/৭ অনলাইন স্বাস্থ্য পরামর্শ পাওয়া যাবে।',
  ],
  [
    'q' => 'ফ্যামিলি প্ল্যানে কীভাবে পরিবারের সদস্যদের যুক্ত করব?',
    'a' => 'সাবস্ক্রিপশন সম্পন্ন করার পর আপনার পেশেন্ট পোর্টালে গিয়ে "ফ্যামিলি মেম্বার" অপশন থেকে স্বামী/স্ত্রী, সন্তান বা পিতা-মাতার নাম ও বয়স দিয়ে খুব সহজেই যুক্ত করতে পারবেন।',
  ],
  [
    'q' => 'ডায়াগনস্টিক ও ল্যাব টেস্টের ডিসকাউন্ট কীভাবে পাব?',
    'a' => 'আমাদের পার্টনার ডায়াগনস্টিক সেন্টারে গিয়ে আপনার ইজি হেলথকেয়ার মেম্বারশিপ আইডি অথবা নিবন্ধিত ফোন নম্বর দেখালেই স্বয়ংক্রিয়ভাবে বিলে ডিসকাউন্ট যোগ হয়ে যাবে।',
  ],
  [
    'q' => 'প্ল্যান কি যেকোনো সময় বাতিল বা আপগ্রেড করা সম্ভব?',
    'a' => 'হ্যাঁ, যেকোনো সময় আপনার ড্যাশবোর্ড থেকে প্ল্যান আপগ্রেড করতে পারবেন অথবা বর্তমান মেয়াদ শেষে বাতিল করতে পারবেন। কোনো হিডেন বা অপ্রত্যাশিত চার্জ কাটা হবে না।',
  ],
  [
    'q' => 'কর্পোরেট বা প্রাতিষ্ঠানিক কর্মীদের জন্য কি আলাদা প্যাকেজ আছে?',
    'a' => 'হ্যাঁ, বিভিন্ন অফিস ও করপোরেট প্রতিষ্ঠানের কর্মীদের জন্য আমাদের বিশেষ কাস্টমাইজড হেলথ বেনিফিট প্যাকেজ রয়েছে। সরাসরি আমাদের হটলাইনে যোগাযোগ করে বিস্তারিত জানতে পারেন।',
  ],
];
?>
<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0D9488">
  <title>সাবস্ক্রিপশন প্ল্যান — ইজি হেলথকেয়ার</title>
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
    <section class="doctor-hero" aria-labelledby="sub-hero-title">
      <div class="doctor-hero-inner">
        <div class="doctor-hero-badge">
          <i data-lucide="badge-percent" aria-hidden="true"></i>
          <span>সাশ্রয়ী পারিবারিক স্বাস্থ্য সুরক্ষা প্ল্যান</span>
        </div>
        <h1 class="doctor-hero-title" id="sub-hero-title">
          আপনার ও পরিবারের জন্য <span>স্মার্ট হেলথ সাবস্ক্রিপশন</span>
        </h1>
        <p class="doctor-hero-desc">
          ফ্রি বিশেষজ্ঞ ডাক্তারের পরামর্শ, ডায়াগনস্টিক টেস্টে বিশেষ ছাড় ও জরুরি অ্যাম্বুলেন্স সুবিধা—সবকিছু এক সাবস্ক্রিপশনে।
        </p>

        <div class="ambulance-hero-actions">
          <a class="hero-search-btn" href="#plans-section" style="padding: 11px 24px; font-size: 15px;">
            <span>প্ল্যানগুলো দেখুন</span>
            <i data-lucide="arrow-down" aria-hidden="true"></i>
          </a>
          <a class="ambulance-hero-btn" href="tel:09610001234">
            <i data-lucide="phone-call" aria-hidden="true"></i>
            <span>পরামর্শে কল দিন: ০৯৬১০০০১২৩৪</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Unified White Background Content Wrapper -->
    <div class="doctor-main-wrap" id="plans-section">
      <div class="doctor-content-container">

        <!-- 1. Pricing Plans Grid (3 Cards, 5px radius, Header Gradient) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">পছন্দের প্যাকেজ বেছে নিন</p>
            <h2 class="doctor-block-heading">আমাদের মাসিক স্বাস্থ্য সাবস্ক্রিপশন প্যাকেজসমূহ</h2>
            <p class="doctor-block-sub">স্বচ্ছ মূল্য তালিকা, কোনো গোপন চার্জ নেই—আপনার প্রয়োজন অনুযায়ী সেরা প্ল্যানটি বেছে নিন</p>
          </div>

          <div class="pricing-grid">
            <?php foreach ($plans as $plan): ?>
              <article class="pricing-card <?= $plan['featured'] ? 'pricing-card-featured' : '' ?>">
                <?php if ($plan['featured']): ?>
                  <span class="pricing-featured-badge"><?= htmlspecialchars($plan['badge'], ENT_QUOTES, 'UTF-8') ?></span>
                <?php endif; ?>

                <h3 class="pricing-plan-name"><?= htmlspecialchars($plan['name'], ENT_QUOTES, 'UTF-8') ?></h3>
                <p class="pricing-plan-sub"><?= htmlspecialchars($plan['subtitle'], ENT_QUOTES, 'UTF-8') ?></p>

                <div class="pricing-price-wrap">
                  <span class="pricing-currency">৳</span>
                  <span class="pricing-amount"><?= htmlspecialchars($plan['price'], ENT_QUOTES, 'UTF-8') ?></span>
                  <span class="pricing-period"><?= htmlspecialchars($plan['period'], ENT_QUOTES, 'UTF-8') ?></span>
                </div>

                <ul class="pricing-feature-list">
                  <?php foreach ($plan['features'] as $feat): ?>
                    <li>
                      <i data-lucide="check" aria-hidden="true"></i>
                      <span><?= htmlspecialchars($feat, ENT_QUOTES, 'UTF-8') ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>

                <a href="tel:09610001234" class="<?= $plan['btn_class'] ?>">
                  <span><?= htmlspecialchars($plan['btn_text'], ENT_QUOTES, 'UTF-8') ?></span>
                  <i data-lucide="arrow-right" aria-hidden="true"></i>
                </a>
              </article>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- 2. Subscription Process (Timeline Style) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">খুবই সহজ ও দ্রুত</p>
            <h2 class="doctor-block-heading">কীভাবে সাবস্ক্রিপশন শুরু করবেন</h2>
            <p class="doctor-block-sub">মাত্র ৪টি পদক্ষেপে আপনার পরিবারের ডিজিটাল স্বাস্থ্য কার্ড সক্রিয় করুন</p>
          </div>

          <div class="booking-timeline">
            <?php foreach ($steps as $st): ?>
              <div class="timeline-step">
                <div class="timeline-node"><?= htmlspecialchars($st['step'], ENT_QUOTES, 'UTF-8') ?></div>
                <div class="timeline-text">
                  <h3><?= htmlspecialchars($st['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                  <p><?= htmlspecialchars($st['desc'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- 3. Corporate Plan Banner -->
        <div class="doctor-block">
          <div class="corporate-banner">
            <div class="corporate-banner-text">
              <h3>করপোরেট প্রতিষ্ঠানের জন্য কাস্টমাইজড প্ল্যান চান?</h3>
              <p>আপনার প্রতিষ্ঠানের কর্মীদের সুস্বাস্থ্য নিশ্চিতে বিশেষ করপোরেট ডিসকাউন্ট, হেলথ ক্যাম্প ও প্রিমিয়াম টেলিমেডিসিন প্যাকেজের ব্যবস্থা রয়েছে।</p>
            </div>
            <a href="tel:09610001234" class="corporate-banner-btn">
              <i data-lucide="building" aria-hidden="true"></i>
              <span>করপোরেট টিমের সাথে কথা বলুন</span>
              <i data-lucide="arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>

        <!-- 4. FAQ Section (Light Gray Border, Clean White Background) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">সাধারণ জিজ্ঞাসা</p>
            <h2 class="doctor-block-heading">সাবস্ক্রিপশন সম্পর্কিত সচরাচর প্রশ্নাবলী (FAQ)</h2>
            <p class="doctor-block-sub">সাবস্ক্রিপশন পলিসি ও সুবিধা নিয়ে আপনার মনের প্রশ্নের উত্তর জেনে নিন</p>
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
