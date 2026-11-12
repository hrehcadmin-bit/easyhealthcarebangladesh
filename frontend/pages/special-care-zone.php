<?php
if (!isset($baseUrl)) {
  $baseUrl = (strpos($_SERVER['REQUEST_URI'] ?? '', '/pages/') !== false) ? '..' : '.';
}

$services = [
  [
    'title' => 'Men\'s Care',
    'image' => $baseUrl . '/assets/images/special-care/men-care.jpg',
  ],
  [
    'title' => 'Women\'s Care',
    'image' => $baseUrl . '/assets/images/special-care/women-care.jpg',
  ],
  [
    'title' => 'Mother & Child Care',
    'image' => $baseUrl . '/assets/images/special-care/mother-child.jpg',
  ],
  [
    'title' => 'Cancer Care',
    'image' => $baseUrl . '/assets/images/special-care/cancer-care.jpg',
  ],
  [
    'title' => 'Diabetes Care',
    'image' => $baseUrl . '/assets/images/special-care/diabetes-care.jpg',
  ],
  [
    'title' => 'Mental Health Care',
    'image' => $baseUrl . '/assets/images/special-care/mental-health.jpg',
  ],
  [
    'title' => 'Heart Care',
    'image' => $baseUrl . '/assets/images/special-care/heart-care.jpg',
  ],
  [
    'title' => 'Skin & Dermatology Care',
    'image' => $baseUrl . '/assets/images/special-care/skin-care.jpg',
  ],
  [
    'title' => 'Fertility Care',
    'image' => $baseUrl . '/assets/images/special-care/fertility-care.jpg',
  ],
  [
    'title' => 'In-Home Care Service',
    'image' => $baseUrl . '/assets/images/special-care/home-care.jpg',
  ],
  [
    'title' => 'Patient Advocacy Service',
    'image' => $baseUrl . '/assets/images/special-care/patient-advocacy.jpg',
  ],
  [
    'title' => 'Smart Home Care',
    'image' => $baseUrl . '/assets/images/special-care/smart-homecare.jpg',
  ],
  [
    'title' => 'Patient Attendant Service',
    'image' => $baseUrl . '/assets/images/special-care/patient-attendant.jpg',
  ],
  [
    'title' => 'Senior Citizen Care',
    'image' => $baseUrl . '/assets/images/special-care/elderly-care.jpg',
  ],
  [
    'title' => 'Physiotherapy & Rehab',
    'image' => $baseUrl . '/assets/images/special-care/physiotherapy.jpg',
  ],
  [
    'title' => 'Palliative Care Support',
    'image' => $baseUrl . '/assets/images/special-care/palliative-care.jpg',
  ],
];

$careSteps = [
  [
    'step' => '1',
    'title' => 'Select Required Care',
    'desc' => 'Choose the specialized healthcare service best suited for your condition or family member.',
  ],
  [
    'step' => '2',
    'title' => 'Clinical Assessment',
    'desc' => 'Our medical team evaluates medical history, prior prescriptions, and physical conditions.',
  ],
  [
    'step' => '3',
    'title' => 'Customized Care Plan',
    'desc' => 'A personalized care pathway for home nursing, therapy, or telemetry monitoring is designed.',
  ],
  [
    'step' => '4',
    'title' => 'Monitoring & Recovery',
    'desc' => 'Continuous monitoring by care managers and doctors ensures sustainable health improvement.',
  ],
];

$careStandards = [
  [
    'icon' => 'stethoscope',
    'badge' => 'Multidisciplinary Board',
    'title' => 'Senior Specialist Supervision',
    'desc' => 'Active clinical oversight from BMDC-registered specialist physicians across all care categories.',
  ],
  [
    'icon' => 'home',
    'badge' => 'Hospital-Grade Care',
    'title' => 'Clinical Quality at Home',
    'desc' => 'Certified male/female nurses, licensed physiotherapists, and trained caregivers delivering care at home.',
  ],
  [
    'icon' => 'user-check',
    'badge' => '24/7 Dedicated Care',
    'title' => 'Personal Care Coordinator',
    'desc' => 'A dedicated care manager to organize doctor visits, medicine schedules, and diagnostic test bookings.',
  ],
];

