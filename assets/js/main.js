jQuery(window).on('load', function () {
    AOS.refresh();
});

jQuery(function () {
    AOS.init();
});

// navigation on scroll effect
const header = document.querySelector("header")

let prevScrollpos = window.pageYOffset;
window.addEventListener("scroll", function () {
    let currentScrollPos = window.pageYOffset;
    if (currentScrollPos < 50) {
        document.querySelector("header").style.background = "transparent";
        document.querySelector("header").style.height = "unset";
        document.querySelector(".header-logo").style.width = "227px";
        document.querySelector(".header-logo").style.height = "145px";
        document.querySelector("header").style.transition = ".3s";
    } else {
        document.querySelector("header").style.background = "#b9b3a952";
        document.querySelector("header").style.height = "115px";
        document.querySelector(".header-logo").style.width = "158px";
        document.querySelector(".header-logo").style.height = "99px";
        document.querySelector("header").style.transition = ".3s";
    }
    prevScrollpos = currentScrollPos;
});


//Mobile - show navigation on burger click
let burger = document.querySelector(".burger")
let navMobile = document.querySelector(".nav-mobile-modal")
burger.onclick = function () {
    navMobile.classList.toggle("nav-mobile-active");
    burger.classList.toggle("open");
};