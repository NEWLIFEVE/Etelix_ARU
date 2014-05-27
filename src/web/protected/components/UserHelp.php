<?php
/*********************************************************
* Clase para ayuda de logeo y administracion de usuarios *
* @file UserHelp.php                                     *
*********************************************************/

class UserHelp extends CWebModule
{
	/**
	 * @var boolean
	 * @desc allow auth for is not active user
	 */
	public static $loginNotActiv=false;
	/**
	 * @return hash string.
	 */
	public static function encrypting($string="") {
		$hash = 'md5';
		if ($hash=="md5")
			return md5($string);
		if ($hash=="sha1")
			return sha1($string);
		else
			return hash($hash,$string);
	}
        
        
        
        public static function CreateMenu($id_rol)
           {
             switch ($id_rol) {
            case 1:
            $option_menu="<li id='create' name='create'>
                                                   <a href='/EventEmployee/Create'>
                                                   <i class='icon-map-marker'></i> 
                                                   <span class='title'>Declarar</span>
                                                   <span class='selected'></span>
                                                   </a>
                          </li>
                           <li id ='employee'>
                                                           <a href='javascript:;'>
                                                           <i class='icon-user'></i> 
                                                           <span class='title'>Empleados</span>
                                                           <span class='arrow '></span>
                                                           <span class='selected'></span>
                                                           </a>
                                                           <ul class='sub-menu'>
                                                              <li>
                                                                 <a href='/Employee/infoEmployee'>
                                                                 Mi Perfil</a>
                                                              </li>
                                                              <li >
                                                                 <a href='/Employee/SearchEmployee'>
                                                                Activos</a>
                                                              </li>
                                                           </ul>
                                             </li>";
                return $option_menu;

                break;
            case 2:
            $option_menu="<li id='create' name='create'>
                                                   <a href='/EventEmployee/Create'>
                                                   <i class='icon-map-marker'></i> 
                                                   <span class='title'>Declarar</span>
                                                   <span class='selected'></span>
                                                   </a>
                                                </li>";
                return $option_menu;

                break;

        }
           }
}
?>