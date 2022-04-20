// let slides = [1, 2, 3];
// let slidesLen = slides.length;
//
// $('.slideshow__left-arrow').on('click', function () {
//     changeSlide('previous');
// });
//
// $('.slideshow__right-arrow').on('click', function () {
//    changeSlide('next');
// });
//
// let timer = setInterval(function() {
//     changeSlide('next');
// }, 3000);
//
// function changeSlide(direction) {
//     clearInterval(timer);
//     let currentSlide = parseInt($('#currentSlide').val());
//     let i = slides.indexOf(currentSlide);
//     let target;
//
//     if (direction === 'next') {
//         target = slides[(i+1)%slidesLen];
//     } else {
//         target = slides[(i+slidesLen-1)%slidesLen];
//     }
//
//     $('#currentSlide').val(target);
//     $('.slide-' + currentSlide).hide();
//     $('.slide-' + target).fadeIn(1000);
//
//     setInterval(function() {
//         changeSlide('next');
//     }, 3000);
// }
$('.btn btn-primary-login').on('click', function (){
    $('.modal').hide();
    $('.modal-login').show();
});

$('.btn btn-primary-register').on('click', function (){
    $('.modal').hide();
    $('.modal-register').show();
})

$('.modal__close').on('click', function (){
    $('.modal').hide();
});
