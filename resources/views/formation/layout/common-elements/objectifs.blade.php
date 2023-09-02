<section>
    <div class="container">
        <h2 class="mt-4 mb-3">Objectifs</h2>
        <p class="mt-4 mb-3 fw-bold">A l'issue de la formation, les participants devront être capable de</p>
        <ul class="list-group" style="border-color: #ccc;">
            @foreach($objectifs as $objectif)
                <li class="list-group-item" style="background-color: #f9f9f9;">{{$objectif}}</li>
            @endforeach
        </ul>
    </div>
</section>
