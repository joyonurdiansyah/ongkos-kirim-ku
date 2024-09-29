<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
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

                return response()->json(['cities' => $cities]);
            } else {
                return response()->json(['error' => 'gagal mendapatkan data kota'], $response->status());
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

        try {
            $response = Http::withHeaders(['key' => $apiKey])->post('https://api.rajaongkir.com/starter/cost', [
                'origin' => $asal,
                'destination' => $tujuan,
                'weight' => $berat,
                'courier' => 'jne' 
            ]);

            if ($response->successful()) {
                $costData = $response->json()['rajaongkir']['results'];
                return response()->json(['success' => true, 'data' => $costData]);
            } else {
                return response()->json(['success' => false, 'message' => 'Gagal mendapatkan tarif'], $response->status());
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Exception occurred: ' . $e->getMessage()], 500);
        }
    }

    public function requestPickup(){
        // comingsoon 
    }


    public function cetakResi(){
         // comingsoon 
    }

}
