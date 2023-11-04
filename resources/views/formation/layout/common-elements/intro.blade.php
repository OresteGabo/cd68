<section id="intro" class="bg-light">
    <div class="container-lg">
        <div class="row g-4 justify-content-center align-items-center">
            <h1 class="text-primary">
                <div class="container">
                    <div class="display-5 text-dark">{{$title}}</div>
                    @foreach($subtitles as $subtitle)
                        <div class="display-6 text-dark font-weight-bold">{{$subtitle}}</div>
                    @endforeach
                </div>
            </h1>
            <div class="col-md-5 text-center text-md-start">
                <h4><span class="text-secondary fw-bold flex text-dark">Public concerné / Prérequis</span></h4>
                <p class="lead my-4 text-start text-dark">{{$public}}</p>
                <p class="lead my-4 text-start text-dark">{{$prerequis ?? 'Pas de prérequis exigés.'}}</p>
                <a href="{{$docpath}}" class="btn btn-primary btn-lg" style="background-color: #C89A58; color:black; border:none;" target="_blank" title="Télécharger le document en pdf pour cette formation">Imprimer ce document</a>
            </div>

            <div class="col-md-5 text-center d-none d-md-block">
                {{--<span class="tt" data-bs-placement="bottom" title="Couverture d'enregistrement CDAFAL68">
                    <img src="{{$imgpath ?? '/images/register.png'}}" class="img-fluid" alt="">
                </span>--}}
            </div>
        </div>
        @include('formation.layout.common-elements.handicap_alert')
    </div>
</section>
