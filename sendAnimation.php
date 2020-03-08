<?php include "includes/header.php"; ?>

<div id="sendingMessage"></div>

<script>
var sending = [
    "Sending",
    "Sending.",
    "Sending..",
    "Sending...",
    "Please refresh this page"
]

var t = 0
var u = 0

function sendingMessage() {
    var sendPending= setInterval(function () {
        t++
        if (t == 4) { t = 0; u++ }
        $("#sendingMessage").html(sending[t]);
    }, 500);
}

// function stopPending(){
//     clearTimeout(sendPending);  
// }

</script>


<?php include "includes/footer.php"; ?>
