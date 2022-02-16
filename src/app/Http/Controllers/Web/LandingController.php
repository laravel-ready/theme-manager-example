<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use LaravelReady\ThemeManager\Services\ThemeManager;

class LandingController extends Controller
{
    public function __construct()
    {
        ThemeManager::addDefaultTheme(['vendor-x/red-swan']);

        ThemeManager::reScanThemes();

        $this->theme = request()->query('theme', 'vendor-x/green-energy');

        ThemeManager::setThemeStatus($this->theme, true);
        ThemeManager::setTheme($this->theme);
    }

    public function index()
    {
        $themes = ThemeManager::reScanThemes();
        $themeGroups = null;

        if ($themes) {
            $themeGroups = $themes->groupBy('group');
        }

        return View('web.welcome', compact('themeGroups'));
    }

    public function anyPage()
    {
        ThemeManager::setTheme($this->theme);

        return View('theme::pages.home.index');
    }
}
