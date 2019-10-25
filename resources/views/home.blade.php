@extends('layouts.dash')
{{--  @section('css')
<link href="/assets/php-pdo-datatable-server-side-class-master/assets/css/dataTables.bootstrap.css" rel="stylesheet">
@endsection  --}}
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @if (session('status'))                  
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <center>
                    <img src="/admin/images/Welcome-PNG-Transparent.png" alt="" width="90%"> 
                </center>
            </div>
        </div>
    </div>
</div>
@endsection
{{--  @section('js')
<script src="/assets/php-pdo-datatable-server-side-class-master/assets/js/jquery.dataTables.min.js"></script>
<script src="/assets/php-pdo-datatable-server-side-class-master/assets/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
     $("#contoh").dataTable({
            'bServerSide': true,
            //disable order dan searching pada tombol aksi
            "columnDefs": [ {
              "targets": [3],
              "orderable": true,
              "searchable": true

            } ],
            "ajax":{
              url :"data.php",
            type: "post",  // method  , by default get
            //bisa kirim data ke server
            /*data: function ( d ) {
              
                      d.jurusan = "3223";
                  },*/
          error: function (xhr, error, thrown) {
            console.log(xhr);

            }
          },

        });
</script>
@endsection  --}}
