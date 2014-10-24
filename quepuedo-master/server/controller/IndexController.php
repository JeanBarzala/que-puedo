<<<<<<< HEAD
<?php

require_once 'server/model/CoursesModel.php';
require_once 'server/model/ThematicsModel.php';

class IndexController
{
	public function __construct()
	{
		$drawing = new IndexDrawing();

		$drawing->drawPage( 'Que puedo' );
	} // end __construct
} // end IndexController

$page = new IndexController();

=======
<?php

require_once 'server/model/CoursesModel.php';
require_once 'server/model/ThematicsModel.php';

class IndexController
{
	public function __construct()
	{
		$drawing = new IndexDrawing();

		$drawing->drawPage( 'Que puedo' );
	} // end __construct
} // end IndexController

$page = new IndexController();

>>>>>>> e8478b0143f76fe086bcb99c853b6b0d5ac212af
