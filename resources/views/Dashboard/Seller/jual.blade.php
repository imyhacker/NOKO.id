<x-dcore.head />
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <x-dcore.nav />
      <x-dcore.sidebar />
      <div class="main-content">
        <section class="section">

        <!-- MAIN OF CENTER CONTENT -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Produk Akun Game</h4>
                </div>
                <div class="card-body">
                  <a href="" class="btn btn-outline-success btn-block mb-3">Tambah Produk <i class="fa fa-plus"></i></a>
                    <table class="table" id="sellerTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Jual</th>
                                <th>Nama Akun</th>
                                <th>Tipe Game</th>
                                <th>Harga Jual</th>
                                <th>Status</th>
                              
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp 
                            @foreach ($produk as $p )
                              <tr>
                                <td>{{$no++}}</td>
                                <td>{{$p->unique_num}}</td>
                                <td>{{$p->nama_akun}}</td>
                                <td>{{$p->tipe_game}}</td>
                                <td>{{$p->harga_jual}}</td>
                                <th>@if($p->status == 0) Avaible @else Sold Out @endif</th>
                                <td>
                                  <a href="" class="btn btn-outline-success">Terjual <i class="fa fa-check"></i></a>
                                  <a href="" class="btn btn-outline-danger">Hapus <i class="fa fa-trash"></i></a>
                                  <a href="" class="btn btn-outline-info">Edit <i class="fa fa-edit"></i></a>

                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
            
          </div>
        <!-- END OF CENTER CONTENT -->


        </section>
      </div>
      <x-dcore.footer />
    </div>
  </div>
<x-dcore.script />