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
  <title>সেফ সার্জারি — ইজি হেলথকেয়ার</title>
  <link rel="icon" type="image/png" href="<?= $baseUrl ?>/assets/images/fevicon.png">
  <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/header.css">
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>
  <script src="<?= $baseUrl ?>/assets/js/header.js" defer></script>
</head>
<body>
  <?php require __DIR__ . '/../includes/header.php'; ?>
  <main class="page-content surgery-content">
    <div class="page-content-inner">
      <h1>সেফ সার্জারি</h1>
      <p>নিরাপদ সার্জারি-সংক্রান্ত তথ্য ও সেবা এখানে যুক্ত করা হবে।</p>
    </div>
  </main>
  <?php require __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
