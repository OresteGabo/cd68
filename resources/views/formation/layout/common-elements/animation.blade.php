<section style="background-color: #f8f9fa; padding: 20px;">
    <div class="container">
        <h2 class="mt-4 mb-3 text-primary">Méthode de l'animation</h2>
        <ul class="list-group" style="border-color: #ccc;">
            @foreach($anItems as $anItem)
                <li class="list-group-item" style="background-color: #ffffff; color: #333; border-color: #ccc;">{{$anItem}}</li>
            @endforeach
        </ul>
    </div>
</section>

