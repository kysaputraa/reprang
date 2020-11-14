	
<?php if ($isi == 'list_urusan'){  ?>

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
                        DAFTAR URUSAN
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div id="pesan" value="coba"></div>

    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a href="<?php echo base_url('admin/urusan/tambah'); ?>" role="tab" class="nav-link active" id="tab-0" >
                <span>Tambah Urusan</span>
            </a>
        </li>
    </ul>

	<div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
					<th>Nama Urusan</th>
					<th width="200px">Option</th>
                </tr>
                </thead>
                <tbody>
                	<?php foreach ($urusan as $row){
                        echo "<tr>";
                		echo "<td>".$row->nama_urusan."</td>";
                        echo "<td><a href='".base_url('admin/urusan/edit/').$row->id_urusan."'>";
                		  echo "<button class='mb-2 mr-2 btn btn-shadow btn-warning'> Edit </button>";
                        echo "</a>";
                        echo "<a href='".base_url('admin/urusan/hapus/').$row->id_urusan."'>";
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
                        FORM PENAMBAHAN URUSAN
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Silahkan Masukkan data di bawah ini untuk menambah urusan !</h5>
            <form method="post" action="<?php echo base_url('admin/urusan/tambah'); ?>" enctype="multipart/form-data">
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Nama Urusan</label>
                    <input name="nama_urusan" id="exampleAddress" placeholder="Masukkan Nama Urusan . . . " type="text" class="form-control">
                </div>
                <!-- <div class="position-relative form-group"><label for="exampleAddress2" class="">Address 2</label><input name="address2" id="exampleAddress2" placeholder="Apartment, studio, or floor" type="text" class="form-control"> -->
                <!-- </div> -->
                <!-- 3 row input -->
                <!-- <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="exampleCity" class="">City</label>
                            <input name="city" id="exampleCity" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="exampleState" class="">State</label>
                            <input name="state" id="exampleState" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="position-relative form-group">
                            <label for="exampleZip" class="">Zip</label>
                            <input name="zip" id="exampleZip" type="text" class="form-control">
                        </div>
                    </div>
                </div> -->
                <!-- <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Check me out</label></div> -->
                <button name="btn" type="submit" style="width: 100%" class="mt-2 btn btn-primary" value="Tambah">Tambah urusan</button>
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
                        FORM UPDATE DATA URUSAN
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Silahkan Update data di bawah ini untuk mengedit !</h5>
            <form method="post" action="<?php echo base_url('admin/urusan/edit/'.$data->id_urusan); ?>" enctype="multipart/form-data">
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Nama Urusan</label>
                    <input value="<?php echo $data->nama_urusan ?>" name="nama_urusan" id="exampleAddress" placeholder="Masukkan Nama urusan . . . " type="text" class="form-control">
                </div>
                <!-- <div class="position-relative form-group"><label for="exampleAddress2" class="">Address 2</label><input name="address2" id="exampleAddress2" placeholder="Apartment, studio, or floor" type="text" class="form-control"> -->
                <!-- </div> -->
                <!-- 3 row input -->
                <!-- <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="exampleCity" class="">City</label>
                            <input name="city" id="exampleCity" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label for="exampleState" class="">State</label>
                            <input name="state" id="exampleState" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="position-relative form-group">
                            <label for="exampleZip" class="">Zip</label>
                            <input name="zip" id="exampleZip" type="text" class="form-control">
                        </div>
                    </div>
                </div> -->
                <!-- <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Check me out</label></div> -->
                <button name="btn" type="submit" style="width: 100%" class="mt-2 btn btn-primary" value="Tambah">Update Urusan</button>
            </form>
        </div>
    </div>


<?php } ?>