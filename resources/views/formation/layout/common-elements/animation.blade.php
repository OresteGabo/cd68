<section>
    <div class="container">
        <h2 class="mt-4 mb-3">Méthode de l'animation</h2>
        <ul class="list-group" style="border-color: #ccc;">
            @foreach($anItems as $anItem)
                <li class="list-group-item" style="background-color: #f9f9f9;">{{$anItem}}</li>
            @endforeach
        </ul>
    </div>
</section>
