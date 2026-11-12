<?php
if (!isset($baseUrl)) {
  $baseUrl = (strpos($_SERVER['REQUEST_URI'] ?? '', '/pages/') !== false) ? '..' : '.';
}

$surgeries = [
  [
    'title' => 'Laparoscopic Surgery',
    'image' => $baseUrl . '/assets/images/surgery/laparoscopic.jpg',
  ],
  [
    'title' => 'Orthopedic & Joint Replacement',
    'image' => $baseUrl . '/assets/images/surgery/orthopedic-surgery.jpg',
  ],
  [
    'title' => 'Gynecology & Obstetrics Surgery',
    'image' => $baseUrl . '/assets/images/surgery/gynecology-surgery.jpg',
  ],
  [
    'title' => 'General Surgery (Hernia, Gallbladder)',
    'image' => $baseUrl . '/assets/images/surgery/general-surgery.jpg',
  ],
  [
    'title' => 'Urology & Kidney Stone Surgery',
    'image' => $baseUrl . '/assets/images/surgery/urology.jpg',
  ],
  [
    'title' => 'ENT & Eye Microsurgery',
    'image' => $baseUrl . '/assets/images/surgery/ent-surgery.jpg',
  ],
];

$surgerySteps = [
  [
    'step' => '1',
    'title' => 'Consultation & Report Review',
    'desc' => 'Clinical consultation with a senior surgeon and comprehensive review of previous investigation reports.',
  ],
  [
    'step' => '2',
    'title' => 'Pre-Operative Preparation',
    'desc' => 'Pre-anesthesia checkup (PAC), diagnostic fitness evaluations, and transparent procedure scheduling.',
  ],
  [
    'step' => '3',
    'title' => 'Safe Surgery in Modular OT',
    'desc' => 'Successful procedure performed in sterile modular operating theaters by certified surgical teams.',
  ],
  [
    'step' => '4',
    'title' => 'Post-Operative Care & Follow-Up',
    'desc' => 'Attentive in-hospital nursing care followed by structured doctor follow-ups after returning home.',
  ],
];

$safetyStandards = [
  [
    'icon' => 'shield-check',
    'badge' => 'Sterile Environment',
    'title' => 'Modular Operating Theaters',
    'desc' => 'Ultra-clean laminar airflow and HEPA filtration ensuring a 100% infection-free surgical environment.',
  ],
  [
    'icon' => 'award',
    'badge' => 'Verified Specialists',
    'title' => 'Senior Surgeons & Anesthetists',
    'desc' => 'Supervised by BMDC-registered surgeons with 10+ years of clinical expertise and dedicated critical care units.',
  ],
  [
    'icon' => 'receipt',
    'badge' => 'Transparent Pricing',
    'title' => 'Fixed All-Inclusive Packages',
    'desc' => 'Upfront transparent pricing covering medicine, bed charges, and surgeon fees with zero hidden charges.',
  ],
];

