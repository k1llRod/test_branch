<?php
require_once 'controllers/template.php';
require_once 'controllers/links.php';
require_once 'controllers/login.php';

require_once 'models/links.php';
require_once 'models/login.php';
require_once 'models/conexion.php';


#require_once 'modelo/enlaces.php';


$template = new templateControllers();
$template->template();

 ?>