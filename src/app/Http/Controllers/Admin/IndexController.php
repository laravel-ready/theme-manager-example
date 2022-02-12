<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use LaravelReady\ThemeManager\Services\ThemeManager;

class IndexController extends Controller
{
    public function __construct() {
        ThemeManager::addDefaultTheme(['admin:admin-who']);

        $theme = request()->query('theme', 'gentelella');

        ThemeManager::setTheme($theme, 'admin');
    }

    public function index(){
        return View('admin.welcome', compact('themeGroups'));
    }

    public function anyPage(){
        return View('theme::pages.dashboard.index');
    }
}
