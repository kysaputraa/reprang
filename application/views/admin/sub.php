    
<?php if ($isi == 'list_sub'){  ?>

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
                        DAFTAR SUB KEGIATAN
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div id="pesan" value="coba"></div>

    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a href="<?php echo base_url('admin/sub/tambah'); ?>" role="tab" class="nav-link active" id="tab-0" >
                <span>Tambah Sub</span>
            </a>
        </li>
    </ul>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>Nama Sub Kegiatan</th>
                    <th width="200px">Option</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($sub as $row){
                        echo "<tr>";
                        echo "<td>".$row->nama_sub."</td>";
                        echo "<td><a href='".base_url('admin/sub/edit/').$row->id_sub."'>";
                          echo "<button class='mb-2 mr-2 btn btn-shadow btn-warning'> Edit </button>";
                        echo "</a>";
                        echo "<a href='".base_url('admin/sub/hapus/').$row->id_sub."'>";
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
                        FORM PENAMBAHAN SUB
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Silahkan Masukkan data di bawah ini untuk menambah sub !</h5>
            <form method="post" action="<?php echo base_url('admin/sub/tambah'); ?>" enctype="multipart/form-data">                
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Kegiatan</label>
                    <?php 
                        $kegiatan = $this->db->get("kegiatan")->result()
                    ?>
                    <select class="form-control" name="kegiatan">
                        <?php foreach ($kegiatan as $row) {
                            echo "<option value='".$row->id_kegiatan."'>".$row->nama_kegiatan."</option>";
                        } ?>
                    </select>
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Nama Sub</label>
                    <input name="nama_sub" id="exampleAddress" placeholder="Masukkan Nama sub . . . " type="text" class="form-control">
                </div>
                <button name="btn" type="submit" style="width: 100%" class="mt-2 btn btn-primary" value="Tambah">Tambah sub</button>
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
                        FORM UPDATE DATA SUB
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Silahkan Update data di bawah ini untuk mengedit !</h5>
            <form method="post" action="<?php echo base_url('admin/sub/edit/'.$data->id_sub); ?>" enctype="multipart/form-data">
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Nama Sub</label>
                    <input value="<?php echo $data->nama_sub ?>" name="nama_sub" id="exampleAddress" placeholder="Masukkan Nama sub . . . " type="text" class="form-control">
                </div>
                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Kegiatan</label>
                    <?php 
                        $kegiatan = $this->db->get("kegiatan")->result();
                    ?>
                    <select class="form-control" name="kegiatan">
                        <?php foreach ($kegiatan as $row) {
                            echo "<option ";
                            if ($data->id_kegiatan == $row->id_kegiatan) {
                                echo "selected";
                            }
                            echo " value='".$row->id_kegiatan."'>".$row->nama_kegiatan."</option>";
                        } ?>
                    </select>
                </div>
                <button name="btn" type="submit" style="width: 100%" class="mt-2 btn btn-primary" value="Tambah">Update sub</button>
            </form>
        </div>
    </div>


<?php } ?>