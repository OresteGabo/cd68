<section>
    <div class="container">
        <h2 class="mt-4 mb-3">Méthode de pédagogiques / Moyens techniques</h2>
        @if(isset($labels))
            @foreach($labels as $label)
                <p>{{$label}}</p>
            @endforeach
        @else
            <p>
                A la fois théoriques et participatives, les méthodes pédagogiques sont appréhendées au travers la mise en situation et de l'utilisation de différents outils pédagogiques et de documents administratifs et professionels.
            </p>
            <p>La salle de formation est équipée des vidéoprojecteur,imprimante multifonction, tableau blac et connection internet. Accès au support de cours</p>
        @endif

    </div>
</section>
