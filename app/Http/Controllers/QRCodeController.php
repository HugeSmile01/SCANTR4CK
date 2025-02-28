<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function generate(Request $request)
    {
        $data = $request->input('data');
        $qrCode = QrCode::size(300)->generate($data);

        return response($qrCode, 200)->header('Content-Type', 'image/png');
    }

    public function scan(Request $request)
    {
        // Implement QR code scanning logic here
    }
}
