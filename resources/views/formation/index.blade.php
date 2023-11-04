<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDAFAL 68 - Site des formations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <style>
        .lists li:not(:first-child) {
            border-top: 1px solid rgb(0 0 0 / 0.3);
            padding-top: 2rem;
        }

        .lists {
            display: grid;
            grid-auto-flow: column;
            grid-auto-columns: 1fr;
            column-gap: 1em;

            max-width: 70ch;
            margin-inline: auto;
            padding: 2rem;
            border-radius: 1em;
        }

        .lists li {
            padding-left: 0.5em;
        }

        .lists li:not(:first-child) {
            border-top: 1px solid rgb(0 0 0 / 0.3);
            padding-top: 2rem;
        }

        .lists li:not(:last-child) {
            padding-bottom: 2rem;
        }

        .lists li::marker {
            content: "✔";
            font-size: 0.85em;
        }

        .lists ul {
            margin: 0;
            border-radius: 1rem;
            padding: 2em;
        }

        .lists ul:first-child {
            background: hsl(250 25% 50% / 0.2);
        }

        .lists ul:last-child {
            background: hsl(125 25% 50% / 0.2);
        }

        @media (min-width: 60em) {
            .grid-auto-flow {
                grid-auto-flow: column;
                grid-auto-columns: 1fr;
            }
        }

        .container > ul   {
            width: fit-content;
            background-color: #eebb67;
            color:black;
            /*border:1px solid black;*/
            margin:0 auto;
            padding:2rem;
            border-radius: .5rem;
            margin-bottom: 70px;
            box-shadow:rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;;
        }
        .container > ul li{
            list-style: none;
            margin-bottom: 10px
        }

        .container>ul>li{
            /*border:3px solid green;*/
        }

        .container>ul>li>span {
            padding:0 .5rem;
            margin:0 .5rem;

        }

    </style>
</head>
<body>

<!-- navbar -->
@include('formation.layout.nav')

<!-- main image & intro text -->
<section id="intro">
    <div class="container-lg">
        <div class="row g-4 justify-content-center align-items-center">
            <div class="col-md-5 text-center text-md-start">
                <h1>
                    <div class="display-2 text-primary">Informations</div>
                    <div class="display-5 text-muted">Délais et modalités d'accès aux formations</div>
                </h1>
                <p class="lead my-4 text-muted text-start">
                    pour chaque demande de formation, notre association réalise un entretien physique avec le référent
                    pédagogique. Celui-ci effectuera un test de positionnement qui permettra d'évaluer les compétences
                    acquises et d'analyser les besoins.
                    Les modalités de la formation, les objectifs pédagogiques, les connaissances et le rythme sont
                    précisés</p>
                <a href="#contact" class="btn btn-secondary btn-lg" style="background-color: #C89A58;">Prendre RDV</a>

            </div>
            <div class="col-md-5 text-center d-none d-md-block">
                <!-- tooltip -->
                {{--<span class="tt" data-bs-placement="bottom" title="Couverture d'enregistrement CDAFAL68">
                    <img src="/images/register.png" class="img-fluid" alt="Image qui correspond au cours">
                </span>--}}
            </div>
        </div>
        @include('formation.layout.common-elements.handicap_alert')


        <div class="alert alert-info d-flex align-items-center my-5" role="alert" style="">

            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48" fill="currentColor"
                 class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2 fs-1"  role="img">
                <path d="M360-860v-60h240v60H360Zm90 447h60v-230h-60v230Zm30 332q-74 0-139.5-28.5T226-187q-49-49-77.5-114.5T120-441q0-74 28.5-139.5T226-695q49-49 114.5-77.5T480-801q67 0 126 22.5T711-716l51-51 42 42-51 51q36 40 61.5 97T840-441q0 74-28.5 139.5T734-187q-49 49-114.5 77.5T480-81Zm0-60q125 0 212.5-87.5T780-441q0-125-87.5-212.5T480-741q-125 0-212.5 87.5T180-441q0 125 87.5 212.5T480-141Zm0-299Z"/>
            </svg>
            <div class="">
                Le délai d'accès aux formations tient compte de l'ensemble de ces formalités ; il est de 15 jours avant
                le début de l'action.
            </div>
        </div>
        <div class="alert alert-info d-flex align-items-center my-5" role="alert" style="">

            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48" fill="currentColor"
                 class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2 fs-1" role="img">
                <path d="M319-250h322v-60H319v60Zm0-170h322v-60H319v60ZM220-80q-24 0-42-18t-18-42v-680q0-24 18-42t42-18h361l219 219v521q0 24-18 42t-42 18H220Zm331-554v-186H220v680h520v-494H551ZM220-820v186-186 680-680Z"/>
            </svg>
            <div class="">
                <p><span class="fw-bold">Une convocation est envoyée dans les 5 jours ouvrés maximum</span><br>
                    Elle précisera notamment le plan d'accès, le transport et le rythme de la formation pour respecter
                    au mieux les disponibilités du stagiaire</p>
            </div>
        </div>
    </div>
