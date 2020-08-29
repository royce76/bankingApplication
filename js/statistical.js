//Loading figure use to see if request id done
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
            show(bourse);
        } else {
            console.log("en attente");
        }
    } else {
        console.log("en attente");
    }
}
//function to show details from the variable bourse.
function show(data) {
    for(let preciseData in data) {
        if(preciseData === "Taux Emprunt") {
            for(let prop in data[preciseData]) {
                let emprunt = document.createElement("li");
                document.getElementById("taux").appendChild(emprunt);
                emprunt.classList.add("list-group-item");
                emprunt.innerText = prop + ' = ' + data[preciseData][prop] + '.';
                emprunt.style.textAlign = "center";    
            } 
        }
        else if(preciseData === "Cours de la Bourse") {
            for(let prop in data[preciseData]) {
                let bourseData = document.createElement("li");
                document.getElementById("coursDeLaBourse").appendChild(bourseData);
                bourseData.classList.add("list-group-item");
                bourseData.innerText = prop + ' = (' + data[preciseData][prop][0] + ', ' + data[preciseData][prop][1] +').' ;    
                bourseData.style.textAlign = "center";
            } 
        }
        if(preciseData === "Cours de la monnaie") {
            for(let prop in data[preciseData]) {
                let monnaie = document.createElement("li");
                document.getElementById("CoursDeLaMonnaie").appendChild(monnaie);
                monnaie.classList.add("list-group-item");
                monnaie.innerText = prop + ' = ' + data[preciseData][prop] + '.';
                monnaie.style.textAlign = "center";    
            } 
        } 
    }
}