<footer class="bg-light  pt-5 pb-4">
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-secondary">CDAFAL 68</h5>
                <p>Conseil Départemental des Associations Familiales Laîques du Haut-Rhin</p>
                <p><a href="about-us">A propos</a></p>

            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-secondary">Liens utiles</h5>
                <p><a href="{{route('staffsite.index')}}"  style="text-decoration:none;">Site du personnel</a></p>
                @if(auth()->user()!=null)
                    <p><a href="{{route('logout')}}"  style="text-decoration:none;">Se déconnecter</a></p>
                @endif
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 text-start">
                <h5 class="text-uppercase mb-4 font-weight-bold text-secondary">Contact</h5>
                <p><i class="bi bi-facebook mr-3"></i><a href="https://www.facebook.com/cdafal68" style="text-decoration:none;">  Cdafal du Haut-Rhin</a></p>
                <p><i class="bi bi-twitter mr-3"></i><a href="https://twitter.com/cdafal68" style="text-decoration:none;">  cdafal68</a></p>
                <p><i class="bi bi-telephone-fill mr-3"></i>03 89 42 85 20</p>
                <p><i class="bi bi-telephone-fill mr-3"></i>cdafal68.asl@hotmail.fr</p>
            </div>
        </div>
    </div>
</footer>

