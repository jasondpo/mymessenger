
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
            if (newConvo - oldConvo != 0) {
                oldConvo = newConvo;
                showMessages();
                showAlert();
            }
            compareMessageLength();
        });
    }, 1000)
}

// Show alert when message is recieved
function showAlert() {
    document.title = "(1) MyChat";
}

// Display messages
function showMessages() {
    $("#messageApp").html("");
    $.getJSON("assets/js/messages.json" + "#" + rand, function (result) {
        var jsonStringUpdate = JSON.stringify(result);
        lauren = jsonStringUpdate.lastIndexOf("Lauren");

        $.each(result, function (i, data) {
            if (data.name == "Jason") {
                $("#messageApp").prepend("<div class='text-right'><h10>" + data.name + " " + data.message + "</h10></div>")
            }
            if (data.name == "Lauren") {
                $("#messageApp").prepend("<div class='text-left'><h11>" + data.name + " " + data.message + "</h11></div>")
            }
        });
    });
}
