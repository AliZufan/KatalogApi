@extends('baseIndex')

@section('title')
<title>Beranda | Ali Mobil</title>
@endsection

@section('konten')

<!-- Title -->
<div class="row heading-bg">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h5 class="txt-dark">Dashboard</h5>
    </div>
    <!-- Breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="/">Dashboard</a></li>
        </ol>
    </div>
    <!-- /Breadcrumb -->
</div>
<!-- /Title -->

<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-primary card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title" style="color:white;">Katalog Mobil</h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-group accordion-struct" id="accordion_1" role="tablist"
                                aria-multiselectable="true">
                                <div class="panel">
                                    <div class="panel-heading" style="background-color: #66BB6A;" role="tab" id="heading_2">
                                        <center>
                                            <a class="collapsed " role="button" data-toggle="collapse"
                                                data-parent="#accordion_1" href="#collapse_2"
                                                aria-expanded="false" style="color:white;">Tambah Mobil Baru</a>
                                        </center>
                                    </div>
                                    <div id="collapse_2" class="panel-collapse collapse" role="tabpanel">
                                        <div class="panel-body pa-15">
                                            <!-- Row -->
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="panel panel-default card-view">
                                                        <div class="panel-heading">
                                                            <div class="pull-left">

                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <div class="panel-wrapper collapse in">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-wrap">
                                                                            <form class="form-horizontal">
                                                                                <div class="form-body">
                                                                                    <!-- /Row -->
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="control-label col-md-3">Nomor
                                                                                                    Kerangka</label>
                                                                                                <div class="col-md-9">
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        name="nmr_kerangka" id="nmr_kerangka">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="control-label col-md-3">Nomor
                                                                                                    Polisi</label>
                                                                                                <div class="col-md-9">
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        name="nmr_polisi"
                                                                                                        id="nmr_polisi">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="control-label col-md-3">Merek</label>
                                                                                                <div class="col-md-9">
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        name="merek"
                                                                                                        id="merek">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--/span-->
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="control-label col-md-3">Tahun</label>
                                                                                                <div class="col-md-9">
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        name="tahun"
                                                                                                        id="tahun">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--/span-->
                                                                                    </div>
                                                                                    <!-- /Row -->
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="control-label col-md-3">Tipe</label>
                                                                                                <div class="col-md-9">
                                                                                                    <input type="text"
                                                                                                        class="form-control"
                                                                                                        name="tipe"
                                                                                                        id="tipe">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-actions mt-10">
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-md-offset-3 col-md-9">
                                                                                                    <button
                                                                                                        type="submit"
                                                                                                        name="submit"
                                                                                                        id="submit"
                                                                                                        class="btn btn-success  mr-10">Submit</button>
                                                                                                    <button
                                                                                                        type="button"
                                                                                                        class="btn btn-default">Cancel</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6"> </div>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Row -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-wrap">
                        <div class="">
                            <table id="myTable1" class="table table-hover display  pb-30">
                                <thead>
                                    <tr>
                                        <th>Nomor Kerangka</th>
                                        <th>Nomor Polisi</th>
                                        <th>Merek</th>
                                        <th>Tipe</th>
                                        <th>Tahun</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nomor Kerangka</th>
                                        <th>Nomor Polisi</th>
                                        <th>Merek</th>
                                        <th>Tipe</th>
                                        <th>Tahun</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Row -->

<!-- jQuery -->
<script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript">
    $('#submit').on('click',function() {
        $.ajax({
            url: "{{url('/api/mobil')}}",
            method: 'POST',
            dataType: 'json',
            contentType: 'application/json',
            data:JSON.stringify({ nmr_kerangka: $('#nmr_kerangka').val(), nmr_polisi: $('#nmr_polisi').val(), merek: $('#merek').val(), tipe: $('#tipe').val(), tahun: $('#tahun').val()}),
        })
        .done(function(resp) {
            window.location.reload();
        })
        .fail(function(resp) {
            window.location.reload();
        });
    });
</script>
@endsection
