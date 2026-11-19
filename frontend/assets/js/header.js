document.addEventListener("DOMContentLoaded", () => {
  if (window.lucide) {
    window.lucide.createIcons();
  }

  // Mobile menu toggle
  const menuToggle = document.querySelector(".menu-toggle");
  const navigation = document.querySelector(".primary-navigation");

  if (menuToggle && navigation) {
    menuToggle.addEventListener("click", (e) => {
      e.stopPropagation();
      const shouldOpen = menuToggle.getAttribute("aria-expanded") !== "true";
      menuToggle.setAttribute("aria-expanded", String(shouldOpen));
      menuToggle.setAttribute("aria-label", shouldOpen ? "Close menu" : "Open menu");
      navigation.classList.toggle("is-open", shouldOpen);
    });

    // Mobile dropdown toggle for submenus
    const dropdownToggles = navigation.querySelectorAll(".has-dropdown > .navigation-link");
    dropdownToggles.forEach((toggle) => {
      toggle.addEventListener("click", (e) => {
        if (window.innerWidth <= 991) {
          e.preventDefault();
          e.stopPropagation();
          const parent = toggle.closest(".has-dropdown");
          if (parent) {
            const isOpen = parent.classList.toggle("mobile-open");
            toggle.setAttribute("aria-expanded", String(isOpen));
          }
        }
      });
    });

    navigation.querySelectorAll(".navigation-link:not(.has-dropdown > .navigation-link), .dropdown-link").forEach((link) => {
      link.addEventListener("click", () => {
        if (window.innerWidth <= 991) {
          navigation.classList.remove("is-open");
          menuToggle.setAttribute("aria-expanded", "false");
          menuToggle.setAttribute("aria-label", "Open menu");
        }
      });
    });
  }

  // Header Search Dropdown Toggle
  const searchToggle = document.getElementById("headerSearchToggle");
  const searchDropdown = document.getElementById("headerSearchDropdown");
  const searchInput = document.getElementById("headerSearchInput");

  if (searchToggle && searchDropdown) {
    searchToggle.addEventListener("click", (e) => {
      e.stopPropagation();
      const isOpen = searchDropdown.classList.toggle("is-open");
      if (isOpen && searchInput) {
        setTimeout(() => searchInput.focus(), 60);
      }
    });

    searchDropdown.addEventListener("click", (e) => {
      e.stopPropagation();
    });
  }

  // Close search & mobile menu when clicking outside
  document.addEventListener("click", (event) => {
    if (searchDropdown && searchDropdown.classList.contains("is-open")) {
      searchDropdown.classList.remove("is-open");
    }
    if (navigation && navigation.classList.contains("is-open") && !event.target.closest(".site-header")) {
      navigation.classList.remove("is-open");
      if (menuToggle) {
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.setAttribute("aria-label", "Open menu");
      }
    }
  });

  // Close with Escape key
  document.addEventListener("keydown", (event) => {
    if (event.key !== "Escape") return;
    if (searchDropdown && searchDropdown.classList.contains("is-open")) {
      searchDropdown.classList.remove("is-open");
    }
    if (navigation && navigation.classList.contains("is-open")) {
      navigation.classList.remove("is-open");
      if (menuToggle) {
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.setAttribute("aria-label", "Open menu");
        menuToggle.focus();
      }
    }
  });
});
