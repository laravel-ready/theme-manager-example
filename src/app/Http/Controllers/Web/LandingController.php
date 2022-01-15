<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use LaravelReady\ThemeManager\Services\ThemeManager;

class LandingController extends Controller
{
    public function __construct(ThemeManager $themeManager) {
        $themeManager->scanThemes(true);

        $theme = request()->query('theme', 'green-energy');
        $group = request()->query('group', 'web');

        $themeManager->setTheme($theme, $group);
    }

    public function index(ThemeManager $themeManager){
        $themeGroups = $themeManager->scanThemes(true);

        return View('welcome', compact('themeGroups'));
    }

    public function anyPage(){
        return View('theme::pages.landing.index');
    }
}
