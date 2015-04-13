<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package		CodeIgniter
 * @subpackage	Rest Server
 * @category	Controller
 * @author		Phil Sturgeon
 * @link		http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Usuario extends REST_Controller
{
	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        $this->load->Model("Usuario_modelo");
    }

    
    function listar_usuarios_get()
    {

       $usuarios = array();  
       $usuarios = $this->Usuario_modelo->listar(" ");
       if(sizeof($usuarios) > 0)
        {
            $this->response($usuarios, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'No hay usuarios'), 404);
        }  

    }



}