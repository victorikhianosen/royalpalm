document.addEventListener("DOMContentLoaded", function () {
    // CARD
    const cards = document.querySelectorAll(".card");
    cards.forEach((card) => {
        card.addEventListener("mousemove", function () {
            // Remove border from all cards
            cards.forEach((c) =>
                c.classList.remove(
                    "border-b-8",
                    "border-primary",
                    "md:border-b-2"
                )
            );
            // Add border to the clicked card
            this.classList.add("border-b-8", "border-primary", "md:border-b-2");
        });
    });


    // FACILITY
    const mainImg = document.getElementById("facility-img");
    const smallImgs = document.querySelectorAll(".small-img");

    smallImgs.forEach(function (img) {
        img.addEventListener("click", function () {
            mainImg.src = img.src;
        });
    });


});

// NAVAR
const openBtn = document.getElementById("nav-open");
const closeBtn = document.getElementById("nav-close");
const navMobile = document.getElementById("nav-mobile");

openBtn.addEventListener("click", () => {
    navMobile.classList.remove("-translate-x-full");
    navMobile.classList.add("translate-x-0");
    openBtn.classList.add("opacity-0");
    openBtn.classList.remove("opacity-100");
    setTimeout(() => {
        openBtn.classList.add("hidden");
        closeBtn.classList.remove("hidden");
        closeBtn.classList.add("opacity-100");
        closeBtn.classList.remove("opacity-0");
    }, 300); // duration should match the CSS transition duration
});

closeBtn.addEventListener("click", () => {
    navMobile.classList.remove("translate-x-0");
    navMobile.classList.add("-translate-x-full");
    closeBtn.classList.add("opacity-0");
    closeBtn.classList.remove("opacity-100");
    setTimeout(() => {
        closeBtn.classList.add("hidden");
        openBtn.classList.remove("hidden");
        openBtn.classList.add("opacity-100");
        openBtn.classList.remove("opacity-0");
    }, 300); // duration should match the CSS transition duration
});
