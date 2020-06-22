<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class PDFController extends Controller
{
    public function download()
    {
        $page       = 'pdf-resume';
        $contacts   = ['phone', 'email', 'location'];
        $socials    = ['linkedin', 'telegram'];
        $experience = ['foridev', 'ohmycode'];
        $education  = ['master', 'bachelor', 'school'];
        $expertise  = ['front-end', 'back-end', 'graphics_editors', 'bundlers', 'databases', 'languages', 'platforms', 'c', 'x', 'z', 'h'];
        $portfolio  = ['blendtopia', 'codes', 'cannago', 'marketplace-genie'];

        $pdf = PDF::loadView('pdf.resume', compact(
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


//        $products = [
//            ['title' => 'Product 1', 'price' => 10.99, 'quantity' => 1, 'totals' => 10.99],
//            ['title' => 'Product 2', 'price' => 14.99, 'quantity' => 2, 'totals' => 29.98],
//            ['title' => 'Product 3', 'price' => 500.00, 'quantity' => 1, 'totals' => 500.00],
//            ['title' => 'Product 4', 'price' => 6.99, 'quantity' => 3, 'totals' => 20.97],
//        ];
//
//        $total = collect($products)->sum('totals');
//
//        $pdf = PDF::loadView('pdf.invoice', compact('products', 'total'));
//
////        return $pdf->download('invoice.pdf');
//        return $pdf->stream();



//        $page = 'index';
//
//        $page       = 'pdf-resume';
//        $contacts   = ['phone', 'email', 'location'];
//        $socials    = ['linkedin', 'telegram'];
//        $experience = ['foridev', 'ohmycode'];
//        $education  = ['master', 'bachelor', 'school'];
//        $expertise  = ['front-end', 'back-end', 'graphics_editors', 'bundlers', 'databases', 'languages', 'platforms', 'c', 'x', 'z', 'h'];
//        $portfolio  = ['blendtopia', 'codes', 'cannago', 'marketplace-genie'];
//
//        $this->assign('page', $page);
//        $this->assign('contacts', $contacts);
//        $this->assign('socials', $socials);
//        $this->assign('experience', $experience);
//        $this->assign('education', $education);
//        $this->assign('expertise', $expertise);
//        $this->assign('portfolio', $portfolio);

//        $products = [
//            ['title' => 'Product 1', 'price' => 10.99, 'quantity' => 1, 'totals' => 10.99],
//            ['title' => 'Product 2', 'price' => 14.99, 'quantity' => 2, 'totals' => 29.98],
//            ['title' => 'Product 3', 'price' => 500.00, 'quantity' => 1, 'totals' => 500.00],
//            ['title' => 'Product 4', 'price' => 6.99, 'quantity' => 3, 'totals' => 20.97],
//        ];
//
//        $total = collect($products)->sum('totals');

//        $pdf = PDF::loadView('pdf.resume', compact('products', 'total'));
//
//        return $pdf->download('resume.pdf');

//        $this->assign('products', $products);
//        $this->assign('total', $total);

//        $pdf = PDF::loadView('pdf.resume', compact(
//            'page',
//            'contacts',
//            'socials',
//            'experience'
//        ));

//        $pdf = PDF::loadView('pdf.resume');

//        return $pdf->download('resume.pdf');

//        return view('pdf.resume');
    }
}
