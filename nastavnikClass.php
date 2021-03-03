<?php

class NastavnikC
{

	private $db;

	public function __construct($db)
	{
		$this->db = $db;
	}

	public function rezervacija()
	{

		$data = array(
			"id" => trim($_POST['nastavnikid']),
			"nastavnik" => trim($_POST['ime'])
		);

		$sacuvano = $this->db->insert('rezervacija', $data);

		if ($sacuvano) {
			return true;

		} else {
			return false;
		}
	}
}

?>
