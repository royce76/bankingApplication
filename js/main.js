let buttonLayer = document.getElementById("buttonLayer");

buttonLayer.addEventListener("click", function() {
    document.getElementById("divLayer").style.display = "none";
});

//Loading figure use to see if request id done
let loading = document.querySelector(".spinner-border");

//Ask request
httpRequest = new XMLHttpRequest();

//Name function for request
httpRequest.onreadystatechange = security;

//Get the request with true to asynchronize
httpRequest.open('GET', 'main.json', true);
httpRequest.send();

//launch bourseInformation
function security() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {      
        if (httpRequest.status === 200) {
            loading.classList.add("d-none");
            let security = JSON.parse(httpRequest.response)
            showMessage(security);
        } else {
            console.log("en attente");
        }
    } else {
        console.log("en attente");
    }
}

function showMessage(data) {
    let messageSecurity = document.getElementById("messageSecurity");
    messageSecurity.innerText = data["alert"];
}
