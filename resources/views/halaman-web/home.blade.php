@extends('layout-web.master-home')

@section('main')
<div class="main">
    <!--cintai produk lokal-->
    <div class="bg-white img d-flex justify-content-center align-items-center">
      <div class="container-fluid ms-5">
          <h1 id="lokal" class="text-white ">CINTAI PRODUK LOKAL</h1>
          <p style="margin: 0; padding: 0;">Hanya Disini Penjualan Batik Terlengkap</p>
          <a href="all-product.html"><button id="now" type="button" class="btn btn-light mt-3 ms-4" style="font-size: 15px; font-family: Scada; padding: 5px 10px;"><b>BELANJA SEKARANG</b></button></a>
      </div>
    </div>
    <!--batas produk lokal-->

    <!--deretan-->
    <div id="carding" class="bg-white mb-5" style="margin-top: 50px;">
      <div class="container d-flex justify-content-around">
        <div id="bg-hover" class="card text-white img2 ms-3" style="max-width: 20rem; max-height: 30rem;">
          <a href="tops.html" class="card-body d-flex align-items-center justify-content-center">
            <p class="card-text">TOPS</p>
          </a>
        </div>
        <div id="bg-hover" class="card text-white img3 ms-3" style="max-width: 20rem; max-height: 30rem;">
          <a href="best-seller.html" class="card-body d-flex align-items-center justify-content-center">
            <p class="card-text">BEST SELLER</p>
          </a>
        </div>
        <div id="bg-hover" class="card text-white img4 ms-3" style="max-width: 20rem; max-height: 30rem;">
          <a href="dress.html" class="card-body d-flex align-items-center justify-content-center">
            <p class="card-text">DRESS</p>
          </a>
        </div>
        <div id="bg-hover" class="card text-white img5 ms-3" style="max-width: 20rem; max-height: 30rem;">
          <a href="shirt.html" class="card-body d-flex align-items-center justify-content-center">
            <p class="card-text">SHIRT</p>
          </a>
        </div>
      </div>
    </div>
    <!--batas deretan-->

    <!--deretan 2-->
    <div class="menu2 mt-5" style="margin-bottom: 85px;">
      <div class="container-fluid d-flex justify-content-center">
          <div class="d-flex bd-highlight mt-3 mb-5 mymenu">
            <a href="#" class="me-5 px-2 bd-highlight active-1 text-dark">BEST SELLER</a>
            <a href="#" class="ms-auto ms-5 px-2 bd-highlight">MORE ITEM</a>
          </div>
      </div>
      <!--content2-->
      <div class="c2 container-fluid mt-4 mb-5 text-center">
        <div class="row justify-content-center">
          <div class="col-lg-4" style="width: 27rem;">
            <img src="style/asset/img/couple1.jpg" class="card-img-top" style="height: 28rem;" alt="...">
            <div class="card-body">
              <p class="card-text text-center" style="color: #313131;">COUPLE MODEL BATIK KERIS</p>
              <div class="harga01">Rp 165.000,00</div>
            </div>
          </div>
          <div class="col-lg-4" style="width: 27rem;">
            <img src="style/asset/img/adikusuma.jpg" class="card-img-top" style="height: 28rem;" alt="...">
            <div class="card-body">
              <p class="card-text text-center" style="color: #313131;">HEM BATIK ADIKUSUMA MERAK</p>
              <div class="harga01">Rp 99.000,00</div>
            </div>
          </div>
          <div class="col-lg-4" style="width: 27rem;">
            <img src="style/asset/img/family.jpg" class="card-img-top" style="height: 28rem;" alt="...">
            <div class="card-body">
              <p class="card-text text-center" style="color: #313131;">COUPLE MODEL BATIK KERIS</p>
              <div class="harga01">Rp 210.000,00</div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <a href="all-product.html"><button type="button" class="btn btn-dark radius">SEE MORE</button></a>
      </div>
      <!--batas content2-->
    </div>
    <!--batas deretan 2-->

    <!--imindonesia-->
    <div class="indo d-flex justify-content-center">
      <div class="container-fluid">
        <h2 class="text-center mb-5">#IMINDONESIA</h2>
        <div class="container d-flex justify-content-around mb-5">
          <div id="bg-hover" class="card text-white img6 ms-3" style="max-width: 20rem; max-height: 30rem;">
            <a href="all-product.html" class="card-body d-flex align-items-center justify-content-center">
              <p class="card-text">SHOP IT</p>
            </a>
          </div>
          <div id="bg-hover" class="card text-white img7 ms-3" style="max-width: 20rem; max-height: 30rem;">
            <a href="all-product.html" class="card-body d-flex align-items-center justify-content-center">
              <p class="card-text">SHOP IT</p>
            </a>
          </div>
          <div id="bg-hover" class="card text-white img8 ms-3" style="max-width: 20rem; max-height: 30rem;">
            <a href="all-product.html" class="card-body d-flex align-items-center justify-content-center">
              <p class="card-text">SHOP IT</p>
            </a>
          </div>
          <div id="bg-hover" class="card text-white img9 ms-3" style="max-width: 23rem; max-height: 30rem;">
            <a href="all-product.html" class="card-body d-flex align-items-center justify-content-center">
              <p class="card-text">SHOP IT</p>
            </a>
          </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-top: 95px;">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="all-product.html"><img src="style/asset/img/Group 1.png" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
              <a href="all-product.html"><img src="style/asset/img/Group 1.png" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
              <a href="all-product.html"><img src="style/asset/img/Group 1.png" class="d-block w-100" alt="..."></a>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>




    <section class="about">
      <div class="container py-5 m-auto text-center">
          <div class="row">
            <div class="col-lg-4">
              <i class="fas fa-truck fa-3x mb-4"></i>
              <h5>FREE ONGKIR</h5>
              <p class="text-dark">Minimal Order Rp 150.000</p>
            </div>
            <div class="col-lg-4">
              <i class="fas fa-check-square fa-3x mb-4"></i>
              <h5>HIGH QUALITY</h5>
              <p class="text-dark">Self Manufactured</p>
            </div>
            <div class="col-lg-4">
              <i class="fas fa-box-open fa-3x mb-4"></i>
              <h5>EXCHANGE</h5>
                <p class="text-dark">7 Days Exchange</p>
            </div>

        </div>
      </div>
    </section>
    <!--batas imindonesia-->
  </div>
@endsection
