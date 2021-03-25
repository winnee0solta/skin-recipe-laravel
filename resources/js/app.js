var $ = require("jquery");
require("popper.js");
require("bootstrap");
require("daemonite-material");
require("slick-carousel");

$(function () {
    //mobile mode
    if ($("#homeslider--ds1")[0]) {
        $("#homeslider--ds1").slick({
            arrows: false,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            cssEase: "linear",
            speed: 500,
            autoplay: true,
            autoplaySpeed: 2000,
            pauseOnHover: false,
        });
    }

});