$faqs = [
  [
    'q' => 'Can Special Care Zone services be delivered in the comfort of home?',
    'a' => 'Yes, most of our specialized programs—including home nursing, patient attendants, physiotherapy, diabetes follow-ups, and smart vitals monitoring—are delivered directly at the patient’s home.',
  ],
  [
    'q' => 'What are the distinct responsibilities of patient attendants vs. home nurses?',
    'a' => 'Trained patient attendants assist with personal hygiene, timely medication reminders, mobility, and basic vitals. Registered diploma nurses handle IV/IM injections, saline, surgical dressing, catheter care, and advanced post-op nursing.',
  ],
  [
    'q' => 'What specialized support is available for oncology and palliative patients?',
    'a' => 'For cancer and chronic palliative patients, we provide active pain management, clinical nutrition counseling, psychological therapy, bedsore prevention, and 24/7 emergency paramedic backup.',
  ],
  [
    'q' => 'How is patient privacy protected during mental health consultations?',
    'a' => 'Every psychotherapy and counseling session strictly complies with international medical ethics and confidentiality guidelines. Medical data is never disclosed without explicit patient consent.',
  ],
  [
    'q' => 'Are attendant services available for flexible or part-time shifts?',
    'a' => 'Yes, we offer 12-hour day/night shifts, 24-hour full-time live-in caregiver options, as well as weekly and monthly contracts adapted to your family’s schedule.',
  ],
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0D9488">
  <title>Special Care Zone — Easy Healthcare</title>
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
          <span>Specialized Health & Homecare Solutions</span>
        </div>
        <h1 class="doctor-hero-title" id="care-hero-title">
          Special Care Zone <span>For You & Your Family</span>
        </h1>
        <p class="doctor-hero-desc">
          Tailored healthcare programs, experienced specialists, and dedicated home caregivers for your unique wellness needs.
        </p>

        <div class="ambulance-hero-actions">
          <a class="hero-search-btn" href="#services-list" style="padding: 11px 24px; font-size: 15px;">
            <span>Explore All Services</span>
            <i data-lucide="arrow-down" aria-hidden="true"></i>
          </a>
          <a class="ambulance-hero-btn" href="tel:09610001234">
            <i data-lucide="phone-call" aria-hidden="true"></i>
            <span>Counseling Hotline: 09610001234</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Unified White Background Content Wrapper -->
    <div class="doctor-main-wrap" id="services-list">
      <div class="doctor-content-container">

        <!-- 1. Special Care Zone 16 Products Grid -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">Our Specialized Fleet</p>
            <h2 class="doctor-block-heading">16 Dedicated Special Care Services</h2>
            <p class="doctor-block-sub">Choose the ideal care category tailored to you or your family member's requirements</p>
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
                    <span>View Details</span>
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
            <p class="doctor-block-eyebrow">Structured Methodology</p>
            <h2 class="doctor-block-heading">Special Care Process</h2>
            <p class="doctor-block-sub">4 integrated steps ensuring the highest quality of patient recovery and comfort</p>
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
            <p class="doctor-block-eyebrow">Our Commitment</p>
            <h2 class="doctor-block-heading">Why Choose Our Special Care</h2>
            <p class="doctor-block-sub">Professionalism, compassion, and continuous clinical oversight by your side</p>
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
            <p class="doctor-block-eyebrow">Specialized Counseling</p>
            <h2 class="doctor-block-heading">Free Consultation & Care Request Form</h2>
            <p class="doctor-block-sub">Submit your details and our experienced care coordinator will contact you promptly</p>
          </div>

          <div class="booking-form-wrap">
            <div class="booking-form-left">
              <h3>Submit Service Request</h3>
              <p>Fill out the form below to receive customized care packages and doctor recommendations.</p>

              <form class="ambulance-form" onsubmit="event.preventDefault(); alert('Your care request has been received. Our clinical care manager will contact your number shortly.');">
                <div class="form-group">
                  <label for="care-name">Applicant or Patient’s Name*</label>
                  <input type="text" id="care-name" name="name" placeholder="Enter full name" required>
                </div>

                <div class="form-group">
                  <label for="care-phone">Mobile Phone Number*</label>
                  <input type="tel" id="care-phone" name="phone" placeholder="017xxxxxxxx" required>
                </div>

                <div class="form-group">
                  <label for="care-service">Select Required Care Service*</label>
                  <select id="care-service" name="service" required>
                    <option value="">Select Service Category</option>
                    <?php foreach ($services as $srv): ?>
                      <option value="<?= htmlspecialchars($srv['title'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($srv['title'], ENT_QUOTES, 'UTF-8') ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="care-duration">Service Duration / Schedule</label>
                  <select id="care-duration" name="duration">
                    <option value="home-visit">Home Visit & Doctor Consultation</option>
                    <option value="12hr">12-Hour Shift Attendant</option>
                    <option value="24hr">24-Hour Full-Time Caregiver</option>
                    <option value="monthly">Monthly Comprehensive Package</option>
                  </select>
                </div>

                <div class="form-group form-full">
                  <label for="care-details">Patient Condition or Special Instructions</label>
                  <textarea id="care-details" name="details" rows="3" placeholder="Briefly specify patient age, physical condition, medical history or special requests..."></textarea>
                </div>

                <div class="form-group form-full">
                  <button type="submit" class="surgery-submit-btn">
                    <i data-lucide="send" aria-hidden="true"></i>
                    <span>Send Care Consultation Request</span>
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
                <h4>Special Care Helpline</h4>
                <p>Speak directly with our care specialist for package selection or urgent caregiver deployment.</p>
                <a class="quick-call-number" href="tel:09610001234" style="color: var(--health-primary); background: #fbf9ff; border-color: #d8cde9;">
                  09610001234
                </a>
                <p class="text-xs text-gray-500 m-0">Available 8:00 AM to 11:00 PM</p>
              </div>

              <div class="sidebar-features">
                <h4>Key Service Highlights</h4>
                <ul class="sidebar-feature-list">
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> BMDC Registered Doctor Oversight</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> Background-Verified Caregivers</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> 24/7 Dedicated Care Manager</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> Digital Health Telemetry Support</li>
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
            <p class="doctor-block-sub">Essential details about in-home care, patient attendants, and specialized treatments</p>
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
