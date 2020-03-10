
<?php include "includes/header.php"; ?>


<div id="factBox"></div>
<header>
    <div class="glasses"></div>
    <div class='eyes-container'>
        <div class='eye'></div>
        <div class='eye'></div>
    </div>
</header>

<div class="logo"></div>

<div class="main-container">
    <form action="main.php" class="userBtn-container" method="POST">
        <div class="userBtn blue">
            <input type="radio" id="jason" name="user" style="display:none" value="Jason">
            <label for="jason" id="jasonLabel"><h12>Jason</h12></label>
        </div>
        <div class="userBtn pink">
        <input type="radio" id="lauren" name="user" style="display:none" value="Lauren">
        <label for="lauren" id="laurenLabel"><h12>Lauren</h12></label>
        </div>
        <input type="submit" name="userSubmitBtn" id="userSubmitBtn" style="display:none">
    </form>
</div>   

<section class="move-area"></section>

<script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
    }

    $(document).ready(function() {
        $("#jasonLabel, #laurenLabel").click(function(){
            setTimeout(function(){$("#userSubmitBtn").click();},250)
        })
    })    
</script>


<?php include "includes/footer.php"; ?>

