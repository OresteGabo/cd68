<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDAFAL 68 - Site des formations</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        section {
            padding: 60px 0;
        }
    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
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
                    <div class="display-2">Inscription</div>
                    <div class="display-5 text-muted">Délais et modalités d'accès aux formations</div>
                </h1>
                <p class="lead my-4 text-muted text-start">
                    pour chaque demande de formation, notre association réalise un entretien physique avec le référent
                    pédagogique. Celui-ci effectuera un test de positionnement qui permettra d'évaluer les compétences
                    acquises et d'analyser les besoins.
                    Les modalités de la formation, les objectifs pédagogiques, les connaissances et le rythme sont
                    précisés</p>
                <a href="#pricing" class="btn btn-secondary btn-lg">Prendre RDV</a>
                <!-- open sidebar / offcanvas -->
                <!--<a href="#sidebar" class="d-block mt-3" data-bs-toggle="offcanvas" role="button" aria-controls="sidebar">
                    Explore my other books
                </a>-->
            </div>
            <div class="col-md-5 text-center d-none d-md-block">
                <!-- tooltip -->
                <span class="tt" data-bs-placement="bottom" title="Couverture d'enregistrement CDAFAL68">
            <img src="/images/register.png" class="img-fluid" alt="ebook">
          </span>
            </div>
        </div>

        <div class="alert alert-info d-flex align-items-center my-5" role="alert">

            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48" fill="currentColor"
                 class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2 fs-1" viewBox="0 0 16 16" role="img">
                <path d="M319-250h322v-60H319v60Zm0-170h322v-60H319v60ZM220-80q-24 0-42-18t-18-42v-680q0-24 18-42t42-18h361l219 219v521q0 24-18 42t-42 18H220Zm331-554v-186H220v680h520v-494H551ZM220-820v186-186 680-680Z"/>
            </svg>
            <div class="">
                <p><span class="fw-bold">Une convocation est envoyé dans les 5 jours ouvrés maximum</span><br>
                    Elle precisera notamment le plan d'accès, le transport et le rythme de la formation pour respecter
                    au mieux les disponibilités du stagiaire</p>
            </div>
        </div>
        <div class="alert alert-info d-flex align-items-center my-5" role="alert">

            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48" fill="currentColor"
                 class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2 fs-1" viewBox="0 0 16 16" role="img">
                <path d="M360-860v-60h240v60H360Zm90 447h60v-230h-60v230Zm30 332q-74 0-139.5-28.5T226-187q-49-49-77.5-114.5T120-441q0-74 28.5-139.5T226-695q49-49 114.5-77.5T480-801q67 0 126 22.5T711-716l51-51 42 42-51 51q36 40 61.5 97T840-441q0 74-28.5 139.5T734-187q-49 49-114.5 77.5T480-81Zm0-60q125 0 212.5-87.5T780-441q0-125-87.5-212.5T480-741q-125 0-212.5 87.5T180-441q0 125 87.5 212.5T480-141Zm0-299Z"/>
            </svg>
            <div class="">
                Le délai d'accès aux formations tient compte de l'ensemble de ces formalités; il est de 15 jours avant
                le début de l'action.
            </div>
        </div>
    </div>
</section>


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
                        <!--<h4 class="card-title">Starter Edition</h4>
                        <p class="lead card-subtitle">eBook download only</p>
                        <p class="display-5 my-4 text-primary fw-bold">$12.99</p>-->

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
                        <!--<a href="#" class="btn btn-outline-primary btn-lg mt-3">
                            Buy Now
                        </a>-->
                    </div>
                </div>
            </div>
            <div class="col-9 col-lg-4 ">
                <div class="card border-secondary border-2">
                    <img src="/images/profile search.png" class="card-img-top embed-responsive-item card-header" alt="">
                    <div class="card-body text-center py-4">
                        <!--<h4 class="card-title">Starter Edition</h4>
                        <p class="lead card-subtitle">eBook download only</p>
                        <p class="display-5 my-4 text-primary fw-bold">$12.99</p>-->

                        <p class="card-text mx-5  p-5 d-none d-lg-block">L'OPCO peut valider ou non la prise en charge
                            néamoins si la formation rentre dans le cadre de votre pla de la formation celle-ci sera
                            automtiquement prise e charge sous réserve des documents administratifs</p>

                        <!--<a href="#" class="btn btn-outline-primary btn-lg mt-3">
                            Buy Now
                        </a>-->
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

<!-- topics at a glance -->
<section id="topics">
    <div class="container-md">
        <div class="text-center">
            <h2>Déroulé de la formation...</h2>
            <p class="lead text-muted">A quick glance at the topics you'll learn</p>
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
                                    data-bs-target="#chapter-1" aria-expanded="true" aria-controls="chapter-1">
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
                                    data-bs-target="#chapter-2" aria-expanded="false" aria-controls="chapter-2">
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
                                    data-bs-target="#chapter-3" aria-expanded="false" aria-controls="chapter-1">
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
                    <!--<div class="accordion-item">
                        <h2 class="accordion-header" id="heading-4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-4" aria-expanded="false" aria-controls="chapter-4">
                                Chapter 4 - Storing Data (Firebase Databases)
                            </button>
                        </h2>
                        <div id="chapter-4" class="accordion-collapse collapse" aria-labelledby="heading-4" data-bs-parent="#chapters">
                            <div class="accordion-body">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chapter-5" aria-expanded="false" aria-controls="chapter-5">
                                Chapter 5 - User Authentication
                            </button>
                        </h2>
                        <div id="chapter-5" class="accordion-collapse collapse" aria-labelledby="heading-5" data-bs-parent="#chapters">
                            <div class="accordion-body">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                            </div>
                        </div>
                    </div>-->
                </div>

            </div>
        </div>
    </div>
