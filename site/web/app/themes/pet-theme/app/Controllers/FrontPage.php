<?php

namespace App\Controllers;

use Sober\Controller\Controller;
class FrontPage extends Controller {
    public function latest_petplaces() {
        $args = array(
            'post_type' => 'petplace',
            'orderby'   => 'date',
            'order'     => 'desc',
            'posts_per_page' => 3,
        );
        $the_query = new \WP_Query($args);
        return $the_query;
    }
}