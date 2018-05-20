
    var swiper = new Swiper('.swiper-container', {
      
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        // when window width is <= 320px
        320: {

          slidesPerView: 1,
          spaceBetween: 5
        },
        // when window width is <= 480px
        480: {

          slidesPerView: 1,
          spaceBetween: 20
        },
        // when window width is <= 640px
        640: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        1400:{
          slidesPerGroup : 3,
          slidesPerView: 3,
          slidesPerColumn: 2,
          spaceBetween: 60,
        }
    }

    });