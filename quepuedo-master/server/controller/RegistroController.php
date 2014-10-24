<?php

require_once 'server/model/CoursesModel.php';
require_once 'server/model/ThematicsModel.php';

class RegistroController
{
	public function __construct()
	{
		$drawing = new RegistroDrawing();

		$drawing->drawPage( 'Que puedo' );
	} // end __construct
} // end IndexController

$page = new RegistroController();

