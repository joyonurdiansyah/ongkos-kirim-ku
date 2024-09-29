<!DOCTYPE html>
<html lang="en">

<head>
    <title>home - page</title>
</head>
@include('component.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('component.left-sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('component.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div> --}}

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Tracking Barang Card Example -->
                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Selamat datang! {{ Auth::user()->name }}</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="{{ asset('template/img/undraw_posting_photo.svg') }}" alt="...">
                                    </div>
                                    <p>joyo.tech adalah sebuah platform yang menyediakan layanan untuk mengecek ongkir, melacak pengiriman,
                                        dan mencetak resi dengan mudah. Dengan didukung 
                                        seluruh <a target="_blank" rel="nofollow" href="https://undraw.co/">wilayah indonesia</a>, Anda dapat
                                        menggunakan layanan ini sepenuhnya gratis dan tanpa atribusi!</p>
                                    {{-- <a target="_blank" rel="nofollow" href="https://undraw.co/">Jelajahi Ilustrasi di unDraw &rarr;</a> --}}
                                </div>
                            </div>
                            

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('component.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sudah Bosan?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">yah udah gamau cek ongkir dimari lagi kah? 😭.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ url('/') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    {{-- script page --}}
    @include('component.script')
    {{-- end script --}}
</body>

</html>
