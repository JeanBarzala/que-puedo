<<<<<<< HEAD
<?php
use Gear\Db\GMySqli;
class Modulos {

	private $curso;
	private $modulos;
	private $secciones;


	public function __construct( $idCurso ) {
		$this->curso = $idCurso;
		$this->modulos = array();
		$this->secciones = array();
	}//end __construct

	public function getModulos() {
		$values = array( 'idModulo', 'modulo', 'numeroModulo' );
		$this->modulos = GMySqli::getRegisters( 'Modulos', $values, 
			sprintf(
					'Cursos_idCurso=%s',
					$this->curso
				));
				
		return $this->modulos;
	}

=======
<?php
use Gear\Db\GMySqli;
class Modulos {

	private $curso;
	private $modulos;
	private $secciones;


	public function __construct( $idCurso ) {
		$this->curso = $idCurso;
		$this->modulos = array();
		$this->secciones = array();
	}//end __construct

	public function getModulos() {
		$values = array( 'idModulo', 'modulo', 'numeroModulo' );
		$this->modulos = GMySqli::getRegisters( 'Modulos', $values, 
			sprintf(
					'Cursos_idCurso=%s',
					$this->curso
				));
				
		return $this->modulos;
	}

>>>>>>> e8478b0143f76fe086bcb99c853b6b0d5ac212af
}//end Modulo