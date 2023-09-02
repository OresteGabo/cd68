<section class="bg-secondary bg-gradient mt-5 text-white">
    <div class="container">
        <h2>Durée</h2>
        <div class="row">
            <div class="col-sm-4">
                <h4>Nombre d'heures total :</h4>
                <p>{{$totalhours?? '70'}} heures</p>
            </div>
            <div class="col-sm-4">
                <h4>heures par semaine:</h4>
                <p>{{$weeklyhours??'3'}} heures</p>
            </div>
            <div class="col-sm-4 ">
                <h4>Nombre total de semaines:</h4>
                <p>{{$totalweeks??'24'}} semaines</p>
            </div>

        </div>
    </div>
</section>
