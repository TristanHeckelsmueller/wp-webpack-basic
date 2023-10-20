document.addEventListener("DOMContentLoaded", () => {
    const hamburger =  document.querySelector(".hamburger") as HTMLElement;
    const hamburgerMenu =  document.querySelector(".hamburger-menu") as HTMLElement;

    const mobileMenu = document.querySelector(".mobile-menu") as HTMLElement;
    hamburger.addEventListener("click", () => {
        hamburgerMenu.classList.toggle("hamburger-menu--show")
        mobileMenu.classList.toggle("mobile-menu--visible");
    })

    const quantityLabel = document.querySelector(".quantity label");
    if (quantityLabel) {
        quantityLabel.innerHTML = "Menge";
        quantityLabel.classList.remove("screen-reader-text") = "Menge";
    }

})

