<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resi Pengiriman Barang</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 20px; 
            background-color: #f5f5f5; 
        }
        .container {
            background: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 50px; 
        }
        .header h1 {
            margin: 10px 0;
        }
        .barcode {
            text-align: center;
            margin: 10px 0;
        }
        .barcode img {
            width: 200px; 
            height: auto;
            background-color: #ddd; 
            display: block; 
            margin: 0 auto;
        }
        .table {
            width: 100%; 
            border-collapse: collapse; 
            margin-bottom: 20px; 
        }
        .table th, .table td {
            border: 1px solid black; 
            padding: 8px; 
            text-align: left; 
        }
        .table th {
            background-color: #f0f0f0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        .footer p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>JOYO.TECH Online Booking</h1>
            <p>Kota asal: {{ $pengiriman->seller_city }}<br>
            Kota Tujuan: {{ $pengiriman->buyer_city }}</p>
        </div>
        <div class="barcode">
        </div>
        <table class="table">
            <tr>
                <th>Pengirim</th>
                <td>
                    <strong>Nama:</strong> {{ $pengiriman->seller_pickup_name }}<br>
                    <strong>Alamat:</strong> {{ $pengiriman->seller_address }}<br>
                    <strong>Kota:</strong> {{ $pengiriman->seller_city }}<br>
                    <strong>Telp:</strong> {{ $pengiriman->seller_contact_phone }}
                </td>
            </tr>
            <tr>
                <th>Penerima</th>
                <td>
                    <strong>Nama:</strong> {{ $pengiriman->buyer_name }}<br>
                    <strong>Alamat:</strong> {{ $pengiriman->buyer_address }}<br>
                    <strong>Kota:</strong> {{ $pengiriman->buyer_city }}<br>
                    <strong>Telp:</strong> {{ $pengiriman->buyer_contact_name }} - {{ $pengiriman->buyer_contact_phone }}
                </td>
            </tr>
        </table>
        <div class="footer">
            <p>Estimasi total biaya pengiriman: Rp. {{ $pengiriman->estimated_cost }}</p>
            <p>DATA INI MASIH BELUM TERVERIFIKASI KE SISTEM. BILA TERDAPAT KESALAHAN PADA PENULISAN ALAMAT NAMA PENGIRIM DAN PENERIMA BISA DI RUMAH DI CASH COUNTER TERDEKAT DENGAN MENYERTAKAN NO TIKET INI PADA PETUGAS. TERIMAKASIH</p>
        </div>
    </div>
</body>
</html>
