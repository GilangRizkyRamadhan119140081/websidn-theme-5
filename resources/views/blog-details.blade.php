<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Phozogy Template">
    <meta name="keywords" content="Phozogy, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Music Organizer</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quantico:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="/">
                            
                            @foreach ($logo as $logos)
                                @if ($logos->images)
                                    <img src="{{ Storage::disk('s3')->url($logos->images->path) }}" class="img-fluid " alt="Image" style="height: 35px; width:250px; object-fit: cover; ">
                                @else
                                    Gambar tidak tersedia
                                @endif
                            @endforeach
                        </a>
                    </div>
                    <nav class="nav-menu mobile-menu">
                        <ul>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/layanan">Layanan</a></li>
                            <li><a href="/galleri">Galeri</a></li>
                            <li><a href="/portofolio">Portofolio</a></li>
                            <li><a href="/tentang-kami">Tentang Kami</a></li>
                            <li><a href="/artikel">Artikel</a></li>
                            <a href="/kontak-kami" class="primary-btn d-xl-inline-block rounded-pill">Hubungi Kami</a>
                        </ul> 
                    </nav>    
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Blog Details Section Begin -->
    @foreach ($carousel as $item)
        <div class="blog-hero set-bg" data-setbg="{{ Storage::disk('s3')->url($item->path) }}"></div>
    @endforeach
    <section class="blog-details-section">
        <div class="container">
            <div class="row">
                {{-- @foreach ($blog as $artikel) --}}
                <div class="col-lg-12">
                    <div class="blog-details-text">
                        <div class="bd-title">
                            <div class="bt-bread">
                                <a href="/"><i class="fa fa-home"></i> Beranda</a>
                                <a href="/artikel">Artikel</a>
                                <span>{{ $blog->judul }}</span>
                            </div>
                            <h2>{{ $blog->judul }}</h2>
                            <ul>
                                <li>by <span>{{ $blog->nama_penulis }}</span></li>
                                <li>{{ $blog->date }}</li>
                            </ul>
                        </div>
                        <div class="bd-pics " style="display: flex; justify-content: center;">
                            <img src="{{ Storage::disk('s3')->url($blog->image) }}" alt="">
                            
                        </div>
            
                        <div class="bd-desc">
                            <p>{{$blog->deskripsi}}</p>
                        </div>
                        
                        
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Back to Top -->
    @foreach ($contact as $kontak)
        <a href="https://wa.me/{{ $kontak->whatsapp }}?text=Halo,%20saya%20tertarik%20dengan%20layanan%20Anda." class="whatsapp-sticky">
            <i class="fab fa-whatsapp"></i>
        </a>
    @endforeach

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container px-4">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="fs-about">
                        <div class="fa-logo">
                            <a href="#">
                                @foreach ($logo as $logos)
                                    @if ($logos->images)
                                        <img src="{{ Storage::disk('s3')->url($logos->images->path) }}" class="img-fluid " alt="Image" style="height: 35px; width:250px; object-fit: cover; ">
                                    @else
                                        Gambar tidak tersedia
                                    @endif
                                @endforeach
                            </a>
                        </div>
                        @foreach ($about as $abouts)
                            <p>{{ $abouts->text }}</p>
                        @endforeach    
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 ">
                    @foreach ($contact as $kontak)
                    <div class="fs-widget">
                        <h5>Follow Us</h5>
                        <p><a class="text-white" href="https://wa.me/{{ $kontak->whatsapp }}" target="Tes Aja"><i class="fab fa-whatsapp text-success me-2"></i> Whatsapp</a></p>
                        <p><a class="text-white" href="{{ $kontak->instagram }}"><i class="fab fa-instagram text-success me-2"></i> Instagram</a></p>
                        <p><a class="text-white" href="{{ $kontak->facebook }}"><i class="fab fa-facebook text-success me-2"></i> Facebook</a></p>
                        <p><a class="text-white" href="{{ $kontak->youtube }}"><i class="fab fa-youtube text-success me-2"></i> Youtube</a></p>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Designed By <a href="https://websidn.com" target="_blank">Websidn</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>