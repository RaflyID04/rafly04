@extends('master.kerangka')
<title>Dashboard</title>
@section('container')
      <h3>Dashboard</h3>

      <section class="conten mt-4">
            <div class="container-fluid">
                  <div class="row">

                   <div class="col-lg-3 col-6">
                        <div class ="card-dash card border-dark shadow">
                              <div class="card-body pb-0">
                                    <h3>{{ $hitungkategori }}</h3>
                                    <h5>Total Kategori Produk</h5>

                        </div>
                               <div class="card-footer text-center bg-primary">
                                    <a href="/category" class="text-decoration-none text-light">Detail Info</a>
                        </div>
                  </div>
            </div>

            
            <div class="col-lg-3 col-6">
                  <div class ="card-dash card border-dark shadow">
                        <div class="card-body pb-0">
                              <h3>{{ $hitungbarang }}</h3>
                              <h5>Total Produk</h5>

                  </div>
                         <div class="card-footer text-center bg-primary">
                              <a href="product" class="text-decoration-none text-light">Detail Info</a>
                  </div>
            </div>
      </div>
      <div class="col-lg-3 col-6">
           <div class ="card-dash card border-dark shadow">
                 <div class="card-body pb-0">
                       <h3>{{ $hitungtransaksi }}</h3>
                       <h5>Total Transaksi</h5>

           </div>
                  <div class="card-footer text-center bg-primary">
                       <a href="transaction" class="text-decoration-none text-light">Detail Info</a>
           </div>
     </div>
</div>
<div class="col-lg-3 col-6">
     <div class ="card-dash card border-dark shadow">
           <div class="card-body pb-0">
                 <h3>{{ $hitunguser }}</h3>
                 <h5>Total User/Member</h5>

     </div>
            <div class="card-footer text-center bg-primary">
                 <a href="usermember" class="text-decoration-none text-light">Detail Info</a>
     </div>
</div>
</div>
@endsection