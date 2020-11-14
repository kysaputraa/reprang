	
<?php if ($isi == 'list_program'){  ?>

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
                        DAFTAR PROGRAM
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div id="pesan" value="coba"></div>

    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a href="<?php echo base_url('admin/program/tambah'); ?>" role="tab" class="nav-link active" id="tab-0" >
                <span>Tambah Program</span>
            </a>
        </li>
    </ul>

	<div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
					<th>Nama Program</th>
                    <!-- <th>Nama Urusan</th> -->
                    <th>Nama Bidang</th>
					<th width="200px">Option</th>
                </tr>
                </thead>
                <tbody>
                	<?php foreach ($program as $row){
                        echo "<tr>";
                		echo "<td>".$row->nama_program."</td>";
                        // echo "<td>".$row->nama_urusan."</td>";
                        echo "<td>".$row->nama_bidang."</td>";
                        echo "<td><a href='".base_url('admin/program/edit/').$row->id_program."'>";
                		  echo "<button class='mb-2 mr-2 btn btn-shadow btn-warning'> Edit </button>";
                        echo "</a>";
                        echo "<a href='".base_url('admin/program/hapus/').$row->id_program."'>";
                		  echo "<button class='mb-2 mr-2 btn btn-shadow btn-danger'> Hapus </button>";
                        echo "</a></td>";
                        echo "</tr>";
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
                        FORM PENAMBAHAN PROGRAM
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Silahkan Masukkan data di bawah ini untuk menambah program !</h5>
            <form method="post" action="<?php echo base_url('admin/program/tambah'); ?>" enctype="multipart/form-data">
                <!-- <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="exampleEmail11" class="">Urusan</label>
                            <?php 
                                $urusan = $this->db->get("urusan")->result()
                            ?>
                            <select class="form-control" name="urusan">
                                <?php foreach ($urusan as $row) {
                                    echo "<option value='".$row->id_urusan."'>".$row->nama_urusan."</option>";
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleEmail11" class="">Bidang</label>
                            <?php 
                                $bidang = $this->db->get("bidang")->result()
                            ?>
                            <select class="form-control" name="bidang">
                                <?php foreach ($bidang as $row) {
                                    echo "<option value='".$row->id_bidang."'>".$row->nama_bidang."</option>";
                                } ?>
                            </select>
                    </div>
                </div> -->
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Nama Bidang</label>
                    <?php 
                        $bidang = $this->db->get("bidang")->result()
                    ?>
                    <select class="form-control" name="bidang">
                        <?php foreach ($bidang as $row) {
                            echo "<option value='".$row->id_bidang."'>".$row->nama_bidang."</option>";
                        } ?>
                    </select>
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Nama Program</label>
                    <input name="nama_program" id="exampleAddress" placeholder="Masukkan Nama program . . . " type="text" class="form-control">
                </div>
                <button name="btn" type="submit" style="width: 100%" class="mt-2 btn btn-primary" value="Tambah">Tambah program</button>
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
                        FORM UPDATE DATA PROGRAM
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Silahkan Update data di bawah ini untuk mengedit !</h5>
            <form method="post" action="<?php echo base_url('admin/program/edit/'.$data->id_program); ?>" enctype="multipart/form-data">
                <!-- <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="exampleEmail11" class="">Urusan</label>
                            <?php 
                                $urusan = $this->db->get("urusan")->result();
                            ?>
                            <select class="form-control" name="urusan">
                                <?php foreach ($urusan as $row) {
                                    echo "<option ";
                                    if ($data->id_urusan == $row->id_urusan) {
                                        echo "selected";
                                    }
                                    echo " value='".$row->id_urusan."'>".$row->nama_urusan."</option>";
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="exampleEmail11" class="">Bidang</label>
                            <?php 
                                $bidang = $this->db->get("bidang")->result()
                            ?>
                            <select class="form-control" name="bidang">
                                <?php foreach ($bidang as $row) {
                                    echo "<option ";
                                    if ($data->id_bidang == $row->id_bidang) {
                                        echo "selected";
                                    }
                                    echo " value='".$row->id_bidang."'>".$row->nama_bidang."</option>";
                                } ?>
                            </select>
                    </div>
                </div> -->
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Nama Bidang</label>
                    <?php 
                        $bidang = $this->db->get("bidang")->result()
                    ?>
                    <select class="form-control" name="bidang">
                        <?php foreach ($bidang as $row) {
                            echo "<option ";
                            if ($data->id_bidang == $row->id_bidang) {
                                echo "selected";
                            }
                            echo " value='".$row->id_bidang."'>".$row->nama_bidang."</option>";
                        } ?>
                    </select>
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Nama Program</label>
                    <input value="<?php echo $data->nama_program ?>" name="nama_program" id="exampleAddress" placeholder="Masukkan Nama program . . . " type="text" class="form-control">
                </div>
                <button name="btn" type="submit" style="width: 100%" class="mt-2 btn btn-primary" value="Tambah">Update Program</button>
            </form>
        </div>
    </div>


<?php } ?>