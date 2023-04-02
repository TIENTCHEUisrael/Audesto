                   
$(document).ready(function() {
    $("#formClient").submit(function(e) {
    // Empêche le formulaire de se soumettre naturellement
    e.preventDefault();

    // Récupération des valeurs des champs de formulaire
    var nom = $("#nom").val();
    var prenom = $("#prenom").val();
    var email = $("#email").val();
    var telephone = $("#telephone").val();
    var adresse = $("#adresse").val();

    // Validation des champs de formulaire avant l'envoi du formulaire
    if (nom === "" || prenom === "" || email === "" || telephone === "" || adresse === "") {
        alert("Veuillez remplir tous les champs du formulaire");
    } else {
        // Si tous les champs de formulaire sont remplis, envoie du formulaire (en utilisant l'API Fetch)
        fetch("url-du-script-de-traitement.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json; charset=utf-8"
            },
            body: JSON.stringify({
                nom: nom,
                prenom: prenom,
                email: email,
                telephone: telephone,
                adresse: adresse
            })
        }).then(function(response) {
            return response.json();
        }).then(function(data) {
            // Affichage d'un message de confirmation que le client a été ajouté
            alert("Le client a été ajouté avec succès");
            // Réinitialisation des valeurs des champs de formulaire
            $("#nom").val("");
            $("#prenom").val("");
            $("#email").val("");
            $("#telephone").val("");
            $("#adresse").val("");
        }).catch(function(error) {
            console.error(error);
            alert("Une erreur s'est produite lors de l'ajout du client");
        });
    }
    });
});