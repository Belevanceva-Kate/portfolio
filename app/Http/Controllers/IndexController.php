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

        $page           = 'index';
        $contacts       = ['phone', 'email', 'location'];
        $socials        = ['linkedin', 'telegram'];
        $experience     = ['makebecool', 'foridev', 'ohmycode'];
        $education      = ['master', 'bachelor', 'school'];
        $expertise      = ['front-end', 'back-end', 'frameworks', 'platforms', 'graphics_editors', 'bundlers', 'databases', 'languages'];
        $portfolio      = ['shiokfarm', 'muzaara-bing', 'fire-pro', 'portfolio', 'blendtopia', 'codes', 'cannago', 'marketplace-genie'];
        $conferences    = ['lviv_it_arena_2019', 'mrpl_it_conf_2019', 'mrpl_it_conf_2018', 'kharkiv_css_3'];
        $courses        = ['beetroot_academy_front_end', 'beetroot_academy_back_end'];

        $this->assign('page', $page);
        $this->assign('contacts', $contacts);
        $this->assign('socials', $socials);
        $this->assign('experience', $experience);
        $this->assign('education', $education);
        $this->assign('expertise', $expertise);
        $this->assign('portfolio', $portfolio);
        $this->assign('conferences', $conferences);
        $this->assign('courses', $courses);

        return view('pages.index');
    }
}
