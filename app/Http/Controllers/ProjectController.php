<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function display($name, Request $request) {

        $page       = 'project';
        $project    = __('portfolio.list.' . $name);
        $contacts   = ['phone', 'email', 'location'];
        $socials    = ['linkedin', 'telegram'];
        $experience = ['foridev', 'ohmycode'];
        $education  = ['master', 'bachelor', 'school'];
        $expertise  = ['front-end', 'back-end', 'graphics_editors', 'bundlers', 'databases', 'languages', 'platforms', 'c', 'x', 'z', 'h'];
        $portfolio  = ['portfolio', 'blendtopia', 'codes', 'cannago', 'marketplace-genie'];

        $this->assign('page', $page);
        $this->assign('project', $project);
        $this->assign('contacts', $contacts);
        $this->assign('socials', $socials);
        $this->assign('experience', $experience);
        $this->assign('education', $education);
        $this->assign('expertise', $expertise);
        $this->assign('portfolio', $portfolio);

        return view('pages.project');
    }
}
