
<div id="sendingMessage"></div>

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
    document.title = "inDobnito";
});

// Hide messenger
    $(window).focus(function(){
        $("#overlay").fadeOut(.25)
    })
    $(window).blur(function(){
        $("#overlay").fadeIn(.25)
    })
</script>

</body>
</html>