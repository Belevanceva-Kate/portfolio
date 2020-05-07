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

        $contacts = ['phone', 'email', 'location', 'socials'];
        $education = ['master', 'bachelor', 'school'];

        $this->assign('contacts', $contacts);
        $this->assign('education', $education);

        return view('pages.index');
    }
}
