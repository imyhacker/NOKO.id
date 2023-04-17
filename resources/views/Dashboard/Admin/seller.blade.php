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
                  <h4>Budget vs Sales</h4>
                </div>
                <div class="card-body">
                    <table class="table" id="sellerTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Seller</th>
                                <th>Email</th>
                                <th>Rank</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($seller as $sellers)
                            <tr>
                                <th>{{$no++}}</th>
                                <th>{{$sellers->name}}</th>
                                <th>{{$sellers->email}}</th>
                                <th>{{$sellers->rank/10}} <i class="fas fa-star text-warning"></i></th>
                                <th>
                                    <a href="" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>

                                </th>
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