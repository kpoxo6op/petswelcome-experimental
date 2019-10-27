<?php

add_action( 'init', function() {
  register_extended_post_type( 'petplace', []);
} );