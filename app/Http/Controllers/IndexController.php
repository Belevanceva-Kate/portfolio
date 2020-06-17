<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function display(Request $request) {

        $contacts   = ['phone', 'email', 'location'];
        $socials    = ['socials'];
//        $socials    = ['linkedin', 'linkedin'];
        $education  = ['master', 'bachelor', 'school'];
        $experience = ['foridev', 'ohmycode'];
        $portfolio  = ['blendtopia', 'codes', 'cannago', 'marketplace-genie'];

        $this->assign('contacts', $contacts);
        $this->assign('socials', $socials);
        $this->assign('education', $education);
        $this->assign('experience', $experience);
        $this->assign('portfolio', $portfolio);

        return view('pages.index');
    }
}
