<?php
if (!isset($baseUrl)) {
  $baseUrl = (strpos($_SERVER['REQUEST_URI'] ?? '', '/pages/') !== false) ? '..' : '.';
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#084463">
  <title>Patient Portal — Easy Healthcare</title>
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
    <section class="portal-login-section" style="background-image: url('<?= $baseUrl ?>/assets/images/loginbg.jpg');" aria-label="Patient Portal">
      <div class="portal-login-card">
        <div class="portal-login-header">
          <a href="<?= $baseUrl ?>/" class="portal-login-logo" aria-label="Easy Healthcare Home">
            <img src="<?= $baseUrl ?>/assets/images/logo.png" alt="Easy Healthcare">
          </a>
        </div>

        <form class="portal-login-form" action="javascript:void(0)" method="POST" id="patientLoginForm">
          <!-- Field 1: Enter EHC ID -->
          <div class="portal-form-group">
            <div class="portal-input-wrap">
              <i data-lucide="id-card" class="portal-input-icon" aria-hidden="true"></i>
              <input type="text" name="ehc_id" id="ehc_id" class="portal-input" placeholder="Enter EHC ID" required autofocus autocomplete="username">
            </div>
          </div>

          <!-- Field 2: Enter Password -->
          <div class="portal-form-group">
            <div class="portal-input-wrap">
              <i data-lucide="lock" class="portal-input-icon" aria-hidden="true"></i>
              <input type="password" name="password" id="portalPassword" class="portal-input" placeholder="Enter Password" required autocomplete="current-password">
              <button type="button" class="portal-password-toggle" id="togglePasswordBtn" aria-label="Toggle password visibility">
                <i data-lucide="eye" id="togglePasswordIcon" aria-hidden="true"></i>
              </button>
            </div>
          </div>

          <!-- Button: Login Interface (font-weight 400) -->
          <button type="submit" class="portal-login-btn">
            <span>Login Interface</span>
            <i data-lucide="arrow-right" aria-hidden="true"></i>
          </button>

          <!-- Create Patient Portal Account (Text Link with Icon, No Border) -->
          <a href="<?= $baseUrl ?>/subscription-plan" class="portal-create-link">
            <i data-lucide="user-plus" aria-hidden="true"></i>
            <span>Create Patient Portal Account</span>
          </a>
        </form>
      </div>
    </section>
  </main>

  <?php require __DIR__ . '/../includes/footer.php'; ?>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const toggleBtn = document.getElementById('togglePasswordBtn');
      const passwordInput = document.getElementById('portalPassword');

      if (toggleBtn && passwordInput) {
        toggleBtn.addEventListener('click', function () {
          const isPassword = passwordInput.getAttribute('type') === 'password';
          passwordInput.setAttribute('type', isPassword ? 'text' : 'password');

          if (window.lucide) {
            toggleBtn.innerHTML = isPassword
              ? '<i data-lucide="eye-off" style="width:18px;height:18px;"></i>'
              : '<i data-lucide="eye" style="width:18px;height:18px;"></i>';
            window.lucide.createIcons();
          }
        });
      }
    });
  </script>
</body>
</html>
