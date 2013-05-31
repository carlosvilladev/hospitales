<?php

class Home_Controller extends Base_Controller {

	public $restful = true;

	public function get_pacientes()
	{
		return View::make('home.pacientes');
	}

	public function get_medicos()
	{
		return View::make('home.medicos');
	}

	public function get_ordenes()
	{
		return View::make('home.ordenes');
	}
	public function get_index()
	{
		return View::make('home.index');
	}

	

	public function post_emitirUrgencia()
	{
		if(DB::query("Insert into urgencia(fechaUrgencia, detallesUrgencia, estado, Triage_idTriage, Paciente_idPaciente, Medico_idMedico) values('".date('Y-m-d H:i:s')."','".Input::get('detallesU')."','1','".Input::get('triage')."','".Input::get('idP')."','".Input::get('medico')."')"))
		{
			DB::query("Update medico set estado = 2 where idMedico = ".Input::get('medico'));
			
			return json_encode(array("success"=>"Urgencia emitida"));
		}else
			return json_encode(array("error"=>"Intentelo de nuevo"));

	}

}