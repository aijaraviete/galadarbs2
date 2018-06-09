<?php
    require '../includes/dbh.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Online shop</title>
        <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,400i,700&amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../assets/style.css" />
    </head>

    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-1">
                        <img src="../assets/images/agua_logo.png" /> 
                    </div>
                    <div class="col-sm-10"> <!--vertikāli pa vidu jānolīdzina-->
                        <nav>
                            <ul>
                                <!-- Saliec linkus uz pārējām lapām, lai var staigāt pa lapām un redzēt darbībā -->
                                <li><a href="">Agua</a></li>
                                <li><a href="">Veikals</a></li>
                                <li><a href="">Par mums</a></li>
                                <li><a href="">Kontakti</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-sm-1">
                        <button type="button" class="btn btn-warning">Ielogojies</button>
                    </div>
                </div>
            </div>
        </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="offset-sm-2 col-sm-4" id="danceclasses"><!-- atceries - id ir unikāli un nedrīkst atkārtoties lapā, class drīkst. Tam papildus - html elementam var būt tikai viens id, bet klases var būt vairākas. Domā par id kā par personas kodu, bet par class kā par kategorijām (daudzskaitlī pat tad, ja pieliec tikai vienu) -->
                    <img src="../assets/images/1nodAgua.png" />
                    <p>Izvēlies vienu nodarbību: <br/> -Salsa,Rueda de Casino,Timba,Reggaeton-</p>
                </div>
                <div class="col-sm-4 offset-sm-2 text-center" /><!-- ja #danceclass selektors šobrīd dod tikai text-align, vienkāršāk būs izmantot bootstrap .text-right, .text-left vai .text-center klasi -->
                    <img src="../assets/images/2nodAgua.png"/> 
                    <p>Izvēlies divas nodarbības: <br/> -Salsa,Rueda de Casino,Timba,Reggaeton-</p>
                </div>
            </div>
        </div>
        <div class="container"><!-- Vienā .container var likt neierobežotu skaitu .row, tāpēc šis izskatās lieki, bet nav nepareizi -->
            <div class="row">
                <div class="offset-sm-2 col-sm-4" id="danceclasses">
                    <img src="../assets/images/1nodUka.png" /> 
                    <p>Izvēlies vienu nodarbību: <br/> -Kizomba,Bachata-</p>
                </div>
                <div class="col-sm-4 offset-sm-2" id="danceclasses">
                    <img src="../assets/images/2nodUka.png" /> 
                    <p>Izvēlies divas nodarbības: <br/> -Kizomba,Bachata-</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <section id="top">
            <div class="container">          
                <div class="row">
                    <div class="col-sm-3">
                        <img src=""> <!--te būsbilde-->
                    </div>
                    <div class="col-sm-4">
                        <!-- kam šī kolonna paredzēta? -->
                    </div>
                    <div class="col-sm-4">
                        <nav class="bottom">
                            <ul>
                                <li><a href="">Agua</a></li>
                                <li><a href="">Veikals</a></li>
                                <li><a href="">Par mums</a></li>
                                <li><a href="">Kontakti</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-sm-1">
                        <!-- kam šī kolonna paredzēta? -->
                    </div>
                </div>
            </div>
        </section>
        <section id="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-11">
                        All right reserved
                    </div>
                    <div class="col-sm-1">
                        <!-- kam šī kolonna paredzēta? -->
                    </div>
                </div>
            </div>
        </section>
    </footer>
    
    </body>
</html>