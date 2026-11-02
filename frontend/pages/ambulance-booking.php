<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#443962">
  <title>বুক অ্যাম্বুলেন্স — ইজি হেলথকেয়ার</title>
  <link rel="icon" type="image/png" href="../assets/images/fevicon.png">
  <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../assets/css/header.css">
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>
  <script src="../assets/js/header.js" defer></script>
</head>
<body>
  <?php $baseUrl = '..'; ?>
  <?php require __DIR__ . '/../includes/header.php'; ?>
  <main class="page-content utility-page">
    <section class="section-block how-section" aria-labelledby="ambulance-title">
      <div class="page-content-inner">
        <div class="section-heading">
          <p class="section-eyebrow">জরুরি সময়ে দ্রুত যোগাযোগ করুন</p>
          <h1 id="ambulance-title">বুক অ্যাম্বুলেন্স</h1>
          <p>অ্যাম্বুলেন্সের জন্য দ্রুত সহায়তা পেতে জরুরি নম্বরে কল করুন। কল করার সময় রোগীর অবস্থান ও প্রয়োজনীয় তথ্য জানান।</p>
        </div>
        <div class="ambulance-call-panel">
          <div>
            <h2>জরুরি অ্যাম্বুলেন্স সহায়তা</h2>
            <p>জরুরি পরিস্থিতিতে ৯৯৯ নম্বরে কল করে অ্যাম্বুলেন্স সহায়তা চান।</p>
          </div>
          <a class="button-primary ambulance-call-button" href="tel:999">
            <i data-lucide="phone" aria-hidden="true"></i> ৯৯৯ নম্বরে কল করুন
          </a>
        </div>
        <p class="utility-notice ambulance-notice">ইজি হেলথকেয়ারের অনলাইন অ্যাম্বুলেন্স বুকিং ব্যবস্থা এখনো চালু হয়নি। এই পেজের কল বাটনটি জরুরি নম্বরে কল করার জন্য।</p>
      </div>
    </section>
  </main>
  <?php require __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
