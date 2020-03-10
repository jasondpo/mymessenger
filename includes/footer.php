
<div id="sendingMessage"></div>

<script src="assets/js/eyes.js"></script>
<script src="assets/js/main.js"></script>

<script >

 // Logout   
    $("h13 span").click(function(){
        $("#logOut").click();
    })
// Post message with jquery
    $('.post-Form').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            type: 'post',
            url: 'function.php',
            data: $('.post-Form').serialize(),
            success: function () {
                $(".postField-message").val("");
                sendingMessage();
            }
        });
    });

// Sending message animation
var sending = [
    "Sending",
    "Sending.",
    "Sending..",
    "Sending...",
    "Please refresh this page"
]

var t = 0
var u = 0
var sendPending;

function sendingMessage() {
    sendPending = setInterval(function () {
        t++
        if (t == 4) { t = 0; u++ }
        $("#sendingMessage").html(sending[t]);
    }, 500);
}

// Stop sending animation
var audio = new Audio('assets/sound/success.mp3');
function stopSendingMessage(){
    clearTimeout(sendPending);
    $("#sendingMessage").html("");   
    audio.play();
}

// Reset document title
$(".postField-message").focus(function(){
    document.title = "LyteChat";
    $(".overlay").removeClass("overlayMessage");
});

// Hide messenger
    $(window).focus(function(){
        $(".overlay").fadeOut(.25)
        $(".overlay").removeClass("overlayActive overlayMessage");
    })
    $(window).click(function(){
        $(".overlay").fadeOut(.25)
        $(".overlay").removeClass("overlayActive overlayMessage");
    })
    $(window).blur(function(){
        $(".overlay").fadeIn(.25)
    })

//////// Fun facts
var randFact="";
var facts = [
    "Fact #1: Jason was born at Nortons Hospital",
    "Fact #2: Jason's first car was a blue Chevrelet Scooter",
    "Fact #3: Jason's first kiss was during his senior year in high school",
    "Fact #4: Jason has lived in 6 different cities across 4 different states",
    "Fact #5: Jason's first crush was in 7th grade",
    "Fact #6: Jason worked at the Courier-Journal as graphic designer",
    "Fact #7: Jason has never been to court or jail",
    "Fact #8: Jason owns a MacBook Pro, Mac Mini and two iPads",
    "Fact #9: Jason has never travled outside of the country",
    "Fact #10: Jason considered making adult entertainment media"
]

$(".blue").mouseover(function () {
    randFact = Math.floor((Math.random() * 10) + 1);
    $("#factBox").html(facts[randFact]);
})
$(".blue").mouseleave(function () {
    $("#factBox").html("");
})
</script>

</body>
</html>