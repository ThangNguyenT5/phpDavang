export default function SwiperModule() {
    var swiper = new Swiper(".banner-slide", {
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
          },
        autoplay: {
            delay: 5000,
          },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        loop: true,
    });
}

