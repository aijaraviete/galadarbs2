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
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-4" id="danceclasses">
                        <img src="../assets/images/salsa.jpg" />
                        <p>Kubas salsa</p>
                    </div>
                    <div class="col-sm-4" id="danceclasses" />
                        <img src="../assets/images/rumba.jpg"/> 
                        <p>Kubas rumba</p>
                    </div>
                    <div class="col-sm-2">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-4" id="danceclasses">
                        <img src="../assets/images/regetons.jpg" /> 
                        <p>Regetons</p>
                    </div>
                    <div class="col-sm-4" id="danceclasses">
                        <img src="../assets/images/son.jpg" /> 
                        <p>Son</p>
                    </div>
                    <div class="col-sm-2">
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
                            All right reserved
                        </div>
                        <div class="col-sm-1">
                        </div>
                    </div>
                </div>
            </section>
        </footer>

    </body>
</html>