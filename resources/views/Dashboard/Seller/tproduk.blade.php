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
                  <h4>Upload Produk Akun Game</h4>
                </div>
                <div class="card-body">
                  <form action="{{route('upload_produk')}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                  <div class="form-group">
                    <label>Nama Akun Game</label>
                    <input type="text" name="nama_akun" class="form-control" placeholder="Nama Akun Game">
                  </div>
              
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Tipe Game</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="tipe_game">
                        <option disabled selected value>Pilih Tipe Game</option>
                        <option>Moba</option>
                        <option>FPS</option>
                        <option>RPG</option>
                        <option>MMO RPG</option>
                      </select>
                    </div>   
                    
                    <div class="form-group">
                      <label>Harga</label>
                        <input type="text" class="form-control" id="rupiah" placeholder="Masukan Nominalnya" name="harga_jual">
                    </div>

                    <div class="form-group">
                      <label >Deskripsi Akun</label>
                      <textarea class="form-control" id="editor" name="deskripsi_akun" rows="3"></textarea>

                    </div>

                    <div class="form-group">
                      <label>Screenshot Perama</label>
                      <input type="file" class="form-control-file" id="screenshot_pertama" name="screenshot_pertama" /> 
                      
                      
                      <img id="preview-screenshot_pertama" src="https://commercial.bunn.com/img/image-not-available.png"
                        alt="preview screenshot_pertama" style="max-height: 250px;">      
                    </div>
                    <div class="form-group">
                      <label>Screenshot Kedua</label>
                      <input type="file" class="form-control-file" id="screenshot_kedua" name="screenshot_kedua" />  

                      <img id="preview-screenshot_kedua" src="https://commercial.bunn.com/img/image-not-available.png"
                        alt="preview screenshot_kedua" style="max-height: 250px;">      
                    </div>

                    <div class="form-group">
                      <label>Screenshot Ketiga Game</label>
                      <input type="file" class="form-control-file" id="screenshot_ketiga" name="screenshot_ketiga" />     

                      <img id="preview-screenshot_ketiga" src="https://commercial.bunn.com/img/image-not-available.png"
                        alt="preview screenshot_ketiga" style="max-height: 250px;">      
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-outline-success btn-block" value="Upload Produk ">
                    </div>
                  </form>
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