//Loading
let loading = document.querySelector(".spinner-border");

//Ask request
httpRequest = new XMLHttpRequest();

//Name function for request
httpRequest.onreadystatechange = bourseInformation;

//Get the request with true to asynchronize
httpRequest.open('GET', 'statistical.json', true);
httpRequest.send();

//launch bourseInformation
function bourseInformation() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {      
        if (httpRequest.status === 200) {
            loading.classList.add("d-none");
            let bourse = JSON.parse(httpRequest.response)
            console.log(bourse);
        } else {
            console.log("en attente");
        }
    } else {
        console.log("en attente");
    }
}

