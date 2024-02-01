// window.addEventListener('scroll', function() {
//     var header = document.getElementById('header');
//     var menuLinks = document.querySelectorAll('.header ul li a');
//     var navbarLinks = document.querySelectorAll('.main-navbar a');

//     if (window.scrollY > 763) {
//         header.classList.add('dark');
//         menuLinks.forEach(function(link) {
//             link.style.color = 'black';
//         });
//         navbarLinks.forEach(function(link) {
//             link.style.color = 'black';
//         });
//     } else {
//         header.classList.remove('dark');
//         menuLinks.forEach(function(link) {
//             link.style.color = 'white';
//         });
//         navbarLinks.forEach(function(link) {
//             link.style.color = 'white';
//         });
//     }
// });


window.addEventListener('scroll', function () {
    var header = document.getElementById('header');
    var videoSection = document.querySelector('.video-home');
    var menuLinks = document.querySelectorAll('.main-navbar a'); // Select menu links
    var navbarLinks = document.querySelectorAll('.header-nav a'); // Select navbar links

    // Get the bottom offset of the video section
    var videoBottom = videoSection.offsetTop + videoSection.offsetHeight;

    // Get the scroll position
    var scrollPosition = window.scrollY || window.pageYOffset;

    // Check if scroll position is greater than or equal to the bottom offset of the video section
    if (scrollPosition >= videoBottom) {
        header.classList.add('dark'); // Add dark class to header

        // Change color of menu links to black
        menuLinks.forEach(function (link) {
            link.style.color = 'black';
        });

        // Change color of navbar links to black
        navbarLinks.forEach(function (link) {
            link.style.color = 'black';
        });
    } else {
        header.classList.remove('dark'); // Remove dark class from header

        // Change color of menu links to white
        menuLinks.forEach(function (link) {
            link.style.color = 'white';
        });

        // Change color of navbar links to white
        navbarLinks.forEach(function (link) {
            link.style.color = 'white';
        });
    }
});
