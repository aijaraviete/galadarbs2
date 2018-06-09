<?php
    require '../includes/dbh.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Contacts</title>
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
                    <div class="col-sm-7">
                        <h2>Sazinies ar mums!</h2>
                        <p id="left">Vēlies uzzināt precīzāk par katru deju nodarbību?</br>
                        Gribi uzzināt vairāk par pasākumiem un ballītēm?</br>
                        Kur atrast noderīgāko informāciju par jaunumiem deju pasaulē?</p>
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-4">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Ieraksti savu vārdu">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ieraksti savu e-pasta adresi">
                            </div>
                            <div class="form-group">
                            <textarea class="form-control" name="message" rows="3" placeholder="Ieraksti savu ziņu"></textarea>
                            </div><!-- Jāsakārto kods -->
                            <button type="button" class="btn btn-warning" name="submit">Nosūti ziņu</button>
                        </form>
                    </div>
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-7">
                        <h2>Ko vari uzzināt?</h2>
                        <p id="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nulla orci, eleifend in rhoncus nec, varius et dolor. Integer ut lobortis libero. Donec at iaculis lectus. Nullam nec risus vitae nisl vestibulum congue sit amet ut sapien. Vivamus est elit, lacinia ac nisl non, fermentum ullamcorper diam. Nunc blandit nunc diam, nec laoreet massa fringilla in. Quisque efficitur dapibus nisi, vitae convallis justo facilisis ac. Pellentesque porta finibus lorem, sed pretium urna finibus non. Sed in orci et purus pellentesque faucibus. Nam fermentum condimentum dolor, ut ornare libero facilisis id. Etiam in suscipit enim, id elementum ante.</p>
                    </div>
                    <div class="col-sm-3">
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