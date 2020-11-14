	
<?php if ($isi == 'list_bidang'){  ?>

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
                        DAFTAR BIDANG
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div id="pesan" value="coba"></div>

    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a href="<?php echo base_url('admin/bidang/tambah'); ?>" role="tab" class="nav-link active" id="tab-0" >
                <span>Tambah Bidang</span>
            </a>
        </li>
    </ul>

	<div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>Nama Urusan</th>
					<th>Nama Bidang</th>
					<th width="200px">Option</th>
                </tr>
                </thead>
                <tbody>
                	<?php foreach ($bidang as $row){
                        echo "<tr>";
                        echo "<td>".$row->nama_urusan."</td>";
                		echo "<td>".$row->nama_bidang."</td>";
                        echo "<td><a href='".base_url('admin/bidang/edit/').$row->id_bidang."'>";
                		  echo "<button class='mb-2 mr-2 btn btn-shadow btn-warning'> Edit </button>";
                        echo "</a>";
                        echo "<a href='".base_url('admin/bidang/hapus/').$row->id_bidang."'>";
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
                        FORM PENAMBAHAN BIDANG
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Silahkan Masukkan data di bawah ini untuk menambah bidang !</h5>
            <form method="post" action="<?php echo base_url('admin/bidang/tambah'); ?>" enctype="multipart/form-data">
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Nama Urusan</label>
                    <?php 
                        $urusan = $this->db->get("urusan")->result()
                    ?>
                    <select class="form-control" name="urusan">
                        <?php foreach ($urusan as $row) {
                            echo "<option value='".$row->id_urusan."'>".$row->nama_urusan."</option>";
                        } ?>
                    </select>
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Nama Bidang</label>
                    <input name="nama_bidang" id="exampleAddress" placeholder="Masukkan Nama bidang . . . " type="text" class="form-control">
                </div>
                <button name="btn" type="submit" style="width: 100%" class="mt-2 btn btn-primary" value="Tambah">Tambah bidang</button>
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
                        FORM UPDATE DATA BIDANG
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Silahkan Update data di bawah ini untuk mengedit !</h5>
            <form method="post" action="<?php echo base_url('admin/bidang/edit/'.$data->id_bidang); ?>" enctype="multipart/form-data">
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Nama Urusan</label>
                    <?php 
                        $urusan = $this->db->get("urusan")->result()
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
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Nama Bidang</label>
                    <input value="<?php echo $data->nama_bidang ?>" name="nama_bidang" id="exampleAddress" placeholder="Masukkan Nama bidang . . . " type="text" class="form-control">
                </div>
                <button name="btn" type="submit" style="width: 100%" class="mt-2 btn btn-primary" value="Tambah">Update Bidang</button>
            </form>
        </div>
    </div>


<?php } ?>