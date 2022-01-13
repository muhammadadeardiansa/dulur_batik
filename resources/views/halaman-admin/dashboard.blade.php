@extends('layout-admin.master-dashboard')

@section('content')
    <section>
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mt-4">
                        <h1>DATA PRODUK</h1>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <table class="table table-hover text-nowrap">
                            <tr>
                                <th>No.</th>
                                <th>Nama Produk</th>
                                <th>Stok</th>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
