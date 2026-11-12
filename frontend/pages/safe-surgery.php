<?php
if (!isset($baseUrl)) {
  $baseUrl = (strpos($_SERVER['REQUEST_URI'] ?? '', '/pages/') !== false) ? '..' : '.';
}

$surgeries = [
  [
    'title' => 'ল্যাপারোস্কপিক সার্জারি',
    'image' => $baseUrl . '/assets/images/surgery/laparoscopic.jpg',
  ],
  [
    'title' => 'অর্থোপেডিক ও জয়েন্ট রিপ্লেসমেন্ট',
    'image' => $baseUrl . '/assets/images/surgery/orthopedic-surgery.jpg',
  ],
  [
    'title' => 'গাইনি ও প্রসূতি সার্জারি',
    'image' => $baseUrl . '/assets/images/surgery/gynecology-surgery.jpg',
  ],
  [
    'title' => 'জেনারেল সার্জারি (হার্নিয়া, গলব্লাডার)',
    'image' => $baseUrl . '/assets/images/surgery/general-surgery.jpg',
  ],
  [
    'title' => 'ইউরোলজি ও কিডনি স্টোন সার্জারি',
    'image' => $baseUrl . '/assets/images/surgery/urology.jpg',
  ],
  [
    'title' => 'ইএনটি ও চক্ষু মাইক্রোসার্জারি',
    'image' => $baseUrl . '/assets/images/surgery/ent-surgery.jpg',
  ],
];

$surgerySteps = [
  [
    'step' => '১',
    'title' => 'সার্জন পরামর্শ ও রিপোর্ট যাচাই',
    'desc' => 'অভিজ্ঞ সার্জনের সাথে প্রাথমিক কনসাল্টেশন এবং আপনার পূর্ববর্তী স্বাস্থ্য রিপোর্ট নিখুঁত পর্যালোচনা।',
  ],
  [
    'step' => '২',
    'title' => 'প্রি-অপারেটিভ প্রস্তুতি',
    'desc' => 'অপারেশনের আগে প্রয়োজনীয় ফিটনেস টেস্ট, অ্যানেস্থেসিয়া মূল্যায়ন এবং তারিখ নির্ধারণ।',
  ],
  [
    'step' => '৩',
    'title' => 'আধুনিক ওটিতে নিরাপদ সার্জারি',
    'desc' => 'আন্তর্জাতিক মানের সংক্রমণমুক্ত মডুলার ওটিতে দক্ষ সার্জিক্যাল টিমের মাধ্যমে সফল অপারেশন।',
  ],
  [
    'step' => '৪',
    'title' => 'পোস্ট-অপারেটিভ কেয়ার ও ফলো-আপ',
    'desc' => 'হাসপাতালে সার্বক্ষণিক নার্সিং যত্ন এবং বাড়ি ফেরার পরও নিয়মিত ডাক্তারের ফলো-আপ পরামর্শ।',
  ],
];

$safetyStandards = [
  [
    'icon' => 'shield-check',
    'badge' => 'সংক্রমণমুক্ত পরিবেশ',
    'title' => 'আন্তর্জাতিক মানের মডুলার ওটি',
    'desc' => 'হেপা ফিল্টার ও আল্ট্রা-ক্লিন লেমিনার এয়ার ফ্লো যুক্ত ওটি, যা শতভাগ জীবাণুমুক্ত সার্জিক্যাল পরিবেশ নিশ্চিত করে।',
  ],
  [
    'icon' => 'award',
    'badge' => 'যাচাইকৃত বিশেষজ্ঞ',
    'title' => 'অভিজ্ঞ সার্জন ও অ্যানেস্থেটিস্ট টিম',
    'desc' => 'বিএমডিসি নিবন্ধিত ন্যূনতম ১০+ বছরের অভিজ্ঞতা সম্পন্ন সার্জন ও স্পেশালিস্ট ক্রিটিক্যাল কেয়ার টিমের তত্ত্বাবধান।',
  ],
  [
    'icon' => 'receipt',
    'badge' => 'স্বচ্ছ খরচ নীতি',
    'title' => 'ফিক্সড অল-ইনক্লুসিভ প্যাকেজ',
    'desc' => 'সার্জারি শুরুর আগেই ওষুধের খরচ, বেড চার্জ ও ডাক্তারের ফি মিলিয়ে স্বচ্ছ ও নির্ধারিত বাজেট—কোনো বাড়তি হিডেন চার্জ নেই।',
  ],
];

