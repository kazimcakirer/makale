<?php

if(!@session('admin')) {
   require_once admin_controller(route(1));
} else {
    require_once admin_controller('login');
}
