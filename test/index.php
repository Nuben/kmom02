<?php
/**
* All requests routed through here. This is an overview of what actaully happens during
* a request.
*
* @package ChrisCore
*/

// ---------------------------------------------------------------------------------------
//
// PHASE: BOOTSTRAP
//
define('Chris_INSTALL_PATH', dirname(__FILE__));
define('Chris_SITE_PATH', Chris_INSTALL_PATH . '/site');

require(Chris_INSTALL_PATH.'/src/bootstrap.php');

$ly = CChris::Instance();


// ---------------------------------------------------------------------------------------
//
// PHASE: FRONTCONTROLLER ROUTE
//
$ly->FrontControllerRoute();


// ---------------------------------------------------------------------------------------
//
// PHASE: THEME ENGINE RENDER
//
$ly->ThemeEngineRender();