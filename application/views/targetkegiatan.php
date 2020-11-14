	
<?php if ($isi == 'list_targetkegiatan'){  ?>

    <div>
        <div class="page-title-subheading opacity-10">
            <nav class="" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url('admin');?>">
                            <i aria-hidden="true" class="fa fa-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        DAFTAR TARGET KEGIATAN
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div id="pesan" value="coba"></div>

    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a href="<?php echo base_url('targetkegiatan/tambah'); ?>" role="tab" class="nav-link active" id="tab-0" >
                <span>Tambah Target Kegiatan</span>
            </a>
        </li>
    </ul>

	<div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>No. </th>
                    <th>Program Kerja</th>
					<th>Tahun</th>
                    <th>Pagu</th>
                    <th>Volume</th>
                    <th>Satuan</th>
					<th width="200px">Option</th>
                </tr>
                </thead>
                <tbody>
                	<?php $no = 1; foreach ($targetkegiatan as $row){
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row->keterangan."</td>";
                        echo "<td>".$row->tahun."</td>";
                		echo "<td>".$row->pagu."</td>";
                        echo "<td>".$row->volume."</td>";
                        echo "<td>".$row->satuan."</td>";
                        echo "<td><a href='".base_url('targetkegiatan/edit/').$row->id."'>";
                		  echo "<button class='mb-2 mr-2 btn btn-shadow btn-warning'> Edit </button>";
                        echo "</a>";
                        echo "<a href='".base_url('targetkegiatan/hapus/').$row->id."'>";
                		  echo "<button class='mb-2 mr-2 btn btn-shadow btn-danger'> Hapus </button>";
                        echo "</a></td>";
                        echo "</tr>";
                        $no++;
                	} ?>
                </tbody>
            </table>
        </div>
    </div>

<?php } elseif ($isi == 'tambah') { ?>

    <div>
        <div class="page-title-subheading opacity-10">
            <nav class="" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url('admin');?>">
                            <i aria-hidden="true" class="fa fa-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        FORM PENAMBAHAN Target Kegiatan
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Silahkan Masukkan data di bawah ini untuk menambah target kegiatan !</h5>
            <form method="post" action="<?php echo base_url('targetkegiatan/tambah'); ?>" enctype="multipart/form-data">

                <div class="position-relative form-group">
                    <label for="examplePassword11" class="">PROGRAM KERJA</label>
                    <?php 
                        $programkerja = $this->db->where('status', '1');
                        $programkerja = $this->db->get("programkerja")->result()
                    ?>
                    <select id="urusan" class="form-control action" name="programkerja">
                        <?php foreach ($programkerja as $row) {
                            echo "<option value='".$row->id."'>".$row->keterangan."</option>";
                        } ?>
                    </select>
                </div>

                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">TAHUN</label>
                    <select class="form-control" name="tahun">
                        <?php 
                            $periode = $this->db->get('periode')->result();
                            foreach ($periode as $row) {
                                echo "<option value='".$row->id_periode."'>".$row->periode."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">PAGU</label>
                    <input name="pagu" id="exampleAddress" placeholder="Masukkan Pagu . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">VOLUME</label>
                    <input name="volume" id="exampleAddress" placeholder="Masukkan Volume . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">SATUAN</label>
                    <input name="satuan" id="exampleAddress" placeholder="Masukkan Satuan . . . " type="text" class="form-control">
                </div>
                <button name="btn" type="submit" style="width: 100%" class="mt-2 btn btn-primary" value="Tambah">Tambah Indikator Kinerja</button>
            </form>
        </div>
    </div>


<?php } elseif ($isi == 'edit') { ?>

    <div>
        <div class="page-title-subheading opacity-10">
            <nav class="" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url('admin');?>">
                            <i aria-hidden="true" class="fa fa-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        FORM UPDATE DATA Target Kegiatan
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Silahkan Update data di bawah ini untuk mengedit !</h5>
            <form method="post" action="<?php echo base_url('targetkegiatan/edit/'.$data->id); ?>" enctype="multipart/form-data">
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Program Kerja</label>
                    <?php 
                        $programkerja = $this->db->where('status', '1');
                        $programkerja = $this->db->get("programkerja")->result()
                    ?>
                    <select class="form-control" name="programkerja">
                        <?php foreach ($programkerja as $row) {
                            echo "<option ";
                            if ($data->id_programkerja == $row->id) {
                                echo "selected";
                            }
                            echo " value='".$row->id."'>".$row->keterangan."</option>";
                        } ?>
                    </select>
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">TAHUN</label>
                    <select class="form-control" name="tahun">
                        <?php 
                            $periode = $this->db->get('periode')->result();
                            foreach ($periode as $row) {
                                echo "<option ";
                                if ($row->id_periode == $data->id_periode) {
                                    echo "selected";
                                }
                                echo " value='".$row->id_periode."'>".$row->periode."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">PAGU</label>
                    <input value="<?php echo $data->pagu; ?>" name="pagu" id="exampleAddress" placeholder="Masukkan Pagu . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">VOLUME</label>
                    <input value="<?php echo $data->volume; ?>" name="volume" id="exampleAddress" placeholder="Masukkan Volume . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">SATUAN</label>
                    <input value="<?php echo $data->satuan; ?>" name="satuan" id="exampleAddress" placeholder="Masukkan Satuan . . . " type="text" class="form-control">
                </div>
                <button name="btn" type="submit" style="width: 100%" class="mt-2 btn btn-primary" value="Tambah">Update targetkegiatan</button>
            </form>
        </div>
    </div>


<?php } ?>