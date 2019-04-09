<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    @yield('title')
    <meta name="description" content="Philbert is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords"
        content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="{{ asset('favicon.ico" type="image/x-icon')}}">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css')}}" />


    <!-- Data table CSS -->
    <link href="{{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('vendors/bower_components/datatables.net-responsive/css/responsive.dataTables.min.css')}}"
        rel="stylesheet" type="text/css" />

    <link href="{{ asset('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet"
        type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!-- /Preloader -->
    <div class="wrapper theme-1-active pimary-color-green">
        <!-- Top Menu Items -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="mobile-only-brand pull-left">
                <div class="nav-header pull-left">
                    <div class="logo-wrap">
                        <a href="index.html">
                            <img class="brand-img" src="dist/img/logo.png" alt="brand" />
                            <span class="brand-text">AliMobil</span>
                        </a>
                    </div>
                </div>
                <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left"
                    href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
                <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view"
                    href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
                <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i
                        class="zmdi zmdi-more"></i></a>
                <!-- <form id="search_form" role="search" class="top-nav-search collapse pull-left">
					<div class="input-group">
						<input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
						<span class="input-group-btn">
						<button type="button" class="btn  btn-default"  data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
						</span>
					</div>
				</form> -->
            </div>
            <div id="mobile_only_nav" class="mobile-only-nav pull-right">
                <ul class="nav navbar-right top-nav pull-right">
                    <li class="dropdown alert-drp">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                class="zmdi zmdi-notifications top-nav-icon"></i><span
                                class="top-nav-icon-badge">5</span></a>
                        <ul class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn"
                            data-dropdown-out="bounceOut">
                            <li>
                                <div class="notification-box-head-wrap">
                                    <span class="notification-box-head pull-left inline-block">notifications</span>
                                    <a class="txt-danger pull-right clear-notifications inline-block"
                                        href="javascript:void(0)"> clear all </a>
                                    <div class="clearfix"></div>
                                    <hr class="light-grey-hr ma-0" />
                                </div>
                            </li>
                            <li>
                                <div class="streamline message-nicescroll-bar">
                                    <div class="sl-item">
                                        <a href="javascript:void(0)">
                                            <div class="icon bg-green">
                                                <i class="zmdi zmdi-flag"></i>
                                            </div>
                                            <div class="sl-content">
                                                <span
                                                    class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                    New subscription created</span>
                                                <span
                                                    class="inline-block font-11  pull-right notifications-time">2pm</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate">Your customer subscribed for the basic plan. The
                                                    customer will pay $25 per month.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="light-grey-hr ma-0" />
                                    <div class="sl-item">
                                        <a href="javascript:void(0)">
                                            <div class="icon bg-yellow">
                                                <i class="zmdi zmdi-trending-down"></i>
                                            </div>
                                            <div class="sl-content">
                                                <span
                                                    class="inline-block capitalize-font  pull-left truncate head-notifications txt-warning">Server
                                                    #2 not responding</span>
                                                <span
                                                    class="inline-block font-11 pull-right notifications-time">1pm</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate">Some technical error occurred needs to be resolved.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="light-grey-hr ma-0" />
                                    <div class="sl-item">
                                        <a href="javascript:void(0)">
                                            <div class="icon bg-blue">
                                                <i class="zmdi zmdi-email"></i>
                                            </div>
                                            <div class="sl-content">
                                                <span
                                                    class="inline-block capitalize-font  pull-left truncate head-notifications">2
                                                    new messages</span>
                                                <span
                                                    class="inline-block font-11  pull-right notifications-time">4pm</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate"> The last payment for your G Suite Basic
                                                    subscription failed.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="light-grey-hr ma-0" />
                                    <div class="sl-item">
                                        <a href="javascript:void(0)">
                                            <div class="sl-avatar">
                                                <img class="img-responsive" src="dist/img/avatar.jpg" alt="avatar" />
                                            </div>
                                            <div class="sl-content">
                                                <span
                                                    class="inline-block capitalize-font  pull-left truncate head-notifications">Sandy
                                                    Doe</span>
                                                <span
                                                    class="inline-block font-11  pull-right notifications-time">1pm</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate">Neque porro quisquam est qui dolorem ipsum quia
                                                    dolor sit amet, consectetur, adipisci velit</p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="light-grey-hr ma-0" />
                                    <div class="sl-item">
                                        <a href="javascript:void(0)">
                                            <div class="icon bg-red">
                                                <i class="zmdi zmdi-storage"></i>
                                            </div>
                                            <div class="sl-content">
                                                <span
                                                    class="inline-block capitalize-font  pull-left truncate head-notifications txt-danger">99%
                                                    server space occupied.</span>
                                                <span
                                                    class="inline-block font-11  pull-right notifications-time">1pm</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate">consectetur, adipisci velit.</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="notification-box-bottom-wrap">
                                    <hr class="light-grey-hr ma-0" />
                                    <a class="block text-center read-all" href="javascript:void(0)"> read all </a>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown auth-drp">
                        <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="dist/img/user1.png"
                                alt="user_auth" class="user-auth-img img-circle" /><span
                                class="user-online-status"></span></a>
                        <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX"
                            data-dropdown-out="flipOutX">
                            <li>
                                <a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
                            </li>
                            <li>
                                <a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
                            </li>
                            <li class="divider"></li>
                            <li class="sub-menu show-on-hover">
                                <a href="#" class="dropdown-toggle pr-0 level-2-drp"><i
                                        class="zmdi zmdi-check text-success"></i> available</a>
                                <ul class="dropdown-menu open-left-side">
                                    <li>
                                        <a href="#"><i
                                                class="zmdi zmdi-check text-success"></i><span>available</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i
                                                class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /Top Menu Items -->

        <!-- Left Sidebar Menu -->
        <div class="fixed-sidebar-left">
            <ul class="nav navbar-nav side-nav nicescroll-bar">
                <li class="navigation-header">
                    <span>Main</span>
                    <i class="zmdi zmdi-more"></i>
                </li>
                <li>
                    <a class="active" href="/">
                        <div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span
                                class="right-nav-text">Dashboard</span></div>
                        <div class="pull-right"></div>
                        <div class="clearfix"></div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /Left Sidebar Menu -->

        <!-- Right Sidebar Menu -->

        <!-- ISI KONTEN -->

        <!-- /Right Sidebar Menu -->



        <!-- Right Sidebar Backdrop -->
        <div class="right-sidebar-backdrop"></div>
        <!-- /Right Sidebar Backdrop -->

        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container-fluid pt-25">

                @yield('konten')

                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h5 class="modal-title" id="myModalLabel">Edit Data</h5>
                            </div>
                            <div class="modal-body">
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
                                                                                            name="nmr_kerangka_edit"
                                                                                            id="nmr_kerangka_edit">
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
                                                                                            name="nmr_polisi_edit"
                                                                                            id="nmr_polisi_edit">
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
                                                                                            name="merek_edit" id="merek_edit">
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
                                                                                            name="tahun_edit" id="tahun_edit">
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
                                                                                            name="tipe_edit" id="tipe_edit">
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
                                                                                        <button type="submit"
                                                                                            name="submit" id="submit"
                                                                                            class="btn btn-success  mr-10">Submit</button>
                                                                                        <button type="button"
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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer container-fluid pl-30 pr-30">
                <div class="row">
                    <div class="col-sm-12">
                        <p>2019 &copy; AliMobil.co</p>
                    </div>
                </div>
            </footer>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Data table JavaScript -->
    <script src="{{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('vendors/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}">
    </script>
    {{-- <script src="{{ asset('dist/js/responsive-datatable-data.js')}}"></script> --}}

    <script>
        /*Responsive Datatable Init*/

        "use strict";

        $(document).ready(function () {
            var table = $('#myTable1').DataTable({
                "responsive": "true",

                "ajax": "{{url('/api/mobil')}}",
                "columns": [{
                        "data": "nmr_kerangka"
                    },
                    {
                        "data": "nmr_polisi"
                    },
                    {
                        "data": "merek"
                    },
                    {
                        "data": "tipe"
                    },
                    {
                        "data": "tahun"
                    },
                    {
                        "data": null,
                        "sortable": false,
                        "render": function (data, type, full, meta) {
                            var nmrKerangka = data.nmr_kerangka;

                            return '<a onclick="editData(' + nmrKerangka +
                                ');" class="btn btn-success btn-anim"><i class="fa fa-pencil-square-o"></i><span class="btn-text">edit</span></a><a onclick="deleteData(' +
                                nmrKerangka +
                                ');" class="btn btn-danger btn-anim mr-5"><i class="fa fa-trash-o"></i><span class="btn-text">delete</span></a>';
                        }
                    },

                ],
                "language": {
                    "lengthMenu": "Tampilkan _MENU_ Data Per-halaman",
                    "zeroRecords": "Data Tidak Ditemukan",
                    "info": "Menampilkan halaman _PAGE_  sampai _PAGES_ ",
                    "infoEmpty": "Data Tidak Ditemukan",
                    "infoFiltered": "(Filter Data _MAX_ Total Data)",
                    "search": "Cari:"
                }
            });
        });

    </script>
    <script>
        function deleteData(data) {
            $.ajax({
                    type: 'DELETE',
                    url: "{{url('/api/mobil')}}/" + "" + data + "",
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    }
                })
                .done(function (resp) {
                    window.location.reload();
                })
                .fail(function (resp) {
                    window.location.reload();
                });
        }

        // function editData(data) {
        //     $("#myModal").modal("show");
        //     $('#nmr_edit').
        // }

    </script>
    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('dist/js/jquery.slimscroll.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- Owl JavaScript -->
    <script src="{{ asset('vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>

    <!-- Switchery JavaScript -->
    <script src="{{ asset('vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('dist/js/init.js')}}"></script>
</body>

</html>
