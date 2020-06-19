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

        $project = __('portfolio.list.' . $name);

        $this->assign('contacts', $project);

        return view('pages.project');
    }
}
