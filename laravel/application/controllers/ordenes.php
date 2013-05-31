<?
class Ordenes_Controller extends Base_Controller {
	
	public $restful = true;

	public function get_index()
	{
		$listas = DB::query("SELECT * FROM urgencia, triage, paciente WHERE Triage_idTriage = idTriage and Paciente_idPaciente = idPaciente and urgencia.estado = 1");
		if($listas)
		{
			return View::make('home.ordenes')->with('listas',$listas);
		}else
			return View::make('home.ordenes')->with('listas',null);
		
	}

	public function post_insertar()
	{
		if(DB::query("Insert into orden(tipoOrden_idtipoOrden, recetaOrden, detallesOrden, Urgencia_idUrgencia) values('".Input::get('orden')."','".Input::get('receta')."','".Input::get('detalles')."','".Input::get('idUr')."')"))
		{
			DB::query("Update urgencia set estado=2 where idUrgencia = ".Input::get('idUr'));
			return json_encode(array("success"=>"Orden emitida"));
		}else
			return json_encode(array("error"=>"No se ha emitido la orden"));
	}

}