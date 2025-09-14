<?php

namespace App\Http\Controllers;

use Mpdf\Mpdf;
use App\Models\User;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index(Request $request)
    {
        $user_id = $request->header('id');
        $user = User::find($user_id);
        // $userName = $user->userName;
        return view('pb.booklets',compact('user'));
    }
    public function generate()
    {
        $mpdf = new Mpdf();

        // Write some HTML content
        $mpdf->WriteHTML('<h1 style="color:blue;">Hello, Laravel 10 with mPDF!</h1>');

        // Output to browser
        return response($mpdf->Output('', 'S'), 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="example.pdf"');
    }
}
