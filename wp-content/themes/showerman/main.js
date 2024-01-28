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

});



