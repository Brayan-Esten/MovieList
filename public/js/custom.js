const popularWidth = $('#popular .carousel-inner')[0].scrollWidth;
const cardWidth = $('#popular .carousel-item').width();

const popularInner = $('#popular .carousel-inner');
const popularNext = $('#popular .carousel-control-next');
const popularPrev = $('#popular .carousel-control-prev');

let scrollPos = 0;

popularNext.on('click', function () {

    if (scrollPos < popularWidth) {
        scrollPos += cardWidth * 2;
        popularInner.animate({
            scrollLeft: scrollPos
        }, 600);
    }

});

popularPrev.on('click', function () {

    if (scrollPos > 0) {
        scrollPos -= cardWidth * 2;
        popularInner.animate({
            scrollLeft: scrollPos
        }, 600);
    }

});





const genreWidth = $('#genre .carousel-inner')[0].scrollWidth;
const genreCardWidth = $('#genre .carousel-item').width();

const genreInner = $('#genre .carousel-inner');
const genreNext = $('#genre .carousel-control-next');
const genrePrev = $('#genre .carousel-control-prev');

let genreScrollPos = 0;

genreNext.on('click', function () {

    if (genreScrollPos < genreWidth) {
        genreScrollPos += genreCardWidth * 2;
        genreInner.animate({
            scrollLeft: genreScrollPos
        }, 600);
    }

});

genrePrev.on('click', function () {

    if (genreScrollPos > 0) {
        genreScrollPos -= genreCardWidth * 2;
        genreInner.animate({
            scrollLeft: genreScrollPos
        }, 600);
    }

});





const movieWidth = $('#movie .carousel-inner')[0].scrollWidth;
const movieCardWidth = $('#movie .carousel-item').width();

const movieInner = $('#movie .carousel-inner');
const movieNext = $('#movie .carousel-control-next');
const moviePrev = $('#movie .carousel-control-prev');

let movieScrollPos = 0;

movieNext.on('click', function () {

    if (movieScrollPos < movieWidth) {
        movieScrollPos += movieCardWidth * 2;
        movieInner.animate({
            scrollLeft: movieScrollPos
        }, 600);
    }

});

moviePrev.on('click', function () {

    if (movieScrollPos > 0) {
        movieScrollPos -= movieCardWidth * 2;
        movieInner.animate({
            scrollLeft: movieScrollPos
        }, 600);
    }

});
