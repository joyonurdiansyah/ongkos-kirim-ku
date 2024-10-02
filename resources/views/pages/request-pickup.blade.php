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
                                            <button type="button" class="btn btn-outline-info w-100"
                                                id="btnPickupsdata">lihat
                                                data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- data pengiriman ke buyer --}}
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
                                                <label for="seller_city" class="form-label">Seller City</label>
                                                <span style="color: red;">*</span>
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
                                                <label for="seller_note" class="form-label">Seller Note</label>
                                                <span style="color: red;">*</span>
                                                <textarea class="form-control" id="seller_note" name="seller_note"></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label for="seller_contact_name" class="form-label">Seller Contact
                                                    Name</label> <span style="color: red;">*</span>
                                                <input type="text" class="form-control" id="seller_contact_name"
                                                    name="seller_contact_name" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="seller_contact_email" class="form-label">Seller
                                                    Contact
                                                    Email</label> <span style="color: red;">*</span>
                                                <input type="email" class="form-control" id="seller_contact_email"
                                                    name="seller_contact_email" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="seller_contact_phone" class="form-label">Seller
                                                    Contact
                                                    Phone</label> <span style="color: red;">*</span>
                                                <input type="text" class="form-control" id="seller_contact_phone"
                                                    name="seller_contact_phone" required>
                                            </div>

                                            <button type="submit"
                                                class="btn btn-outline-info w-100 mb-4 mt-4">Submit</button>
                                            <button type="button" class="btn btn-outline-warning w-100"
                                                id="backToMenuButton">Kembali</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- lihat form data --}}
                    <div class="container-fluid" id="dataPembeli" style="display: none;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <button type="button" class="btn btn-outline-primary mb-2"
                                    id="backtoMenu">Kembali</button>
                                <div class="d-flex justify-content-end mb-3">
                                    <button type="button" class="btn btn-success me-2" id="menuPrintPDF">
                                        <i class="fas fa-file-pdf me-1"></i> Print to PDF
                                    </button>
                                    <button type="button" class="btn btn-danger ml-4" id="menuPrintExcel">
                                        <i class="fas fa-file-excel me-1"></i> Print to Excel
                                    </button>
                                </div>
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">List Data Pengiriman</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataPengiriman" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        {{-- <th>ID</th> --}}
                                                        <th>Nama Penjual</th>
                                                        <th>Tanggal Pengambilan</th>
                                                        <th>Waktu Pengambilan</th>
                                                        <th>Alamat Penjual</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kota</th>
                                                        <th>Kendaraan</th>
                                                        <th>Catatan</th>
                                                        <th>Nama Kontak</th>
                                                        <th>Email Kontak</th>
                                                        <th>Telepon Kontak</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- isikan response dari controller --}}
                                                </tbody>
                                            </table>
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

    {{-- modal pembeli --}}
    <div class="modal fade" id="buyerDetailsModal" tabindex="-1" aria-labelledby="buyerDetailsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buyerDetailsModalLabel">Detail Pembeli</h5>
                </div>
                <div class="modal-body">
                    <!-- Hidden input for the ID -->
                    <input type="hidden" id="buyer_id" name="buyer_id">

                    <div class="mb-3">
                        <label for="buyer_name" class="form-label"><strong>Nama Pembeli:</strong></label>
                        <input type="text" class="form-control" id="buyer_name" name="buyer_name">
                    </div>
                    <div class="mb-3">
                        <label for="buyer_pickup_date" class="form-label"><strong>Tanggal Ambil:</strong></label>
                        <input type="date" class="form-control" id="buyer_pickup_date" name="buyer_pickup_date">
                    </div>
                    <div class="mb-3">
                        <label for="buyer_pickup_time" class="form-label"><strong>Waktu Ambil:</strong></label>
                        <input type="time" class="form-control" id="buyer_pickup_time" name="buyer_pickup_time">
                    </div>
                    <div class="mb-3">
                        <label for="buyer_address" class="form-label"><strong>Alamat:</strong></label>
                        <input type="text" class="form-control" id="buyer_address" name="buyer_address">
                    </div>
                    <!-- Other form fields remain the same -->
                    <div class="mb-3">
                        <label for="buyer_contact_phone" class="form-label"><strong>Kontak Telepon:</strong></label>
                        <input type="tel" class="form-control" id="buyer_contact_phone"
                            name="buyer_contact_phone">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="saveButton">Simpan</button>
                </div>
            </div>
        </div>
    </div>


    {{-- script page --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        // Loading screen
        $('.loader').show();

        setTimeout(function() {
            $('.loader').fadeOut('slow');
        }, 2000);

        // Tampilkan form
        $(document).ready(function() {
            $('#showFormButton').click(function() {
                $('#menuPickup').hide();
                $('#titlePickup').hide();
                $('#sellerFormCard').fadeIn();
            });

            $('#btnPickupsdata').click(function() {
                $('#menuPickup').hide();
                $('#titlePickup').hide();
                $('#dataPembeli').fadeIn();
            });

            $('#backToMenuButton').click(function() {
                $('#sellerFormCard').hide();
                $('#menuPickup').fadeIn();
            });

            $('#backtoMenu').click(function() {
                $('#dataPembeli').hide();
                $('#menuPickup').fadeIn();
            });

            // Submit form seller
            $('form').on('submit', function(e) {
                e.preventDefault();

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
                            // Reset form setelah sukses submit
                            $('form')[0].reset();

                            // Menambahkan data baru langsung ke dalam table tanpa reload
                            var newRow = `<tr>
                                <td>${response.data.seller_pickup_name}</td>
                                <td>${response.data.seller_pickup_date}</td>
                                <td>${response.data.seller_pickup_time}</td>
                                <td>${response.data.seller_address}</td>
                                <td>${response.data.seller_district}</td>
                                <td>${response.data.seller_city}</td>
                                <td>${response.data.seller_vehicle}</td>
                                <td>${response.data.seller_note ? response.data.seller_note : ''}</td>
                                <td>${response.data.seller_contact_name}</td>
                                <td>${response.data.seller_contact_email}</td>
                                <td>${response.data.seller_contact_phone}</td>
                                <td><button class="btn btn-primary view-button" data-id="${response.data.id}">Lihat</button></td>
                            </tr>`;

                            // Append row ke table
                            $('#dataPengiriman tbody').append(newRow);
                        });
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            var errors = xhr.responseJSON.errors;
                            var errorMessages = '';
                            $.each(errors, function(key, value) {
                                errorMessages += value[0] + '\n';
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

            // Get pickup data
            var table = $('#dataPengiriman').DataTable({
                processing: true,
                ajax: {
                    url: '/pickup-data',
                    type: 'GET',
                    dataSrc: 'data'
                },
                columns: [{
                        data: 'seller_pickup_name'
                    },
                    {
                        data: 'seller_pickup_date'
                    },
                    {
                        data: 'seller_pickup_time'
                    },
                    {
                        data: 'seller_address'
                    },
                    {
                        data: 'seller_district'
                    },
                    {
                        data: 'seller_city'
                    },
                    {
                        data: 'seller_vehicle'
                    },
                    {
                        data: 'seller_note'
                    },
                    {
                        data: 'seller_contact_name'
                    },
                    {
                        data: 'seller_contact_email'
                    },
                    {
                        data: 'seller_contact_phone'
                    },
                    {
                        data: 'null',
                        render: function(data, type, row) {
                            let buttonClass = row.buyer_name ? 'btn-success' : 'btn-primary';
                            let iconClass = row.buyer_name ? 'fa-check' : 'fa-eye'; 
                            return `<button class="btn ${buttonClass} view-button" data-id="${row.id}">
                                    <i class="fa ${iconClass}"></i></button>`;
                        }
                    }
                ]
            });

            $('#dataPengiriman tbody').on('click', '.view-button', function() {
                var id = $(this).data('id');
                console.log(id);
                $.ajax({
                    url: '/pickup-data-pembeli/' + id,
                    type: 'GET',
                    success: function(response) {
                        $('#buyer_id').val(id);
                        // Tampilkan modal
                        $('#buyerDetailsModal').modal('show');
                    },
                    error: function() {
                        swal({
                            title: "Gagal!",
                            text: 'Gagal mengambil data, silakan coba lagi.',
                            icon: "error",
                            button: "Tutup",
                        });
                    }
                });
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#saveButton').on('click', function() {
                var buyerData = {
                    id: $('#buyer_id').val(),
                    buyer_name: $('#buyer_name').val(),
                    buyer_pickup_date: $('#buyer_pickup_date').val(),
                    buyer_pickup_time: $('#buyer_pickup_time').val(),
                    buyer_address: $('#buyer_address').val(),
                    buyer_contact_phone: $('#buyer_contact_phone').val(),
                };

                if (!buyerData.id) {
                    swal({
                        title: "Error!",
                        text: "ID Pembeli tidak ditemukan.",
                        icon: "error",
                        button: "Tutup",
                    });
                    return;
                }

                $.ajax({
                    url: '/tambah-data-pembeli/' + buyerData.id,
                    type: 'POST',
                    data: buyerData,
                    success: function(response) {
                        swal({
                            title: "Berhasil!",
                            text: 'Data pembeli berhasil ditambahkan.',
                            icon: "success",
                            button: "Tutup",
                        }).then(() => {
                            $('#buyerDetailsModal').modal('hide');
                            $('#buyerDetailsModal input').val('');
                        });
                    },
                    error: function(xhr, status, error) {
                        swal({
                            title: "Gagal!",
                            text: 'Gagal menyimpan data, silakan coba lagi.',
                            icon: "error",
                            button: "Tutup",
                        });
                    }
                });
            });

        });
    </script>



    @include('component.script')
    {{-- end script --}}
</body>

</html>
