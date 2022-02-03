<?php

$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != ''){
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        //Submit the form
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $userMsg = $_POST['msg'];

        $to = "isa@isasicotte.ca";
        $subject = "Portfolio contact (EN)";

        $body = "";
        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Message: ".$userMsg. "\r\n";

        mail($to, $subject, $body);

        $message_sent = true;
    } 
}

?>


<!DOCTYPE html>
<html lang="en">

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
    <title>Isabelle Sicotte | Web Integrator</title>
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">FR</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container pt-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1">Hello! I'm Isabelle</h1>
                    <p class="lead fs-4">I am a <span class="accent">web integrator</span> and I aspire to become a web developer.
                    I like cats, finding the missing&nbsp;';', puzzle games, but above all, <span class="accent">I love to learn</span>.</p>
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
        <section id="about">
            <div class="container px-4 py-5">
                <div class="row align-items-center g-lg-5 py-5">
                    <h2 class="display-5 fw-bold lh-1 mb-3">About me</h2>
                    <p>My interest in the web goes back to the height of Angelfire and Geocities. I learned HTML and CSS with the help of W3School 
                        at the time and I built my first websites that are not worthy of being in my portfolio! All the same, it was what pushed me 
                        towards a formation in <span class="accent">Techniques d'intégration multimédia</span> at the Collège de Maisonneuve. 
                        Diploma in hand, I have accumulated close to <span class="accent">14 years of experience</span> in the workplace as a web integrator.
                    </p>
                    <p>I recently took an online bootcamp which allowed me to get up to speed in web development. I was able to develop a project in <span class="accent">Node.js</span>, 
                        revise my notions in <span class="accent">HTML5, CSS3 and JavaScript</span>. I also learned to work with <span class="accent">GitHub, Bootstrap 5, MongoDB, and Express</span>.</p>
                    <p>
                    I love being part of a team and feeling that I am making a difference, that I am bringing something unique and essential. 
                    I like to share my knowledge, but also to learn as much as I can from those around me. 
                    For me, learning how everything works is what I really love. Always in solution mode, I like to find bugs and spelling mistakes.
                    </p>
                    <p>Currently, I'm exploring: TailwindCSS, Vue, React, SASS/SCSS, Express, MongoDB, EJS, Node.JS</p>
                </div>
            </div>
        </section>

        <section id="projects">
            <div class="container px-4 py-5">

                <div class="row g-lg-5 py-5">
                    <h2 class="display-5 fw-bold lh-1 mb-3">Projects</h2>
                    <div class="card col-lg-4 col-md-6">
                        <a href="https://erebiel.ca/meet-landing-page" target="_blank"><img src="images/meet-landing-page.jpg" class="card-img" alt="Meet landing page - Frontendmentor.io"></a>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Meet landing page - Frontendmentor.io</h5>
                            <p class="card-text">HTML5, CSS</p>
                        </div>
                        <div class="card-body">
                            <a href="https://erebiel.ca/meet-landing-page" class="card-link" target="_blank">Live link</a>
                            <a href="https://github.com/erebiel/meet-landing-page" class="card-link" target="_blank">GitHub link</a>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6">
                        <a href="https://erebiel.ca/stat-preview-card" target="_blank"><img src="images/stat-preview-card.jpg" class="card-img" alt="Stat preview card - Frontendmentor.io"></a>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Stat preview card - Frontendmentor.io</h5>
                            <p class="card-text">HTML5, CSS</p>
                        </div>
                        <div class="card-body">
                            <a href="https://erebiel.ca/stat-preview-card" class="card-link" target="_blank">Live link</a>
                            <a href="https://github.com/erebiel/stat-preview-card" class="card-link" target="_blank">GitHub link</a>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6">
                        <a href="https://erebiel.ca/faq-accordion-card" target="_blank"><img src="images/faq-accordion-card.jpg" class="card-img" alt="FAQ accordion card - Frontendmentor.io"></a>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">FAQ accordion card - Frontendmentor.io</h5>
                            <p class="card-text">HTML5, SCSS</p>
                        </div>
                        <div class="card-body">
                            <a href="https://erebiel.ca/faq-accordion-card" class="card-link" target="_blank">Live link</a>
                            <a href="https://github.com/erebiel/faq-accordion-card" class="card-link" target="_blank">GitHub link</a>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6">
                        <a href="https://young-wave-24039.herokuapp.com/" target="_blank"><img src="images/project-yelpcamp.jpg" class="card-img" alt="YelpCamp (code-along)"></a>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">YelpCamp (code-along)</h5>
                            <p class="card-text">Node.JS, MongoDB, EJS, deployment on Heroku</p>
                        </div>
                        <div class="card-body">
                            <a href="https://young-wave-24039.herokuapp.com/" class="card-link" target="_blank">Live link</a>
                            <a href="https://github.com/erebiel/yelpcamp" class="card-link" target="_blank">GitHub link</a>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-md-6">
                        <img src="images/project-portfolio.jpg" class="card-img" alt="Portfolio">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Portfolio</h5>
                            <p class="card-text">HTML5, Bootstrap, SCSS</p>
                        </div>
                        <div class="card-body">
                            <a href="https://github.com/erebiel/portfolio" class="card-link" target="_blank">GitHub link</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="experience">
            <div class="container py-5">
                <div class="row py-5">
                    <h2 class="display-5 fw-bold lh-1 mb-3">Experience</h2>
                    <div class="col-lg-8 pb-3">
                        <p><strong>Tourisme Montérégie - 2007 to 2021</strong><br />
                        Webmaster/Web integrator</p>
                        <ul>
                            <li>Creation and implantation of websites and microsites on Wordpress</li>
                            <li>Integration of content into Wordpress or other CMS</li>
                            <li>Project management and integration of 4 website redesigns</li>
                            <li>Implementation of a task management program (Asana) and management of projects and deadlines in collaboration with managers and employees</li>
                            <li>Creation of collaborative work tools for team members</li>
                            <li>Graphic design and layout of corporate documents (annual report, Powerpoint presentation, etc.)</li>
                        </ul>
                        <p class="py-3"><strong>The Web Developer Bootcamp</strong> by Colt Steele (63.5h)<br />
                            Udemy, 2021</p>
                        <p class="py-3"><strong>DEC Techniques d'intégration multimédia</strong><br />
                            Collège de Maisonneuve, 2006</p>
                    </div>
                    <div class="col-lg-4">
                        <p class="fw-bold">Strengths and skills</p>
                        <ul>
                            <li>Meticulous and aptitude for quality control</li>
                            <li>Organized and diligent</li>
                            <li>Resourceful and diplomat</li>
                            <li>Self-taught and great ability to adapt</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container px-4 py-5">
                <div class="row align-items-center g-lg-5 py-5">
                    <h2 class="display-5 fw-bold lh-1 mb-3">Contact</h2>
                    <p>Do not hesitate to get in touch with me for any question, project idea or to collaborate together. You can do this via social media or the contact form below.</p>
                    <ul class="nav list-unstyled display-5">
                        <li class="ms-3"><a href="https://github.com/erebiel" target="_blank"><i class="bi bi-github"></i></a></li>
                        <li class="ms-3"><a href="https://www.linkedin.com/in/isabelle-sicotte/" target="_blank"><i
                            class="bi bi-linkedin"></i></a></li>
                        <li class="ms-3"><a href="https://twitter.com/erebiel" target="_blank"><i class="bi bi-twitter"></i></a></li>
                    </ul>
                        

                        <?php 
                            if($message_sent):
                        ?>
                        <h3>Thank you! Your message have been sent.</h3>

                        <?php 
                            else:
                        ?>

                    
                    <form id="contactform" action="index.php#contact" method="POST" class="needs-validation" novalidate>
                        <div class="row">
                            <div class="mb-4 col-6">
                                <label for="name" class="form-control-label fw-bold">Your name</label>
                                <input type=" text" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="mb-4 col-6">
                                <label for="email" class="form-control-label fw-bold">Your email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="mb-4 col-12">
                                <label for="msg" class="form-control-label fw-bold">Your message</label>
                                <textarea class="form-control" name="msg" id="msg" required></textarea>
                            </div>

                        </div>
                        <div class="align-items-center mb-4">
                            <button class="btn btn-mail btn-lg">Send</button>
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
                &copy; 2022 Isabelle Sicotte
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