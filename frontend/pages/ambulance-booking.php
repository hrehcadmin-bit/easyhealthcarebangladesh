<?php
if (!isset($baseUrl)) {
  $baseUrl = (strpos($_SERVER['REQUEST_URI'] ?? '', '/pages/') !== false) ? '..' : '.';
}

$ambulanceTypes = [
  [
    'title' => 'AC Ambulance',
    'image' => $baseUrl . '/assets/images/ambulance/ac-ambulance.jpg',
  ],
  [
    'title' => 'Non-AC Ambulance',
    'image' => $baseUrl . '/assets/images/ambulance/non-ac.jpg',
  ],
  [
    'title' => 'ICU / CCU Life Support',
    'image' => $baseUrl . '/assets/images/ambulance/icu-ambulance.jpg',
  ],
  [
    'title' => 'Freezer Mortuary Van',
    'image' => $baseUrl . '/assets/images/ambulance/freezer-ambulance.jpg',
  ],
  [
    'title' => 'NICU Neonatal Ambulance',
    'image' => $baseUrl . '/assets/images/ambulance/nicu-ambulance.jpg',
  ],
  [
    'title' => 'Air Ambulance (Helicopter)',
    'image' => $baseUrl . '/assets/images/ambulance/air-ambulance.jpg',
  ],
];

$bookingSteps = [
  [
    'step' => '1',
    'title' => 'Location & Fleet Selection',
    'desc' => 'Select the ambulance type best suited for the patient’s condition and current location.',
  ],
  [
    'step' => '2',
    'title' => 'Call Hotline or Submit Form',
    'desc' => 'Call our 24/7 emergency dispatch directly or submit your details in the online form below.',
  ],
  [
    'step' => '3',
    'title' => 'Nearest Unit Dispatched',
    'desc' => 'The closest emergency unit departs immediately and the driver’s contact is shared with you.',
  ],
  [
    'step' => '4',
    'title' => 'Safe Hospital Transfer',
    'desc' => 'Certified paramedics navigate the fastest route to safely transfer the patient to destination hospital.',
  ],
];

$coverageZones = [
  [
    'icon' => 'map-pin',
    'badge' => '10-20 Min Response',
    'title' => 'Dhaka City Metro Zone',
    'desc' => 'Standby units covering Dhanmondi, Gulshan, Banani, Uttara, Mirpur, Old Dhaka, Mohakhali, and all surrounding areas.',
  ],
  [
    'icon' => 'building-2',
    'badge' => 'Divisional Hotline',
    'title' => 'Divisional Headquarters',
    'desc' => 'Regional rapid response network active in Chattogram, Rajshahi, Khulna, Sylhet, Barishal, Rangpur, and Mymensingh.',
  ],
  [
    'icon' => 'navigation',
    'badge' => 'All Bangladesh',
    'title' => 'Inter-District Long Transit',
    'desc' => 'Specialized long-distance transit bringing critical patients safely to Dhaka from any district or upazila.',
  ],
];

