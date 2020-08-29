//Loading figure use to see if request id done
let loading = document.querySelector(".spinner-border");

//Ask request
httpRequest = new XMLHttpRequest();

//Name function for request
httpRequest.onreadystatechange = blog;

//Get the request with true to asynchronize
httpRequest.open('GET', 'https://oc-jswebsrv.herokuapp.com/api/articles', true);
httpRequest.send();

//launch blog Information
function blog() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {      
        if (httpRequest.status === 200) {
            loading.classList.add("d-none");
            let blog = JSON.parse(httpRequest.response)
            showBlog(blog);
        } else {
            console.log("en attente");
        }
    } else {
        console.log("en attente");
    }
}
 
function showBlog(dataBlog) {
    for(let i=0; i < dataBlog.length; i++) {
        for(let prop in dataBlog[i]) {
            let articleListe = document.createElement("li");
            document.querySelectorAll(".list-group")[i].appendChild(articleListe);
            articleListe.classList.add("list-group-item");
            articleListe.innerText = prop + ' = ' + dataBlog[i][prop];
            articleListe.style.textAlign = "center";
        }
    }
}
