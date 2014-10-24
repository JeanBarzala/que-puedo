<?php
use Gear\Db\GMongo;

class InstitutionsModel 
{
	public function getInstitutions() 
	{
		$field = array( 'institution' => 1, 'image' => 1, '_id' => 0 );
		return GMongo::getRegisters( 'institutions', $field );
	}//end getInstituciones

}//end Institucion