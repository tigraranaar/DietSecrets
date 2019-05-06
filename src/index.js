import * as $ from 'jquery';
import './styles/main.scss';
import "bootstrap";

$( document ).ready(function() {
    console.log('ready!');
});

$('#carousel-example222').on('slide.bs.carousel', function (e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item11').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            if (e.direction=="left") {
                $('.carousel-item11').eq(i).appendTo('.carousel-inner111');
            }
            else {
                $('.carousel-item11').eq(0).appendTo('.carousel-inner111');
            }
        }
    }
});    