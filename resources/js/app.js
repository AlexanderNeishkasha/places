require('./bootstrap');
import 'materialize-css';

document.addEventListener('DOMContentLoaded', function() {
    let selectElems = document.querySelectorAll('select');
    let selects = M.FormSelect.init(selectElems);
    let carouselElem = document.querySelectorAll('.carousel');
    let carousel = M.Carousel.init(carouselElem, {
        fullWidth: true,
        indicators: true
    });
});