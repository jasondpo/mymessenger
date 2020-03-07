
<?php include "includes/header.php"; ?>

<div class="main-container">
    <form action="main.php" class="userBtn-container" method="POST">
        <div class="userBtn jason">
            <input type="radio" id="jason" name="user" style="display:none" value="jason">
            <label for="jason" id="jasonLabel"><h12>Jason</h12></label>
        </div>
        <div class="userBtn lauren">
        <input type="radio" id="lauren" name="user" style="display:none" value="lauren">
        <label for="lauren" id="laurenLabel"><h12>Lauren</h12></label>
        </div>
        <input type="submit" name="userSubmitBtn" id="userSubmitBtn" style="display:none">
    </form>
</div>   

<script>
    $(document).ready(function() {
        $("#jasonLabel, #laurenLabel").click(function(){
            setTimeout(function(){$("#userSubmitBtn").click();},250)
        })
    })    
</script>


<?php include "includes/footer.php"; ?>

