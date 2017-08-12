<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/adminox_1.1/default/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2017 02:34:14 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Adminox - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="{{asset('admin/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('admin/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
       
        <link href="{{asset('admin/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('admin/plugins/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('admin/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    

        <!-- App css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('admin/assets/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('admin/assets/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{asset('admin/assets/css/jquery-confirm.min.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{asset('admin/assets/js/modernizr.min.js')}}"></script>


    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            @include('admin/layouts/header/header')
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            @include('admin/layouts/sidebar/sidebar')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <!-- container -->
                  @yield("content")
                </div> <!-- content -->

                <footer class="footer text-right">
                    2017 © Adminox. - Coderthemes.com
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/moment.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/waves.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>

        <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/dataTables.bootstrap.js')}}"></script>

        <script src="{{asset('admin/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('admin/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
     
        <script src="{{asset('admin/plugins/datatables/dataTables.scroller.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/bootstrap-select.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery-confirm.min.js')}}"></script>
       
        

        <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
             
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
                var table = $('#datatable-fixed-col').DataTable({
                    scrollY: "300px",
                    scrollX: true,
                    scrollCollapse: true,
                    paging: false,
                    fixedColumns: {
                        leftColumns: 1,
                        rightColumns: 1
                    }
                });
            });
           
        </script>

    <script>
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
    });
    </script>
    <script >
        $("div .alert ").slideUp(2000).delay(1000);
    </script>
 <script type="text/javascript">
        $(function () {
            $('#datetimepicker10').datetimepicker({
                viewMode: 'years',
                format: 'MM/YYYY'
            });
        });
    </script>
      <script>
        $(".confirm").confirm();
        </script>
     
    </body>

<!-- Mirrored from coderthemes.com/adminox_1.1/default/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2017 02:34:48 GMT -->
</html>