
<?php
//fetch.php
if(isset($_POST["action"]))
{
	$output = '';
	if($_POST["action"] == "urusan")
	{
		$result = $this->db->query("SELECT * FROM bidang WHERE id_urusan = '".$_POST['query']."'")->result();
		$output .= '<option value="">Select Bidang</option>';
		foreach($result as $row)
	  	{
	   		$output .= '<option value="'.$row->id_bidang.'">'.$row->nama_bidang.'</option>';
	  	}
	} elseif ($_POST["action"] == "bidang") {
		$result = $this->db->query("SELECT * FROM program WHERE id_bidang = '".$_POST['query']."'")->result();
		$output .= '<option value="">Select Program</option>';
		foreach($result as $row)
	  	{
	   		$output .= '<option value="'.$row->id_program.'">'.$row->nama_program.'</option>';
	  	}
	} elseif ($_POST["action"] == "program") {
		$result = $this->db->query("SELECT * FROM kegiatan WHERE id_program = '".$_POST['query']."'")->result();
		$output .= '<option value="">Select Kegiatan</option>';
		foreach($result as $row)
	  	{
	   		$output .= '<option value="'.$row->id_kegiatan.'">'.$row->nama_kegiatan.'</option>';
	  	}
	} elseif ($_POST["action"] == "kegiatan") {
		$result = $this->db->query("SELECT * FROM sub WHERE id_kegiatan = '".$_POST['query']."'")->result();
		$output .= '<option value="">Select Sub Kegiatan</option>';
		foreach($result as $row)
	  	{
	   		$output .= '<option value="'.$row->id_sub.'">'.$row->nama_sub.'</option>';
	  	}
	}
	echo $output;
}

?>