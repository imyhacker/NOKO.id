
  <!-- General JS Scripts -->
  <script src="https://demo.getstisla.com/assets/modules/jquery.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/popper.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/tooltip.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/moment.min.js"></script>
  <script src="https://demo.getstisla.com/assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="https://demo.getstisla.com/assets/modules/jquery.sparkline.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/chart.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/summernote/summernote-bs4.js"></script>
  <script src="https://demo.getstisla.com/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="https://demo.getstisla.com/assets/js/page/index.js"></script>

  <!-- Template JS File -->
  <script src="https://demo.getstisla.com/assets/js/scripts.js"></script>
  <script src="https://demo.getstisla.com/assets/js/custom.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
  <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
  <script>
$(document).ready( function () {
    $('#sellerTable').DataTable();
} );
  </script>

<script type="text/javascript">
  $('#screenshot_pertama').change(function(){
         
  let reader = new FileReader();

  reader.onload = (e) => { 

    $('#preview-screenshot_pertama').attr('src', e.target.result); 
  }

  reader.readAsDataURL(this.files[0]); 

 });
 $('#screenshot_kedua').change(function(){
         
         let reader = new FileReader();
       
         reader.onload = (e) => { 
       
           $('#preview-screenshot_kedua').attr('src', e.target.result); 
         }
       
         reader.readAsDataURL(this.files[0]); 
       
        });
        $('#screenshot_ketiga').change(function(){
         
         let reader = new FileReader();
       
         reader.onload = (e) => { 
       
           $('#preview-screenshot_ketiga').attr('src', e.target.result); 
         }
       
         reader.readAsDataURL(this.files[0]); 
       
        });
</script>
	<script type="text/javascript">
		
		var rupiah = document.getElementById('rupiah');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
	</script>
</body>
</html>