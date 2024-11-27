@extends('layout.app')

@section('content')

<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content rounded-0">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex align-items-center">
        <div class="input-group w-75 mx-auto d-flex">
          <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1" />
          <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Search End -->

<!-- Hero Start -->
<div class="container-fluid py-5 mb-5 hero-header">
  <div class="container py-5">
    <div class="row g-5 align-items-center">
      <div class="col-md-12 col-lg-7">
        <h4 class="mb-3 text-secondary">Selamat datang</h4>
        <h1 class="mb-5 display-3 text-primary">Makanan yang menggoda selera, harga pas di kantong!</h1>
        <div class="position-relative mx-auto">
          <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="number" placeholder="Search" />
          <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100" style="top: 0; right: 25%">Submit Now</button>
        </div>
      </div>
      <div class="col-md-12 col-lg-5">
        <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">

            <!-- Carousel Item 1: Video Vertikal -->
            <div class="carousel-item active rounded">
              <video class="w-100 bg-secondary rounded video-vertical" controls>
                <source src="video/kelompok2risoles.mp4" type="video/mp4">
                Video tidak tersedia.
              </video>
            </div>

            <!-- Carousel Item 2: Video Vertikal -->
            <div class="carousel-item rounded">
              <video class="w-100 bg-secondary rounded video-vertical" controls>
                <source src="video/kelompok1.mp4" type="video/mp4">
                Video tidak tersedia.
              </video>
            </div>

            <!-- Carousel Item 3: Video Vertikal -->
            <div class="carousel-item rounded">
              <video class="w-100 bg-secondary rounded video-vertical" controls>
                <source src="video/kelompok3.mp4" type="video/mp4">
                Video tidak tersedia.
              </video>
            </div>

            <!-- Carousel Item 4: Video Vertikal -->
            <div class="carousel-item rounded">
              <video class="w-100 bg-secondary rounded video-vertical" controls>
                <source src="video/kelompok4dimsum.mp4" type="video/mp4">
                Video tidak tersedia.
              </video>
            </div>

            <!-- Carousel Item 5: Video Vertikal -->
            <div class="carousel-item rounded">
              <video class="w-100 bg-secondary rounded video-vertical" controls>
                <source src="video/kelompok5.mp4" type="video/mp4">
                Video tidak tersedia.
              </video>
            </div>

            <!-- Carousel Item 6: Video Vertikal -->
            <div class="carousel-item rounded">
              <video class="w-100 bg-secondary rounded video-vertical" controls>
                <source src="video/kelompok6.mp4" type="video/mp4">
                Video tidak tersedia.
              </video>
            </div>

            <!-- Carousel Item 7: Video Vertikal -->
            <div class="carousel-item rounded">
              <video class="w-100 bg-secondary rounded video-vertical" controls>
                <source src="video/kelompok8.mp4" type="video/mp4">
                Video tidak tersedia.
              </video>
            </div>

            <!-- Carousel Item 8: Video Vertikal -->
            <div class="carousel-item rounded">
              <video class="w-100 bg-secondary rounded video-vertical" controls>
                <source src="video/kelompok7.mp4" type="video/mp4">
                Video tidak tersedia.
              </video>
            </div>
          </div>

          <!-- Kontrol Carousel -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Hero End -->
<style>
  .video-vertical {
    aspect-ratio: 9 / 8;
    object-fit: cover;
  }
</style>


<!-- Featurs Section Start -->
<div class="container-fluid featurs py-5">
  <div class="container py-5">
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="featurs-item text-center rounded bg-light p-4">
          <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
            <i class="fas fa-car-side fa-3x text-white"></i>
          </div>
          <div class="featurs-content text-center">
            <h5>Free Shipping</h5>
            <p class="mb-0">Free on order over 1 Juta</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="featurs-item text-center rounded bg-light p-4">
          <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
            <i class="fas fa-user-shield fa-3x text-white"></i>
          </div>
          <div class="featurs-content text-center">
            <h5>Security Payment</h5>
            <p class="mb-0">100% security payment</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="featurs-item text-center rounded bg-light p-4">
          <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
            <i class="fas fa-exchange-alt fa-3x text-white"></i>
          </div>
          <div class="featurs-content text-center">
            <h5>30 Day Return</h5>
            <p class="mb-0">30 day money guarantee</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="featurs-item text-center rounded bg-light p-4">
          <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
            <i class="fa fa-phone-alt fa-3x text-white"></i>
          </div>
          <div class="featurs-content text-center">
            <h5>24/7 Support</h5>
            <p class="mb-0">Support every time fast</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Featurs Section End -->

