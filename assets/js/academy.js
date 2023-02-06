let academyBanner = document.querySelector('.form-signup-banner')
window.addEventListener('load', function() {
    academyBanner.style.transform = "translateY(0)";
})

let closeBanner = document.querySelector('#close-academy-banner')
closeBanner.addEventListener('click', function() {
    academyBanner.style.transform = "translateY(100%)";
})