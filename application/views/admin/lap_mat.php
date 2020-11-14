<?php 
	// ob_start(); 
	if ($isi == 'excel') {
		header("Content-type: application/vnd-ms-excel");
	 
		// Mendefinisikan nama file ekspor "hasil-export.xls"
		header("Content-Disposition: attachment; filename=Laporan Matrix Reprang.xls");
	}
?>

<style type="text/css">
	.putar {
		width: 20px;
	}

	.putar div {
		-webkit-transform: rotate(-90deg);
    	-moz-transform: rotate(-90deg);
    	-o-transform: rotate(-90deg);
    	-ms-transform: rotate(-90deg);
    	transform: rotate(-90deg);
		width: 150px;
		margin: 0 0 0 -65;
	}

	table.isi tr th {
		font-size: 12px;
		border: 1px solid black;
	}

	table.isi tr td {
		font-size: 10px;
		border: 1px solid black;
	}

	table.isi {
	  border-collapse: collapse;
	  width: 100%;
	}
</style>
<body <?php if ($isi == 'print'){ echo "onload='window.print()'"; } ?> >
	<table border="0" align="center">
		<tr><?php 
				$tahunawal	= $this->db->order_by('periode', 'ASC');
				$tahunawal	= $this->db->limit('1');
				$tahunawal	= $this->db->get('periode')->row();
				$tahunakhir	= $this->db->order_by('periode', 'DESC');
				$tahunakhir	= $this->db->limit('1');
				$tahunakhir	= $this->db->get('periode')->row();
			?>
			<th colspan="25" style="font-size: 16px; height: 80px">FORMAT MATRIKS RANCANGAN TEKNOKRATIK RPJMD PROVINSI JAMBI TAHUN <?php echo $tahunawal->periode." - ".$tahunakhir->periode; ?> </th>
		</tr>
	</table>
	<?php 
		$periode 		= $this->db->get('periode')->result();
		$periodecount	= count($periode)*3;
	?>
	<table class="isi" border="1" width="100%">
		<tr>
			<th rowspan="4">No.</th>
			<th rowspan="2" colspan="5">KODE</th>
			<th rowspan="4">RENCANA PROGRAM DAN KEGIATAN</th>
			<th rowspan="2" colspan="3">INDIKATOR KINERJA PROGRAM<br>(Outcome) DAN KEGIATAN (Output)</th>
			<th rowspan="4">KONDISI AWAL<br>(2019)</th>
			<th rowspan="4">PERMASALAHAN</th>
			<th <?php echo "colspan='".$periodecount."'"; ?>>TARGET  KINERJA PROGRAM/ KEGIATAN DAN KERANGKA PENDANAAN</th>
			<th rowspan="4">Kondisi Akhir</th>
		</tr>
		<tr>
			<?php 
				foreach ($periode as $row) {
					echo "<th colspan='3'>".$row->periode."</th>";
				}
			?>
			
		</tr>
		<tr height="100px">
			<th rowspan="2" height="150px"><div class="putar"><div>URUSAN</div></div></th>
			<th rowspan="2"><div class="putar"><div>BIDANG URUSAN</div></div></th>
			<th rowspan="2"><div class="putar"><div>PROGRAM</div></div></th>
			<th rowspan="2"><div class="putar"><div>KEGIATAN</div></div></th>
			<th rowspan="2"><div class="putar"><div style="transform: rotate(-90deg);">SUB KEGIATAN</div></div></th>
			<th rowspan="2"><div class="putar"><div>URAIAN</div></div></th>
			<th rowspan="2"><div class="putar"><div>VOLUME</div></div></th>
			<th rowspan="2"><div class="putar"><div>SATUAN</div></div></th>
			<?php 
				foreach ($periode as $row) {
					echo "<th rowspan='2'>PAGU</th>";
					echo "<th colspan='2'>Indikator Kinerja</th>";
				}
			?>	
		</tr>
		<tr>
			<?php 
				foreach ($periode as $row) {
					echo "<th>Volume</th>";
					echo "<th>Satuan</th>";
				}
			?>	
			
			
		</tr>
		<?php 
			$urusan = $this->db->get('urusan')->result();

			foreach ($urusan as $row) {
				echo "<tr>";
				echo "<td></td>";
				echo "<td align='left' colspan='5'>".$row->id_urusan."</td>";
				echo "<td><b>".$row->nama_urusan."</b></td>";
				echo "<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
				echo "</tr>";
				
				$bidang = $this->db->where('id_urusan', $row->id_urusan);
				$bidang = $this->db->get('bidang')->result();

				foreach ($bidang as $rowbidang) {
					echo "<tr>";
					echo "<td></td>";
					echo "<td></td>";
					echo "<td align='left' colspan='4'>".$rowbidang->kode."</td>";
					echo "<td><b>".$rowbidang->nama_bidang."</b></td>";
					echo "<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
					echo "</tr>";

					$program = $this->db->where('id_bidang', $rowbidang->id_bidang);
					$program = $this->db->get('program')->result();

					foreach ($program as $rowprogram) {
						echo "<tr>";
						echo "<td></td>";
						echo "<td></td>";
						echo "<td></td>";
						echo "<td align='left' colspan='3'>".$rowprogram->kode."</td>";
						echo "<td><b>".$rowprogram->nama_program."</b></td>";
						echo "<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
						echo "</tr>";

						$kegiatan = $this->db->where('id_program', $rowprogram->id_program);
						// $kegiatan = $this->db->where('id_pptk', $this->session->userdata('id'));
						$kegiatan = $this->db->get('kegiatan')->result();

						foreach ($kegiatan as $rowkegiatan) {
							echo "<tr>";
							echo "<td></td>";
							echo "<td></td>";
							echo "<td></td>";
							echo "<td></td>";
							echo "<td align='left' colspan='2'>".$rowkegiatan->kode."</td>";
							echo "<td><b>".$rowkegiatan->nama_kegiatan."</b></td>";
							echo "<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
							echo "</tr>";

							$sub = $this->db->where('id_kegiatan', $rowkegiatan->id_kegiatan);
							$sub = $this->db->get('sub')->result();

							foreach ($sub as $rowsub) {
								echo "<tr>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td></td>";
								echo "<td align='left'>".$rowsub->kode."</td>";
								echo "<td>".$rowsub->nama_sub."</td>";
								echo "<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
								echo "</tr>";

								$programkerja = $this->db->where('id_urusan', $row->id_urusan);
								$programkerja = $this->db->where('id_bidang', $rowbidang->id_bidang);
								$programkerja = $this->db->where('id_program', $rowprogram->id_program);
								$programkerja = $this->db->where('id_kegiatan', $rowkegiatan->id_kegiatan);
								$programkerja = $this->db->where('id_sub', $rowsub->id_sub);
								$programkerja = $this->db->get('programkerja')->result();

								foreach ($programkerja as $rowprogramkerja) {
									echo "<tr>";
									echo "<td></td>";
									echo "<td></td>";
									echo "<td></td>";
									echo "<td></td>";
									echo "<td></td>";
									echo "<td></td>";
									echo "<td>".$rowprogramkerja->keterangan."</td>";
									echo "<td>".$rowprogramkerja->uraian."</td>";
									echo "<td>".$rowprogramkerja->volume."</td>";
									echo "<td>".$rowprogramkerja->satuan."</td>";
									echo "<td>".$rowprogramkerja->kondisi_awal."</td>";
									echo "<td>".$rowprogramkerja->permasalahan."</td>";

									$periode 	= $this->db->order_by('periode', 'asc');
									$periode 	= $this->db->get('periode')->result();

									foreach ($periode as $rowperiode) {
										$tarkeg = $this->db->where('id_programkerja', $rowprogramkerja->id);
										$tarkeg = $this->db->where('id_periode', $rowperiode->id_periode);
										$tarkeg = $this->db->get('targetkegiatan')->result();

										if (count($tarkeg) != 0) {
											foreach ($tarkeg as $rowtarkeg) {
												echo "<td>".$rowtarkeg->pagu."</td>";
												echo "<td>".$rowtarkeg->volume."</td>";
												echo "<td>".$rowtarkeg->satuan."</td>";
											}
										} else {
											echo "<td></td><td></td><td></td>";
										}
									}

									// $tarkeg2020 = $this->db->where('id_programkerja', $rowprogramkerja->id);
									// $tarkeg2020 = $this->db->where('tahun', '2020');
									// $tarkeg2020 = $this->db->get('targetkegiatan')->result();

									// if (count($tarkeg2020) != 0) {
									// 	foreach ($tarkeg2020 as $rowtarkeg2020) {

									// 		echo "<td>".$rowtarkeg2020->pagu."</td>";
									// 		echo "<td>".$rowtarkeg2020->volume."</td>";
									// 		echo "<td>".$rowtarkeg2020->satuan."</td>";
									// 	}
									// } else {
									// 	echo "<td></td><td></td><td></td>";
									// }

									// $tarkeg2021 = $this->db->where('id_programkerja', $rowprogramkerja->id);
									// $tarkeg2021 = $this->db->where('tahun', '2021');
									// $tarkeg2021 = $this->db->get('targetkegiatan')->result();

									// if (count($tarkeg2021) != 0) {
									// 	foreach ($tarkeg2021 as $rowtarkeg2021) {

									// 		echo "<td>".$rowtarkeg2021->pagu."</td>";
									// 		echo "<td>".$rowtarkeg2021->volume."</td>";
									// 		echo "<td>".$rowtarkeg2021->satuan."</td>";
									// 	}
									// } else {
									// 	echo "<td></td><td></td><td></td>";
									// }

									// $tarkeg2022 = $this->db->where('id_programkerja', $rowprogramkerja->id);
									// $tarkeg2022 = $this->db->where('tahun', '2022');
									// $tarkeg2022 = $this->db->get('targetkegiatan')->result();

									// if (count($tarkeg2022) != 0) {
									// 	foreach ($tarkeg2022 as $rowtarkeg2022) {

									// 		echo "<td>".$rowtarkeg2022->pagu."</td>";
									// 		echo "<td>".$rowtarkeg2022->volume."</td>";
									// 		echo "<td>".$rowtarkeg2022->satuan."</td>";
									// 	}
									// } else {
									// 	echo "<td></td><td></td><td></td>";
									// }

									// $tarkeg2023 = $this->db->where('id_programkerja', $rowprogramkerja->id);
									// $tarkeg2023 = $this->db->where('tahun', '2023');
									// $tarkeg2023 = $this->db->get('targetkegiatan')->result();

									// if (count($tarkeg2023) != 0) {
									// 	foreach ($tarkeg2023 as $rowtarkeg2023) {

									// 		echo "<td>".$rowtarkeg2023->pagu."</td>";
									// 		echo "<td>".$rowtarkeg2023->volume."</td>";
									// 		echo "<td>".$rowtarkeg2023->satuan."</td>";
									// 	}
									// } else {
									// 	echo "<td></td><td></td><td></td>";
									// }

									echo "<td></td>";
									echo "</tr>";
								}
							}
						}
					}
				}
			}
		?>
	</table>
</body>
<?php
	// $html = ob_get_contents();
	// ob_end_clean();
	        
	// require_once('html2pdf/html2pdf.class.php');
	// $pdf = new HTML2PDF('L','A4','en');
	// $pdf->WriteHTML($html);
	// $pdf->Output('Laporan-Absensi-'.date('d-m-Y').'.pdf', 'D');
?>  