$faqs = [
  [
    'q' => 'সেফ সার্জারিতে ল্যাপারোস্কপিক পদ্ধতির বিশেষ সুবিধা কী?',
    'a' => 'ল্যাপারোস্কপিক সার্জারিতে বড় কোনো কাটাছেঁড়া করতে হয় না, মাত্র ছোট্ট কয়েকটি ছিদ্রের মাধ্যমে ক্যামেরা ও মাইক্রো যন্ত্র দিয়ে অপারেশন করা হয়। এর ফলে ব্যথা অনেক কম হয়, রক্তক্ষরণ কম থাকে এবং রোগী ১-২ দিনের মধ্যেই স্বাভাবিক জীবনে ফিরে যেতে পারেন।',
  ],
  [
    'q' => 'সার্জারির খরচ বা ফিক্সড প্যাকেজ কীভাবে নির্ধারণ করা হয়?',
    'a' => 'রোগীর রোগ নির্ণয়, অপারেশনের ধরন (ল্যাপারোস্কপিক বা ওপেন), ক্যাবিন বা বেডের ক্যাটাগরি এবং ডাক্তারের পরামর্শ অনুযায়ী অপারেশনের পূর্বেই একটি নির্দিষ্ট ফিক্সড প্যাকেজ নির্ধারণ করা হয়। ফলে বাজেট নিয়ে কোনো অনিশ্চয়তা থাকে না।',
  ],
  [
    'q' => 'অপারেশনের আগে কি সিনিয়র ডাক্তারের সেকেন্ড ওপিনিয়ন নেওয়া যাবে?',
    'a' => 'হ্যাঁ, অবশ্যই! সার্জারির সিদ্ধান্ত নেওয়ার পূর্বে আমাদের সিনিয়র বিশেষজ্ঞ সার্জন প্যানেল থেকে আপনার রিপোর্ট দেখিয়ে সম্পূর্ণ নিরপেক্ষ দ্বিতীয় মতামত (Second Opinion) নেওয়ার সুবিধা রয়েছে।',
  ],
  [
    'q' => 'অপারেশনের পর রোগী কতদিন পর স্বাভাবিক কাজে ফিরতে পারেন?',
    'a' => 'ল্যাপারোস্কপিক ও ডে-কেয়ার সার্জারির ক্ষেত্রে সাধারণত ২৪ থেকে ৪৮ ঘণ্টার মধ্যে রোগী বাড়ি ফিরতে পারেন এবং ৫-৭ দিনের মধ্যে স্বাভাবিক দৈনন্দিন কাজ শুরু করতে পারেন। বড় অপারেশনের ক্ষেত্রে সার্জন প্রয়োজনীয় সময় নির্ধারণ করে দেন।',
  ],
  [
    'q' => 'স্বাস্থ্য বীমা বা কিস্তিতে সার্জারির ফি পরিশোধের সুবিধা আছে কি?',
    'a' => 'হ্যাঁ, আমাদের পার্টনার হাসপাতালগুলোতে শীর্ষস্থানীয় হেলথ ইন্স্যুরেন্স কোম্পানির ক্যাশলেস ফ্যাসিলিটি রয়েছে এবং নির্দিষ্ট ক্রেডিট কার্ডে ০% সুদে ৩ থেকে ১২ মাসের সহজ ইএমআই (EMI) সুবিধা পাওয়া যায়।',
  ],
];
?>
<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0D9488">
  <title>সেফ সার্জারি — ইজি হেলথকেয়ার</title>
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
    <section class="doctor-hero" aria-labelledby="surgery-hero-title">
      <div class="doctor-hero-inner">
        <div class="doctor-hero-badge">
          <i data-lucide="shield-plus" aria-hidden="true"></i>
          <span>নিরাপদ, আধুনিক ও সাশ্রয়ী সার্জিক্যাল কেয়ার</span>
        </div>
        <h1 class="doctor-hero-title" id="surgery-hero-title">
          অভিজ্ঞ সার্জনের তত্ত্বাবধানে <span>নিরাপদ সার্জারি সেবা</span>
        </h1>
        <p class="doctor-hero-desc">
          আন্তর্জাতিক মানের মডুলার ওটি, উন্নত ল্যাপারোস্কপিক প্রযুক্তি এবং ফিক্সড বাজেটে বিশেষজ্ঞ সার্জিক্যাল কেয়ার।
        </p>

        <div class="ambulance-hero-actions">
          <a class="hero-search-btn" href="#surgery-form" style="padding: 11px 24px; font-size: 15px;">
            <span>ফ্রি সার্জারি পরামর্শ নিন</span>
            <i data-lucide="arrow-down" aria-hidden="true"></i>
          </a>
          <a class="ambulance-hero-btn" href="tel:09610001234">
            <i data-lucide="phone-call" aria-hidden="true"></i>
            <span>হটলাইনে কল দিন: ০৯৬১০০০১২৩৪</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Unified White Background Content Wrapper -->
    <div class="doctor-main-wrap" id="surgery-categories">
      <div class="doctor-content-container">

        <!-- 1. Surgery Categories Grid (6 Cards, 3 per row) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">বিশেষায়িত সার্জিক্যাল কেয়ার</p>
            <h2 class="doctor-block-heading">জনপ্রিয় সার্জারি ক্যাটাগরি</h2>
            <p class="doctor-block-sub">আপনার প্রয়োজনীয় চিকিৎসা অনুযায়ী বিশেষজ্ঞ সার্জনের পরামর্শ গ্রহণ করুন</p>
          </div>

          <div class="doctor-grid">
            <?php foreach ($surgeries as $item): ?>
              <article class="doctor-card">
                <div class="doctor-card-media">
                  <img src="<?= htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                </div>
                <div class="doctor-card-body">
                  <h3 class="doctor-card-title"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                  <a href="#surgery-form" class="doctor-card-btn">
                    <span>পরামর্শ নিন</span>
                    <i data-lucide="arrow-right" aria-hidden="true"></i>
                  </a>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- 2. Safe Surgery Process (Timeline Style) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">ধাপে ধাপে সেবা</p>
            <h2 class="doctor-block-heading">সেফ সার্জারি প্রসেস</h2>
            <p class="doctor-block-sub">রোগীর সুরক্ষা ও সর্বোচ্চ স্বস্তি নিশ্চিতে ৪টি সুনির্দিষ্ট ধাপ</p>
          </div>

          <div class="booking-timeline">
            <?php foreach ($surgerySteps as $step): ?>
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

        <!-- 3. Safety Standards (নিরাপত্তা স্তম্ভসমূহ) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">কেন আমাদের ওপর ভরসা রাখবেন</p>
            <h2 class="doctor-block-heading">আমাদের সেফ সার্জারি স্ট্যান্ডার্ডস</h2>
            <p class="doctor-block-sub">রোগীর সুস্থতা ও দ্রুত আরোগ্য লাভই আমাদের প্রথম অগ্রাধিকার</p>
          </div>

          <div class="coverage-grid">
            <?php foreach ($safetyStandards as $std): ?>
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

        <!-- 4. Surgery Consultation & Quote Form -->
        <div class="doctor-block" id="surgery-form">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">বিশেষজ্ঞ মতামত ও খরচ</p>
            <h2 class="doctor-block-heading">ফ্রি সার্জারি পরামর্শ ও খরচ যাচাই</h2>
            <p class="doctor-block-sub">আপনার তথ্য দিন, আমাদের সিনিয়র সার্জিক্যাল কেয়ার এক্সিকিউটিভ দ্রুত যোগাযোগ করবেন</p>
          </div>

          <div class="booking-form-wrap">
            <div class="booking-form-left">
              <h3>পরামর্শ ফর্ম পূরণ করুন</h3>
              <p>আপনার রোগের তথ্য ও রিপোর্ট শেয়ার করে নিখরচায় ডাক্তারের প্রাথমিক পরামর্শ নিন।</p>

              <form class="ambulance-form" onsubmit="event.preventDefault(); alert('আপনার সার্জারি পরামর্শ রিকোয়েস্ট গ্রহণ করা হয়েছে। আমাদের কেয়ার ম্যানেজার খুব দ্রুত আপনার নম্বরে যোগাযোগ করবেন।');">
                <div class="form-group">
                  <label for="patient-name">রোগীর পুরো নাম*</label>
                  <input type="text" id="patient-name" name="name" placeholder="নাম লিখুন" required>
                </div>

                <div class="form-group">
                  <label for="patient-phone">মোবাইল নম্বর*</label>
                  <input type="tel" id="patient-phone" name="phone" placeholder="০১৭xxxxxxxx" required>
                </div>

                <div class="form-group">
                  <label for="surgery-type">সার্জারির ধরন*</label>
                  <select id="surgery-type" name="surgery" required>
                    <option value="">নির্বাচন করুন</option>
                    <option value="laparoscopic">ল্যাপারোস্কপিক (গলব্লাডার / অ্যাপেন্ডিক্স)</option>
                    <option value="orthopedic">অর্থোপেডিক ও হাড়ভাঙা / জয়েন্ট</option>
                    <option value="gynecology">গাইনি ও প্রসূতি / সিজারিয়ান</option>
                    <option value="hernia">হার্নিয়া ও পাইলস / ফিস্টুলা</option>
                    <option value="urology">ইউরোলজি ও কিডনি স্টোন</option>
                    <option value="ent">ইএনটি / টনসিল / চোখ</option>
                    <option value="other">অন্যান্য সার্জারি</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="has-report">ডায়াগনস্টিক রিপোর্ট আছে কি?</label>
                  <select id="has-report" name="report">
                    <option value="yes">হ্যাঁ, সাম্প্রতিক রিপোর্ট আছে</option>
                    <option value="no">না, এখনো কোনো টেস্ট করা হয়নি</option>
                    <option value="consult">শুধু প্রাথমিক পরামর্শ চাই</option>
                  </select>
                </div>

                <div class="form-group form-full">
                  <label for="symptoms">রোগীর বর্তমান উপসর্গ বা সমস্যা</label>
                  <textarea id="symptoms" name="symptoms" rows="3" placeholder="রোগীর উপসর্গ বা কোনো জিজ্ঞাসা থাকলে সংক্ষেপে লিখুন..."></textarea>
                </div>

                <div class="form-group form-full">
                  <button type="submit" class="surgery-submit-btn">
                    <i data-lucide="send" aria-hidden="true"></i>
                    <span>ফ্রি সার্জারি পরামর্শ রিকোয়েস্ট পাঠান</span>
                  </button>
                </div>
              </form>
            </div>

            <!-- Sidebar / Surgery Care Hotline -->
            <div class="booking-form-sidebar">
              <div class="quick-call-box">
                <div class="siren-icon" style="background: #f3e8ff; color: var(--health-primary);">
                  <i data-lucide="stethoscope" aria-hidden="true"></i>
                </div>
                <h4>জরুরি সার্জারি হেল্পলাইন</h4>
                <p>খরচ, সার্জন শিডিউল বা দ্রুত ভর্তির প্রয়োজনে সরাসরি আমাদের সার্জিক্যাল ম্যানেজারের সাথে কথা বলুন।</p>
                <a class="quick-call-number" href="tel:09610001234" style="color: var(--health-primary); background: #fbf9ff; border-color: #d8cde9;">
                  ০৯৬১০০০১২৩৪
                </a>
                <p class="text-xs text-gray-500 m-0">সকাল ৮টা থেকে রাত ১১টা</p>
              </div>

              <div class="sidebar-features">
                <h4>ইজি সেফ সার্জারির বিশেষত্ব</h4>
                <ul class="sidebar-feature-list">
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> সেকেন্ড ওপিনিয়ন সুবিধা</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> ফিক্সড প্যাকেজ গ্যারান্টি</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> ০% সুদে সহজ ইএমআই সুবিধা</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> পোস্ট-অপারেটিভ ফলো-আপ ফ্রি</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- 5. FAQ Section (Light Gray Border, Clean White Background) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">সাধারণ জিজ্ঞাসা</p>
            <h2 class="doctor-block-heading">সার্জারি সম্পর্কিত সচরাচর প্রশ্নাবলী (FAQ)</h2>
            <p class="doctor-block-sub">অপারেশন প্রস্তুতি, খরচ ও রিকভারি নিয়ে আপনার মনের সাধারণ জিজ্ঞাসা</p>
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
