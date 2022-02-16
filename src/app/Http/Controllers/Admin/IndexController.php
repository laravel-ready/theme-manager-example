<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use LaravelReady\ThemeManager\Services\ThemeManager;

class IndexController extends Controller
{
    public function __construct()
    {
        // ThemeManager::addDefaultTheme(['egoistdev/admin-who']);
        // ThemeManager::removeDefaultTheme(['egoistdev/admin-who']);

        $theme = request()->query('theme', 'egoistme/gentelella');

        ThemeManager::setTheme($theme);
    }

    public function index()
    {
        return View('admin.welcome', compact('themeGroups'));
    }

    public function anyPage()
    {
        return View('theme::pages.dashboard.index');
    }
}
