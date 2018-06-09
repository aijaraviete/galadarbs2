
<?php
    require '../includes/dbh.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Log In</title>
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
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-5">
                        <form action="index.php" method="$_POST"> <!--pielikt Induļa failu no 18.lekcijas,sākot no 3.rindas-->
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Ievadi savu e-pasta adresi">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Ievadi savu paroli">
                            </div>
                            <!--ielikt p tagu no Induļa koda kopā ar $error 3.rindā-->
                            <div class="text-right">
                                <button type="submit" class="btn btn-warning" id="loginbutton">Ielogoties</button> <!--pogu novietot labajā pusē--> <!-- noliku :) gribēju parādīt, ka pavisam droši vari taisīt jaunus tagus un tiem likt klāt nosacījumus, ko gribi, lai ievēro viens vai vairāki elementi -->
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-4">
                    </div>
                </div>
            </div>

        </main>

        <footer>
            <section id="top">
                <div class="container">          
                    <div class="row">
                        <div class="col-sm-3">
                            <img src=""> <!--bilde-->
                        </div>
                        <div class="col-sm-4">
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
                        </div>
                    </div>
                </div>
            </section>
            <section id="bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-11">
                            Visas tiesības rezervētas (c)Agua
                        </div>
                        <div class="col-sm-1">
                        </div>
                    </div>
                </div>
            </section>
        </footer>
    </body>
</html>