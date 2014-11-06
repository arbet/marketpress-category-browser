<?php

class MarketpressCategoryBrowser {
    
    public function __construct() {

	add_action( 'widgets_init', function(){
	     register_widget( 'MarketpressCategoryWidget' );
	});

    }
}