<?php

use Gear\Db\GMongo;

class UserModel
{
	// Comprueba si una cuenta esta registrada a partir
	// del nombre de usuario o correo y el password
	public function existsUser( $login, $password ) 
	{
		$fields = array(
					'_id' => 0,
					'user_name' => 1,
					'name' => 1,
					'lastname' => 1,
					'level' => 1
				);

		$query = array(
							'$and' => array(
								array(
									'$or' => array(
										array( 'user_name' => $login ),
										array( 'email' => $login )
									)
								),
								array( 'password' => $password )
							)
						);

		return GMongo::getRegister( 'users', $fields, $query );
	} // end iniciarSesion


	/**************************************************************************
	***************************************************************************/
	// Inscribe a un usuario a un curso
	public function signUpUser( $userSlug, $courseSlug )
	{
		$query = array(
					'user_name' => $userSlug
				);

		$update = array(
					'$addToSet' => array(
						'courses' => $courseSlug
					),	
				);

		GMongo::updateRegister( 'users', $update, $query, array( 'upsert' => true ) );
	} // end signUpUser

	/**************************************************************************
	***************************************************************************/
	// Desinscribe a un usuario a un curso
	public function disenrollUser( $userSlug, $courseSlug )
	{
		$query = array(
					'user_name' => $userSlug
				);

		$update = array(
					'$pull' => array(
						'courses' => $courseSlug
					),	
				);

		GMongo::updateRegister( 'users', $update, $query );
	} // end signUpUser

	/**************************************************************************
	***************************************************************************/
	// Comprueba si un usuario ya está inscripto en un curs
	public function isSignUp( $userSlug, $courseSlug )
	{
		$fields = array(
					'_id' => 1
				);

		$query = array(
							'courses' => array(
								'$in' => array( $courseSlug )
							)
						);

		return GMongo::getRegister( 'users', $fields, $query );
	} // end isSignUp
}//end Usuario