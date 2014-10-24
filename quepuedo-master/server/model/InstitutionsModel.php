<<<<<<< HEAD
<?php
use Gear\Db\GMongo;

class InstitutionsModel 
{
	public function getInstitutions() 
	{
		$field = array( 'institution' => 1, 'image' => 1, '_id' => 0 );
		return GMongo::getRegisters( 'institutions', $field );
	}//end getInstituciones

=======
<?php
use Gear\Db\GMongo;

class InstitutionsModel 
{
	public function getInstitutions() 
	{
		$field = array( 'institution' => 1, 'image' => 1, '_id' => 0 );
		return GMongo::getRegisters( 'institutions', $field );
	}//end getInstituciones

>>>>>>> e8478b0143f76fe086bcb99c853b6b0d5ac212af
}//end Institucion