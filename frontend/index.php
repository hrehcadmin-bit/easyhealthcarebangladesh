<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0D9488">
  <title>Easy Healthcare — Healthcare Simplified</title>
  <link rel="icon" type="image/png" href="assets/images/fevicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="assets/css/header.css">
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>
  <script src="assets/js/header.js" defer></script>
</head>
<body>
  <?php $baseUrl = '.'; ?>
  <?php require __DIR__ . '/includes/header.php'; ?>

  <main class="page-content">
    <section class="maintenance-section" aria-labelledby="maintenance-title">
      <div class="maintenance-card">
        <div class="maintenance-badge">
          <i data-lucide="hammer" aria-hidden="true"></i>
          <span>Under Active Development</span>
        </div>
        
        <h1 class="maintenance-title" id="maintenance-title">
          Our Full Platform <span>Is Launching Soon</span>
        </h1>
        

        <div class="maintenance-contact">
          <div class="maintenance-contact-item">
            <i data-lucide="phone-call" aria-hidden="true"></i>
            <span>Emergency Helpline: +8809611833596</span>
          </div>
          <div class="maintenance-contact-item">
            <i data-lucide="mail" aria-hidden="true"></i>
            <span>Email: info@easyhealthcare.com.bd</span>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php require __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
