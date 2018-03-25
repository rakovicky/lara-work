@extends('main')

@section('content')
        <div class="login">

            <div class="login_wrap">

            </div>

        </div>

        <div class="menu-responsive">

            <ul id="menu-responsive">

                <li><a href="index.php?page=o_nas">O NÁS</a></li>

                <li><a href="index.php?page=galeria">GALÉRIA</a></li>

                <li><a href="index.php?page=typy_a_triky">TYPY A TRIKY</a></li>

                <li><a href="index.php?page=nase_miesta">NAŠE MIESTA</a></li>

                <li><a href="index.php?page=typy_a_triky">Upraviť články</a></li>

                <li><a href="index.php?page=add_article">Pridať článok</a></li>

                <li><a href="index.php?page=users">Správa uživateľov</a></li>

                <li><a href="index.php?page=login/login">PRIHLÁSENIE</a></li>

            </ul>

        </div>

        <div class="all pb-4">
            <div class="container">
                <div class="h2">Novinky</div>

                <hr>
                <ul class="list-unstyled">
                    <li class="media hr">
                        <img class="mr-3 col-md-3 img-fluid" src="img/ac/1.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">List-based media object</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </li>
                    <hr>
                    <li class="media my-4">
                        <img class="mr-2 col-md-3 img-fluid" src="img/ac/5.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">List-based media object</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </li>
                    <hr>
                    <li class="media pb-4">
                        <img class="mr-2 col-md-3 img-fluid" src="img/ac/3.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">List-based media object</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </li>
                </ul>
            </div><!-- .container -->
        </div> <!-- .all -->
@endsection