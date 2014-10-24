<<<<<<< HEAD
<?php
use Gear\Db\GMongo;

class ThematicsModel 
{
	public function getThematics()
	{
		return GMongo::getRegisters( 'thematics', array( '_id' => 0 ) );
	} // end getThematics
=======
<?php
use Gear\Db\GMongo;

class ThematicsModel 
{
	public function getThematics()
	{
		return GMongo::getRegisters( 'thematics', array( '_id' => 0 ) );
	} // end getThematics
>>>>>>> e8478b0143f76fe086bcb99c853b6b0d5ac212af
}//end ThematicsModel