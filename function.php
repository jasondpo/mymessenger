<?php
session_start();

//  Create Session 
if(isset($_POST["userSubmitBtn"])){  
    session_start(); 
    $_SESSION["userID"]=$_POST["user"];  
}

//  Destroy Session 
if (isset($_POST["logOut"])){ 
    session_destroy();
}

// Add new information to messages.json 
    $json2 = file_get_contents("assets/js/messages.json");
    $data2 = json_decode($json2, true);
    date_default_timezone_set("America/New_York");
    $timeStamp =  date("D g:i a");

    if($_SESSION["userID"]=="Jason"){
        $profile="assets/images/Jason.jpg";
    }else{
        $profile="assets/images/Lauren.jpg";
    }

    if($_POST['userMessage']!=null){
        $message2 = $_POST['userMessage'];
        $name2 = $_SESSION["userID"];
        $newData2 = array('profile' => $profile,'name' => $name2, 'time' => $timeStamp, 'message' => $message2);

        if(end($data2)!= $newData2){
            $data2 = array_merge($data2, array($newData2));        
            file_put_contents('assets/js/messages.json', json_encode($data2, JSON_FORCE_OBJECT));
        }
    }

//  Delete index 0 upon index 21 is submitted
    $json = file_get_contents("assets/js/messages.json");
    $data = json_decode($json, true);

        if(count($data)>=21){
            unset($data[0]);
        };      
    file_put_contents('assets/js/messages.json', json_encode($data, JSON_FORCE_OBJECT));
  ?>

<script>
if ( window.history.replaceState ) {
window.history.replaceState( null, null, window.location.href );
}
</script>



