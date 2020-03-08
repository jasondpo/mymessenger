
<script src="assets/js/main.js"></script>
<script src="assets/js/sendingMessage.js"></script>

<script >
    // setTimeout(() => {
    //     showMessages();
    // }, 1000);

// prevent form resubmission on refresh
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

    $('.post-Form').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            type: 'post',
            url: 'function.php',
            data: $('.post-Form').serialize(),
            success: function () {
                $(".postField-message").val("");
                showMessages();
            }
        });
    });

</script>

</body>
</html>