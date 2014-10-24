<<<<<<< HEAD
<?php

namespace Gear\Session;

use Gear\Session\Login;

class Session extends Login
{
	//Establece el nivel de la sesión del usuario
	public function setLevel( &$level )
	{
		$_SESSION[ 'userLevel' ] = $level;
	} // end setLevel

	//Recibe como parametro el nombre del shtml guardado
	public function startTranslateByLevel( $forTranslate ) {
		$url = $this->folder.'L'.self::$userLevel.'/'.$forTranslate.'.shtml';

		$this->templateSection = file_get_contents( $url );

		return $this->templateSection;

	}//end startTranslateByLevel


	public function setFolder( $direction ) {
		$this->folder = $direction;
	}
}// end Session

//Created by Gear
=======
<?php

namespace Gear\Session;

use Gear\Session\Login;

class Session extends Login
{
	//Establece el nivel de la sesión del usuario
	public function setLevel( &$level )
	{
		$_SESSION[ 'userLevel' ] = $level;
	} // end setLevel

	//Recibe como parametro el nombre del shtml guardado
	public function startTranslateByLevel( $forTranslate ) {
		$url = $this->folder.'L'.self::$userLevel.'/'.$forTranslate.'.shtml';

		$this->templateSection = file_get_contents( $url );

		return $this->templateSection;

	}//end startTranslateByLevel


	public function setFolder( $direction ) {
		$this->folder = $direction;
	}
}// end Session

//Created by Gear
>>>>>>> e8478b0143f76fe086bcb99c853b6b0d5ac212af
//..:::Lorines:::..