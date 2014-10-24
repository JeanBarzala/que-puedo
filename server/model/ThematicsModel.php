<?php
use Gear\Db\GMongo;

class ThematicsModel 
{
	public function getThematics()
	{
		return GMongo::getRegisters( 'thematics', array( '_id' => 0 ) );
	} // end getThematics
}//end ThematicsModel