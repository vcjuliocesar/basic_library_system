<?php

require 'core/bootstrap.php';

use App\Core\Router;

use App\Core\Request;

Router::load('app/routes.php')->direct(Request::url(),Request::method());
