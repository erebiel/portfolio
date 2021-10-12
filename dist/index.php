<?php

$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != ''){
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        //Submit the form
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $userMsg = $_POST['msg'];

        $to = "isa@isasicotte.ca";
        $subject = "Contact de mon portfolio";

        $body = "";
        $body .= "De : ".$userName. "\r\n";
        $body .= "Courriel : ".$userEmail. "\r\n";
        $body .= "Message : ".$userMsg. "\r\n";

        mail($to, $subject, $body);

        $message_sent = true;
    } 
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121981593-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-121981593-1');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isabelle Sicotte | Intégratrice multimédia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&family=Quicksand:wght@300;400;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <div class="container-fluid container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#apropos">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#realisations">Réalisations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Expérience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header>

        <div class="container pt-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1">Salut, moi c'est Isabelle</h1>
                    <p class="lead fs-4">Je suis intégratrice multimédia et j'aspire à devenir <span
                            class="accent">développeuse web</span>. J'aime les chats, le café sucré,
                        trouver le&nbsp;; qui manque, la pluie, chercher sur le site de l'OQLF, mais surtout
                        <span class="accent">j'aime&nbsp;apprendre</span>.</p>
                    <ul class="nav list-unstyled display-6">
                        <li><a href="https://github.com/erebiel" target="_blank"><i class="bi bi-github"></i></a>
                        </li>
                        <li class="ms-3"><a href="https://www.linkedin.com/in/isabelle-sicotte/" target="_blank"><i
                                    class="bi bi-linkedin"></i></a></li>
                        <li class="ms-3"><a href="https://twitter.com/erebiel" target="_blank"><i
                                    class="bi bi-twitter"></i></a>
                        </li>

                    </ul>

                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                    <img class="rounded-lg-3" src="images/john-schnobrich-FlPc9_VocJ4-unsplash.jpg" alt="" width="720">
                </div>
            </div>
        </div>

    </header>
    <main>
        <section id="apropos">
            <div class="container px-4 py-5">
                <div class="row align-items-center g-lg-5 py-5">
                    <h2 class="display-5 fw-bold lh-1 mb-3"><a id="apropos"></a>À propos</h2>
                    <p>J’aime faire partie d’une équipe et sentir que j’y fait une différence, que
                        j’apporte quelque chose d’unique et d’essentiel. J’aime partager mon savoir, mais aussi
                        apprendre le plus que je peux de ceux qui m’entourent. Pour moi, apprendre en continu, c’est
                        ce qui me fait tripper. J’aime savoir comment les choses fonctionnent,toujours en mode solution,
                        j’aime trouver les bugs et les fautes d’ortographes!
                    </p>
                    <p>
                        J'ai plus de 13 ans d'expérience en intégration multimédia. J'ai récemment suivi un bootcamp en
                        ligne qui m'a permis de me mettre à jour dans les
                        différentes pratiques web. J'ai pu développer un projet en <span class="accent">NodeJS</span>,
                        réviser mes notions en
                        <span class="accent">HTML5, CSS3 et JavaScript</span>. J'ai appris à travailler avec <span
                            class="accent">gitHub, Bootstrap, MongoDB et
                            EJS</span>.
                    </p>
                </div>
            </div>
        </section>

        <section id="realisations">
            <div class="container px-4 py-5">
                <div class="row align-items-center g-lg-5 py-5">
                    <h2 class="display-5 fw-bold lh-1 mb-3"><a id="realisations"></a>Réalisations</h2>
                    <div class="card col-lg-4 col-md-6">
                        <img src="images/john-schnobrich-FlPc9_VocJ4-unsplash.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Réalisation 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Lien live</a>
                            <a href="#" class="card-link">Lien github</a>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6">
                        <img src="images/john-schnobrich-FlPc9_VocJ4-unsplash.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Réalisation 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Lien live</a>
                            <a href="#" class="card-link">Lien github</a>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6">
                        <img src="images/john-schnobrich-FlPc9_VocJ4-unsplash.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Réalisation 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Lien live</a>
                            <a href="#" class="card-link">Lien github</a>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6">
                        <img src="images/john-schnobrich-FlPc9_VocJ4-unsplash.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Réalisation 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Lien live</a>
                            <a href="#" class="card-link">Lien github</a>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6">
                        <img src="images/john-schnobrich-FlPc9_VocJ4-unsplash.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Réalisation 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Lien live</a>
                            <a href="#" class="card-link">Lien github</a>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6">
                        <img src="images/john-schnobrich-FlPc9_VocJ4-unsplash.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Réalisation 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Lien live</a>
                            <a href="#" class="card-link">Lien github</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="experience">
            <div class="container py-5">
                <div class="row py-5">
                    <h2 class="display-5 fw-bold lh-1 mb-3"><a id="experience"></a>Expérience</h2>
                    <div class="col-lg-8 pb-3">
                        <p><strong>Tourisme Montérégie - 2007 à 2021</strong><br />
                            Chargée de projet numérique / Gestionnaire des opérations / Webmestre</p>
                        <ul>
                            <li>Gestion et participation à 4 refonte de site web</li>
                            <li>Gestion des projets et des échéanciers dans Asana</li>
                            <li>Création d’outils de travail pour les membres de l’équipe</li>
                            <li>Intégration des contenus dans Wordpress et autre CMS</li>
                            <li>Graphisme et mise en page de documents corporatifs</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <p class="fw-bold">Compétences</p>
                        <ul>
                            <li>Minutieuse
                            <li>Débrouillarde</li>
                            <li>Diplomate</li>
                            <li>Autodidacte</li>
                            <li>Organisée et assidue</li>
                            <li>Grande capacité d’adaptation</li>
                            <li>Aptitude pour le contrôle-qualité</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container px-4 py-5">
                <div class="row align-items-center g-lg-5 py-5">
                    <h2 class="display-5 fw-bold lh-1 mb-3"><a id="contact"></a>Contact</h2>
                    

                        <?php 
                            if($message_sent):
                        ?>
                        <h3>Merci, votre message a bien été envoyé.</h3>

                        <?php 
                            else:
                        ?>

                    <p>N'hésitez pas à entrer en contact avec moi pour toute question, idée de projet ou pour collaborer
                        ensemble. </p>
                    <form id="contactform" action="index.php" method="POST">
                        <div class="row">
                            <div class="mb-4 col-6">
                                <label for="name" class="form-control-label fw-bold">Votre nom</label>
                                <input type=" text" class="form-control" name="name" id="name">
                            </div>
                            <div class="mb-4 col-6">
                                <label for="email" class="form-control-label fw-bold">Votre courriel</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-4 col-12">
                                <label for="msg" class="form-control-label fw-bold">Votre message</label>
                                <textarea class="form-control" name="msg" id="msg"></textarea>
                            </div>

                        </div>
                        <div class="align-items-center mb-4">
                            <button class="btn btn-blue btn-lg">Envoyer</button>
                        </div>
                    </form>
                    <?php 
                        endif;
                    ?>
                </div>
            </div>
        </section>
    </main>

    <div id="footer" class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
            <div class="col-md-4 d-flex align-items-center">

                &copy; 2021 Isabelle Sicotte
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a href="https://github.com/erebiel" target="_blank"><i class="bi bi-github"></i></a>
                </li>
                <li class="ms-3"><a href="https://www.linkedin.com/in/isabelle-sicotte/" target="_blank"><i
                            class="bi bi-linkedin"></i></a></li>
                <li class="ms-3"><a href="https://twitter.com/erebiel" target="_blank"><i class="bi bi-twitter"></i></a>
                </li>
            </ul>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>