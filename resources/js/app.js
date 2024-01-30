import './bootstrap';
import "bootstrap";
import "./hamburgerMenu";
import "./showAd";
import "./iframeChat";
import "./password";
import "./them";

// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

// init Swiper:
const swiper = new Swiper('.my_swiper',{
    slidesPerView: 3,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
});
