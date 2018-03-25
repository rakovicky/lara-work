<div id="header">
    <div class="nav">

        <div class="logo">

            <a href="index.php"><img src="img/WSWCF-logo3.png"></a>

        </div>

        <div class='menu'>

            <ul>

                <li><a href="index.php?page=o_nas">O NÁS</a></li>

                <li><a href="index.php?page=galeria">GALÉRIA</a></li>

                <li><a href="index.php?page=typy_a_triky">TYPY A TRIKY</a></li>

                <li><a href="index.php?page=nase_miesta">NAŠE MIESTA</a></li>

                <li class="non-border">|</li>

                <div class="dropdown">

                    <li onclick="myFunction()" class="dropbtn">Administrácia</li>

                    <div id="myDropdown" class="dropdown-content">

                        <a href="index.php?page=typy_a_triky">Upraviť články</a>

                        <a href="index.php?page=add_article">Pridať článok</a>

                        <a href="index.php?page=users">Správa uživateľov</a>

                    </div>

                </div>

                <li class="non-border">|</li>

                <li><a href="index.php?page=login/login">Prihlásenie</a></li>

            </ul>

        </div>

        <script>

            jQuery(document).ready(function($) {

                $("#menu-icon").bind('click', function(event) {

                    $(".menu-responsive").toggle(400);

                });

            });

        </script>

        <div class="menu-icon" id="menu-icon"><img src="img/menu.png" alt=""></div>

    </div>

</div>
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