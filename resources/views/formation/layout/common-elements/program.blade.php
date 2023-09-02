<section>
    <div class="container">
        <h2 class="mt-4 mb-3 ">Programme</h2>
        <div class="card">
            <ol class="list-group list-group-flush" >
                @foreach($prog as $progItem)
                    <li class="list-group-item">
                        <h5 class="mb-3">{{$progItem['title']}}</h5>
                        <ul class="list-group list-group-flush">
                            <?php $progItemElements=$progItem['progItemElements'];?>
                            @foreach($progItemElements as $progItemElement)
                                <li class="list-group-item">{{$progItemElement}}</li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>

</section>
