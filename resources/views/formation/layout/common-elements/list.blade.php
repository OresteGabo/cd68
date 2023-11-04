<section>
    <div class="container">
        <h2 class="mt-4 mb-3 text-dark">{{$title}}</h2>
        <p class="mt-4 mb-3 fw-boldtext-dark ">{{$subtitle}}</p>
        <ul class="list-group" style="border-color: #ccc;">
            @foreach($listItems as $listItem)
                <li class="list-group-item" style="background-color: #f9f9f9;">{{$listItem}}</li>
            @endforeach
        </ul>
    </div>
</section>
