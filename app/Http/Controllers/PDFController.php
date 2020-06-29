<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class PDFController extends Controller
{
    public function download()
    {
        $page           = 'pdf-resume';
        $contacts       = ['phone', 'email', 'location'];
        $socials        = ['linkedin', 'telegram'];
        $experience     = ['foridev', 'ohmycode'];
        $education      = ['master', 'bachelor', 'school'];
        $expertise      = ['front-end', 'back-end', 'frameworks', 'platforms', 'graphics_editors', 'bundlers', 'databases', 'languages', 'platforms'];
        $portfolio      = ['blendtopia', 'codes', 'cannago', 'marketplace-genie'];

        $pdf = PDF::loadView('pdf.pages.resume', compact(
            'page',
            'contacts',
            'socials',
            'experience',
            'education',
            'expertise',
            'portfolio'
        ));

//        return $pdf->download('invoice.pdf');
        return $pdf->stream();

//        return view('pdf.pages.resume');
//        return view('pdf.resume');
    }
}
