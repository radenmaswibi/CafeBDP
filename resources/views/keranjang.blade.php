<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe BDP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-white shadow py-3 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://smkwikrama.sch.id/frontend/assets/wikrama-logo.png" alt="" style="width: 50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#makanan">Makanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#minuman">Minuman</a>
                    </li>
                 </ul>              
            </div>
            <a href="/" class="btn btn-brand">Kembali</a>
        </div>
    </nav>

<section id="makanan" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 intro-text">
                    <h1>Menu Jajanan</h1>
                    <p>Jajanlah Sebelum Jam Masuk Sekolah</p>
                </div>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
             <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
                    tabindex="0">
                     <div class="row gy-4">
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white shadow-on-hover">
                                <img src="./assets/images/item_8.jpg" alt="">
                                <div class="menu-item-content p-4">
                                  
                                    <h5 class="mt-1 mb-3"><a>Basreng</a></h5>
                                    <h5 class="mt-1 mb-2"><a href="{{route('checkout.io')}}">Beli</a></h5>
                                    <p class="small">Rp1.000/pcs</p>
                                    <p class="small">Dengan aroma basreng spesial</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white shadow-on-hover">
                                <img src="./assets/images/item_1.jpg" alt="">
                                <div class="menu-item-content p-4">
                              
                                    <h5 class="mt-1 mb-3"><a >Seblak si Ibu Alya</a></h5>
                                    <h5 class="mt-1 mb-2"><a href="{{route('checkout.io')}}">Beli</a></h5>
                                    <p class="small">Rp.5000/porsi</p>
                                    <p class="small">Dengan citarasa seblak si ibu</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white shadow-on-hover">
                                <img src="./assets/images/item_2.jpg" alt="">
                                <div class="menu-item-content p-4">
                               
                                    <h5 class="mt-1 mb-3"><a >Mie Ayam</a></h5>
                                    <h5 class="mt-1 mb-2"><a href="{{route('checkout.io')}}">Beli</a></h5>
                                    <i class="bi bi-bag-plus"></i>
                                    <p class="small">Rp.10.000/posri</p>
                                    <p class="small">Mie nya enak ayamnya banyak</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white shadow-on-hover">
                                <img src="./assets/images/item_3.jpg" alt="">
                                <div class="menu-item-content p-4">
                                
                                <h5 class="mt-1 mb-3"><a >Piscok</a></h5>
                                    <h5 class="mt-1 mb-2"><a href="{{route('checkout.io')}}">Beli</a></h5>
                                    <p class="small">Rp.2.500/pcs</p>
                                    <p class="small">Tadi basreng sekarang piscok</p>
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 intro-text">
                
                </div>
            </div>
        </div>
        <div id="minuman" class="tab-content" id="pills-tabContent">
             <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
                    tabindex="0">
                     <div class="row gy-4">
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white shadow-on-hover">
                                <img src="data:image/jpeg;base64,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" alt="">
                                <div class="menu-item-content p-4">
                                  
                                <h5 class="mt-1 mb-3"><a >Thai Tea</a></h5>
                                    <h5 class="mt-1 mb-2"><a href="{{route('checkout.io')}}">Beli</a></h5>
                                    
                                    <p class="small">Rp15.000/pcs</p>
                                    <p class="small">enak</p>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white shadow-on-hover">
                                <img src="data:image/jpeg;base64,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" alt="">
                                <div class="menu-item-content p-4">
                                <h5 class="mt-1 mb-3"><a >Matcha Latte</a></h5>
                                    <h5 class="mt-1 mb-2"><a href="{{route('checkout.io')}}">Beli</a></h5>
                                    <p class="small">Rp.5000/porsi</p>
                                    <p class="small">enak si</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white shadow-on-hover">
                                <img src="https://www.honestfoodtalks.com/wp-content/uploads/2022/01/Thai-tea-with-milk-ice-and-boba-on-top.jpg" alt="">
                                <div class="menu-item-content p-4">
                                <h5 class="mt-1 mb-3"><a >Boba</a></h5>
                                    <h5 class="mt-1 mb-2"><a href="{{route('checkout.io')}}">Beli</a></h5>
                                    <p class="small">Rp.60.000/posri</p>
                                    <p class="small">Mie nya enak ayamnya banyak</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="menu-item bg-white shadow-on-hover">
                                <img src="https://www.dapurkintamani.com/wp-content/uploads/2021/06/sajikan-oreo-milkshake.jpg" alt="">
                                <div class="menu-item-content p-4">
                                <h5 class="mt-1 mb-3"><a >Milk Shake</a></h5>
                                    <h5 class="mt-1 mb-2"><a href="{{route('checkout.io')}}">Beli</a></h5>
                                    <p class="small">Rp.99.500/pcs</p>
                                    <p class="small">Hhee sory mahal</p>
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
        </div>
</section>

<footer id="tentang" class="bg-cover">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-4">
                        <p>JANGAN LUPA JAJAN YAH GES YAH!</p>
                        <div class="social-links">
                      </div>
                    </div>
                    <div class="col-lg-3 ms-auto">
                        <h6 class="text-white mb-4">CONTACT</h6>
                        <p class="mb-1">No:021 120</p>
                        <p class="mb-1">Email:Cafe@gmail.com</p>
                        <p class="mb-0">Alamat:Smk Wikrama Bogor</p>
                    </div>
                    <div class="col-lg-3">
                        <h6 class="text-white mb-4">OPENING HOURS</h6>
                        <p class="mb-1">Senin-Jumat : 08:00 - 14:00</p>
                        <p>Sabtu-Minggu : LIBUR</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row gy-3 justify-content-between">
                    <div class="col-auto">                     
                    </div>
                </div>
            </div>
        </div>      
    </footer>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>
</html>