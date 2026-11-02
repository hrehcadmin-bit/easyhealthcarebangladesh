document.addEventListener("DOMContentLoaded", () => {
  const refreshIcons = () => {
    if (window.lucide) window.lucide.createIcons();
  };
  refreshIcons();

  const loginScreen = document.querySelector("#login-screen");
  const dashboardScreen = document.querySelector("#dashboard-screen");
  const loginForm = document.querySelector("#demo-login");
  const passwordInput = document.querySelector("#password");
  const passwordToggle = document.querySelector("#password-toggle");
  const logoutButton = document.querySelector("#logout-button");
  const navigationLinks = document.querySelectorAll(".nav-link[data-title]");
  const sidebar = document.querySelector("#sidebar");
  const sidebarBackdrop = document.querySelector("#sidebar-backdrop");
  const mobileMenu = document.querySelector("#mobile-menu");

  loginForm.addEventListener("submit", (event) => {
    event.preventDefault();
    loginScreen.hidden = true;
    dashboardScreen.hidden = false;
    window.scrollTo(0, 0);
    refreshIcons();
  });

  passwordToggle.addEventListener("click", () => {
    const showPassword = passwordInput.type === "password";
    passwordInput.type = showPassword ? "text" : "password";
    passwordToggle.setAttribute("aria-label", showPassword ? "পাসওয়ার্ড লুকান" : "পাসওয়ার্ড দেখান");
    passwordToggle.innerHTML = `<i data-lucide="${showPassword ? "eye-off" : "eye"}" aria-hidden="true"></i>`;
    refreshIcons();
  });

  logoutButton.addEventListener("click", () => {
    dashboardScreen.hidden = true;
    loginScreen.hidden = false;
    window.scrollTo(0, 0);
  });

  navigationLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
      event.preventDefault();
      navigationLinks.forEach((item) => item.classList.remove("active"));
      link.classList.add("active");
      document.querySelector("#page-title").textContent = link.dataset.title;
      closeSidebar();
    });
  });

  const closeSidebar = () => {
    sidebar.classList.remove("is-open");
    sidebarBackdrop.classList.remove("is-open");
  };

  mobileMenu.addEventListener("click", () => {
    sidebar.classList.toggle("is-open");
    sidebarBackdrop.classList.toggle("is-open");
  });
  sidebarBackdrop.addEventListener("click", closeSidebar);

  document.querySelector("#dashboard-search").addEventListener("keydown", (event) => {
    if (event.key === "Escape") event.currentTarget.blur();
  });
});
