const rand = Math.floor((Math.random() * 10000) + 1);
var oldConvo = "";
var newConvo = "";
var lauren = "";

// this gets the initial length
window.onload = function () {
    $.getJSON("assets/js/messages.json" + "#" + rand, function (result) {
        var jsonStringInit = JSON.stringify(result);
        oldConvo = jsonStringInit.length;
        compareMessageLength();
    });
    showMessages(); // set this stop based on a url string
}

// this constantly compares the oldConvo with new
function compareMessageLength() {
    setTimeout(() => {
        $.getJSON("assets/js/messages.json" + "#" + rand, function (result) {
            var jsonStringUpdate = JSON.stringify(result);
            newConvo = jsonStringUpdate.length
            if (newConvo - oldConvo != 0) {
                oldConvo = newConvo;
                showMessages();
            }
            compareMessageLength();
        });
    }, 1000)
}


// Display messages
var pending = 0;
var laurenPos ="";
var jasonPos ="";
function showMessages() {
    pending++
    $("#messageApp").html("");
    $.getJSON("assets/js/messages.json" + "#" + rand, function (result) {
        var jsonStringUpdate = JSON.stringify(result);
        laurenPos = jsonStringUpdate.lastIndexOf("Lauren");
        jasonPos = jsonStringUpdate.lastIndexOf("Jason");
        $.each(result, function (i, data) {
            if (data.name == "Jason") {
                $("#messageApp").prepend("<div class='"+data.name+"'><div class='dateTime'>"+data.time+"</div><br/><div class='profilePic'></div><h10>" + data.message + "</h10></div>")
            }
            if (data.name == "Lauren") {
                $("#messageApp").prepend("</div><div class='Lauren'><div class='dateTime'>"+data.time+"</div><br/><div class='profilePic'></div><h11>" + data.message + "</h11></div>")
            }
        });
        if (pending > 1) {
            stopSendingMessage();
            showAlert();
        }
    });
}

// Show alert when message is recieved
var lastSender="";
var userID=$("#userID h13").html();
var userID = userID.charAt(0);
function showAlert() {
    if(jasonPos-laurenPos>=0){
        lastSender="J";
    }else{
        lastSender="L";
    }
    if(userID!=lastSender){
        document.title = "(1) inDobnito";
    }

    
}

