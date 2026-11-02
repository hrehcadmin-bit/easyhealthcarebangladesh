document.addEventListener("DOMContentLoaded", () => {
  if (window.lucide) {
    window.lucide.createIcons();
  }

  const menuToggle = document.querySelector(".menu-toggle");
  const navigation = document.querySelector(".primary-navigation");

  menuToggle.addEventListener("click", () => {
    const shouldOpen = menuToggle.getAttribute("aria-expanded") !== "true";
    menuToggle.setAttribute("aria-expanded", String(shouldOpen));
    menuToggle.setAttribute("aria-label", shouldOpen ? "মেনু বন্ধ করুন" : "মেনু খুলুন");
    navigation.classList.toggle("is-open", shouldOpen);
  });

  document.addEventListener("click", (event) => {
    if (!event.target.closest(".mainbar-inner") && navigation.classList.contains("is-open")) {
      navigation.classList.remove("is-open");
      menuToggle.setAttribute("aria-expanded", "false");
      menuToggle.setAttribute("aria-label", "মেনু খুলুন");
    }
  });

  document.addEventListener("keydown", (event) => {
    if (event.key !== "Escape") return;
    navigation.classList.remove("is-open");
    menuToggle.setAttribute("aria-expanded", "false");
    menuToggle.setAttribute("aria-label", "মেনু খুলুন");
    menuToggle.focus();
  });

  navigation.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      navigation.classList.remove("is-open");
      menuToggle.setAttribute("aria-expanded", "false");
      menuToggle.setAttribute("aria-label", "মেনু খুলুন");
    });
  });
});
