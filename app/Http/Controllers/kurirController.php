<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Models\Pickup;

class kurirController extends Controller
{
    public function GetCity(Request $request)
    {
        $apiKey = env('API_KEY_RAJA_ONGKIR');

        try {
            $response = Http::withHeaders([
                'key' => $apiKey,
            ])->get('https://api.rajaongkir.com/starter/city');

            if ($response->successful()) {
                $cities = $response->json()['rajaongkir']['results'];

                $kotaDuplicate = [];
                foreach ($cities as $city) {
                    $cityNameLower = strtolower($city['city_name']);
                    if (!isset($kotaDuplicate[$cityNameLower])) {
                        $kotaDuplicate[$cityNameLower] = $city; 
                    }
                }
                $kotaDuplicate = array_values($kotaDuplicate);

                return response()->json(['cities' => $kotaDuplicate]);
            } else {
                return response()->json(['error' => 'Gagal mendapatkan data kota'], $response->status());
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Exception occurred: ' . $e->getMessage()], 500);
        }
    }

    public function cektarif(Request $request)
    {
        $apiKey = env('API_KEY_RAJA_ONGKIR');

        // Validasi input
        $request->validate([
            'asal' => 'required',
            'tujuan' => 'required',
            'berat' => 'required|numeric|min:1',
        ]);

        $asal = $request->input('asal');
        $tujuan = $request->input('tujuan');
        $berat = $request->input('berat');

        $couriers = ['jne', 'tiki', 'pos'];

        $costs = [];

        try {
            foreach ($couriers as $courier) {
                $response = Http::withHeaders(['key' => $apiKey])->post('https://api.rajaongkir.com/starter/cost', [
                    'origin' => $asal,
                    'destination' => $tujuan,
                    'weight' => $berat,
                    'courier' => $courier
                ]);
    
                if ($response->successful()) {
                    $costData = $response->json()['rajaongkir']['results'];
                    $costs[] = [
                        'courier' => $courier,
                        'costs' => $costData
                    ]; 
                } else {
                    return response()->json(['success' => false, 'message' => 'Gagal mendapatkan tarif untuk kurir ' . $courier], $response->status());
                }
            }
    
            return response()->json(['success' => true, 'data' => $costs]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Exception occurred: ' . $e->getMessage()], 500);
        }
    }

    public function requestPickup(){
        return view('pages.request-pickup');
    }

    public function addDataSeller(Request $request)
    {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'seller_pickup_name' => 'required|string|max:255',
            'seller_pickup_date' => 'required|date',
            'seller_pickup_time' => 'required|date_format:H:i',
            'seller_address' => 'required|string|max:255',
            'seller_district' => 'required|string|max:255',
            'seller_city' => 'required|string|max:255',
            'seller_vehicle' => 'required|string|max:255',
            'seller_note' => 'nullable|string',
            'seller_contact_name' => 'required|string|max:255',
            'seller_contact_email' => 'required|email|max:255',
            'seller_contact_phone' => 'required|string|max:15',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422); 
        }

        $pickup = Pickup::create([
            'seller_pickup_name' => $request->seller_pickup_name,
            'seller_pickup_date' => $request->seller_pickup_date,
            'seller_pickup_time' => $request->seller_pickup_time,
            'seller_address' => $request->seller_address,
            'seller_district' => $request->seller_district,
            'seller_city' => $request->seller_city,
            'seller_vehicle' => $request->seller_vehicle,
            'seller_note' => $request->seller_note,
            'seller_contact_name' => $request->seller_contact_name,
            'seller_contact_email' => $request->seller_contact_email,
            'seller_contact_phone' => $request->seller_contact_phone,
        ]);
        
        return response()->json([
            'success' => true,
            'message' => 'Data seller berhasil ditambahkan!',
            'data' => $pickup,
        ]);
    }


    public function cetakResi(){
         // comingsoon 
    }

}
