<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header id="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                    <a href="index.php" class="navbar-brand">
                        <h4 style="color:#000">School <span style="color:#00ff47">Healthy Clinic</span></h4>
                    </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-1.5">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="container">
                            <div class="container">
                                <div class="container">
                                    <div class="row">
                                        <div class="navbar-nav">
                                            <a class="nav-link" href="index1.php">Beranda</a>
                                            <a class="nav-link" href="obat.html">Obat-obatan</a>
                                            <a class="nav-link" href="kontak.php">About</a>
                                            <a class="nav-link current" href="#">Kategori obat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">      
                </div>
            </div>
        </nav>
        <nav class="navbar bg-light">
            <div class="container">
                <div class="container">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col">
                <div class="container bbb cair">
                    <img src="../project-uks/assets/tolak.jpg" alt="">
                    <p>Obat Cair</p>
                    <ul id="halp">
                        <li><a href="Take.html" style="color:#000; text-decoration: none;">Tolak Angin</a></li>
                        <li>Sirup Panadol</li>
                        <li>Sirup Paracetamol</li>
                    </ul>
                    
                </div>
            </div>
            <div class="col">
                <div class="container bbb tablet">
                    <img src="../project-uks/assets/panadol.jpg" alt="">
                    <p>Obat Tablet</p>
                    <ul id="halp">
                        <li><a href="Take2.html" style="color:#000; text-decoration: none;">Tablet Panadol</a></li>
                        <li>Bodrex</li>
                        <li>Paramex</li>
                    </ul>
                    
                </div>
            </div>
            <div class="col">
                <div class="container bbb">
                    <img src="../project-uks/assets/beta.jpg" width="430px" alt="">
                    <p>Obat Luka</p>
                    <ul id="halp">
                        <li><a href="Take2.html" style="color:#000; text-decoration: none;">Betadine</a></li>
                        <li>Amoxicilin</li>
                        <li>Biokatan</li>
                    </ul>
                </div>
            </div>
        </div>   
    </header>
</body>
</html>