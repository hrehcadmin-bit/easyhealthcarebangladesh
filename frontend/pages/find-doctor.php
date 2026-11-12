<?php
if (!isset($baseUrl)) {
  $baseUrl = (strpos($_SERVER['REQUEST_URI'] ?? '', '/pages/') !== false) ? '..' : '.';
}

$specialties = [
  [
    'title' => 'Find Doctors Near You',
    'image' => $baseUrl . '/assets/images/doctors/medicine.jpg',
  ],
  [
    'title' => 'Easy Healthcare Special Doctors',
    'image' => $baseUrl . '/assets/images/doctors/cardiology.jpg',
  ],
  [
    'title' => 'Dhaka City Specialist Doctors',
    'image' => $baseUrl . '/assets/images/doctors/pediatrics.jpg',
  ],
  [
    'title' => 'Metro City Selected Doctors',
    'image' => $baseUrl . '/assets/images/doctors/gynecology.jpg',
  ],
  [
    'title' => 'Selected Hospital Doctors',
    'image' => $baseUrl . '/assets/images/doctors/orthopedics.jpg',
  ],
  [
    'title' => 'International Specialist Doctors',
    'image' => $baseUrl . '/assets/images/doctors/dermatology.jpg',
  ],
];

$bookingSteps = [
  [
    'step' => '1',
    'title' => 'Search Doctor or Specialty',
    'desc' => 'Choose your preferred specialist based on your location, specialty, or hospital.',
  ],
  [
    'step' => '2',
    'title' => 'Select Date & Time',
    'desc' => 'Check the doctor\'s chamber schedule and select a date and time that suits you.',
  ],
  [
    'step' => '3',
    'title' => 'Confirm Your Booking',
    'desc' => 'Provide your essential details to complete the online booking and get immediate confirmation.',
  ],
  [
    'step' => '4',
    'title' => 'Receive Consultation & Care',
    'desc' => 'Consult directly at the chamber at your scheduled time or via high-quality video call from home.',
  ],
];

$faqs = [
  [
    'q' => 'How do I book a doctor appointment on Easy Healthcare?',
    'a' => 'Very easily! Choose your preferred category or use the search bar above, then click "Search Doctors". Next, pick a convenient time slot and enter your name and phone number to complete the booking.',
  ],
  [
    'q' => 'Can I get an online video consultation in addition to visiting chambers?',
    'a' => 'Yes, our platform provides full access to high-quality video consultations with experienced doctors from the comfort of your home, as well as in-person chamber serials.',
  ],
  [
    'q' => 'How will I receive booking confirmation?',
    'a' => 'As soon as your booking is confirmed, an SMS and email will be sent to your registered mobile number and email with the serial number, appointment time, and detailed chamber address.',
  ],
  [
    'q' => 'Can I reschedule or cancel an appointment after booking?',
    'a' => 'Yes, you can easily reschedule or cancel your appointment prior to the scheduled time through our Patient Portal or by calling our support helpline.',
  ],
  [
    'q' => 'What should I do in an emergency or for an ambulance?',
    'a' => 'For any medical emergency, click the "Book Ambulance" button in the header to call directly or reach out to our 24/7 emergency helpline.',
  ],
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0D9488">
  <title>Find Doctor — Easy Healthcare</title>
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
    <section class="doctor-hero" aria-labelledby="doctor-hero-title">
      <div class="doctor-hero-inner">
        <div class="doctor-hero-badge">
          <i data-lucide="stethoscope" aria-hidden="true"></i>
          <span>Verified Specialist Doctor Directory</span>
        </div>
        <h1 class="doctor-hero-title" id="doctor-hero-title">
          Find the Specialist <span>Doctor You Need</span>
        </h1>
        <p class="doctor-hero-desc">
          Choose the right specialist for your health concerns from our curated list of BMDC-registered, experienced doctors.
        </p>

        <form class="doctor-hero-search" action="#doctor-list" method="GET" role="search">
          <i data-lucide="search" aria-hidden="true"></i>
          <input type="text" name="q" placeholder="Search by doctor name, specialty, or hospital..." aria-label="Search doctors">
          <button type="submit" class="hero-search-btn">
            <span>Search</span>
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
            <p class="doctor-block-eyebrow">Doctor Directory & Categories</p>
            <h2 class="doctor-block-heading">Specialist Doctor Categories</h2>
            <p class="doctor-block-sub">Quickly find doctors by selecting your preferred department or specialty</p>
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
                    <span>Search Doctors</span>
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
            <p class="doctor-block-eyebrow">Simple & Fast</p>
            <h2 class="doctor-block-heading">How We Book (Booking Process)</h2>
            <p class="doctor-block-sub">Confirm your doctor's appointment in just 4 simple steps</p>
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
            <p class="doctor-block-eyebrow">Common Questions</p>
            <h2 class="doctor-block-heading">Frequently Asked Questions (FAQ)</h2>
            <p class="doctor-block-sub">Find answers to common questions about doctor consultations and bookings</p>
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
