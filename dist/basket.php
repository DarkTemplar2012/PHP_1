<?php

include 'engine/autoload.php';
autoload('config');

include ENGINE_DIR.'session.php';
include ENGINE_DIR.'index.php';
include ENGINE_DIR."getUser.php";
include ENGINE_DIR."login_controller.php";
include ENGINE_DIR."basket.php";
include ENGINE_DIR.'session_destroy_other.php';


include PUBLIC_DIR.'header.php';
include PUBLIC_DIR.'basket.php';
// include PUBLIC_DIR.'auth_check.php';





include PUBLIC_DIR.'footer.php';