$faqs = [
  [
    'q' => 'What are the main advantages of laparoscopic minimally invasive surgery?',
    'a' => 'Laparoscopic surgery involves small keyhole incisions guided by micro-cameras rather than large cuts. Patients experience significantly less pain, minimal blood loss, minimal scarring, and quick recovery within 24 to 48 hours.',
  ],
  [
    'q' => 'How are fixed surgery package costs determined?',
    'a' => 'Fixed package estimates are calculated based on surgical diagnosis, procedure approach (laparoscopic vs. open), cabin category, and doctor consultation before hospital admission, providing complete budget certainty.',
  ],
  [
    'q' => 'Can I get a second medical opinion from a senior specialist before surgery?',
    'a' => 'Yes, absolutely. Our senior consultant panel provides impartial, comprehensive second opinions on your diagnostic scans and clinical reports to help you make informed decisions.',
  ],
  [
    'q' => 'How quickly can a patient return to normal activities after surgery?',
    'a' => 'For laparoscopic and day-care surgeries, patients typically return home within 24 to 48 hours and resume regular light daily routines in 5 to 7 days. Your lead surgeon will outline an individualized recovery timeline.',
  ],
  [
    'q' => 'Are health insurance cashless facilities or EMI options supported?',
    'a' => 'Yes, partner hospitals provide cashless admission facilities for major health insurance providers, and 0% interest EMI payment plans from 3 to 12 months are available on selected bank credit cards.',
  ],
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0D9488">
  <title>Safe Surgery — Easy Healthcare</title>
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
          <span>Safe, Advanced & Affordable Surgical Care</span>
        </div>
        <h1 class="doctor-hero-title" id="surgery-hero-title">
          Precision Surgery <span>Under Senior Specialist Surgeons</span>
        </h1>
        <p class="doctor-hero-desc">
          Modular operating theaters, modern laparoscopic technology, and fixed transparent packages for complete peace of mind.
        </p>

        <div class="ambulance-hero-actions">
          <a class="hero-search-btn" href="#surgery-form" style="padding: 11px 24px; font-size: 15px;">
            <span>Free Surgery Consultation</span>
            <i data-lucide="arrow-down" aria-hidden="true"></i>
          </a>
          <a class="ambulance-hero-btn" href="tel:09610001234">
            <i data-lucide="phone-call" aria-hidden="true"></i>
            <span>Call Hotline: 09610001234</span>
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
            <p class="doctor-block-eyebrow">Specialized Surgical Care</p>
            <h2 class="doctor-block-heading">Popular Surgery Categories</h2>
            <p class="doctor-block-sub">Consult top surgeons tailored to your specific clinical requirements</p>
          </div>

          <div class="doctor-grid">
            <?php foreach ($surgeries as $item): ?>
              <article class="doctor-card surgery-card">
                <div class="doctor-card-media">
                  <img src="<?= htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy">
                </div>
                <div class="doctor-card-body">
                  <h3 class="doctor-card-title"><?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                  <a href="#surgery-form" class="doctor-card-btn">
                    <span>Consult Now</span>
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
            <p class="doctor-block-eyebrow">Step-by-Step Pathway</p>
            <h2 class="doctor-block-heading">Safe Surgery Process</h2>
            <p class="doctor-block-sub">4 structured steps ensuring maximum safety, comfort, and clinical excellence</p>
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

        <!-- 3. Safety Standards -->
        <div class="doctor-block">
          <div class="doctor-block-header">
            <p class="doctor-block-eyebrow">Why Trust Us</p>
            <h2 class="doctor-block-heading">Our Safe Surgery Standards</h2>
            <p class="doctor-block-sub">Patient safety, precision treatment, and speedy recovery are our foundational priorities</p>
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
            <p class="doctor-block-eyebrow">Expert Advice & Estimates</p>
            <h2 class="doctor-block-heading">Free Surgery Consultation & Quote</h2>
            <p class="doctor-block-sub">Submit your details and our senior surgical care coordinator will contact you promptly</p>
          </div>

          <div class="booking-form-wrap">
            <div class="booking-form-left">
              <h3>Fill Consultation Form</h3>
              <p>Share your symptoms or diagnostic reports for complimentary initial doctor advice.</p>

              <form class="ambulance-form" onsubmit="event.preventDefault(); alert('Your surgery consultation request has been received. Our clinical care manager will call you shortly.');">
                <div class="form-group">
                  <label for="patient-name">Patient's Full Name*</label>
                  <input type="text" id="patient-name" name="name" placeholder="Enter patient's name" required>
                </div>

                <div class="form-group">
                  <label for="patient-phone">Mobile Number*</label>
                  <input type="tel" id="patient-phone" name="phone" placeholder="017xxxxxxxx" required>
                </div>

                <div class="form-group">
                  <label for="surgery-type">Surgery Category*</label>
                  <select id="surgery-type" name="surgery" required>
                    <option value="">Select Surgery Category</option>
                    <option value="laparoscopic">Laparoscopic (Gallbladder / Appendix)</option>
                    <option value="orthopedic">Orthopedics & Fractures / Joint</option>
                    <option value="gynecology">Gynecology & Obstetrics / C-Section</option>
                    <option value="hernia">Hernia & Piles / Fistula</option>
                    <option value="urology">Urology & Kidney Stones</option>
                    <option value="ent">ENT / Tonsil / Eye Microsurgery</option>
                    <option value="other">Other Surgeries</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="has-report">Do you have diagnostic reports?</label>
                  <select id="has-report" name="report">
                    <option value="yes">Yes, I have recent diagnostic reports</option>
                    <option value="no">No, tests not done yet</option>
                    <option value="consult">Need initial consultation only</option>
                  </select>
                </div>

                <div class="form-group form-full">
                  <label for="symptoms">Current Symptoms or Questions</label>
                  <textarea id="symptoms" name="symptoms" rows="3" placeholder="Briefly describe patient symptoms, doctor advice or any queries..."></textarea>
                </div>

                <div class="form-group form-full">
                  <button type="submit" class="surgery-submit-btn">
                    <i data-lucide="send" aria-hidden="true"></i>
                    <span>Send Free Consultation Request</span>
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
                <h4>Surgical Care Helpline</h4>
                <p>Speak directly with our surgical care team for doctor scheduling, hospital admission, and pricing details.</p>
                <a class="quick-call-number" href="tel:09610001234" style="color: var(--health-primary); background: #fbf9ff; border-color: #d8cde9;">
                  09610001234
                </a>
                <p class="text-xs text-gray-500 m-0">Available 8:00 AM to 11:00 PM</p>
              </div>

              <div class="sidebar-features">
                <h4>Easy Safe Surgery Highlights</h4>
                <ul class="sidebar-feature-list">
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> Free Second Opinion Facility</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> Transparent Fixed Package Guarantee</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> 0% Interest Easy EMI Facility</li>
                  <li><i data-lucide="check-circle-2" aria-hidden="true"></i> Complimentary Post-Op Follow-up</li>
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
            <p class="doctor-block-sub">Everything you need to know about surgery preparation, packages, and recovery</p>
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
