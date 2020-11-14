	
<?php if ($isi == 'list_user'){  ?>

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
                        DAFTAR NAMA - NAMA USER
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a href="<?php echo base_url('admin/user/tambah'); ?>" role="tab" class="nav-link active" id="tab-0" >
                <span>Tambah User</span>
            </a>
        </li>
    </ul>

	<div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <!-- <th>Nama Bidang</th> -->
                    <th>NIP</th>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
					<th>Role</th>
					<th width="200px">Option</th>
                </tr>
                </thead>
                <tbody>
                	<?php foreach ($user as $row){
                        echo "<tr>";
                        // echo "<td>".$row->nama."</td>";
                        echo "<td>".$row->nip."</td>";
                		echo "<td>".$row->nama_lengkap."</td>";
                		echo "<td>".$row->username."</td>";
                		echo "<td>".$row->role."</td>";
                        echo "<td><a href='".base_url('admin/user/reset/').$row->username."'>";
                		  echo "<button class='mb-2 mr-2 btn btn-shadow btn-warning'> Reset Password </button>";
                        echo "</a>";
                        echo "<a href='".base_url('admin/user/hapus/').$row->username."'>";
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
                        FORM PENAMBAHAN USER
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Silahkan Masukkan data di bawah ini untuk menambah user !</h5>
            <form method="post" action="<?php echo base_url('admin/user/tambah'); ?>" enctype="multipart/form-data">
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">NIP</label>
                    <input name="nip" id="exampleAddress" placeholder="Masukkan NIP . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Nama Lengkap</label>
                    <input name="nama_lengkap" id="exampleAddress" placeholder="Masukkan Nama Lengkap . . . " type="text" class="form-control">
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="exampleEmail11" class="">Username</label>
                            <input name="username" id="exampleEmail11" placeholder="Masukkan username . . . ." type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label for="examplePassword11" class="">Password</label>
                            <input name="password" id="examplePassword11" placeholder="Masukkan password . . . ." type="password" class="form-control">
                        </div>
                    </div>
                </div>
                <button name="btn" type="submit" style="width: 100%" class="mt-2 btn btn-primary" value="Tambah">Tambah User</button>
            </form>
        </div>
    </div>


<?php } ?>