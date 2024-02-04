jQuery(document).ready(function ($) {

    var loadingTime = 5000; // Temps en millisecondes pour que le préchargeur atteigne 100%
    var currentPercentage = 50;
    var loadingPercentageElement = document.getElementById('loading-percentage');

    var interval = setInterval(function () {
        currentPercentage++;
        loadingPercentageElement.textContent = currentPercentage + '%';

        if (currentPercentage >= 100) {
            clearInterval(interval);
            hidePreloader();
        }
    }, loadingTime / 100); // Divisez le temps total par 100 pour obtenir le temps d'incrément par 1%

    // Fonction pour masquer le préchargeur
    function hidePreloader() {
        var preloader = document.getElementById('preloader');
        if (preloader) {
            preloader.style.opacity = '0';
            preloader.style.transform = 'translateY(-100%)';
            preloader.addEventListener('transitionend', function () {
                preloader.remove(); // Retirer le préchargeur du DOM
            });
        }
    }

    // Si la page est déjà chargée, masquez le préchargeur immédiatement
    if (document.readyState === "complete") {
        clearInterval(interval);
        hidePreloader();
    } else {
        $(window).on('load', function () {
            clearInterval(interval); // Arrête le calcul du pourcentage une fois la page chargée
            setTimeout(hidePreloader, 500); // Un court délai avant de masquer le préchargeur
        });
    }

    AOS.init({
        offset: 200, // décalage (en px) de l'élément déclencheur original
        delay: 100, // valeurs de retard en millisecondes
        duration: 400, // valeurs de la durée de l'animation en millisecondes
        easing: 'ease', // animation par défaut easing
        once: false, // animation seulement une fois - lors du défilement vers le bas
        mirror: true, // si les éléments doivent s'animer lors du défilement passé
        anchorPlacement: 'top-bottom', // définit quelle position de l'élément par rapport à la fenêtre
    });

});

document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelector('.burger-menu .burger-icon');
    const menu = document.querySelector('.main-navbar');
    const closeMenu = document.querySelector('.close-menu'); // Sélectionner le bouton de fermeture

    burger.addEventListener('click', function() {
        menu.classList.toggle('active');
    });

    closeMenu.addEventListener('click', function() { // Écouter le clic sur le bouton de fermeture
        menu.classList.remove('active'); // Fermer le menu
    });
});

