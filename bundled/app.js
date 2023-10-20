"use strict";
document.addEventListener("DOMContentLoaded", () => {
    const hamburger = document.querySelector(".hamburger");
    const hamburgerMenu = document.querySelector(".hamburger-menu");
    const mobileMenu = document.querySelector(".mobile-menu");
    hamburger.addEventListener("click", () => {
        hamburgerMenu.classList.toggle("hamburger-menu--show");
        mobileMenu.classList.toggle("mobile-menu--visible");
    });
});
//# sourceMappingURL=app.js.map