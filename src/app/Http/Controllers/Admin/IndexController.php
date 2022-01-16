<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use LaravelReady\ThemeManager\Services\ThemeManager;

class IndexController extends Controller
{
    public function __construct(ThemeManager $themeManager) {
        $themeManager->scanThemes(true);

        $theme = request()->query('theme', 'gentelella');

        $themeManager->setTheme($theme, 'admin');
    }

    public function index(ThemeManager $themeManager){
        $themeGroups = $themeManager->scanThemes(true);

        return View('admin.welcome', compact('themeGroups'));
    }

    public function anyPage(){
        return View('theme::pages.landing.index');
    }
}
