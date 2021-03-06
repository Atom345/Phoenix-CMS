<?php

/*
-------------------------------------------------
Phoenix CMS | Copyright (c) 2020-2025           
-------------------------------------------------
Author: Phoenix CMS Team
-------------------------------------------------
Phoenix CMS and its corresponding files are all 
licensed under the GPL 3.0 lisence.
--------------------------------------------------
*/

namespace Phoenix\Controllers;


class APIConnect extends Controller {

    public function index() {

        if(endpoint_active('test_api') == true){
            response(200, $this->settings->title . " API is online!", true);
        }else{
            response(401, "Endpoint not found.", false);
        }
    }

}