</section>

<!-- reviews list -->
<!--<section id="reviews" class="bg-light">
    <div class="container-lg">
        <div class="text-center">
            <h2><i class="bi bi-stars"></i>Book Reviews</h2>
            <p class="lead">What my students have said about the book...</p>
        </div>

        <div class="row justify-content-center my-5">
            <div class="col-lg-8">
                <div class="list-group">
                    <div class="list-group-item py-3">
                        <div class="pb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
                        <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate repellat in id quisquam.</p>
                        <small>Review by Mario</small>
                    </div>
                    <div class="list-group-item py-3">
                        <div class="pb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
                        <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate repellat in id quisquam.</p>
                        <small>Review by Mario</small>
                    </div>
                    <div class="list-group-item py-3">
                        <div class="pb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
                        <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate repellat in id quisquam.</p>
                        <small>Review by Mario</small>
                    </div>
                    <div class="list-group-item py-3">
                        <div class="pb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
                        <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate repellat in id quisquam.</p>
                        <small>Review by Mario</small>
                    </div>
                    <div class="list-group-item py-3">
                        <div class="pb-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
                        <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium voluptate repellat in id quisquam.</p>
                        <small>Review by Mario</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->

<!-- contact form -->
<!-- form-control, form-label, form-select, input-group, input-group-text -->
<section id="contact">
    <div class="container-lg">

        <div class="text-center">
            <h2>Faire une demande</h2>
            <p class="lead">Avez vous une question? remplissez cette formulaire pour prendre contact avec nous
                directement...</p>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-lg-6">

                <form>
                    <label for="email" class="form-label">Adresse email:</label>
                    <div class="input-group mb-4">
              <span class="input-group-text">
                <i class="bi bi-envelope-fill text-secondary"></i>
              </span>
                        <input type="text" id="email" class="form-control" placeholder="e.g. mario@example.com"/>
                        <!-- tooltip -->
                        <span class="input-group-text">
                <span class="tt" data-bs-placement="bottom"
                      title="Entrez une adresse e-mail à laquelle nous pouvons vous répondre">
                  <i class="bi bi-question-circle text-muted"></i>
                </span>
              </span>
                    </div>
                    <label for="name" class="form-label">Prénom:</label>
                    <div class="mb-4 input-group">
              <span class="input-group-text">
                <i class="bi bi-person-fill text-secondary"></i>
              </span>
                        <input type="text" id="name" class="form-control" placeholder="e.g. Mario"/>
                        <!-- tooltip -->
                        <span class="input-group-text">
                <span class="tt" data-bs-placement="bottom" title="Pretty self explanatory really...">
                  <i class="bi bi-question-circle text-muted"></i>
                </span>
              </span>
                    </div>
                    <label for="subject" class="form-label">Quelle est le sujet de votre question</label>
                    <div class="mb-4 input-group">
              <span class="input-group-text">
                <i class="bi bi-chat-right-dots-fill text-secondary"></i>
              </span>
                        <select class="form-select" id="subject">
                            <option value="pricing" selected>Requêtes sur les contributions</option>
                            <option value="content">Requête de contenu de nos formations</option>
                            <option value="cdafal">Requête sur l'association (CDAFAL68)</option>
                            <option value="other">Autres</option>
                        </select>
                    </div>
                    <div class="mb-4 mt-5 form-floating">
                        <textarea class="form-control" id="query" style="height: 140px" placeholder="query"></textarea>
                        <label for="query">Votre requête...</label>
                    </div>
                    <div class="mb-4 text-center">
                        <button type="submit" class="btn btn-secondary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- get updates / modal trigger -->
@include('formation.layout.common-elements.footer')

<!-- modal itself -->
<!--<div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">Get the Latest Updates</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis, exercitationem laboriosam nihil minus voluptatibus harum aliquam consequatur pariatur inventore dignissimos illum excepturi ratione ipsum sit iusto alias eligendi fugit laborum?</p>
                <label for="modal-email" class="form-label">Your email address:</label>
                <input type="text" class="form-control" id="modal-email" placeholder="e.g. mario@example.com">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>-->

<!-- side panel / offcanvas -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebar-label">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebar-label">My Other Books</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In minima ducimus excepturi quasi tempore fugit
            quis voluptatibus aut error possimus, tenetur natus magni quam voluptatem quae eligendi repudiandae delectus
            eaque!</p>
        <!-- dropdown -->
        <div class="dropdown mt-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="book-dropdown"
                    data-bs-toggle="dropdown">
                Choose a book title
            </button>
            <ul class="dropdown-menu" aria-labelledby="book-dropdown">
                <li><a class="dropdown-item" href="#">Become a React Superhero</a></li>
                <li><a class="dropdown-item" href="#">Conquering Vue.js</a></li>
                <li><a class="dropdown-item" href="#">Levelling up Your Next.js</a></li>
            </ul>
        </div>
    </div>
</div>

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
