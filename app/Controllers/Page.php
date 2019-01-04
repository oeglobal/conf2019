<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Page extends Controller {
    protected $acf = true;

    public function pageIcon() {
        $icon = get_field( 'page_icon' );

        if ( $icon ) {
            return 'symbols/' . $icon;
        }
    }
}
