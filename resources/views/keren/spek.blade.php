 <div class="col-lg-12 text-center">
                    <h2 class="margin-top-0 text-primary">Beberapa Spesifikasi Bahan Bangunan</h2>
                    <hr class="primary">
                </div>

                @foreach($barang as $data)
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="./assets/semen.jpg">
                        <img src="{{asset('/img/'.$data->gambar.'')}}" class="img-responsive" alt="Image 1"  height="1440px" width="950px">
                        
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
                