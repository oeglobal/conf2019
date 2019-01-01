<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function getGallery() {
        return get_field('home_gallery', 'options');
    }
}