</section>

<!-- Déroulé de la formation... -->
<section id="topics">
    <div class="container-md">
        <div class="text-center">
            <h2>Déroulé de la formation...</h2>
        </div>
        <div class="row my-5 g-5 justify-content-around align-items-center">
            <div class="col-6 col-lg-4">
                <img src="/images/deroule.jpg" class="img-fluid" alt="ebook">
            </div>
            <div class="col-lg-6">

                <!-- accordion -->
                <div class="accordion" id="chapters">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#chapter-1" aria-expanded="true" aria-controls="chapter-1"
                                    style="background-color: #C89A58;">
                                En début de formation
                            </button>
                        </h2>
                        <div id="chapter-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                             data-bs-parent="#chapters">
                            <div class="accordion-body">
                                <h6>Le stagiaire reçoit</h6>
                                <ul>
                                    <li>Le livre d'accueil</li>
                                    <li>Le programme</li>
                                    <li>Le planning</li>
                                    <li>Le règlement intérieur</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#chapter-2" aria-expanded="false" aria-controls="chapter-2"
                                    style="background-color: #C89A58;">
                                Pendant la formation
                            </button>
                        </h2>
                        <div id="chapter-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                             data-bs-parent="#chapters">
                            <div class="accordion-body">
                                <h6>L'évaluation des acquis permet de</h6>
                                <ul>
                                    <li>Mesurer la progression individuelle et collective</li>
                                    <li>Permettre des actions correctives</li>
                                    <li>Atteindre les objectifs pédagogiques</li>
                                </ul>
                            </div>
                            <div class="accordion-body">
                                <h6>L'accompagnement pédagogique individualisé pour</h6>
                                <ul>
                                    <li>Favoriser les apprentissages</li>
                                    <li>Maintenir la motivation</li>
                                </ul>
                            </div>
                            <div class="accordion-body">
                                <h6>Le stagiaire reçoit</h6>
                                <ul>
                                    <li>Des supports de cours en ligne et papier</li>
                                    <li>Des grilles de compétences</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#chapter-3" aria-expanded="false" aria-controls="chapter-1"
                                    style="background-color: #C89A58;">
                                En fin de formation
                            </button>
                        </h2>
                        <div id="chapter-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                             data-bs-parent="#chapters">
                            <div class="accordion-body">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                    sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                    tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                    sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                    tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Nos formations -->
<h2 class="text-center">Nos formations</h2>
<div class="grid-auto-flow">
    <div class="lists">
        <ul class>
            <li>Les formateurs alternent théories et ateliers pratiques en privilégiant une pédagogie active et participative </li>
            <li>Les formations se deroulent généralement sur une journée par petits groupes de 5 à 10 participants maximum</li>
            <li>Les formations programmées sont dispensées dans nos locaux au <strong>3, rue Georges Risler 68100 Mulhouse</strong> ainsi qu'au Carré des Associations au <strong>100 Avenue de Colmar à Mulhouse</strong> </li>
        </ul>
    </div>
</div>


<!-- pricing plans -->
<section id="pricing" class="bg-light mt-5">
    <div class="container-lg">
        <div class="text-center">
            <h2>Une possibilité de prise en charge</h2>
            <p class="lead text-muted">Procédure pour une demande de prise en charge de vos formations par OPCO
                (Opérateur de compétence)</p>
        </div>

        <div class="row my-5 g-0 align-items-center justify-content-center">
            <div class="col-8 col-lg-4 col-xl-3">
                <div class="card ">
                    <img src="/images/stairs.png" class="card-img-top embed-responsive-item card-header" alt="">
                    <div class="card-body text-center py-4">
                        <p class="card-text mx-5  d-none d-lg-block">Joindre à l'Opco le programme de formation
                            contenant:</p>
                        <ul class="text-start text-muted">
                            <li>Les objectifs</li>
                            <li>Le public</li>
                            <li>Le contenu</li>
                            <li>Les modalités d'évaluation</li>
                            <li>Le lieu</li>
                            <li>La date et le coût de la formation</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-9 col-lg-4 ">
                <div class="card border-secondary border-2">
                    <img src="/images/profile search.png" class="card-img-top embed-responsive-item card-header" alt="">
                    <div class="card-body text-center py-4">
                        <p class="card-text mx-5  p-5 d-none d-lg-block">L'OPCO peut valider ou non la prise en charge
                            néanmoins si la formation rentre dans le cadre de votre plan de la formation celle-ci sera
                            automatiquement prise en charge sous réserve des documents administratifs</p>
                    </div>
                </div>
            </div>


            <div class="col-8 col-lg-4 col-xl-3">
                <div class="card border-0">
                    <img src="/images/validation list.png" class="card-img-top embed-responsive-item card-header"
                         alt="">
                    <div class="card-body text-center py-4">
                        <p class="card-text mx-5  d-none d-lg-block">Vous devrez par la suite fournir les justificatifs
                            post formation</p>
                        <ul class="text-start text-muted">
                            <li>Feuilles de présence</li>
                            <li>Attestation de formation,...</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- end container -->
