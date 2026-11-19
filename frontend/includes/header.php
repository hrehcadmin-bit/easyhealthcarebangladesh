<?php
$currentUri = $_SERVER['REQUEST_URI'] ?? '';
?>
<header class="site-header">
  <!-- Top Tier Header (Unico Hospitals Style) -->
  <div class="header-top">
    <div class="header-container header-top-inner">
      <a class="brand-logo" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/" aria-label="Easy Healthcare Home">
        <img src="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/assets/images/logo.png" alt="Easy Healthcare">
      </a>

      <div class="header-top-actions">
        <ul class="header-action-list">
          <!-- 1. Email Pill Button -->
          <li class="action-item">
            <a href="mailto:info@easyhealthcare.com.bd" class="action-pill action-email hover-anim" title="Email Us">
              <span class="anim-label"><i data-lucide="mail" aria-hidden="true"></i><span>info@easyhealthcare.com.bd</span></span>
              <span class="anim-label"><i data-lucide="mail" aria-hidden="true"></i><span>info@easyhealthcare.com.bd</span></span>
            </a>
          </li>

          <!-- 2. WhatsApp Number Pill Button -->
          <li class="action-item">
            <a href="https://wa.me/8809611833596" target="_blank" rel="noopener noreferrer" class="action-pill action-whatsapp hover-anim" title="Chat on WhatsApp">
              <span class="anim-label">
                <svg class="whatsapp-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                </svg>
                <span>+880 9611-833596</span>
              </span>
              <span class="anim-label">
                <svg class="whatsapp-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                </svg>
                <span>+880 9611-833596</span>
              </span>
            </a>
          </li>

          <!-- 3. Circular Search Button & Dropdown -->
          <li class="action-item search-item">
            <button type="button" class="action-search-btn hover-anim" id="headerSearchToggle" aria-label="Search site" title="Search">
              <span class="anim-label"><i data-lucide="search" aria-hidden="true"></i></span>
              <span class="anim-label"><i data-lucide="search" aria-hidden="true"></i></span>
            </button>

            <!-- Search Dropdown Bar -->
            <div class="header-search-dropdown" id="headerSearchDropdown">
              <form class="header-search-form" action="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/find-doctor" method="GET" role="search">
                <i data-lucide="search" aria-hidden="true"></i>
                <input type="text" name="q" id="headerSearchInput" placeholder="Search doctors, specialties, diagnostics..." autocomplete="off">
                <button type="submit" aria-label="Submit search"><i data-lucide="arrow-right" aria-hidden="true"></i></button>
              </form>
            </div>
          </li>

          <!-- 4. Patient Portal Solid Pill Button (#25125a) -->
          <li class="action-item user-item">
            <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/login" class="action-pill action-user hover-anim" title="Patient Portal">
              <span class="anim-label"><span>Patient Portal</span><i data-lucide="user-round" aria-hidden="true"></i></span>
              <span class="anim-label"><span>Patient Portal</span><i data-lucide="user-round" aria-hidden="true"></i></span>
            </a>
          </li>
        </ul>

        <!-- Mobile Menu Toggle Button -->
        <button class="menu-toggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="primary-navigation">
          <i data-lucide="menu" aria-hidden="true"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Bottom Tier Header (Navigation Menu Bar) -->
  <div class="header-bottom">
    <div class="header-container header-bottom-inner">
      <nav class="primary-navigation" id="primary-navigation" aria-label="Primary navigation">
        <ul class="navigation-list">
          <li class="navigation-item has-dropdown <?= (strpos($currentUri, 'find-doctor') !== false) ? 'active' : '' ?>">
            <a class="navigation-link" href="javascript:void(0)" role="button" aria-expanded="false" aria-haspopup="true">
              <span>Find a Doctor</span>
              <svg class="dropdown-caret" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </a>
            <!-- Unico Style 2-Column Submenu -->
            <div class="inner-dropdown-menu">
              <div class="dropdown-columns-wrap">
                <ul class="dropdown-column">
                  <li>
                    <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/find-doctor?category=near-you" class="dropdown-link">
                      <span class="dropdown-icon"><i data-lucide="map-pin" aria-hidden="true"></i></span>
                      <span class="dropdown-text">Find Special Doctor Near You</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/find-doctor?category=easy-healthcare" class="dropdown-link">
                      <span class="dropdown-icon"><i data-lucide="shield-check" aria-hidden="true"></i></span>
                      <span class="dropdown-text">Easy Healthcare Special Doctor</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/find-doctor?category=dhaka-city" class="dropdown-link">
                      <span class="dropdown-icon"><i data-lucide="building-2" aria-hidden="true"></i></span>
                      <span class="dropdown-text">Dhaka City Special Doctor</span>
                    </a>
                  </li>
                </ul>
                <ul class="dropdown-column">
                  <li>
                    <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/find-doctor?category=metro-city" class="dropdown-link">
                      <span class="dropdown-icon"><i data-lucide="landmark" aria-hidden="true"></i></span>
                      <span class="dropdown-text">Metro City Special Doctor</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/find-doctor?category=selected-hospitals" class="dropdown-link">
                      <span class="dropdown-icon"><i data-lucide="cross" aria-hidden="true"></i></span>
                      <span class="dropdown-text">Selected Hospital Special Doctor</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/find-doctor?category=international" class="dropdown-link">
                      <span class="dropdown-icon"><i data-lucide="globe" aria-hidden="true"></i></span>
                      <span class="dropdown-text">Book International Special Doctor</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="navigation-item <?= (strpos($currentUri, 'online-doctor-consult') !== false) ? 'active' : '' ?>">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/online-doctor-consult">Online Video Consult</a>
          </li>
          <li class="navigation-item <?= (strpos($currentUri, 'online-diagnostic-lab') !== false) ? 'active' : '' ?>">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/online-diagnostic-lab">Online Diagenstic Lab</a>
          </li>
          <li class="navigation-item <?= (strpos($currentUri, 'special-care-zone') !== false) ? 'active' : '' ?>">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/special-care-zone">Specal Care Zone</a>
          </li>
          <li class="navigation-item <?= (strpos($currentUri, 'safe-surgery') !== false) ? 'active' : '' ?>">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/safe-surgery">Safe Surgery</a>
          </li>
          <li class="navigation-item <?= (strpos($currentUri, 'medical-tourism') !== false) ? 'active' : '' ?>">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/medical-tourism">Medical Tour</a>
          </li>
          <li class="navigation-item <?= (strpos($currentUri, 'ambulance-booking') !== false) ? 'active' : '' ?>">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/ambulance-booking">Call Ambulance</a>
          </li>
          <li class="navigation-item <?= (strpos($currentUri, 'subscription-plan') !== false) ? 'active' : '' ?>">
            <a class="navigation-link" href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/subscription-plan">Subcription Plan</a>
          </li>
        </ul>

        <!-- Mobile Utility Drawer Links -->
        <div class="mobile-utility-links">
          <a href="mailto:info@easyhealthcare.com.bd"><i data-lucide="mail" aria-hidden="true"></i><span>info@easyhealthcare.com.bd</span></a>
          <a href="https://wa.me/8809611833596" target="_blank">
            <svg class="whatsapp-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
            </svg>
            <span>WhatsApp: +880 9611-833596</span>
          </a>
          <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/login"><i data-lucide="user-round" aria-hidden="true"></i><span>Patient Portal</span></a>
          <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/doctor-portal"><i data-lucide="stethoscope" aria-hidden="true"></i><span>Doctor Portal</span></a>
          <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/lab-report"><i data-lucide="file-heart" aria-hidden="true"></i><span>Online Lab Report</span></a>
          <a href="<?= htmlspecialchars($baseUrl ?? '.', ENT_QUOTES, 'UTF-8') ?>/complaint-box"><i data-lucide="message-square-warning" aria-hidden="true"></i><span>Complaint Box</span></a>
        </div>
      </nav>
    </div>
  </div>
</header>
