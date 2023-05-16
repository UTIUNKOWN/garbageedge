<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitoringControlller extends Controller
{
    public function simpanData(Request $request)
{
    $jarak = $request->input('jarak');
    $waktu = now();

    DB::table('sensor_ultrasonik')->insert([
        'jarak' => $jarak,
        'waktu' => $waktu,
    ]);

    return response()->json(['message' => 'Data berhasil disimpan']);
}

}
