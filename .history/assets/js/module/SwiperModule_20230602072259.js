export default function SwiperModule() {
    var swiperTime = new Swiper(".home-time-swiper .swiper", {
        slidesPerView: 2,
        spaceBetween: 0,
        grabCursor: true,
        pagination: {
            el: ".home-time-swiper .swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 1,
            },
            450: {
                slidesPerView: 3,
                spaceBetween: 1,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 1,
            },
            930: {
                slidesPerView: 5,
                spaceBetween: 1,
            },
            1200: {
                slidesPerView: 6,
                spaceBetween: 1,
            }
        }
    });


    const swiperCampains = document.querySelectorAll('.campain-swiper')
    swiperCampains.forEach(e => {
        const swipers = e.querySelector('.swiper');
        const pagination = e.querySelector('.swiper-pagination');
        var swiperCampain = new Swiper(swipers, {
            slidesPerView: 1,
            spaceBetween: 8,
            centeredSlides: true,
            initialSlide: 3,
            // touchStartPreventDefault: false,
            autoplay: {
                delay: 2000,
            },
            pagination: {
                el: pagination,
                clickable: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 8,
                },
                450: {
                    slidesPerView: 2,
                    spaceBetween: 16,
                },
                700: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                930: {
                    slidesPerView: 5,
                    spaceBetween: 30,
                },
                1400: {
                    slidesPerView: 6,
                    spaceBetween: 60,
                }
            },
            on: {
                init: function () {
                    const swiperSlide = swipers.querySelectorAll('.swiper-slide')
                    const total = swiperSlide.length;
                    let totalFloor = Math.floor(total / 2)
                    const swiperParent = swiperSlide.parentElement
                    this.slideTo(totalFloor)

                    swipers.addEventListener('mouseup', ()=> {
                        this.slideTo(totalFloor)
                    })
                },

            }
        });


    })
// start
    var customerSwiper = document.querySelector('.customer-swiper')
    if (customerSwiper) {
        var ctmSwiper = new Swiper(".ctmSwiper", {
            slidesPerView: 2,
            loop: true,
            speed: 1000,
            autoplay: {
                delay:2000,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
                375: {
                    slidesPerView: 3,
                    
                },
                600: {
                    slidesPerView: 4,
                    
                },
                800: {
                    slidesPerView: 5,
                    
                },
                1200: {
                    slidesPerView: 5,
                    
                }
            }
        });
        var ctmSwiper = new Swiper(".ctmSwiper-have-bg", {
            slidesPerView: 2,
            loop: true,
            speed: 1500,
            autoplay: {
                delay:2000,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: '.swiper-pagination-bg',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
                375: {
                    slidesPerView: 3,
                    
                },
                600: {
                    slidesPerView: 3,
                    
                },
                800: {
                    slidesPerView: 3,
                    
                },
                1200: {
                    slidesPerView: 4,
                    
                }
            }
        });
    }
    var feedbackSwiper = document.querySelector('.feedback-swiper');
    if (feedbackSwiper) {
        var fbSwiper = new Swiper(".fbSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            centeredSlides: true,
            initialSlide: 2,
            speed: 1000,
            autoplay: {
                delay:2000,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: '.swiper-pagination-fb',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
                375: {
                    slidesPerView: 1,
                    
                },
                600: {
                    slidesPerView: 2,
                    
                },
                800: {
                    slidesPerView: 3,
                    
                },
                1200: {
                    slidesPerView: 3,
                    
                }
            },
        });
    }
    var homeSwiper = document.querySelector('.home-bn');
    if (homeSwiper) {
        var hmSwiper = new Swiper(".hmSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            speed: 1000,
            effect: 'fade',
            autoplay: {
                delay:5000,
            },
            fadeEffect: {
                crossFade: false
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: '.swiper-pagination-bn',
                type: 'bullets',
                clickable: true,
            },
        });
    }
    var taskSwiper = document.querySelector('.task-swiper');
    if (taskSwiper) {
        var swiper = new Swiper(".taskSwiper", {
            slidesPerView: 1,
            speed: 1000,
            loop: true,
            autoplay: {
                delay:2000,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: '.swiper-pagination-bn',
                type: 'bullets',
                clickable: true,
            },
        });
    }

    var staffSwiper = document.querySelector('.staff-feedback-list');
    if (staffSwiper) {
        var swiper = new Swiper(".staff-list", {
            slidesPerView: 'auto',
            speed: 1000,
            autoplay: {
                delay:2000,
            },
            loop: true,
        });
    }
    var tabSwiper = document.querySelector ('.tabJS');
    if(tabSwiper) {
        var swiper = new Swiper ('.tab-list',{
            slidesPerView: 'auto',
            speed: 1000,
        })

    }
}

