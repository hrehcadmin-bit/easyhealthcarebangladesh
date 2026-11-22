<?php
if (!isset($baseUrl)) {
  $baseUrl = (strpos($_SERVER['REQUEST_URI'] ?? '', '/pages/') !== false) ? '..' : '.';
}

$plans = [
  [
    'id' => 'starter-care',
    'name' => 'Starter Care',
    'subtitle' => 'Essential primary telemedicine & diagnostic protection for individuals',
    'monthly_price' => '299',
    'yearly_price' => '2,999',
    'monthly_period' => 'BDT / Month',
    'yearly_period' => 'BDT / Year',
    'yearly_savings' => 'Save ৳589 / Year (16% Off)',
    'featured' => false,
    'badge' => '',
    'btn_text' => 'Get Starter Plan',
    'btn_class' => 'pricing-card-btn pricing-card-btn-outline',
    'features' => [
      '1 Free Specialist Doctor Video Consultation per month',
      '10% Flat Discount on all diagnostic & lab tests',
      'Digital prescription and cloud medical record storage',
      '24/7 Dedicated health helpline & chat support',
      '5% Special discount on partner pharmacy medicine orders',
    ],
  ],
  [
    'id' => 'individual-pro',
    'name' => 'Individual Pro',
    'subtitle' => 'Comprehensive health coverage for active individuals & professionals',
    'monthly_price' => '599',
    'yearly_price' => '5,990',
    'monthly_period' => 'BDT / Month',
    'yearly_period' => 'BDT / Year',
    'yearly_savings' => 'Save ৳1,198 / Year (17% Off)',
    'featured' => false,
    'badge' => '',
    'btn_text' => 'Get Pro Plan',
    'btn_class' => 'pricing-card-btn pricing-card-btn-outline',
    'features' => [
      '2 Free Specialist Doctor Video Consultations per month',
      '20% Flat Discount on all pathology & imaging investigations',
      'Free in-home blood & pathology sample collection',
      'Continuous health profile tracking & vitals log',
      '10% Special discount on partner pharmacy medicine orders',
    ],
  ],
  [
    'id' => 'family-shield',
    'name' => 'Family Shield',
    'subtitle' => 'Ideal protection designed for couples & small families (up to 3 members)',
    'monthly_price' => '1,199',
    'yearly_price' => '11,990',
    'monthly_period' => 'BDT / Month',
    'yearly_period' => 'BDT / Year',
    'yearly_savings' => 'Save ৳2,398 / Year (17% Off)',
    'featured' => false,
    'badge' => '',
    'btn_text' => 'Get Shield Plan',
    'btn_class' => 'pricing-card-btn pricing-card-btn-outline',
    'features' => [
      'Full health coverage for up to 3 family members',
      '4 Free Specialist Doctor Video Consultations per month',
      '25% Flat Discount on all diagnostic and lab tests',
      'Free unlimited home sample collections for all members',
      '15% Special discount on emergency ambulance service',
      'Dedicated family health records dashboard',
    ],
  ],
  [
    'id' => 'family-comprehensive',
    'name' => 'Family Comprehensive',
    'subtitle' => 'All-inclusive protection for complete families (up to 5 members)',
    'monthly_price' => '1,999',
    'yearly_price' => '19,990',
    'monthly_period' => 'BDT / Month',
    'yearly_period' => 'BDT / Year',
    'yearly_savings' => 'Save ৳3,998 / Year (17% Off)',
    'featured' => true,
    'badge' => 'Most Popular',
    'btn_text' => 'Get Family Plan',
    'btn_class' => 'pricing-card-btn',
    'features' => [
      'Full coverage for up to 5 family members',
      '6 Free Specialist Doctor Video Consultations per month',
      '30% Flat Discount on all diagnostic & radiology tests',
      '1 Free Annual Routine Full Body health checkup',
      'Free priority home sample collections',
      '25% Special discount on emergency ambulance booking',
    ],
  ],
  [
    'id' => 'senior-care',
    'name' => 'Senior Citizen Care',
    'subtitle' => 'Specialized elder healthcare & chronic disease management for parents',
    'monthly_price' => '2,499',
    'yearly_price' => '24,990',
    'monthly_period' => 'BDT / Month',
    'yearly_period' => 'BDT / Year',
    'yearly_savings' => 'Save ৳4,998 / Year (17% Off)',
    'featured' => false,
    'badge' => 'Elder Care',
    'btn_text' => 'Get Senior Plan',
    'btn_class' => 'pricing-card-btn pricing-card-btn-outline',
    'features' => [
      'Dedicated chronic illness management (Diabetes, Cardiac, BP)',
      '2 Senior Specialist home visits or video consults per month',
      '35% Maximum discount on lab tests, MRI, and CT scans',
      'Free monthly in-home blood glucose & BP vitals checkup',
      'Dedicated 24/7 Personal Health Coordinator assigned',
      'Priority emergency ambulance dispatch',
    ],
  ],
  [
    'id' => 'executive-platinum',
    'name' => 'Executive Platinum',
    'subtitle' => 'VIP concierge healthcare & unlimited medical support for executives',
    'monthly_price' => '3,999',
    'yearly_price' => '39,990',
    'monthly_period' => 'BDT / Month',
    'yearly_period' => 'BDT / Year',
    'yearly_savings' => 'Save ৳7,998 / Year (17% Off)',
    'featured' => true,
    'badge' => 'VIP Platinum',
    'btn_text' => 'Get VIP Plan',
    'btn_class' => 'pricing-card-btn',
    'features' => [
      'Unlimited 24/7 General Physician video consultations',
      '4 Super-Specialist Doctor video consultations per month',
      '40% Maximum discount on diagnostics & hospital partner services',
      '1 Free Emergency Ambulance transfer per year',
      'Dedicated Senior Doctor Concierge & VIP hospital admission support',
      'Annual comprehensive Executive Master Health Checkup',
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
    'a' => 'Depending on your selected plan, you receive free monthly specialist doctor video consultations, up to 40% discount on diagnostic lab tests, free home sample collections, and 24/7 clinical guidance.',
  ],
  [
    'q' => 'How does the Monthly vs. Yearly billing switcher work?',
    'a' => 'You can toggle between Monthly and Yearly payment options anytime using the switcher. Choosing Yearly billing grants you up to 20% discount (saving up to 2 months of subscription cost).',
  ],
  [
    'q' => 'How do I add my family members under the Family plans?',
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
  <meta name="theme-color" content="#084463">
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
          <a class="ambulance-hero-btn" href="tel:09611833596">
            <i data-lucide="phone-call" aria-hidden="true"></i>
            <span>Speak with an Advisor: +880 9611-833596</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Unified White Background Content Wrapper -->
    <div class="doctor-main-wrap" id="plans-section">
      <div class="doctor-content-container">

        <!-- 1. Pricing Plans Grid (6 Cards, 5px radius, Header Gradient) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">Choose Your Plan</p>
            <h2 class="doctor-block-heading">Monthly Healthcare Subscription Plans</h2>
            <p class="doctor-block-sub">Transparent pricing with zero hidden charges—select the plan tailored to your health needs</p>

            <!-- Monthly / Yearly Billing Switcher -->
            <div class="pricing-billing-switch-wrap">
              <span class="billing-switch-label active" id="billing-label-monthly">Monthly Billing</span>
              <button type="button" class="billing-switch-toggle" id="billingToggle" role="switch" aria-checked="false" aria-label="Toggle Monthly and Yearly pricing">
                <span class="billing-switch-slider"></span>
              </button>
              <span class="billing-switch-label" id="billing-label-yearly">
                Yearly Billing
                <span class="billing-save-badge">Save up to 20%</span>
              </span>
            </div>
          </div>

          <div class="pricing-grid">
            <?php foreach ($plans as $plan): ?>
              <article class="pricing-card <?= $plan['featured'] ? 'pricing-card-featured' : '' ?>">
                <?php if (!empty($plan['badge'])): ?>
                  <span class="pricing-featured-badge"><?= htmlspecialchars($plan['badge'], ENT_QUOTES, 'UTF-8') ?></span>
                <?php endif; ?>

                <h3 class="pricing-plan-name"><?= htmlspecialchars($plan['name'], ENT_QUOTES, 'UTF-8') ?></h3>
                <p class="pricing-plan-sub"><?= htmlspecialchars($plan['subtitle'], ENT_QUOTES, 'UTF-8') ?></p>

                <div class="pricing-price-wrap">
                  <span class="pricing-currency">৳</span>
                  <span class="pricing-amount" data-monthly="<?= htmlspecialchars($plan['monthly_price'], ENT_QUOTES, 'UTF-8') ?>" data-yearly="<?= htmlspecialchars($plan['yearly_price'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($plan['monthly_price'], ENT_QUOTES, 'UTF-8') ?></span>
                  <span class="pricing-period" data-monthly="<?= htmlspecialchars($plan['monthly_period'], ENT_QUOTES, 'UTF-8') ?>" data-yearly="<?= htmlspecialchars($plan['yearly_period'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($plan['monthly_period'], ENT_QUOTES, 'UTF-8') ?></span>
                </div>

                <div class="pricing-yearly-note" style="display: none;">
                  <span class="yearly-savings-text"><?= htmlspecialchars($plan['yearly_savings'], ENT_QUOTES, 'UTF-8') ?></span>
                </div>

                <ul class="pricing-feature-list">
                  <?php foreach ($plan['features'] as $feat): ?>
                    <li>
                      <i data-lucide="check" aria-hidden="true"></i>
                      <span><?= htmlspecialchars($feat, ENT_QUOTES, 'UTF-8') ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>

                <a href="tel:09611833596" class="<?= $plan['btn_class'] ?>">
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
            <a href="tel:09611833596" class="corporate-banner-btn">
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

  <!-- Switcher JavaScript -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const toggleBtn = document.getElementById('billingToggle');
      const labelMonthly = document.getElementById('billing-label-monthly');
      const labelYearly = document.getElementById('billing-label-yearly');
      const amounts = document.querySelectorAll('.pricing-amount');
      const periods = document.querySelectorAll('.pricing-period');
      const yearlyNotes = document.querySelectorAll('.pricing-yearly-note');

      function setBillingMode(isYearly) {
        if (!toggleBtn) return;
        toggleBtn.classList.toggle('is-yearly', isYearly);
        toggleBtn.setAttribute('aria-checked', String(isYearly));

        if (labelMonthly) labelMonthly.classList.toggle('active', !isYearly);
        if (labelYearly) labelYearly.classList.toggle('active', isYearly);

        amounts.forEach(function (el) {
          const val = isYearly ? el.getAttribute('data-yearly') : el.getAttribute('data-monthly');
          if (val) el.textContent = val;
        });

        periods.forEach(function (el) {
          const val = isYearly ? el.getAttribute('data-yearly') : el.getAttribute('data-monthly');
          if (val) el.textContent = val;
        });

        yearlyNotes.forEach(function (el) {
          el.style.display = isYearly ? 'block' : 'none';
        });
      }

      if (toggleBtn) {
        toggleBtn.addEventListener('click', function () {
          const isCurrentlyYearly = toggleBtn.classList.contains('is-yearly');
          setBillingMode(!isCurrentlyYearly);
        });
      }

      if (labelMonthly) {
        labelMonthly.addEventListener('click', function () {
          setBillingMode(false);
        });
      }

      if (labelYearly) {
        labelYearly.addEventListener('click', function () {
          setBillingMode(true);
        });
      }
    });
  </script>
</body>
</html>