$faqs = [
  [
    'q' => 'How quickly will the ambulance arrive after placing an emergency request?',
    'a' => 'Within the Dhaka Metropolitan area, our nearest standby ambulance typically reaches you within 10 to 20 minutes. For long-distance inter-district transfers, dispatch is coordinated and confirmed immediately.',
  ],
  [
    'q' => 'Does the ICU ambulance include a paramedic or doctor?',
    'a' => 'Yes, every ICU and CCU life support ambulance is accompanied by a certified emergency paramedic. A registered emergency physician can also be assigned upon request.',
  ],
  [
    'q' => 'How are ambulance fares calculated?',
    'a' => 'Fares are completely transparent based on the ambulance category (AC, Non-AC, ICU, or Freezer) and travel distance. We operate with zero hidden charges and government-standard fair pricing.',
  ],
  [
    'q' => 'Can patients be safely transferred to Dhaka from distant districts?',
    'a' => 'Yes, our long-distance inter-district fleet is equipped with continuous central oxygen, cardiac monitors, and shock-absorbing suspension to ensure patient stability during inter-city transit.',
  ],
  [
    'q' => 'How long can bodies be preserved in freezer ambulances?',
    'a' => 'Our modern mortuary freezer vans maintain sub-zero temperatures reliably for extended durations, ensuring respectful and dignified transport across any district in Bangladesh.',
  ],
  [
    'q' => 'Are central oxygen and emergency vitals monitors active during transit?',
    'a' => 'Yes, all AC and ICU ambulances feature central oxygen lines, suction machines, and pulse oximeters, while ICU units include mechanical ventilators and multi-parameter cardiac monitors.',
  ],
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0D9488">
  <title>Book Ambulance — Easy Healthcare</title>
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
          <span>24/7 Rapid Emergency Ambulance Network</span>
        </div>
        <h1 class="doctor-hero-title" id="ambulance-hero-title">
          Immediate & Trusted <span>Emergency Ambulance Service</span>
        </h1>
        <p class="doctor-hero-desc">
          Modern life support, ICU, and AC ambulance network on standby across Dhaka and all 64 districts of Bangladesh.
        </p>

        <div class="ambulance-hero-actions">
          <a class="ambulance-hero-hotline" href="tel:09610001234">
            <i data-lucide="phone-call" aria-hidden="true"></i>
            <span>Hotline: 09610001234</span>
          </a>
          <a class="ambulance-hero-btn" href="#booking-form">
            <span>Online Booking Form</span>
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
            <p class="doctor-block-eyebrow">Our Fleet</p>
            <h2 class="doctor-block-heading">Ambulance Categories & Services</h2>
            <p class="doctor-block-sub">Choose the ideal medical transit unit tailored to the patient’s condition</p>
          </div>

          <div class="doctor-grid">
            <?php foreach ($ambulanceTypes as $item): ?>
              <article class="doctor-card ambulance-card">
                <div class="doctor-card-media">
                  <img src="<?= htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                </div>
                <div class="doctor-card-body">
                  <h3 class="doctor-card-title"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                  <a href="#booking-form" class="doctor-card-btn">
                    <span>Book Now</span>
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
            <p class="doctor-block-eyebrow">Fast & Organized</p>
            <h2 class="doctor-block-heading">Ambulance Booking Process</h2>
            <p class="doctor-block-sub">4 quick steps to have an emergency vehicle at your exact location</p>
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
            <p class="doctor-block-eyebrow">Nationwide Network</p>
            <h2 class="doctor-block-heading">Our Area Coverage</h2>
            <p class="doctor-block-sub">24/7 dedicated coverage across Dhaka Metro and all districts of Bangladesh</p>
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
            <p class="doctor-block-eyebrow">Instant Booking</p>
            <h2 class="doctor-block-heading">Emergency Ambulance Booking Form</h2>
            <p class="doctor-block-sub">Submit details below and our emergency dispatch team will contact you immediately</p>
          </div>

          <div class="booking-form-wrap">
            <div class="booking-form-left">
              <h3>Online Booking Request</h3>
              <p>Please provide accurate pickup details for the fastest emergency dispatch.</p>

              <form class="ambulance-form" onsubmit="event.preventDefault(); alert('Your booking request has been received. Our dispatch coordinator is calling your phone number now.');">
                <div class="form-group">
                  <label for="pickup-loc">Pickup Location (Patient’s Current Address)*</label>
                  <input type="text" id="pickup-loc" name="pickup" placeholder="House/Road, Area, City..." required>
                </div>

                <div class="form-group">
                  <label for="drop-loc">Destination (Hospital or Address)*</label>
                  <input type="text" id="drop-loc" name="drop" placeholder="Hospital name or destination address..." required>
                </div>

                <div class="form-group">
                  <label for="amb-type">Ambulance Type*</label>
                  <select id="amb-type" name="type" required>
                    <option value="">Select Ambulance Type</option>
                    <option value="ac">AC Ambulance</option>
                    <option value="non-ac">Non-AC Ambulance</option>
                    <option value="icu">ICU / CCU Life Support</option>
                    <option value="freezer">Freezer Mortuary Van</option>
                    <option value="nicu">NICU Neonatal Ambulance</option>
                    <option value="air">Air Ambulance (Helicopter)</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="patient-status">Patient’s Current Condition</label>
                  <select id="patient-status" name="status">
                    <option value="normal">Standard Medical Transfer</option>
                    <option value="oxygen">Oxygen Support Required</option>
                    <option value="critical">Critical Condition (Intensive Care)</option>
                    <option value="wheelchair">Stretcher / Wheelchair Required</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="contact-name">Contact Person’s Name*</label>
                  <input type="text" id="contact-name" name="name" placeholder="Enter your full name" required>
                </div>

                <div class="form-group">
                  <label for="contact-phone">Emergency Phone Number*</label>
                  <input type="tel" id="contact-phone" name="phone" placeholder="017xxxxxxxx" required>
                </div>

                <div class="form-group form-full">
                  <button type="submit" class="ambulance-submit-btn">
                    <i data-lucide="send" aria-hidden="true"></i>
                    <span>Send Emergency Booking Request</span>
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
                <h4>Prefer Direct Phone Booking?</h4>
                <p>For immediate emergency response, call our 24/7 hotline directly to dispatch an ambulance now.</p>
                <a class="quick-call-number" href="tel:09610001234">
                  09610001234
                </a>
                <p class="text-xs text-gray-500 m-0">Available 24 Hours / 7 Days</p>
              </div>

              <div class="sidebar-features">
                <h4>Easy Ambulance Highlights</h4>
                <ul class="sidebar-feature-list">
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> GPS Live Tracking System</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> Continuous Central Oxygen</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> BMDC Registered Medical Backup</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> Standard Transparent Pricing</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- 5. FAQ Section (Light Gray Border, Clean White Background) -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">Common Questions</p>
            <h2 class="doctor-block-heading">Frequently Asked Questions (FAQ)</h2>
            <p class="doctor-block-sub">Essential details about emergency ambulance dispatch and hospital transfers</p>
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
