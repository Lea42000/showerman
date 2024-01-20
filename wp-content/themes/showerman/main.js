document.addEventListener('DOMContentLoaded', function() {
    var bgImage = document.querySelector('.bg-image');
    bgImage.addEventListener('mousemove', function(e) {
        var width = bgImage.offsetWidth;
        var height = bgImage.offsetHeight;
        var mouseX = e.offsetX;
        var mouseY = e.offsetY;

        var bgPosX = (mouseX / width * 100);
        var bgPosY = (mouseY / height * 100);

        bgImage.style.backgroundPosition = bgPosX + '% ' + bgPosY + '%';
    });
});
