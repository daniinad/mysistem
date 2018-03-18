<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Toko Bahan Bangunan</title>

    <link rel="icon" href="{{ asset('img/coba.png')}}" type="img/png">

    <meta name="description" content="This is a free Bootstrap landing page theme created for BootstrapZero. Feature video background and one page design." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link rel="stylesheet" href="/assetss/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assetss/css/animate.min.css" />
    <link rel="stylesheet" href="/assetss/css/ionicons.min.css" />
    <link rel="stylesheet" href="/assetss/css/styles.css" />
  </head>
  <body>
    <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#first"><i class="ion-ios-analytics-outline"></i> Toko Bahan Bangunan</a>
            </div>
            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" href="#one">Intro</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#two">Keuntungan</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#three">Jenis</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#four">Spesifikasi</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#last">Contact</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" data-toggle="modal" title="A free Bootstrap video landing theme" href="#aboutModal">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header id="first">
        <div class="header-content">
            <div class="inner">
                <h1 class="cursive">Selamat Datang</h1>
                <h4>Diweb Kami, Anda Senang Kamipun Senang</h4>
                <hr>
                
            </div>
        </div>
        
    </header>
    <section class="bg-primary" id="one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <h2 class="margin-top-0 text-primary">Toko Bahan Bangunan</h2>
                    <br>
                    <p class="text-faded">
                        Pada web ini kita akan menginformasikan barang - barang
                        apa saja yang ada di toko kita  
                    </p>
                    
                </div>
            </div>
        </div>
    </section>
    <section id="two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="margin-top-0 text-primary">Barang Yang Berkualitas Tinggi</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <i class="icon-lg ion-android-laptop wow fadeIn" data-wow-delay=".3s"></i>
                        <h3>Kuat</h3>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <i class="icon-lg ion-social-sass wow fadeInUp" data-wow-delay=".2s"></i>
                        <h3>Asli</h3>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        <i class="icon-lg ion-ios-star-outline wow fadeIn" data-wow-delay=".3s"></i>
                        <h3>Bahan Pilihan</h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="three" class="no-padding">
   <!-- spek -->
   <div class="col-lg-12 text-center">
                    <h2 class="margin-top-0 text-primary">Beberapa Jenis Bahan Bangunan</h2>
                    <hr class="primary">
                </div>

                @foreach($barang as $data)
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                   <center><th><h2> {{$data->nama}}</h2></th></center>
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="{{asset('/img/'.$data->gambar.'')}}">
                        <img src="{{asset('/img/'.$data->gambar.'')}}" class="img-responsive" alt="Image 1"  height="555px" width="555px">
                        
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                
   <!-- end spek -->
                
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid" id="four">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="margin-top-0 text-primary">Spesifikasi Barang</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($barang as $data)
                <div class="col-lg-4 col-md-4 text-center">
                    <div class="feature">
                        
                        <h3>{{$data->nama}}</h3>
                        <h3>Merk = {{$data->merk}}</h3>
                        <h3>Jumlah = {{$data->jumlah}}</h3>
                        <h3>Harga = {{$data->harga}}</h3>
                        <hr>
                        
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>
    </section>
    
    <section id="last">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="margin-top-0 wow fadeIn">Kirim Pesan Anda</h2>
                    <hr class="primary">
                    <p>Isi formulir di bawah ini dan kami akan menghubungi Anda segera mungkin.</p>
                </div>
                
                <!-- isi -->
                @include('keren.create')
                <!-- end isi -->
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-3 column">
                    <h4>Information</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Products</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Benefits</a></li>
                        <li><a href="">Developers</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3 column">
                    <h4>About</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 column">
                    <h4>Stay Posted</h4>
                    <form>
                        <div class="form-group">
                          <input type="text" class="form-control" title="No spam, we promise!" placeholder="Tell us your email">
                        </div>
                        <div class="form-group">
                          <button class="btn btn-primary" data-toggle="modal" data-target="#alertModal" type="button">Subscribe for updates</button>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-3 text-right">
                    <h4>Follow</h4>
                    <ul class="list-inline">
                      <li><a href="https://twitter.com" rel="nofollow" href="" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                      <li><a href="https://www.facebook.com" rel="nofollow" href="" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a>&nbsp;</li>
                      <li><a href="https://www.instagram.com" rel="nofollow" href="" title="Instagram"><i class="icon-lg ion-social-instagram-outline"></i></a></li>
                    </ul>
                </div>
            </div>
            <br/>
            <span class="pull-right text-muted small"><a href="http://www.bootstrapzero.com">Muhammad Ramdhani</a> ©2015 Company</span>
        </div>
    </footer>
    <div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        	<div class="modal-body">
        		<img src="" id="galleryImage" class="img-responsive" />
        		<p>
        		    <br/>
        		    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
        		</p>
        	</div>
        </div>
        </div>
    </div>
    <div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        	<div class="modal-body">
        		<h2 class="text-center">Sistem Informasi Bahan Bangunan</h2>
        		
        		<p class="text-justify">
        		    Web ini hanya untuk menampilakan bermacam-macam bahan bangunan
        		</p>
        		
        		<br/>
        		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true"> OK </button>
        	</div>
        </div>
        </div>
    </div>
    <div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
        	<div class="modal-body">
        		<h2 class="text-center">Terima Kasih!</h2>
        		<p class="text-center">Semoga Anda Senang</p>
        		
        		<br/>
        		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK </button>
        	</div>
        </div>
        </div>
    </div>
    <!--scripts loaded here -->
    <script src="/assetss/js/jquery.min.js"></script>
    <script src="/assetss/js/bootstrap.min.js"></script>
    <script src="/assetss/js/jquery.easing.min.js"></script>
    <script src="/assetss/js/wow.js"></script>
    <script src="/assetss/js/scripts.js"></script>
  </body>
</html>