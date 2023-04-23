let carteInput=document.getElementById("carte_bancaire");
var numbers = /^[0-9]+$/; 

function carteValidation() {
    
    if ( !carteInput.value.match(numbers)) {
        carteError2 = "Veuillez entrer un num de carte bancaire valide";
        carteValid2 = false;
        document.getElementById("carteEr").innerHTML = carteError2;
        return false;
    }
    document.getElementById("carteEr").innerHTML =
        "<p style='color:green'> Numéro du carte bancaire valide </p>";

    return true;
}

document.getElementById("email").addEventListener ('input',function(){
    var email = document.getElementById("email").value;
    var text = document.getElementById("text");
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; // C'est dans la description 

    if (email.match(pattern)) {
        text.innerHTML ="Votre addresse Mail est valide";
        text.style.color ="#00ff00"
    }else {
        text.innerHTML ="Votre addresse Mail est invalide";
        text.style.color ="red"
    }
    if (email == "") {
        text.innerHTML ="";
        text.style.color ="red"
    }

 }) 

 document.forms["ajout"].addEventListener("submit", function (e) {
    var inputs = document.forms["ajout"];
    let ids = [
        "erreur",
        "userEr",
        "produitEr",
        "mailEr",
        "carteEr"
        
    ];

   // ids.map((id) => (document.getElementById(id).innerHTML = "")); // reinitialiser l'affichage des erreurs

    let errors = false;

    //Traitement cas par cas
    if (!carteInput.value.match(numbers)) {
        errors = false;
        document.getElementById("carteEr").innerHTML =
            "Veuillez entrer un num de carte valid ! (seulement des nombres)";
    } else {
        errors = true;
    }  

    if (errors === false) {
        e.preventDefault();
    } else {
        alert("formulaire envoyé");
    }

}); 