</section>

<!-- contact form -->
<section id="contact">
    <div class="container-lg">

        <div class="text-center">
            <h2>Nous contacter</h2>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-lg-6">
                <form method="POST" action="{{ route('prompt.store') }}">
                    @csrf
                    {{--Email--}}
                    <label for="email" class="form-label">Adresse email:</label>
                    <div class="input-group mb-4">
                        <span class="input-group-text">
                            <i class="bi bi-envelope-fill text-secondary"></i>
                        </span>
                        <input type="text" id="email" class="form-control" placeholder="e.g. mario@example.com" name="email" style="background-color: #E8D9B5; color: #CB5A28;"/>
                        <!-- tooltip -->
                        <span class="input-group-text">
                            <span class="tt" data-bs-placement="bottom" title="Entrez une adresse e-mail à laquelle nous pouvons vous répondre">
                                <i class="bi bi-question-circle text-muted"></i>
                            </span>
                        </span>
                    </div>

                    {{--Prenom--}}
                    <label for="family_name" class="form-label">Nom de famille:</label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text">
                            <i class="bi bi-person-fill text-secondary"></i>
                        </span>
                        <input type="text" id="family_name" class="form-control"  name="family_name" style="background-color: #E8D9B5; color: #CB5A28;"/>
                        <!-- tooltip -->
                        <span class="input-group-text">
                            <span class="tt" data-bs-placement="bottom" title="Votre nom de famille (Obligatoire).">
                                <i class="bi bi-question-circle text-muted"></i>
                            </span>
                        </span>
                    </div>
                    <label for="first_name" class="form-label">Prénom:</label>
                    <div class="mb-4 input-group">
                        <span class="input-group-text">
                            <i class="bi bi-person-fill text-secondary"></i>
                        </span>
                        <input type="text" id="first_name" class="form-control"  name="first_name" style="background-color: #E8D9B5; color: #CB5A28;"/>
                        <!-- tooltip -->
                        <span class="input-group-text">
                            <span class="tt" data-bs-placement="bottom" title="Votre prénom (Obligatoire).">
                                <i class="bi bi-question-circle text-muted"></i>
                            </span>
                        </span>
                    </div>
                    <select class="form-select" id="request_type" name="request_type" style="background-color: #E8D9B5; color: #CB5A28;">
                        <option value="1" selected>Requêtes sur les contributions</option>
                        <option value="2">Requête de contenu de nos formations</option>
                        <option value="3">Requête sur l'association (CDAFAL68)</option>
                        <option value="4">Demande de préinscription</option>
                        <option value="5">Autres</option>
                    </select>
                    {{--Request body--}}
                    <div class="mb-4 mt-5 form-floating">
                        <textarea class="form-control" id="query" style="height: 140px; background-color: #E8D9B5; color: #CB5A28;" placeholder="query" name="description"></textarea>
                        <label for="query">Votre requête...</label>
                    </div>
                    <div class="mb-4 text-center">
                        <button type="submit" class="btn btn-secondary" style="background-color: #C89A58;">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<!-- Contact -->
<div class="container">
    <ul>
        <li><span class="material-symbols-outlined">phone_in_talk</span><span>Par téléphone au 03 89 42 85 20</span></li>
        <li><span class="material-symbols-outlined">date_range</span><span>Du lundi au vendredi</span></li>
        <li><span class="material-symbols-outlined">schedule</span><span>De 9h à 11h30 et de 14h à 17h (le vendredi jusqu'à 16h)</span></li>
        <li><span class="material-symbols-outlined">alternate_email</span><span>Par email : <a href="mailto:cdafal.asl@hotmail.fr">cdafal.asl@hotmail.fr</a></span></li>
    </ul>
</div>




<!-- get updates / modal trigger -->
@include('formation.layout.common-elements.footer')

<!-- side panel / offcanvas -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebar-label">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebar-label">My Other Books</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="#">Mastering CSS</a></li>
            <li class="list-group-item"><a href="#">JavaScript for Beginners</a></li>
            <li class="list-group-item"><a href="#">The HTML5 Guide</a></li>
            <li class="list-group-item"><a href="#">Responsive Web Design</a></li>
        </ul>
    </div>
</div>

<!-- bootstrap js & dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+df2RoqX6zK1ptTf5gPn4lFfEG6Bwl0tqF5I8KS8Xl5Tz5I1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJl5q4C5F5F5F5F5F5F5F5" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
<script>
    const tooltips = document.querySelectorAll('.tt')
    tooltips.forEach(t => {
        new bootstrap.Tooltip(t)
    })
</script>

</body>

</html>
