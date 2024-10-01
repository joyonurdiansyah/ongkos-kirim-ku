<!DOCTYPE html>
<html lang="en">

<head>
    <title>home - page</title>
</head>
@include('component.head')
@include('component.loading')

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
                    <div class="container my-5">
                        <h2 id="titlePickup" class="mb-4">Silahkan isi <span class="badge badge-success">pengirim</span>
                            dan <span class="badge badge-danger">penerima</span> </h2>

                        <div class="container">
                            <div class="row" id="menuPickup">
                                <div class="col-lg-6 mb-4">
                                    <div class="card p-4">
                                        <img class="card-img-top mx-auto" src="{{ asset('template/img/store.png') }}"
                                            alt="store" style="width: 40%; height: auto;">
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-weight: bold;">Form Seller</h5>
                                            <p class="card-text">silahkan isi form detail toko</p>
                                            <button type="button" class="btn btn-outline-info w-100"
                                                id="showFormButton">Isi Form</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card p-4">
                                        <img class="card-img-top mx-auto" src="{{ asset('template/img/buyer.png') }}"
                                            alt="buyer" style="width: 40%; height: auto;">
                                        <div class="card-body">
                                            <h5 class="card-title" style="font-weight: bold;">Data penerima</h5>
                                            <p class="card-text">silahkan isikan data penerima sesuai pengiriman barang.
                                            </p>
                                            <button type="button" class="btn btn-outline-info w-100">lihat
                                                data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-lg mb-4" id="sellerFormCard" style="display: none;">
                                    <div class="card p-4">
                                        <img class="card-img-top mx-auto" src="{{ asset('template/img/store.png') }}"
                                            alt="buyer" style="width: 40%; height: auto;">
                                        <div class="card-body">
                                            <form method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="seller_pickup_name" class="form-label">Seller Pickup
                                                        Name</label> <span style="color: red;">*</span> 
                                                    <input type="text" class="form-control" id="seller_pickup_name"
                                                        name="seller_pickup_name" required>
                                                </div>

                                                <div class="mb-3"> 
                                                    <label for="seller_pickup_date" class="form-label">Seller Pickup
                                                        Date</label> <span style="color: red;">*</span>
                                                    <input type="date" class="form-control" id="seller_pickup_date"
                                                        name="seller_pickup_date" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="seller_pickup_time" class="form-label">Seller Pickup
                                                        Time</label> <span style="color: red;">*</span>
                                                    <input type="time" class="form-control" id="seller_pickup_time"
                                                        name="seller_pickup_time" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="seller_address" class="form-label">Seller
                                                        Address</label> <span style="color: red;">*</span>
                                                    <input type="text" class="form-control" id="seller_address"
                                                        name="seller_address" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="seller_district" class="form-label">Seller
                                                        District</label> <span style="color: red;">*</span>
                                                    <input type="text" class="form-control" id="seller_district"
                                                        name="seller_district" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="seller_city" class="form-label">Seller City</label> <span style="color: red;">*</span>
                                                    <input type="text" class="form-control" id="seller_city"
                                                        name="seller_city" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="seller_vehicle" class="form-label">Seller
                                                        Vehicle</label> <span style="color: red;">*</span>
                                                    <input type="text" class="form-control" id="seller_vehicle"
                                                        name="seller_vehicle" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="seller_note" class="form-label">Seller Note</label> <span style="color: red;">*</span>
                                                    <textarea class="form-control" id="seller_note" name="seller_note"></textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="seller_contact_name" class="form-label">Seller Contact
                                                        Name</label> <span style="color: red;">*</span>
                                                    <input type="text" class="form-control"
                                                        id="seller_contact_name" name="seller_contact_name" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="seller_contact_email" class="form-label">Seller
                                                        Contact
                                                        Email</label> <span style="color: red;">*</span>
                                                    <input type="email" class="form-control"
                                                        id="seller_contact_email" name="seller_contact_email"
                                                        required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="seller_contact_phone" class="form-label">Seller
                                                        Contact
                                                        Phone</label> <span style="color: red;">*</span>
                                                    <input type="text" class="form-control"
                                                        id="seller_contact_phone" name="seller_contact_phone"
                                                        required>
                                                </div>

                                                <button type="submit" class="btn btn-outline-info w-100 mb-4 mt-4">Submit</button>
                                                <button type="button" class="btn btn-outline-warning w-100" id="backToMenuButton">Kembali</button>
                                            </form>
                                        </div>
                                    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        // loading screen
        $('.loader').show();

        setTimeout(function() {
            $('.loader').fadeOut('slow');
        }, 2000);

        // tampilkan form nya
        $(document).ready(function() {
            $('#showFormButton').click(function() {
                $('#menuPickup').hide();
                $('#titlePickup').hide();
                $('#sellerFormCard').fadeIn();
            });

            $('#backToMenuButton').click(function() {
                $('#sellerFormCard').hide();
                $('#menuPickup').fadeIn();
            });
        });

        // submit form seller
        $(document).ready(function() {
            $('form').on('submit', function(e) {
                e.preventDefault(); // Mencegah pengiriman formulir secara default

                $.ajax({
                    type: 'POST',
                    url: '/add-seller-data', 
                    data: $(this).serialize(), 
                    success: function(response) {
                        swal({
                            title: "Sukses!",
                            text: response.message,
                            icon: "success",
                            button: "OK",
                        }).then(() => {
                            $('form')[0].reset();
                        });
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            var errorMessages = '';
                            $.each(errors, function(key, value) {
                                errorMessages += value[0] +
                                '\n';
                            });

                            swal({
                                title: "Gagal!",
                                text: errorMessages,
                                icon: "error",
                                button: "Tutup",
                            });
                        } else {
                            swal({
                                title: "Terjadi Kesalahan!",
                                text: 'Silakan coba lagi.',
                                icon: "error",
                                button: "Tutup",
                            });
                        }
                    }
                });
            });
        });
    </script>

    @include('component.script')
    {{-- end script --}}
</body>

</html>
