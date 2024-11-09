import "./bootstrap";

document.addEventListener("DOMContentLoaded", function () {
    // Toggle para el menú principal en móvil
    const mobileMenuButton = document.querySelector(
        'button[aria-expanded="false"]'
    );
    const mobileMenu = document.querySelector('div[role="dialog"]');

    mobileMenuButton.addEventListener("click", () => {
        const isExpanded =
            mobileMenuButton.getAttribute("aria-expanded") === "true";
        mobileMenuButton.setAttribute("aria-expanded", !isExpanded);
        mobileMenu.classList.toggle("hidden");
    });

    // Toggle para el submenú de "Product"
    const productButton = document.querySelector(
        'button[aria-controls="disclosure-1"]'
    );
    const productMenu = document.querySelector("#disclosure-1");

    productButton.addEventListener("click", () => {
        const isExpanded =
            productButton.getAttribute("aria-expanded") === "true";
        productButton.setAttribute("aria-expanded", !isExpanded);
        productMenu.classList.toggle("hidden");
    });
});
