<<<<<<< HEAD
<?php
use Gear\Db\GMongo;

class CoursesModel
{
	private $conditional = array();

	/**
	 * Obtiene los cursos
	 *
	 * Temática de los cursos a obtener
	 * @var thematic  
	 */
	public function getCourses( $thematic )
	{
		if( isset( $thematic ) )
			$this->conditional = array( 'thematic.formated' => $thematic );

		$fields = array( 'course' => 1, 'description' => 1, 'image' => 1, 'thematic' => 1, 'slug' => 1, 'institutions' => 1 );

		return GMongo::getRegisters( 'courses', $fields, $this->conditional );
	} // end get Courses

	/**
	 * Obtiene un curso a través de su slug
	 *
	 * Slug del nombre del curso a obtener
	 * @var slug 
	 */
	public function getCourse( $slug )
	{
		$fields = array(
			'course' => 1,
			'slug' => 1, 
			'description' => 1, 
			'required_knowledge' => 1,
			'_id' => 0
		);
		return GMongo::getRegister( 'courses', $fields, array( 'slug' => $slug ) );
	} // end getCourseName

	/**
	 * Obtiene los tutores de un curso a través de su slug
	 *
	 * Slug del nombre del curso a obtener
	 * @var slug 
	 */
	public function getTutors( $slug )
	{
		$fields = array(
			'tutors' => 1,
			'_id' => 0,
		);

		return GMongo::getRegister( 'courses', $fields, array( 'slug' => $slug ) );
	} // end getCourseName

	/**
	 * Obtiene las instituciones de un curso a través de su slug
	 *
	 * Slug del nombre del curso a obtener
	 * @var slug 
	 */
	public function getInstitutions( $slug )
	{
		$fields = array(
			'institutions' => 1,
			'_id' => 0,
		);

		return GMongo::getRegister( 'courses', $fields, array( 'slug' => $slug ) );
	} // end getCourseName

	/**
	 * Obtiene los modulos de un curso a través de su slug
	 *
	 * Slug del nombre del curso a obtener
	 * @var slug 
	 */
	public function getModules( $slug )
	{
		$fields = array(
			'module' => 1,
			'number' => 1,
			'_id' => 0,
		);

		return GMongo::getRegisters( 'courses.modules', $fields, array( 'course_slug' => $slug ), array( 'number' => 1 ) );
	} // end getCourseName

=======
<?php
use Gear\Db\GMongo;

class CoursesModel
{
	private $conditional = array();

	/**
	 * Obtiene los cursos
	 *
	 * Temática de los cursos a obtener
	 * @var thematic  
	 */
	public function getCourses( $thematic )
	{
		if( isset( $thematic ) )
			$this->conditional = array( 'thematic.formated' => $thematic );

		$fields = array( 'course' => 1, 'description' => 1, 'image' => 1, 'thematic' => 1, 'slug' => 1, 'institutions' => 1 );

		return GMongo::getRegisters( 'courses', $fields, $this->conditional );
	} // end get Courses

	/**
	 * Obtiene un curso a través de su slug
	 *
	 * Slug del nombre del curso a obtener
	 * @var slug 
	 */
	public function getCourse( $slug )
	{
		$fields = array(
			'course' => 1,
			'slug' => 1, 
			'description' => 1, 
			'required_knowledge' => 1,
			'_id' => 0
		);
		return GMongo::getRegister( 'courses', $fields, array( 'slug' => $slug ) );
	} // end getCourseName

	/**
	 * Obtiene los tutores de un curso a través de su slug
	 *
	 * Slug del nombre del curso a obtener
	 * @var slug 
	 */
	public function getTutors( $slug )
	{
		$fields = array(
			'tutors' => 1,
			'_id' => 0,
		);

		return GMongo::getRegister( 'courses', $fields, array( 'slug' => $slug ) );
	} // end getCourseName

	/**
	 * Obtiene las instituciones de un curso a través de su slug
	 *
	 * Slug del nombre del curso a obtener
	 * @var slug 
	 */
	public function getInstitutions( $slug )
	{
		$fields = array(
			'institutions' => 1,
			'_id' => 0,
		);

		return GMongo::getRegister( 'courses', $fields, array( 'slug' => $slug ) );
	} // end getCourseName

	/**
	 * Obtiene los modulos de un curso a través de su slug
	 *
	 * Slug del nombre del curso a obtener
	 * @var slug 
	 */
	public function getModules( $slug )
	{
		$fields = array(
			'module' => 1,
			'number' => 1,
			'_id' => 0,
		);

		return GMongo::getRegisters( 'courses.modules', $fields, array( 'course_slug' => $slug ), array( 'number' => 1 ) );
	} // end getCourseName

>>>>>>> e8478b0143f76fe086bcb99c853b6b0d5ac212af
}//end Cursos