@extends ('layouts.dashboard')

@section ('content')
<!--********** PAGE CONTENTS **********-->
<div class="page-content">
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue">Order List</h3>
                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID Pesanan</th>
                                    <th>ID Penerbangan</th>
                                    <th>Nama Lengkap</th>
                                    <th>No Identitas</th>
                                    <th>Nomor Telepon</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-0">
                            <a href={{url('/admin/course/create')}} >
                                <button class="btn">
                                    Create
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content -->
@stop

@section ('page_script')
<!-- page specific plugin scripts -->
<script type="text/javascript">
(function($) {
  $.get('http://localhost:3000/collections/orders2', function(data){
    var table = "";
    for (key in data) {
        console.log(data[key]);
        table += "<tr>";
        table += "<th>"+data[key]._id+"</th>";
        table += "<th>"+data[key].idf+"</th>";
        table += "<th>"+data[key].nama+"</th>";
        table += "<th>"+data[key].noid+"</th>";
        table += "<th>"+data[key].notelp+"</th>";
        table += "</tr>";
    }
    $('#tbody').html(table);
}) 
})(jQuery);    
</script>
@stop