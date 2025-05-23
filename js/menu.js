document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById("menu-toggle");
    const overlay = document.getElementById("menu-overlay");

    toggle.addEventListener("click", function () {
        toggle.classList.toggle("active");
        overlay.classList.toggle("open");
    });

    overlay.addEventListener("click", function (e) {
        if (e.target === overlay) {
            toggle.classList.remove("active");
            overlay.classList.remove("open");
        }
    });
});
