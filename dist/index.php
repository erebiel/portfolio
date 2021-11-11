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
    <title>Isabelle Sicotte | Intégratrice web</title>
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
    <nav class="navbar navbar-expand-md navbar-light fixed-top" id="navbar-principale">
        <div class="container-fluid container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#apropos">&Agrave; propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#realisations">R&eacute;alisations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Exp&eacute;rience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item d-flex">
                        <a class="nav-link" href="index_en.php">EN</a>
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
                    <p class="lead fs-4">Je suis <span class="accent">int&eacute;gratrice web</span> et j'aspire à devenir d&eacute;veloppeuse web. 
                    J'aime les chats, trouver le&nbsp;; qui manque, les jeux d'&eacute;nigmes, mais surtout <span class="accent">j'aime&nbsp;apprendre</span>.</p>
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
                    <h2 class="display-5 fw-bold lh-1 mb-3">&Agrave; propos</h2>
                    <p>Mon int&eacute;r&ecirc;t pour le web remonte &agrave; l'apog&eacute;e d'Angelfire et Geocities. J'ai appris le HTML et le CSS avec l'aide de W3School 
                        à l'&eacute;poque et j'ai construit mes premiers sites web qui ne sont pas dignes de se retrouver dans mon portfolio! 
                        C'est tout de m&ecirc;me ce qui m'a pouss&eacute; vers une formation en <span class="accent">Techniques d'int&eacute;gration multim&eacute;dia</span> au Coll&egrave;ge de Maisonneuve.
                        Dipl&ocirc;me en main, j'ai accumul&eacute; plus de <span class="accent">13 ans d'exp&eacute;rience</span> sur le milieu du travail en tant qu'int&eacute;gratrice web et gestionnaire des op&eacute;rations.</p>

                        <p>J'ai r&eacute;cemment suivi un bootcamp en ligne qui m'a permis de me mettre &agrave; jour dans le d&eacute;veloppement web. J'ai pu d&eacute;velopper un projet en 
                            <span class="accent">Node.js</span>, r&eacute;viser mes notions en <span class="accent">HTML5, CSS3 et JavaScript</span>. J'ai appris &agrave; travailler avec 
                            <span class="accent">GitHub, Bootstrap 5, MongoDB, et Express</span>.</p>

                        <p>J'aime faire partie d’une équipe et sentir que j'y fait une diff&eacute;rence, que j'apporte quelque chose d'unique et d'essentiel. 
                            J'aime partager mon savoir, mais aussi apprendre le plus que je peux de ceux qui m’entourent. Pour moi, apprendre comment tout fonctionne, 
                            c'est ce qui me fait tripper. Toujours en mode solution, j'aime trouver les bugs et les fautes d’orthographes.</p>
                    </p>
                </div>
            </div>
        </section>

        <section id="realisations">
            <div class="container px-4 py-5">
                <div class="row g-lg-5 py-5">
                    <h2 class="display-5 fw-bold lh-1 mb-3">R&eacute;alisations</h2>
                    <div class="card col-lg-4 col-md-6">
                        <img src="images/project-yelpcamp.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">YelpCamp</h5>
                            <p class="card-text">Node.js, MongoDB, Express, d&eacute;ploiement sur Heroku</p>
                        </div>
                        <div class="card-body">
                            <a href="https://young-wave-24039.herokuapp.com/" class="card-link" target="_blank">Lien live</a>
                            <a href="https://github.com/erebiel/yelpcamp" class="card-link" target="_blank">Lien GitHub</a>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6">
                        <img src="images/project-djoo.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Djoo</h5>
                            <p class="card-text">Node.js, MongoDB, Express, d&eacute;ploiement sur Heroku</p>
                        </div>
                        <div class="card-body">
                            <a href="https://djoo-app.herokuapp.com/" class="card-link" target="_blank">Lien live</a>
                            <a href="https://github.com/erebiel/djoo" class="card-link" target="_blank">Lien GitHub</a>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6">
                        <img src="images/project-portfolio.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Portfolio</h5>
                            <p class="card-text">HTML5, Bootstrap 5, SASS, PHP&nbsp;(envoi de courriel)</p>
                        </div>
                        <div class="card-body">
                            <a href="https://github.com/erebiel/portfolio" class="card-link" target="_blank">Lien GitHub</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="experience">
            <div class="container py-5">
                <div class="row py-5">
                    <h2 class="display-5 fw-bold lh-1 mb-3">Exp&eacute;rience</h2>
                    <div class="col-lg-8 pb-3">
                        <p><strong>Tourisme Montérégie - 2007 à 2021</strong><br />
                            Gestionnaire des op&eacute;rations | Int&eacute;gratrice web</p>
                        <ul>
                            <li>Implantation d'un programme de gestion de t&acirc;ches (Asana) et gestion des projets et des &eacute;ch&eacute;anciers en collaboration avec les gestionnaires et employ&eacute;s</li>
                            <li>Cr&eacute;ation d'outils de travail collaboratif pour les membres de l'&eacute;quipe</li>
                            <li>Gestion de projet et int&eacute;gration de 4 refontes de site web</li>
                            <li>Int&eacute;gration des contenus dans Wordpress ou autre CMS</li>
                            <li>Graphisme et mise en page de documents corporatifs (rapport annuel, pr&eacute;sentation Powerpoint, etc.)</li>
                        </ul>
                        <p class="py-3"><strong>The Web Developer Bootcamp</strong> de Colt Steele (63,5h)<br />
                            Udemy, 2021</p>

                        <p class="py-3"><strong>DEC Techniques d'int&eacute;gration multim&eacute;dia</strong><br />
                            Coll&egrave;ge de Maisonneuve, 2006</p>
                    </div>
                    <div class="col-lg-4">
                        <p class="fw-bold">Forces et comp&eacute;tences</p>
                        <ul>
                            <li>Minutieuse et aptitude pour le contr&ocirc;le-qualit&eacute;</li>
                            <li>Organis&eacute;e et assidue</li>
                            <li>D&eacute;brouillarde et diplomate</li>
                            <li>Autodidacte et grande capactit&eacute; d'adaptation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container px-4 py-5">
                <div class="row align-items-center g-lg-5 py-5">
                    <h2 class="display-5 fw-bold lh-1 mb-3">Contact</h2>
                    <p>N'h&eacute;sitez pas &agrave; entrer en contact avec moi pour toute question, id&eacute;e de projet ou pour collaborer
                        ensemble. Vous pouvez le faire via les m&eacute;dias sociaux ou le formulaire de contact ci-bas.</p>
                    <ul class="nav list-unstyled display-5">
                        <li class="ms-3"><a href="https://github.com/erebiel" target="_blank"><i class="bi bi-github"></i></a></li>
                        <li class="ms-3"><a href="https://www.linkedin.com/in/isabelle-sicotte/" target="_blank"><i
                            class="bi bi-linkedin"></i></a></li>
                        <li class="ms-3"><a href="https://twitter.com/erebiel" target="_blank"><i class="bi bi-twitter"></i></a></li>
                    </ul>
                        

                        <?php 
                            if($message_sent):
                        ?>
                        <h3>Merci, votre message a bien &eacute;t&eacute; envoy&eacute;.</h3>

                        <?php 
                            else:
                        ?>

                    
                    <form id="contactform" action="index.php#contact" method="POST" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="mb-4 col-6">
                                <label for="name" class="form-control-label fw-bold">Votre nom</label>
                                <input type=" text" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="mb-4 col-6">
                                <label for="email" class="form-control-label fw-bold">Votre courriel</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="mb-4 col-12">
                                <label for="msg" class="form-control-label fw-bold">Votre message</label>
                                <textarea class="form-control" name="msg" id="msg" required></textarea>
                            </div>

                        </div>
                        <div class="align-items-center mb-4">
                            <button class="btn btn-mail btn-lg">Envoyer</button>
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
    <script src="js/formvalidation.js"></script>
</body>

</html>