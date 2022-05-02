<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./static/style.css" rel="stylesheet" type="text/css">

    <title>Alarm</title>
</head>
<body>
<!--<h1>Hello, world!</h1>-->


    <div id="background">
        <div class="background-center-content">

            <div class="container-fluid">

                <div class="row">

                        <div class="top-nav">
                            <ul>
                                <li><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2v1z"/>
                                            <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466z"/>
                                        </svg></a></li>
                                <li><a href="#">Dashbord</a></li>
                                <li><a href="#">Events</a></li>
                            </ul>

                        </div>


                        <div class="col-2">
                            <div class="left-nav">
                                <h5 class="title">Alarm System</h5>
                                <hr>
                                <span class="status">Status: <?= $data["status"]  ?></span>
                                <hr>
                                <ul>
                                    <li>Zone 1</li>
                                    <li>Zone 2</li>
                                    <li>Zone 3</li>
                                    <li>Zone 4</li>
                                </ul>
                                <hr>
                                <ul>
                                    <li><a href="#">Activate</a></li>
                                    <li><a href="#">Desactivate</a></li>
                                </ul>
                            </div>
                            <div class="left-nav-version">
                                <span class="version">
                                    Version 4.0
                                </span>
                            </div>
                        </div>

                        <div class="col-5">
                            <div class="Z-nav" style="background: <?= $data["z1"]  ?>" >
                                <h3>Zone 1</h3>
                            </div>
                            <div class="Z-nav" style="background: <?= $data["z3"]  ?>" >
                                <h3>Zone 3</h3>
                            </div>
                        </div>
                        <div class="col-5">

                            <div class="Z-nav" style="background: <?= $data["z2"]  ?>" >
                                <h3>Zone 2</h3>
                            </div>
                            <div class="Z-nav" style="background: <?= $data["z4"]  ?>" >
                                <h3>Zone 4</h3>
                            </div>
                        </div>

                        <div class="bottom-nav border">
                            <div class="row">
                                <div class="col-2 event ">
                                    Events
                                </div>
                                <div class="col-10 message ">
                                    <span> Mise à jour provenant de la base de donnée 1 </span>
                                    <span> Mise à jour provenant de la base de donnée 2</span>
                                    <span> Mise à jour provenant de la base de donnée 3</span>
                                </div>
                            </div>
                        </div>




                </div>


            </div>













        </div>
    </div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>