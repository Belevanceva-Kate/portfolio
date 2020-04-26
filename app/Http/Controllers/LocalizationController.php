<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class LocalizationController
 * @package App\Http\Controllers
 */
class LocalizationController extends Controller
{
    /**
     * Update Page Translation
     *
     * @param $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update_locale($locale) {
        session(['locale' => $locale]);
        return redirect()->back();
    }
}
