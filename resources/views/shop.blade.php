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
          <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
          <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Search End -->


<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
  <h1 class="text-center text-white display-6">Shop</h1>
  <ol class="breadcrumb justify-content-center mb-0">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Pages</a></li>
    <li class="breadcrumb-item active text-white">Shop</li>
  </ol>
</div>
<!-- Single Page Header End -->


<!-- Food Shop Start-->
<div class="container-fluid fruite py-5">
  <div class="container py-5">
    <h1 class="mb-4">Toko Makanan dan Minuman enak!</h1>
    <div class="row g-4">
      <div class="col-lg-12">
        <div class="row g-4">
          <div class="col-xl-3">
            <div class="input-group w-100 mx-auto d-flex">
              <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
              <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
            </div>
          </div>
          <div class="col-6"></div>
        </div>
        <div class="row g-4">
          <div class="col-lg-3">
            <div class="row g-4">
              <div class="col-lg-12">
                <div class="mb-3">
                <br>
                <h4>Kategori</h4>
                  <ul class="list-unstyled fruite-categorie">
                      @foreach($produk as $p)
                      <li>
                          <div class="d-flex justify-content-between fruite-name">
                              <a href="/shop-detail/{{ $p->id_produk }}"><i class="fas fa-apple-alt me-2"></i>{{ $p->nama }}</a>
                              <span>(1)</span>
                          </div>
                      </li> 
                      @endforeach
                  </ul>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row g-4 justify-content-center">
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
              <div class="col-12">
                <div class="pagination d-flex justify-content-center mt-5">
                  <a href="#" class="rounded">&laquo;</a>
                  <a href="#" class="active rounded">1</a>
                  <a href="#" class="rounded">2</a>
                  <a href="#" class="rounded">&raquo;</a>
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
@endsection