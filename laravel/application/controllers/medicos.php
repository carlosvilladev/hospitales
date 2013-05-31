<?
class Medicos_Controller extends Base_Controller{

	public $restful = true;

	public function get_index()
	{
		$medicos = DB::table('medico')->get();

		if ($medicos) {
			return View::make('home.medicos')->with('medicos',$medicos);
			
		}else
		return View::make('home.medicos');
		//return json_encode(array('error'=>'No hay medicos existentes'));
		
	}

	public function post_insert()
	{
		if(DB::query("Insert into medico (nombreMedico,apellidoMedico,codigoMedico,estado,Usuario_idUsuario) values('".Input::get('m-name')."','".Input::get('m-ape')."','".Input::get('m-codigo')."','".Input::get('estado')."','2')"))
		{
			return json_encode(array("success"=>"Medico registrado"));
		}else
			return json_encode(array("error"=>"No se pudo registrar"));
	}

	public function get_consultar()
	{
		$medicos = DB::query('Select * from medico where estado = 1');
		if ($medicos) {
			return json_encode($medicos);
		}else
			return json_encode(array("error"=>"No hay medicos desocupados"));
		
	}
}