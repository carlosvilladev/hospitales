<? 
class  Login_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		return View::make('login.index');
	}

	public function post_log()
	{
		$user = Input::get('user');
        $password = Input::get('pass');
		if(Auth::attempt($user, $password, true) )
		            return json_encode(array("success"=>"Exito"));
		        else
		            return json_encode(array("error"=>"Usuario o Contraseña Incorrecta"));
	}
}