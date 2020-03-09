<?php include "includes/header.php"; ?>
<div id="userID"><h13><?php echo $_SESSION["userID"]; ?>&nbsp;&nbsp;|&nbsp;&nbsp;<span>Logout</span></h13></div>

<?php 
    if($_SESSION["userID"] == null){
        echo '<script>window.location.href = "index.php"</script>';
    }
?>

<form action="index.php" method="POST">
    <input type="submit" name="logOut" id="logOut" style="display:none" value="LogOut">
</form>

    <div class="chatContainer">
        <div id="messageFader"></div>
        <div id="messageApp" class="chatContainer_message_holder"></div>

        <form action="main.php" class="post-Form" method="post" autocomplete="off" onsubmit="return pendingMessage()">
            <input type="text" class="postField-message" name="userMessage" placeholder="Type a message..." >
            <input type="submit" value="Submit" name="addMessageBtn" class="submitBtn">    
        </form>
    </div>


<?php include "includes/footer.php"; ?>

