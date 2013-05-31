<?
class Pacientes_Controller extends Base_Controller{
	public $restful = true;

	public function get_index()
	{
		$urgencias = DB::query('select * from paciente, urgencia, triage where Paciente_idPaciente = idPaciente and Triage_idTriage = idTriage');
		return View::make('home.pacientes')->with('urgencias',$urgencias);
	}

	public function post_consultar()
	{
		$cedula = Input::get('ced');
		$user = DB::query("Select * from paciente where cedulaPaciente = '".$cedula."'");
		if ($user) {
			return json_encode($user);
		}else
		return json_encode(array('error'=>'Paciente no existe'));
		
	}

	public function post_insertar()
	{
		
		if(DB::query("Insert into paciente (nombrePaciente,apellidoPaciente,cedulaPaciente,sexo,edad,EPS) values('".Input::get('u-name')."','".Input::get('u-ape')."','".Input::get('u-ced')."','".Input::get('sexo')."','".Input::get('u-edad')."','".Input::get('u-eps')."')"))
		{
			return json_encode(array("success"=>"Paciente registrado"));
		}else
			return json_encode(array("error"=>"No se pudo registrar"));
		
	}
}