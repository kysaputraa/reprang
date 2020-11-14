	
<div id="dataalert" value="<?php echo $this->session->flashdata('msg'); ?>"></div>

<?php if ($isi == 'list_pptk'){  ?>

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
                        DAFTAR NAMA - NAMA PPTK
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div id="pesan" value="coba"></div>

    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a href="<?php echo base_url('admin/pptk/tambah'); ?>" role="tab" class="nav-link active" id="tab-0" >
                <span>Tambah pptk</span>
            </a>
            <!-- <button type="button" data-type="success" class="asas">Show Alert</button> -->
            <div id="asd" value="sukses"></div>
        </li>
    </ul>

	<div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>NIP</th>
					<th>Nama Lengkap</th>
					<th width="200px">Option</th>
                </tr>
                </thead>
                <tbody>
                	<?php foreach ($pptk as $row){
                        echo "<tr>";
                		echo "<td>".$row->nip."</td>";
                		echo "<td>".$row->nama_lengkap."</td>";
                        echo "<td><a href='".base_url('admin/pptk/edit/').$row->id."'>";
                		  echo "<button class='mb-2 mr-2 btn btn-shadow btn-warning'> Edit </button>";
                        echo "</a>";
                        echo "<a href='".base_url('admin/pptk/hapus/').$row->id."'>";
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
                        FORM PENAMBAHAN PPTK
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Silahkan Masukkan data di bawah ini untuk menambah PPTK !</h5>
            <form method="post" action="<?php echo base_url('admin/pptk/tambah'); ?>" enctype="multipart/form-data">
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">NIP</label>
                    <input name="nip" id="exampleAddress" placeholder="Masukkan NIP . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Nama Lengkap</label>
                    <input name="nama_lengkap" id="exampleAddress" placeholder="Masukkan Nama Lengkap . . . " type="text" class="form-control">
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
                <button name="btn" type="submit" style="width: 100%" class="mt-2 btn btn-primary" value="Tambah">Tambah pptk</button>
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
                        FORM UPDATE DATA PPTK
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Silahkan Update data di bawah ini untuk mengedit !</h5>
            <form method="post" action="<?php echo base_url('admin/pptk/edit/'.$data->id); ?>" enctype="multipart/form-data">
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">NIP</label>
                    <input value="<?php echo $data->nip ?>" name="nip" id="exampleAddress" placeholder="Masukkan NIP . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Nama Lengkap</label>
                    <input value="<?php echo $data->nama_lengkap ?>" name="nama_lengkap" id="exampleAddress" placeholder="Masukkan Nama Lengkap . . . " type="text" class="form-control">
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
                <button name="btn" type="submit" style="width: 100%" class="mt-2 btn btn-primary" value="Tambah">Update PPTK</button>
            </form>
        </div>
    </div>


<?php } ?>