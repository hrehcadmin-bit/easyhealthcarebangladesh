<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#443962">
  <title><?= htmlspecialchars($utilityPage['title'], ENT_QUOTES, 'UTF-8') ?> — ইজি হেলথকেয়ার</title>
  <link rel="icon" type="image/png" href="../assets/images/fevicon.png">
  <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../assets/css/header.css">
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>
  <script src="../assets/js/header.js" defer></script>
</head>
<body>
  <?php $baseUrl = '..'; ?>
  <?php require __DIR__ . '/header.php'; ?>
  <main class="page-content utility-page">
    <section class="section-block how-section" aria-labelledby="utility-title">
      <div class="page-content-inner">
        <div class="section-heading">
          <p class="section-eyebrow"><?= htmlspecialchars($utilityPage['eyebrow'], ENT_QUOTES, 'UTF-8') ?></p>
          <h1 id="utility-title"><?= htmlspecialchars($utilityPage['title'], ENT_QUOTES, 'UTF-8') ?></h1>
          <p><?= htmlspecialchars($utilityPage['description'], ENT_QUOTES, 'UTF-8') ?></p>
        </div>
        <div class="service-grid">
          <?php foreach ($utilityPage['features'] as $feature): ?>
            <article class="service-card">
              <span class="service-icon"><i data-lucide="<?= htmlspecialchars($feature['icon'], ENT_QUOTES, 'UTF-8') ?>" aria-hidden="true"></i></span>
              <h3><?= htmlspecialchars($feature['title'], ENT_QUOTES, 'UTF-8') ?></h3>
              <p><?= htmlspecialchars($feature['description'], ENT_QUOTES, 'UTF-8') ?></p>
            </article>
          <?php endforeach; ?>
        </div>
        <p class="utility-notice"><?= htmlspecialchars($utilityPage['notice'], ENT_QUOTES, 'UTF-8') ?></p>
        <div class="utility-home-link">
          <a class="button-primary" href="../index.php">হোমপেজে ফিরে যান <i data-lucide="arrow-up-right" aria-hidden="true"></i></a>
        </div>
      </div>
    </section>
  </main>
  <?php require __DIR__ . '/footer.php'; ?>
</body>
</html>