<!-- Food Shop Start-->
<div class="container-fluid fruite py-5">
  <div class="container py-5">
    <div class="tab-class text-center">
      <div class="row g-4">
        <div class="col-lg-4 text-start">
          <h1>Produk Kami</h1>
        </div>
        <div class="col-lg-8 text-end">
          <ul class="nav nav-pills d-inline-flex text-center mb-5">
            <li class="nav-item">
              <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                <span class="text-dark" style="width: 130px">All Products</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                <span class="text-dark" style="width: 130px">Food</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                <span class="text-dark" style="width: 130px">Drinks</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content">
        <div id="tab-1" class="tab-pane fade show p-0 active">
          <div class="row g-4">
            <div class="col-lg-12">
              <div class="row g-4">
                @foreach($produk as $p)
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="data:image/jpeg;base64,{{ base64_encode($p->gambar) }}" class="img-fluid w-100 rounded-top" alt="{{ $p->nama }}" />
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">
                      {{ $p->type }}
                    </div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <h4>{{ $p->nama }}</h4>
                      <p>{{ $p->varian }}</p>
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">Rp {{ number_format($p->harga, 0, ',', '.') }}</p>
                        <a href="/shop-detail{{ $p->id_produk }}" class="btn border border-secondary rounded-pill px-3 text-primary">
                          <i class="fa fa-shopping-bag me-2 text-primary"></i>Detail Produk
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div id="tab-2" class="tab-pane fade show p-0">
          <div class="row g-4">
            <div class="col-lg-12">
              <div class="row g-4">
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="img/kelompok 1.jpeg" class="img-fluid w-100 rounded-top" alt="" />
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">Food</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <h4>Samosa Sayuran</h4>
                      <p>Isi 4pc, Sayuran, Daging.</p>
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">Rp 10.000</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Detail Produk</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="img/kelompok 2.jpeg" class="img-fluid w-100 rounded-top" alt="" />
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">Food</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <h4>Risoles</h4>
                      <p>Suwir Pedas, Orginal.</p>
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">Rp 10.000</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Detail Produk</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="img/kelompok 3.jpeg" class="img-fluid w-100 rounded-top" alt="" />
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">Food</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <h4>Tofu Skin Roll</h4>
                      <p>Roll Ayam, Sostel, Mie hun.</p>
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">Rp 6.000</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Detail Produk</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="img/kelompok 6.jpeg" class="img-fluid w-100 rounded-top" alt="" />
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">Food</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <h4>Banana Boom</h4>
                      <p>Coklat Keju, Matcha.</p>
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">Rp 7.000</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Detail Produk</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="img/kelompok 7.jpeg" class="img-fluid w-100 rounded-top" alt="" />
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">Food</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <h4>Roti Goreng Sosis</h4>
                      <p>Roti Goreng Sosis.</p>
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">Rp 6.000</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Detail Produk</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="img/kelompok 4.jpeg" class="img-fluid w-100 rounded-top" alt="" />
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">Food</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <h4>Dimsum Ayam</h4>
                      <p>Dimsum Ayam, Udang.</p>
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">Rp 15.000</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Detail Produk</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="img/kelompok 5.jpeg" class="img-fluid w-100 rounded-top" alt="" />
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">Food</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <h4>Pisang Coklat</h4>
                      <p>Pisang Coklat.</p>
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">Rp 6.000</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Detail Produk</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="tab-3" class="tab-pane fade show p-0">
          <div class="row g-4">
            <div class="col-lg-12">
              <div class="row g-4">
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="img/kelompok 8.jpeg" class="img-fluid w-100 rounded-top" alt="" />
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px">Drinks</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <h4>Es Teh Lemon Tea Biji Selasih</h4>
                      <p>Es Teh Lemon Tea Biji Selasih</p>
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fs-5 fw-bold mb-0">Rp 5.000</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Food Shop End-->

<!-- Featurs Start -->
<div class="container-fluid service py-5">
  <div class="container py-5">
    <div class="row g-4 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <a href="#">
          <div class="service-item bg-secondary rounded border border-secondary">
            <img src="assets/tofuayam.jpg" class="img-fluid rounded-top w-300" alt="" />
            <div class="px-4 rounded-bottom">
              <div class="service-content bg-primary text-center p-4 rounded">
                <h5 class="text-white">Delicious Food</h5>
                <h3 class="mb-0">ORDER NOW!</h3>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a href="#">
          <div class="service-item bg-dark rounded border border-dark">
            <img src="assets/rotigorengsosis.jpg" class="img-fluid rounded-top w-100" alt="" />
            <div class="px-4 rounded-bottom">
              <div class="service-content bg-light text-center p-4 rounded">
                <h5 class="text-primary">Tasty Food</h5>
                <h3 class="mb-0">Free delivery</h3>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4">
        <a href="#">
          <div class="service-item bg-primary rounded border border-primary">
            <img src="assets/tofumiesosis.jpg" class="img-fluid rounded-top w-100" alt="" />
            <div class="px-4 rounded-bottom">
              <div class="service-content bg-secondary text-center p-4 rounded">
                <h5 class="text-white">Yummy</h5>
                <h3 class="mb-0">Good Taste</h3>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- Featurs End -->

<!-- Banner Section Start-->
<div class="container-fluid banner bg-secondary my-5">
  <div class="container py-5">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <div class="py-4">
          <h1 class="display-3 text-white">Fresh Food Always</h1>
          <p class="fw-normal display-3 text-dark mb-4">in Our Store</p>
          <p class="mb-4 text-dark">Makan Enak Tanpa Kantong Bolong!" Hidangan lezat, harga bersahabat. Cocok untuk semua kalangan.</p>
          <a href="#" class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">BUY</a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="position-relative">
          <img src="img/baner-1.png" class="img-fluid w-100 rounded" alt="" />
          <div class="d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute" style="width: 140px; height: 140px; top: 0; left: 0">
            <h1 style="font-size: 100px">1</h1>
            <div class="d-flex flex-column">
              <span class="h2 mb-0">st</span>
              <span class="h4 text-muted mb-0"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Banner Section End -->


@endsection