<header class="site-header">
  <div class="topbar">
    <div class="header-container topbar-inner">
      <p class="welcome-message">Welcome to Easy Healthcare Online Platform</p>
      <nav class="utility-nav" aria-label="Utility navigation">
        <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/complaint-box"><i data-lucide="message-square-warning" aria-hidden="true"></i><span>Complaint Box</span></a>
        <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/lab-report"><i data-lucide="file-heart" aria-hidden="true"></i><span>Online Lab Report</span></a>
        <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/patient-portal"><i data-lucide="user-round" aria-hidden="true"></i><span>Patient Portal</span></a>
        <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/doctor-portal"><i data-lucide="stethoscope" aria-hidden="true"></i><span>Doctor Portal</span></a>
      </nav>
    </div>
  </div>

  <div class="mainbar">
    <div class="header-container mainbar-inner">
      <a class="brand-mark" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/" aria-label="Easy Healthcare Home">
        <img src="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/assets/images/logo.png" alt="Easy Healthcare">
      </a>

      <button class="menu-toggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="primary-navigation">
        <i data-lucide="menu" aria-hidden="true"></i>
      </button>

      <nav class="primary-navigation" id="primary-navigation" aria-label="Primary navigation">
        <ul class="navigation-list">
          <li class="navigation-item">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/find-doctor">Find Doctor</a>
          </li>
          <li class="navigation-item">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/online-doctor-consult">Online Doctor Consult</a>
          </li>
          <li class="navigation-item">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/online-diagnostic-lab">Online Diagnostic Lab</a>
          </li>
          <li class="navigation-item">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/special-care-zone">Special Care</a>
          </li>
          <li class="navigation-item">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/safe-surgery">Safe Surgery</a>
          </li>
          <li class="navigation-item">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/medical-tourism">Medical Tour</a>
          </li>
          <li class="navigation-item">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/ambulance-booking">Call Ambulance</a>
          </li>
        </ul>
        <div class="mobile-utility-links">
          <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/complaint-box"><i data-lucide="message-square-warning" aria-hidden="true"></i><span>Complaint Box</span></a>
          <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/lab-report"><i data-lucide="file-heart" aria-hidden="true"></i><span>Online Lab Report</span></a>
          <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/patient-portal"><i data-lucide="user-round" aria-hidden="true"></i><span>Patient Portal</span></a>
          <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/doctor-portal"><i data-lucide="stethoscope" aria-hidden="true"></i><span>Doctor Portal</span></a>
        </div>
      </nav>

      <div class="header-actions">
        <a class="login-button" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/login">
          <span>Login / SignUp</span>
        </a>
      </div>
    </div>
  </div>
</header>
