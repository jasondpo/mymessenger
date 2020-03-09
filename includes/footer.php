
<div id="sendingMessage"></div>

<script src="assets/js/main.js"></script>

<script >

// prevent form resubmission on refresh
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

// Sending animation
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

</script>

</body>
</html>