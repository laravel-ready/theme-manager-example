<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use LaravelReady\ThemeManager\Services\ThemeManager;

class LandingController extends Controller
{
    public function __construct() {
        ThemeManager::addDefaultTheme(['web:red-swan']);

        $this->theme = request()->query('theme', 'green-energy');

        ThemeManager::setTheme($this->theme, 'web');
    }

    public function index(){
        $themeGroups = ThemeManager::scanThemes(true);

        return View('web.welcome', compact('themeGroups'));
    }

    public function anyPage(){
        ThemeManager::setThemeStatus($this->theme, 'web', true);

        return View('theme::pages.home.index');
    }
}
