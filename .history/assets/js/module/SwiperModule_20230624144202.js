export default function SwiperModule() {
    var swiper = new Swiper(".banner-slide", {
        autoplay: {
            delay: 5000,
          },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
    });
}

