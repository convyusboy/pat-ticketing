@extends ('layouts.dashboard')

@section ('content')
<!--********** PAGE CONTENTS **********-->
<div class="page-content">
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="header smaller lighter blue">Flight List</h3>
                    <div class="table-responsive">
                        <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID Penerbangan</th>
                                    <th>Kode Pesawat</th>
                                    <th>Waktu Berangkat</th>
                                    <th>Asal</th>
                                    <th>Tujuan</th>
                                    <th>Harga</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                            </tbody>
                        </table>
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
  $.get('http://localhost:3000/collections/flights2', function(data){
    var table = "";
    for (key in data) {
        console.log(data[key]);
        table += "<tr>";
        table += "<th>"+data[key]._id+"</th>";
        table += "<th>"+data[key].kode+"</th>";
        table += "<th>"+data[key].waktu+"</th>";
        table += "<th>"+data[key].asal+"</th>";
        table += "<th>"+data[key].tujuan+"</th>";
        table += "<th>"+data[key].harga+"</th>";
        table += "<th><div class=\"form-group\"><div class=\"col-md-offset-0\"><a href=\"#\" onclick=\"postOrder();return false;\">Pesan</a></div></div></th>";
        table += "</tr>";
    }
    $('#tbody').html(table);
}) 
})(jQuery);    
</script>
@stop