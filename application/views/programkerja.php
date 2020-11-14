	
<?php if ($isi == 'list_programkerja'){  ?>

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
                        DAFTAR PROGRAM KERJA
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div id="pesan" value="coba"></div>

    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a href="<?php echo base_url('programkerja/tambah'); ?>" role="tab" class="nav-link active" id="tab-0" >
                <span>Tambah Program Kerja</span>
            </a>
        </li>
    </ul>

	<div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
					<th>Kegiatan</th>
                    <th>Sub Kegiatan</th>
                    <th>Keterangan</th>
					<th width="200px">Option</th>
                </tr>
                </thead>
                <tbody>
                	<?php $no = 1; foreach ($programkerja as $row){
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row->nama_kegiatan."</td>";
                        echo "<td>".$row->nama_sub."</td>";
                		echo "<td>".$row->keterangan."</td>";
                        echo "<td><a href='".base_url('programkerja/edit/').$row->id."'>";
                		  echo "<button class='mb-2 mr-2 btn btn-shadow btn-warning'> Edit </button>";
                        echo "</a>";
                        echo "<a href='".base_url('programkerja/hapus/').$row->id."'>";
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
                        FORM PENAMBAHAN PROGRAM KERJA
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Silahkan Masukkan data di bawah ini untuk menambah programkerja !</h5>
            <form method="post" action="<?php echo base_url('programkerja/tambah'); ?>" enctype="multipart/form-data">
                <!-- <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="examplePassword11" class="">URUSAN</label>
                            <?php 
                                $urusan = $this->db->get("urusan")->result();
                            ?>
                            <select id="urusan" class="form-control action" name="urusan">
                                <?php foreach ($urusan as $row) {
                                    echo "<option value='".$row->id_urusan."'>".$row->nama_urusan."</option>";
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="examplePassword11" class="">BIDANG</label>
                            <?php 
                                $bidang = $this->db->get("bidang")->result()
                            ?>
                            <select id="bidang" class="form-control action" name="bidang">
                                <?php foreach ($bidang as $row) {
                                    echo "<option value='".$row->id_bidang."'>".$row->nama_bidang."</option>";
                                } ?>
                            </select>
                        </div>
                    </div>
                </div> -->
                <div class="form-row">
                    <!-- <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="examplePassword11" class="">PROGRAM</label>
                            <?php 
                                $program = $this->db->get("program")->result()
                            ?>
                            <select id="program" class="form-control action" name="program">
                               <?php foreach ($program as $row) {
                                    echo "<option value='".$row->id_program."'>".$row->nama_program."</option>";
                                } ?>
                            </select>
                        </div>
                    </div> -->
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="examplePassword11" class="">KEGIATAN <?php echo $this->session->userdata('id'); ?></label>
                            <?php 
                                $kegiatan = $this->db->where('id_pptk' , $this->session->userdata('id'));
                                $kegiatan = $this->db->get("kegiatan")->result()
                            ?>
                            <select required id="kegiatan" class="form-control action" name="kegiatan">
                                <option>- Select Kegiatan -</option>
                                <?php foreach ($kegiatan as $row) {
                                    echo "<option value='".$row->id_kegiatan."'>".$row->nama_kegiatan."</option>";
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="exampleAddress" class="">SUB KEGIATAN</label>
                            <?php 
                                $sub = $this->db->get("sub")->result()
                            ?>
                            <select required id="sub" class="form-control action" name="sub">
                                <!-- <?php foreach ($sub as $row) {
                                    echo "<option value='".$row->id_sub."'>".$row->nama_sub."</option>";
                                } ?> -->
                            </select>
                        </div>
                    </div>
                </div>
                <!-- <div class="position-relative form-group">
                    <label for="exampleAddress" class="">SUB KEGIATAN</label>
                    <?php 
                        $sub = $this->db->get("sub")->result()
                    ?>
                    <select id="sub" class="form-control action" name="sub">
                        <?php foreach ($sub as $row) {
                            echo "<option value='".$row->id_sub."'>".$row->nama_sub."</option>";
                        } ?>
                    </select>
                </div> -->
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">KETERANGAN</label>
                    <input required name="keterangan" id="exampleAddress" placeholder="Masukkan Keterangan . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">VOLUME</label>
                    <input name="volume" id="exampleAddress" placeholder="Masukkan Volume . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">URAIAN</label>
                    <input name="uraian" id="exampleAddress" placeholder="Masukkan Uraian . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">SATUAN</label>
                    <input name="satuan" id="exampleAddress" placeholder="Masukkan Satuan . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">KONDISI</label>
                    <input name="kondisiawal" id="exampleAddress" placeholder="Masukkan Kondisi Awal . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">PERMASALAHAN</label>
                    <input name="permasalahan" id="exampleAddress" placeholder="Masukkan Permasalahan . . . " type="text" class="form-control">
                </div>
                <button name="btn" type="submit" style="width: 100%" class="mt-2 btn btn-primary" value="Tambah">Tambah Program Kerja</button>
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
                        FORM UPDATE PROGRAM KERJA
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Silahkan Masukkan data di bawah ini untuk menambah programkerja !</h5>
            <form method="post" action="<?php echo base_url('programkerja/edit/').$data->id; ?>" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="examplePassword11" class="">KEGIATAN <?php echo $this->session->userdata('id'); ?></label>
                            <?php 
                                $kegiatan = $this->db->where('id_pptk' , $this->session->userdata('id'));
                                $kegiatan = $this->db->where('id_kegiatan !=' , $data->id_kegiatan);
                                $kegiatan = $this->db->get("kegiatan")->result();

                                $getkeg   = $this->db->get_where("kegiatan", array('id_kegiatan' => $data->id_kegiatan))->row();
                            ?>
                            <select required id="kegiatan" class="form-control action" name="kegiatan">
                                <option>- Select Kegiatan -</option>
                                <?php foreach ($kegiatan as $row) {
                                    echo "<option value='".$row->id_kegiatan."'>".$row->nama_kegiatan."</option>";
                                } ?>
                                    <option selected value="<?php echo $getkeg->id_kegiatan ?>"><?php echo $getkeg->nama_kegiatan ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="exampleAddress" class="">SUB KEGIATAN</label>
                            <?php 
                                $sub    = $this->db->get("sub")->result();
                                $getsub = $this->db->get_where("sub", array('id_sub' => $data->id_sub))->row();
                            ?>
                            <select required id="sub" class="form-control action" name="sub">
                                <option value="<?php echo $getsub->id_sub ?>"><?php echo $getsub->nama_sub ?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">KETERANGAN</label>
                    <input value="<?php echo $data->keterangan; ?>" required name="keterangan" id="exampleAddress" placeholder="Masukkan Keterangan . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">VOLUME</label>
                    <input value="<?php echo $data->volume; ?>" name="volume" id="exampleAddress" placeholder="Masukkan Volume . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">URAIAN</label>
                    <input value="<?php echo $data->uraian; ?>" name="uraian" id="exampleAddress" placeholder="Masukkan Uraian . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">SATUAN</label>
                    <input value="<?php echo $data->satuan; ?>" name="satuan" id="exampleAddress" placeholder="Masukkan Satuan . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">KONDISI AWAL</label>
                    <input value="<?php echo $data->kondisi_awal; ?>" name="kondisiawal" id="exampleAddress" placeholder="Masukkan Kondisi Awal . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">PERMASALAHAN</label>
                    <input value="<?php echo $data->permasalahan; ?>" name="permasalahan" id="exampleAddress" placeholder="Masukkan Permasalahan . . . " type="text" class="form-control">
                </div>
                <button name="btn" type="submit" style="width: 100%" class="mt-2 btn btn-primary" value="Tambah">Update Program Kerja</button>
            </form>
        </div>
    </div>

<?php } elseif ($isi == 'list_unprogramkerja'){  ?>

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
                        DAFTAR PROGRAM KERJA
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div id="pesan" value="coba"></div>

    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a href="<?php echo base_url('programkerja/tambah'); ?>" role="tab" class="nav-link active" id="tab-0" >
                <span>Tambah Program Kerja</span>
            </a>
        </li>
    </ul>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Keterangan</th>
                    <th>Sub Kegiatan</th>
                    <th width="200px">Option</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($programkerja as $row){
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row->keterangan."</td>";
                        echo "<td>".$row->nama_sub."</td>";
                        echo "<td>";
                        echo "<a href='".base_url('programkerja/hapus/').$row->id."'>";
                          echo "<button class='mb-2 mr-2 btn btn-shadow btn-danger'> Hapus </button>";
                        echo "</a></td>";
                        echo "</tr>";
                        $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

<?php } ?>


<script>
  $(document).ready(function(){
    $('.action').change(function(){
      if($(this).val() != ''){
        var action = $(this).attr("id");
        var query = $(this).val();
        var result = '';
        if(action == "urusan"){
          result = 'bidang';
          $('#program').html('');
          $('#kegiatan').html('');
          $('#sub').html('');
        }
        else if (action == "bidang"){
          result = 'program';
          $('#kegiatan').html('');
          $('#sub').html('');
        }
        else if (action == "program"){
          result = 'kegiatan';
          $('#sub').html('');
        }
        else if (action == "kegiatan"){
          result = 'sub';
        }
        $.ajax({
        url: '<?php echo base_url('programkerja/fetch'); ?>',
        method:"POST",
        data: {  action:action, query:query},
                success:function(data){
                $('#'+result).html(data);
              }
        })
      }
    });
  });
</script>