<?php
if (!isset($baseUrl)) {
  $baseUrl = (strpos($_SERVER['REQUEST_URI'] ?? '', '/pages/') !== false) ? '..' : '.';
}

$plans = [
  [
    'name' => 'Basic Care',
    'subtitle' => 'Ideal for individual personal health protection',
    'price' => '499',
    'period' => 'BDT / Month',
    'featured' => false,
    'badge' => '',
    'btn_text' => 'Get Basic Plan',
    'btn_class' => 'pricing-card-btn pricing-card-btn-outline',
    'features' => [
      '1 Free Specialist Doctor Video Consultation per month',
      '15% Flat Discount on diagnostic and lab tests',
      'Digital prescription and cloud health record storage',
      '24/7 Dedicated online health chat support',
      '5% Extra discount on partner pharmacy medicine orders',
    ],
  ],
  [
    'name' => 'Family Protect',
    'subtitle' => 'Comprehensive healthcare for up to 4 family members',
    'price' => '1,199',
    'period' => 'BDT / Month',
    'featured' => true,
    'badge' => 'Most Popular',
    'btn_text' => 'Get Family Plan',
    'btn_class' => 'pricing-card-btn',
    'features' => [
      'Full coverage for up to 4 family members',
      '4 Free Specialist Doctor Video Consultations per month',
      '25% Discount on all diagnostic and pathology tests',
      '1 Free Annual Full Body routine health checkup',
      'Free in-home blood and lab sample collection',
      '20% Special discount on emergency ambulance services',
    ],
  ],
  [
    'name' => 'Premium Gold Care',
    'subtitle' => 'Specialized care for seniors & chronic condition management',
    'price' => '2,499',
    'period' => 'BDT / Month',
    'featured' => false,
    'badge' => '',
    'btn_text' => 'Get Premium Plan',
    'btn_class' => 'pricing-card-btn pricing-card-btn-outline',
    'features' => [
      'Unlimited General Physician video consultations',
      '2 Senior Specialist home visits or video consults per month',
      '35% Maximum discount on diagnostics & tests',
      'Dedicated 24/7 Personal Care Manager assigned',
      '1 Free Emergency Ambulance transfer per year',
      'Free monthly in-home blood glucose & BP monitoring visit',
    ],
  ],
];

$steps = [
  [
    'step' => '1',
    'title' => 'Select Your Plan',
    'desc' => 'Choose the subscription package tailored to your individual or family healthcare needs.',
  ],
  [
    'step' => '2',
    'title' => 'Secure Digital Payment',
    'desc' => 'Pay securely via bKash, Nagad, Rocket, or any major credit/debit bank card.',
  ],
  [
    'step' => '3',
    'title' => 'Instant Membership Card',
    'desc' => 'Digital membership card and member ID are activated instantly upon payment confirmation.',
  ],
  [
    'step' => '4',
    'title' => 'Enjoy Healthcare Benefits',
    'desc' => 'Book free doctor consultations and enjoy exclusive discounts across our partner network.',
  ],
];

$faqs = [
  [
    'q' => 'What benefits are guaranteed with an Easy Healthcare subscription plan?',
    'a' => 'Depending on your selected plan, you receive free monthly specialist doctor video consultations, up to 35% discount on diagnostic lab tests, free home sample collections, and 24/7 clinical guidance.',
  ],
  [
    'q' => 'How do I add my family members under the Family Protect plan?',
    'a' => 'After completing your subscription, log in to your Patient Portal, click "Family Members", and add your spouse, children, or parents with their name and age in seconds.',
  ],
  [
    'q' => 'How can I redeem diagnostic discounts at partner clinics and laboratories?',
    'a' => 'Simply present your Easy Healthcare Digital Membership ID or registered mobile number at any partner diagnostic center, and discounts will be automatically applied to your bill.',
  ],
  [
    'q' => 'Can I upgrade or cancel my subscription plan at any time?',
    'a' => 'Yes, you can upgrade your plan anytime directly from your dashboard or cancel renewal before your billing cycle without any hidden cancellation fees.',
  ],
  [
    'q' => 'Do you provide customized corporate health benefit packages for companies?',
    'a' => 'Yes, we provide tailored corporate health plans, employee telemedicine access, and on-site wellness checkup camps for corporate organizations. Contact our corporate team for details.',
  ],
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0D9488">
  <title>Subscription Plans — Easy Healthcare</title>
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
          <span>Affordable Family Healthcare Protection</span>
        </div>
        <h1 class="doctor-hero-title" id="sub-hero-title">
          Smart Health Subscriptions <span>For You & Your Family</span>
        </h1>
        <p class="doctor-hero-desc">
          Free specialist consultations, exclusive diagnostic discounts, and emergency ambulance coverage—all in one subscription.
        </p>

        <div class="ambulance-hero-actions">
          <a class="hero-search-btn" href="#plans-section" style="padding: 11px 24px; font-size: 15px;">
            <span>Explore Plans</span>
            <i data-lucide="arrow-down" aria-hidden="true"></i>
          </a>
          <a class="ambulance-hero-btn" href="tel:09610001234">
            <i data-lucide="phone-call" aria-hidden="true"></i>
            <span>Speak with an Advisor: 09610001234</span>
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
            <p class="doctor-block-eyebrow">Choose Your Plan</p>
            <h2 class="doctor-block-heading">Monthly Healthcare Subscription Plans</h2>
            <p class="doctor-block-sub">Transparent pricing with zero hidden charges—select the plan tailored to your health needs</p>
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
            <p class="doctor-block-eyebrow">Simple & Seamless</p>
            <h2 class="doctor-block-heading">How to Get Started</h2>
            <p class="doctor-block-sub">Just 4 quick steps to activate your family's digital health membership card</p>
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
              <h3>Looking for Customized Corporate Health Benefits?</h3>
              <p>Support your team with tailored corporate health coverage, executive health checkup camps, and 24/7 dedicated employee telemedicine access.</p>
            </div>
            <a href="tel:09610001234" class="corporate-banner-btn">
              <i data-lucide="building" aria-hidden="true"></i>
              <span>Speak with Corporate Team</span>
              <i data-lucide="arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>

        <!-- 4. FAQ Section (Light Gray Border, Clean White Background) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">Common Inquiries</p>
            <h2 class="doctor-block-heading">Frequently Asked Questions (FAQ)</h2>
            <p class="doctor-block-sub">Everything you need to know about subscription terms, coverage, and benefits</p>
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
