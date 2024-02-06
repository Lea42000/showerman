window.addEventListener('scroll', function () {
    var header = document.getElementById('header');
    var videoSection = document.querySelector('.video-home');
    var menuLinks = document.querySelectorAll('.main-navbar a');
    var navbarLinks = document.querySelectorAll('.header-nav a');
    var videoBottom = videoSection.offsetTop + videoSection.offsetHeight;
    var scrollPosition = window.scrollY || window.pageYOffset;
    if (scrollPosition >= videoBottom) {
        header.classList.add('dark');
        menuLinks.forEach(function (link) {
            link.style.color = '#6a6a6a';
        });
        navbarLinks.forEach(function (link) {
            link.style.color = '#6a6a6a';
        });
    } else {
        header.classList.remove('dark');
        menuLinks.forEach(function (link) {
            link.style.color = 'white';
        });
        navbarLinks.forEach(function (link) {
            link.style.color = 'white';
        });
    }
});