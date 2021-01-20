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
        $portfolio  = ['shiokfarm', 'muzaara-bing', 'fire-pro', 'portfolio', 'blendtopia', 'codes', 'cannago', 'marketplace-genie'];
        $contacts   = ['phone', 'email', 'location'];
        $socials    = ['linkedin', 'telegram'];

        $this->assign('page', $page);
        $this->assign('project', $project);
        $this->assign('portfolio', $portfolio);
        $this->assign('contacts', $contacts);
        $this->assign('socials', $socials);

        return view('pages.project');
    }
}
