let nameInput = document.getElementById("name");
let priceInput=document.getElementById("price");
var numbers = /^[0-9]+$/; 
var letters = /^[A-Za-z ]+$/; 



function priceValidation() {
    
    if ( !priceInput.value.match(numbers)) {
        priceError2 = "Veuillez entrer un prix valide ! (seulement des nombres)";
        priceValid2 = false;
        document.getElementById("priceEr").innerHTML = priceError2;
        return false;
    }
    document.getElementById("priceEr").innerHTML =
        "<p style='color:#00ff00'> Correct </p>";

    return true;
}
function nameValidation() {
    
    if (!nameInput.value.match(letters)) {
        nameError2 = "Veuillez entrer un nom valide ! (seulement des lettres)";
        nameValid2 = false;
        document.getElementById("nameEr").innerHTML = nameError2;
        return false;
    }
    document.getElementById("nameEr").innerHTML =
        "<p style='color:#00ff00'> Correct </p>";

    return true;
}

document.forms["ajout"].addEventListener("submit", function (e) {
    var inputs = document.forms["ajout"];
    let ids = [
        "error",
        "reference",
        "nameEr",
        "price",
        "pd_img"
        
    ];

  



    let errors = false;

    //Traitement cas par cas
    if (!nameInput.value.match(letters)) {
        errors = false;
        document.getElementById("nameEr").innerHTML =
            "Veuillez entrer un nom valide ! (seulement des lettres)";
    } else {
        errors = true;
    } 

    if( !priceInput.value.match(numbers)){
        errors = false;
        document.getElementById("priceEr").innerHTML =
            "Veuillez entrer un prix valide ! (seulement des nombres)";
    } else {
        errors = true;
    } 

if (errors === false) {
    e.preventDefault();
} else {
    alert("formulaire envoyé");
}
});