<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use LaravelReady\ThemeManager\Services\ThemeManager;

class LandingController extends Controller
{
    public function __construct() {
        ThemeManager::addDefaultTheme(['web:red-swan']);

        ThemeManager::removeDefaultTheme(['web:red-swan']);

        $theme = request()->query('theme', 'green-energy');

        ThemeManager::setTheme($theme, 'web');
    }

    public function index(){
        $themeGroups = ThemeManager::scanThemes(true);

        return View('web.welcome', compact('themeGroups'));
    }

    public function anyPage(){
        return View('theme::pages.home.index');
    }
}
