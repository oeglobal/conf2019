<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Page extends Controller
{
    public function pageIcon() {
        $icon = get_field('page_icon');

        return 'symbols/' . $icon;
    }
}
