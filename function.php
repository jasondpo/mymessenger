<?php 
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
    if(isset($_POST["addMessageBtn"])){
        $json = file_get_contents("assets/js/messages.json");
        $data = json_decode($json, true);

        $message = $_POST['userMessage'];
        $name = "Lauren";
        $newData = array('name' => $name, 'message' => $message);
  
        if(end($data)!= $newData){
            $data = array_merge($data, array($newData));        
            file_put_contents('assets/js/messages.json', json_encode($data, JSON_FORCE_OBJECT));
        }
    }


//  Delete index 0 upon index 21 is submitted
    $json = file_get_contents("assets/js/messages.json");
    $data = json_decode($json, true);

        if(count($data)>=11){
            unset($data[0]);
        };      
    file_put_contents('assets/js/messages.json', json_encode($data, JSON_FORCE_OBJECT));
  ?>




