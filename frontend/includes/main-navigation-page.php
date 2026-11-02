<?php
if (!isset($baseUrl)) {
  $baseUrl = (strpos($_SERVER['REQUEST_URI'] ?? '', '/pages/') !== false) ? '..' : '.';
}
?>
<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#443962">
  <title><?= htmlspecialchars($mainNavigationPage['title'], ENT_QUOTES, 'UTF-8') ?> — ইজি হেলথকেয়ার</title>
  <link rel="icon" type="image/png" href="<?= $baseUrl ?>/assets/images/fevicon.png">
  <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/header.css">
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>
  <script src="<?= $baseUrl ?>/assets/js/header.js" defer></script>
</head>
<body>
  <?php require __DIR__ . '/header.php'; ?>
  <main class="page-content utility-page">
    <section class="section-block how-section" aria-labelledby="main-navigation-page-title">
      <div class="page-content-inner">
        <div class="section-heading">
          <p class="section-eyebrow">ইজি হেলথকেয়ার</p>
          <h1 id="main-navigation-page-title"><?= htmlspecialchars($mainNavigationPage['title'], ENT_QUOTES, 'UTF-8') ?></h1>
          <p><?= htmlspecialchars($mainNavigationPage['description'], ENT_QUOTES, 'UTF-8') ?></p>
        </div>
        <p class="utility-notice">এই পেজের বিস্তারিত তথ্য ও ডিজাইন পরবর্তীতে যোগ করা হবে।</p>
      </div>
    </section>
  </main>
  <?php require __DIR__ . '/footer.php'; ?>
</body>
</html>
