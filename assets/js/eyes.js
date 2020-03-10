$(".move-area, .userBtn, header").mousemove(function (event) {
    var eye = $(".eye");
    var x = (eye.offset().left) + (eye.width() / 2);
    var y = (eye.offset().top) + (eye.height() / 2);
    var rad = Math.atan2(event.pageX - x, event.pageY - y);
    var rot = (rad * (180 / Math.PI) * -1) + 180;
    eye.css({
        '-webkit-transform': 'rotate(' + rot + 'deg)',
        '-moz-transform': 'rotate(' + rot + 'deg)',
        '-ms-transform': 'rotate(' + rot + 'deg)',
        'transform': 'rotate(' + rot + 'deg)'
    });
});

// Makes eyes blink
setInterval(function () {
    blink()
}, 200);

let x = 0;

function blink() {
    x++
    if (x == 30) {
        $('.eye').css("opacity", "0");
    }
    if (x == 31) {
        $('.eye').css("opacity", "1");
        x = 0
    }
}


////// Eyes disappear when cursor is innactive

let eyesActive = setTimeout(function () {
    $('.eye, .glasses').fadeOut();
}, 10000);

$(window).mousemove(function (e) {
    clearTimeout(eyesActive);
    $('.eye, .glasses').fadeIn();
    eyesActive = setTimeout(function () {
        $('.glasses, .eye').fadeOut();
    }, 10000);
});

////// Eyes turn colors

$(".blue").mouseover(function () {
    $(".eye").addClass("boyColor");
});
$(".blue").mouseleave(function () {
    $(".eye").removeClass("boyColor");
});

$(".pink").mouseover(function () {
    $(".eye").addClass("girlColor");
});
$(".pink").mouseleave(function () {
    $(".eye").removeClass("girlColor");
});


