@extends('layout-web.master-pria')

@section('main')
<div class="isi container mt-5 ">
    <div class="d-flex">
      <!--sidebar-->
      @include('layout-web.filter')
      <!--batas sidebar-->

      <!--produk-->
      <div class="c2 container-fluid mt-4 mb-5 text-center">
        <div class="row justify-content-between">
          <div class="col-lg-4" style="width: 20rem;">
          <a href="#" style="text-decoration: none;"><img src="style/asset/img/adikusuma.jpg" class="card-img-top" style="height: 21rem;" alt="...">
            <div class="card-body">
              <p class="card-text text-center" style="color: #313131;">MODEL BATIK KERIS</p>
              <div class="harga01 text-danger">Rp 140.000,00</div>
            </div>
          </a>
          </div>
        </div>
      </div>
      <!--batsa produk-->
    </div>
  </div>
@endsection
