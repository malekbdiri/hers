

let lReferenceError = document.getElementById("reference");
var numbers = /^[0-9]+$/; 

function referenceValidation() {
    if (lReferenceError.value.length < 2) {
        lReferenceError = " Le reference doit compter au minimum 2 nombres.";
        document.getElementById("referenceEr").innerHTML = lReferenceError;
        return false;

    }
    if (!lNameInput.value.match(letters)) {
        lReferenceError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
        lReferenceValid2 = false;
        document.getElementById("referenceEr").innerHTML = lReferenceError2;
        return false;
    }
    document.getElementById("referenceEr").innerHTML =
        "<p style='color:green'> Correct </p>";

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
        "referenceEr",
        "mailEr",
        "cPassEr",
        "erreur",
    ];



    //ids.map((id) => (document.getElementById(id).innerHTML = "")); // reinitialiser l'affichage des erreurs

    let errors = false;

    //Traitement cas par cas
    if (lreferenceInput.value.length < 2) {
        errors = false;
        document.getElementById("referenceEr").innerHTML =
            "Le nom doit compter au minimum 2 nombres.";
    } else if (!lReferenceInput.value.match(letters)) {
        errors = false;
        document.getElementById("referenceEr").innerHTML =
            "Veuillez entrer un reference valid ! (seulement des lettres)";
    } else {
        errors = true;
    }
    

    
    if (
        !(
            passInput.value.match(/[0-9]/g) &&
            passInput.value.match(/[A-Z]/g) &&
            passInput.value.match(/[a-z]/g) &&
            passInput.value.length >= 10
        )
    ) {
        errors = false;
        document.getElementById("passEr").innerHTML = "Mot de passe faible";
    } else {
        errors = true;
    }

    if (passInput.value != cPassInput.value) {
        errors = false;
        document.getElementById("cPassEr").innerHTML =
            "Les mots de passe ne correspondent pas";
    } else {
        errors = true;
    }

    //Traitement générique
    for (var i = 0; i < inputs.length; i++) {
        if (!inputs[i].value) {
            errors = false;
            document.getElementById("erreur").innerHTML =
                "Veuillez renseigner tous les champs";
        }
    }
    

    if (errors === false) {
        e.preventDefault();
    } else {
        alert("formulaire envoyé");
    }
});

