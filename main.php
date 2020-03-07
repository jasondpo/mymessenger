<?php include "includes/header.php"; ?>
<?php echo $_SESSION["userID"]; ?>

    <div class="chatContainer">
        <div id="messageFader"></div>
        <div id="messageApp" class="chatContainer_message_holder"></div>

        <form action="main.php" class="post-Form" method="post" autocomplete="off">
            <input type="text" class="postField-message" name="userMessage" placeholder="Type a message..." >
            <input type="submit" value="Submit" name="addMessageBtn" class="submitBtn">    
        </form>

    </div>

<!-- Upadte messages on page load -->

<script>
    $(".postField-message").focus(function(){
        document.title = "MyChat";
    })
</script>

<?php include "includes/footer.php"; ?>

