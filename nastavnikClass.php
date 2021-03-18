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
			"nastavnikID" => trim($_POST['nastavniID']),
			"ucenikID" => trim($_POST['uceniID']),
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
