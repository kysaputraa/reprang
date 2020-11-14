                <?php 
                    $master         = array('user', 'bidang_opd', 'pptk', 'periode', 'urusan', 'bidang', 'program', 'kegiatan', 'sub');
                    $programkerja   = array('programkerja');
                    $laporan        = array('lap_mat', 'lap_keg');
                ?>
                
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Menu</li>
                            <li 
                                <?php 
                                if (in_array($this->uri->segment(2), $master)) {
                                    echo "class='mm-active'";
                                }
                                ?>
                            >
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    Master
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url('admin/user'); ?>" <?php if ($this->uri->segment(2) == "user") { echo "class='mm-active'";} ?>>
                                            <i class="metismenu-icon">
                                            </i>USER
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="<?php echo base_url('admin/bidang_opd'); ?>" <?php if ($this->uri->segment(2) == "bidang_opd") { echo "class='mm-active'";} ?>>
                                            <i class="metismenu-icon">
                                            </i>BIDANG OPD
                                        </a>
                                    </li> -->
                                    <!-- <li>
                                        <a href="<?php echo base_url('admin/pptk'); ?>" <?php if ($this->uri->segment(2) == "pptk") { echo "class='mm-active'";} ?>>
                                            <i class="metismenu-icon">
                                            </i>PPTK
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="<?php echo base_url('admin/periode'); ?>" <?php if ($this->uri->segment(2) == "periode") { echo "class='mm-active'";} ?>>
                                            <i class="metismenu-icon"></i>
                                            PERIODE TAHUN
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/urusan'); ?>" <?php if ($this->uri->segment(2) == "urusan") { echo "class='mm-active'";} ?>>
                                            <i class="metismenu-icon"></i>
                                            URUSAN
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/bidang'); ?>" <?php if ($this->uri->segment(2) == "bidang") { echo "class='mm-active'";} ?>>
                                            <i class="metismenu-icon"></i>
                                            BIDANG URUSAN
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/program'); ?>" <?php if ($this->uri->segment(2) == "program") { echo "class='mm-active'";} ?>>
                                            <i class="metismenu-icon"></i>
                                            PROGRAM
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/kegiatan'); ?>" <?php if ($this->uri->segment(2) == "kegiatan") { echo "class='mm-active'";} ?>>
                                            <i class="metismenu-icon"></i>
                                            KEGIATAN
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/sub'); ?>" <?php if ($this->uri->segment(2) == "sub") { echo "class='mm-active'";} ?>>
                                            <i class="metismenu-icon"></i>
                                            SUB KEGIATAN
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li
                                <?php 
                                if (in_array($this->uri->segment(2), $programkerja)) {
                                    echo "class='mm-active'";
                                }
                                ?>
                            >
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-browser"></i>
                                    Program Kerja
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url('admin/programkerja'); ?>" <?php if ($this->uri->segment(2) == "programkerja" AND $this->uri->segment(3) == '') { echo "class='mm-active'";} ?>>
                                            <i class="metismenu-icon"></i>
                                            Daftar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/programkerja/pending'); ?>" <?php if ($this->uri->segment(3) == "pending") { echo "class='mm-active'";} ?>>
                                            <i class="metismenu-icon">
                                            </i>Pending
                                            <?php 
                                                $this->db->where('status', 0);
                                                $pending = $this->db->get('programkerja')->num_rows();
                                                if ($pending > 0) {
                                                    echo "<span class='badge badge-pill badge-danger ml-0 mr-2'>".$pending."</span>";
                                                }
                                            ?>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li 
                                <?php 
                                if (in_array($this->uri->segment(1), $laporan)) {
                                    echo "class='mm-active'";
                                }
                                ?>
                            >
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-browser"></i>
                                    LAPORAN
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <!-- <li>
                                        <a href="<?php echo base_url('lap_keg'); ?>" <?php if ($this->uri->segment(1) == "lap_keg") { echo "class='mm-active'"; } ?> >
                                            <i class="metismenu-icon"></i>
                                            LAPORAN KEGIATAN
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="#" <?php if ($this->uri->segment(1) == "lap_mat") { echo "class='mm-active'"; } ?> >
                                            <i class="metismenu-icon">
                                            </i>LAPORAN MATRIK
                                        </a>
                                        <ul>
                                            <li>
                                                <a target="_blank" href="<?php echo base_url('admin/lap_mat/laporan/print'); ?>">
                                                    <i class="metismenu-icon">
                                                    </i>Print
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('admin/lap_mat/laporan/excel'); ?>">
                                                    <i class="metismenu-icon">
                                                    </i>Excel
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>