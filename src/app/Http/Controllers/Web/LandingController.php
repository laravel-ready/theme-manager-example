<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use LaravelReady\ThemeManager\Services\ThemeManager;

class LandingController extends Controller
{
    public function __construct(ThemeManager $themeManager) {
        $themeManager->scanThemes(true);

        $theme = request()->query('theme', 'green-energy');

        $themeManager->setTheme($theme, 'web');
    }

    public function index(ThemeManager $themeManager){
        $themeGroups = $themeManager->scanThemes(true);

        return View('web.welcome', compact('themeGroups'));
    }

    public function anyPage(){
        return View('theme::pages.landing.index');
    }
}
