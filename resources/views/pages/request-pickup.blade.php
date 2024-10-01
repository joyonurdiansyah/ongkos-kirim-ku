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
                <div class="container my-5">
                    <h2 class="mb-4">Silahkan isi <span class="badge badge-success">pengirim</span> dan <span class="badge badge-danger">penerima</span> </h2>

                    <div class="container" style="height: 65vh;">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="card p-4">
                                    <img class="card-img-top mx-auto" src="{{asset('template/img/store.png')}}" alt="store" style="width: 40%; height: auto;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight: bold;">Form Seller</h5>
                                        <p class="card-text">silahkan isi form detail toko</p>
                                        <button type="button" class="btn btn-outline-info w-100">isi form</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card p-4">
                                    <img class="card-img-top mx-auto" src="{{asset('template/img/buyer.png')}}" alt="buyer" style="width: 40%; height: auto;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight: bold;">Data penerima</h5>
                                        <p class="card-text">silahkan isikan data penerima sesuai pengiriman barang.</p>
                                        <button type="button" class="btn btn-outline-info w-100">lihat data</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <form>
                            <!-- Pickup Information -->
                            <div id="requestPickup" style="display: none">
                                <div class="mb-3">
                                    <label for="pickupName" class="form-label">Pickup Name</label>
                                    <input type="text" class="form-control" id="pickupName" value="YOI PICKUP" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pickupDate" class="form-label">Pickup Date</label>
                                    <input type="date" class="form-control" id="pickupDate" value="2023-05-15" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pickupTime" class="form-label">Pickup Time</label>
                                    <input type="time" class="form-control" id="pickupTime" value="10:00:00" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pickupAddress1" class="form-label">Pickup Address 1</label>
                                    <input type="text" class="form-control" id="pickupAddress1"
                                        value="kota wisata cluster westcovina SG 1 no 23 patokan pagar aquarium ikan"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="pickupAddress2" class="form-label">Pickup Address 2</label>
                                    <input type="text" class="form-control" id="pickupAddress2" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="pickupDistrict" class="form-label">District</label>
                                    <input type="text" class="form-control" id="pickupDistrict" value="BOGOR" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pickupCity" class="form-label">City</label>
                                    <input type="text" class="form-control" id="pickupCity" value="BOGOR" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pickupVehicle" class="form-label">Vehicle</label>
                                    <input type="text" class="form-control" id="pickupVehicle" value="MOTOR" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pickupLongitude" class="form-label">Longitude</label>
                                    <input type="text" class="form-control" id="pickupLongitude" value="106.961527"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="pickupLatitude" class="form-label">Latitude</label>
                                    <input type="text" class="form-control" id="pickupLatitude" value="-6.355934"
                                        required>
                                </div>
    
                                <!-- Pickup Contact Information -->
                                <h4 class="mb-3">Pickup Contact Information</h4>
                                <div class="mb-3">
                                    <label for="pickupContactName" class="form-label">Contact Name</label>
                                    <input type="text" class="form-control" id="pickupContactName"
                                        value="YOI YEEKHAN ORIGINAL INDONESIA" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pickupContactEmail" class="form-label">Contact Email</label>
                                    <input type="email" class="form-control" id="pickupContactEmail"
                                        value="info@yoiindonesia.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pickupContactPhone" class="form-label">Contact Phone</label>
                                    <input type="text" class="form-control" id="pickupContactPhone"
                                        value="081398899978" required>
                                </div>
                            </div>

                            <!-- Shipper Information -->
                            <div id="shipperInformation" style="display: none">
                                <h2 class="my-4">Shipper Information</h2>
                            <div class="mb-3">
                                <label for="shipperName" class="form-label">Shipper Name</label>
                                <input type="text" class="form-control" id="shipperName" value="Cieza" required>
                            </div>
                            <div class="mb-3">
                                <label for="shipperAddress1" class="form-label">Shipper Address 1</label>
                                <input type="text" class="form-control" id="shipperAddress1"
                                    value="Madison Square Block SHC 2 No.3, Ciangsana, Kec. Gn. Putri, Kabupaten Bogor, Jawa Barat 16968"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="shipperAddress2" class="form-label">Shipper Address 2</label>
                                <input type="text" class="form-control" id="shipperAddress2"
                                    value="Kabupaten Bogor">
                            </div>
                            <div class="mb-3">
                                <label for="shipperCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="shipperCity" value="BOGOR" required>
                            </div>
                            <div class="mb-3">
                                <label for="shipperZip" class="form-label">Zip Code</label>
                                <input type="text" class="form-control" id="shipperZip" value="16968" required>
                            </div>
                            <div class="mb-3">
                                <label for="shipperRegion" class="form-label">Region</label>
                                <input type="text" class="form-control" id="shipperRegion" value="BOGOR"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="shipperCountry" class="form-label">Country</label>
                                <input type="text" class="form-control" id="shipperCountry" value="INDONESIA"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="shipperLongitude" class="form-label">Longitude</label>
                                <input type="text" class="form-control" id="shipperLongitude" value="106.961382"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="shipperLatitude" class="form-label">Latitude</label>
                                <input type="text" class="form-control" id="shipperLatitude" value="-6.350573"
                                    required>
                            </div>

                            <!-- Shipper Contact Information -->
                            <h4 class="mb-3">Shipper Contact Information</h4>
                            <div class="mb-3">
                                <label for="shipperContactName" class="form-label">Contact Name</label>
                                <input type="text" class="form-control" id="shipperContactName"
                                    value="Cieza Aryatama Wahab" required>
                            </div>
                            <div class="mb-3">
                                <label for="shipperContactEmail" class="form-label">Contact Email</label>
                                <input type="email" class="form-control" id="shipperContactEmail"
                                    value="admin@yoiindonesia.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="shipperContactPhone" class="form-label">Contact Phone</label>
                                <input type="text" class="form-control" id="shipperContactPhone"
                                    value="+6287772362124" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
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
            $('.loader').show();

            setTimeout(function() {
                $('.loader').fadeOut('slow');
            }, 2000);
        </script>

        @include('component.script')
        {{-- end script --}}
</body>

</html>
