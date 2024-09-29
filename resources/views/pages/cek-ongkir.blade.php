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

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex align-items-center">
                                <img src="{{ asset('template/img/truck-kurir.png') }}" alt="Truck Icon" class="mr-3"
                                    style="width: 40px;">
                                <h6 class="m-0 font-weight-bold text-primary">Cek Ongkir</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control bg-purple mb-2"
                                                placeholder="Asal Pengiriman" readonly>
                                            <select class="form-control" id="asalPengiriman">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control bg-purple mb-2"
                                                placeholder="Tujuan Pengiriman" readonly>
                                            <select class="form-control" id="tujuanPengiriman">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control bg-purple mb-2"
                                                placeholder="Berat/Kg" readonly>
                                            <input type="number" class="form-control" id="berat" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control bg-purple mb-2"
                                                placeholder="Cek Tarif" readonly>
                                            <button id="cekTarif" class="btn btn-primary form-control">Cek
                                                Tarif</button>
                                        </div>
                                    </div>
                                </div>
                                <div id="hasilPencarian" class="mt-4">
                                    <!-- Hasil pencarian akan ditampilkan di sini -->
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

        <!-- Modal untuk menampilkan hasil cek tarif -->
        <div class="modal fade" id="cekTarifModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hasil Cek Tarif</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" id="cekTarifResult">
                        <!-- Hasil cek tarif akan ditampilkan di sini -->
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- script page --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                function fetchCities(selectElement) {
                    $.ajax({
                        url: '/data-kota',
                        type: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            if (response.cities) {
                                console.table(response.cities);
                                $.each(response.cities, function(index, city) {
                                    selectElement.append('<option value="' + city.city_id + '">' +
                                        city.city_name + '</option>');
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Failed to fetch cities:', error);
                        }
                    });
                }
        
                function cekTarif() {
                    const asal = $('#asalPengiriman').val();
                    const tujuan = $('#tujuanPengiriman').val();
                    const berat = $('#berat').val();
        
                    // Validasi input
                    if (!asal || !tujuan || !berat) {
                        alert('Silakan lengkapi semua field sebelum cek tarif.');
                        return;
                    }
        
                    // Show the loader
                    $('.loader').show();
        
                    $.ajax({
                        url: '/cektarif',
                        type: 'POST',
                        data: {
                            asal: asal,
                            tujuan: tujuan,
                            berat: berat,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(response) {
                            // Hide the loader
                            $('.loader').hide();
        
                            if (response.success) {
                                // Clear previous values
                                $('#cekTarifResult').empty();
        
                                // Loop through each courier
                                $.each(response.data, function(index, courier) {
                                    const courierName = courier.name;
                                    $.each(courier.costs, function(costIndex, cost) {
                                        const service = cost.service;
                                        const etd = cost.cost[0].etd; 
                                        const value = cost.cost[0].value.toLocaleString(); 
                                        const newRow = `
                                            <div class="d-flex align-items-center my-2">
                                                <div class="me-3">
                                                    <img src="https://i.ibb.co/KNgdvc1/delivery-courier.png" alt="${courierName} logo" style="width: 50px; height: 50px; margin-right: 40px;">
                                                </div>
                                                <div class="courier-info" data-name="${courierName}" data-service="${service}" data-etd="${etd}" data-value="${value}">
                                                    <strong>Kurir:</strong> ${courierName}<br>
                                                    <strong>Jenis Layanan:</strong> ${service}<br>
                                                    <strong>Estimasi:</strong> ${etd} hari<br>
                                                    <strong>Tarif:</strong> Rp ${value}
                                                </div>
                                            </div>
                                            <hr>
                                        `;
        
                                        $('#cekTarifResult').append(newRow);
                                    });
                                });
        
                                // Show the modal after populating data
                                $('#cekTarifModal').modal('show');
                            } else {
                                alert('Gagal mendapatkan tarif: ' + response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            // Hide the loader
                            $('.loader').hide();
                            console.error('Failed to fetch tarif:', error);
                        }
                    });
                }
        
                // Handling modal open event to populate inputs (if needed)
                $(document).on("click", ".courier-info", function() {
                    $('#courierName').val($(this).data('name'));
                    $('#service').val($(this).data('service'));
                    $('#cektarifmodal').modal('show');
                });
        
                // Memuat kota pada dropdown
                fetchCities($('#asalPengiriman'));
                fetchCities($('#tujuanPengiriman'));
        
                $('#cekTarif').on('click', function() {
                    cekTarif();
                });
            });
        </script>
        
        @include('component.script')
        {{-- end script --}}
    </body>

    </html>
