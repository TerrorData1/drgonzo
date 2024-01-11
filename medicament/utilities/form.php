<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"/>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

<section class="py-5 ">
<h2 class="d-flex justify-content-center">Formulaire de contact</h2>
<div class="container g-0">
    <form class="row text-uppercase">
        <div class="col-lg-7 mb-4">
            <div class="form-floating">
                <input type="text" class="form-control border-1 rounded-0 bg-lightgrey" name="nom" id="lname"
                    placeholder="Votre nom" required>
                <label for="lname" class="p-start-5">Votre nom</label>
                <div class="invalid-feedback">
                    Veuillez saisir votre nom.
                </div>
            </div>
        </div>

        <div class="col-lg-5 mb-4">
            <div class="form-floating">
                <input type="text" class="form-control border-1  rounded-0 bg-lightgrey" name="prenom" id="fname"
                    placeholder="Votre prénom" required>
                <label for="fname">Votre prénom</label>
                <div class="invalid-feedback">
                    Veuillez saisir votre prénom.
                </div>
            </div>
        </div>

        <div class="col-lg-5 mb-4">
            <div class="form-floating">
                <input type="tel" class="form-control border-1 rounded-0 bg-lightgrey" name="tel" id="tel"
                    placeholder="Votre téléphone" required>
                <label for="tel">Votre téléphone</label>
                <div class="invalid-feedback">
                    Veuillez saisir un numéro de téléphone valide.
                </div>
            </div>
        </div>

        <div class="col-lg-7 mb-4">
            <div class="form-floating">
                <input type="email" class="form-control border-1 rounded-0 bg-lightgrey" name="email" id="emailInput"
                    placeholder="Votre email" required>
                <label for="emailInput">Votre email</label>
                <div class="invalid-feedback">
                    Veuillez saisir un email valide.
                </div>
            </div>
        </div>

        <div class="col-12 mb-4">
            <div class="form-floating">
                <input type="text" class="form-control border-1 rounded-0 bg-lightgrey" name="sujet" id="subject"
                    placeholder="Sujet" required>
                <label for="subject">Sujet</label>
                <div class="invalid-feedback">
                    Veuillez saisir un sujet dans le champ de texte
                </div>
            </div>
        </div>

        <div class="col-12 mb-4-custom">
            <div class="form-floating">
                <textarea class="form-control border-1 rounded-0 bg-lightgrey"
                    placeholder="Votre message" name="msg" id="message" required></textarea>
                <label for="message">Votre message</label>
                <div class="invalid-feedback">
                    Veuillez saisir un message dans la zone de texte.
                </div>
            </div>
        </div>

        <div class="col-12 bg d-flex justify-content-center mt-5">
            <button
                class="btn btn-lg button-hover-gold border-1 rounded-0 text-uppercase fw-bolder px-5 bg-info " name="sub"
                type="submit">Envoyer</button>
        </div>
    </form>
</section>


</body>
</html>
