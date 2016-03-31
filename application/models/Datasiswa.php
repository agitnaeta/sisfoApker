<?php /**
* 
*/
class Datasiswa extends CI_Model
{
		
	public function all()
	{
		return $this->db->get('tabel_siswa');
	}
}