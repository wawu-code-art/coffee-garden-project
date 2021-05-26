<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="http://localhost/coffee-garden/assets/css/style.css">

    <title>Coffee Garden</title>
</head>

<body id="home">
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"> <img src="http://localhost/coffee-garden/assets/img/logo.JPG" alt="" width="30" height="24" class="d-inline-block align-text-top">Coffee Garden</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produk">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactus">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Jumbotron -->
    <section class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h1 class="display-4">Hello, world!</h1>
                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                </div>
                <div class="col-8">
                    <img src="http://localhost/coffee-garden/assets/img/kopi.JPG" alt="johnatan" class="container-fluid rounded-circle">
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,128L34.3,128C68.6,128,137,128,206,144C274.3,160,343,192,411,192C480,192,549,160,617,160C685.7,160,754,192,823,208C891.4,224,960,224,1029,197.3C1097.1,171,1166,117,1234,96C1302.9,75,1371,85,1406,90.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
        </svg>
    </section>
    <!-- End Jumbotron -->

    <!-- Start About -->
    <section id="aboutus">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>About Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md mb-3">
                    <img src="http://localhost/coffee-garden/assets/img/jhon.JPG" alt="johnatan" class="container-fluid rounded-circle">
                </div>
                <div class="col-md mb-3">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia corrupti nobis officiis at dolore harum, alias dignissimos recusandae error eum tempore a accusamus quidem reprehenderit aspernatur consectetur rerum quam sit?</p>
                </div>
                <div class="col-md mb-3">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis sequi vero, sed repellendus fuga est praesentium ea veniam unde, dolores quia? Adipisci eos ratione veritatis soluta quibusdam dolores rerum doloremque!</p>
                </div>
            </div>
        </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="rgba(196, 129, 29, 0.712)" fill-opacity="1" d="M0,224L48,218.7C96,213,192,203,288,192C384,181,480,171,576,186.7C672,203,768,245,864,224C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <!-- End Produk -->


    <!-- Start Produk -->
    <section class=" produk" id="produk">
        <div class="container">
            <div class="row text-center mb-3">
                <h3 class="col">
                    Product
                </h3>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-md-2 mb-3">
                    <div class="card">
                        <img src="http://localhost/coffee-garden/assets/img/produk-5.JPG" class="card-img-top" alt="produk5">
                        <div class="card-body">
                            <p class="card-text">Produk</p>
                            <p class="card-text">Harga: Rp.xx.xxx,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card">
                        <img src="http://localhost/coffee-garden/assets/img/produk-6.JPG" class="card-img-top" alt="produk6">
                        <div class="card-body">
                            <p class="card-text">Produk</p>
                            <p class="card-text">Harga: Rp.xx.xxx,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card">
                        <img src="http://localhost/coffee-garden/assets/img/produk-7.JPG" class="card-img-top" alt="produk7">
                        <div class="card-body">
                            <p class="card-text">Produk</p>
                            <p class="card-text">Harga: Rp.xx.xxx,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card">
                        <img src="http://localhost/coffee-garden/assets/img/produk-8.JPG" class="card-img-top" alt="produk8">
                        <div class="card-body">
                            <p class="card-text">Produk</p>
                            <p class="card-text">Harga: Rp.xx.xxx,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card">
                        <img src="http://localhost/coffee-garden/assets/img/produk-9.JPG" class="card-img-top" alt="produk9">
                        <div class="card-body">
                            <p class="card-text">Produk</p>
                            <p class="card-text">Harga: Rp.xx.xxx,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card">
                        <img src="http://localhost/coffee-garden/assets/img/produk-10.JPG" class="card-img-top" alt="produk10">
                        <div class="card-body">
                            <p class="card-text">Produk</p>
                            <p class="card-text">Harga: Rp.xx.xxx,00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-md-2 mb-3">
                    <div class="card">
                        <img src="http://localhost/coffee-garden/assets/img/produk-11.JPG" class="card-img-top" alt="produk11">
                        <div class="card-body">
                            <p class="card-text">Produk</p>
                            <p class="card-text">Harga: Rp.xx.xxx,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card">
                        <img src="http://localhost/coffee-garden/assets/img/produk-12.JPG" class="card-img-top" alt="produk12">
                        <div class="card-body">
                            <p class="card-text">Produk</p>
                            <p class="card-text">Harga: Rp.xx.xxx,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card">
                        <img src="http://localhost/coffee-garden/assets/img/produk-13.JPG" class="card-img-top" alt="produk13">
                        <div class="card-body">
                            <p class="card-text">Produk</p>
                            <p class="card-text">Harga: Rp.xx.xxx,00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card">
                        <img src="http://localhost/coffee-garden/assets/img/produk-14.JPG" class="card-img-top" alt="produk14">
                        <div class="card-body">
                            <p class="card-text">Produk</p>
                            <p class="card-text">Harga: Rp.xx.xxx,00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,96L48,101.3C96,107,192,117,288,149.3C384,181,480,235,576,240C672,245,768,203,864,176C960,149,1056,139,1152,160C1248,181,1344,235,1392,261.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <!-- End Projects -->

    <!-- Start Contact -->
    <section id="contactus">
        <div class="container">
            <div class="row mb-3">
                <div class="col text-center">
                    <h2>Contact Us</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="email" class="form-control" id="name" aria-describedby="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="rgb(109, 6, 6)" fill-opacity="1" d="M0,64L48,64C96,64,192,64,288,101.3C384,139,480,213,576,229.3C672,245,768,203,864,181.3C960,160,1056,160,1152,149.3C1248,139,1344,117,1392,106.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <!-- End Contact -->

    <!-- Start Footer -->
    <footer class="text-center dark pb-5">
        <p>created by <i class="bi bi-heart-fill text-danger"></i> <a class="fw-bold wawu" href="#">wawu</a></p>
    </footer>
    <!-- End Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

</body>

<!-- Bootstrap Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

<!-- My CSS -->
<style>
    .jumbotron {
        padding-top: 7rem;
        background-color: rgba(196, 129, 29, 0.712);
    }

    .produk {
        background-color: rgba(196, 129, 29, 0.712);
    }

    .navbar {
        background-color: rgb(109, 6, 6);
    }

    .about {
        font-size: small;
    }

    .harga {
        font-size: smaller;
    }

    footer {
        background-color: rgb(109, 6, 6);
        color: white;
    }

    a.wawu {
        color: white;
    }

    section {
        padding-top: 6rem;
    }
</style>

</html>