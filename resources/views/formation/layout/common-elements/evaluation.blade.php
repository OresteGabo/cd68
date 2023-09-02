<section>
    <div class="container">
        <h2 class="mt-4 mb-3">Évaluation de la formation</h2>
        <ul class="list-group" style="border-color: #ccc;">
            @foreach($evaluationItems as $evaluationItem)
                <li class="list-group-item" style="background-color: #f9f9f9;">{{$evaluationItem}}</li>
            @endforeach
        </ul>
    </div>
</section>
