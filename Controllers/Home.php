<?php
// echo 'entro';
class Home extends Controllers 
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function home() 
	{
		$data['page_id'] 		= 1;
		$data['tag_page'] 		= "home";
		$data['page_title'] 	= "Página principar";
		$data['page_name'] 		= "home";
		$data['page_content'] 	= "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>";

		$this->views->getView($this,'home', $data);
	}

	public function insertar() {

		$data = $this->modelo->setUser('Carlos', 18);
		print_r($data);
	}

	public function verusuario($id) {
		$data = $this->modelo->getUser($id);
		print_r($data);
	}

	public function actualizar() 
	{
		$data = $this->modelo->updateUser(1, "Roberto", 29);
		print_r($data);
	}

	public function verusuarios() {
		$data = $this->modelo->getUsers();
		print_r($data);
	}

	public function eliminarUsuario($id) {
		$data = $this->modelo->delUser($id);
		print_r($data);
	}


}