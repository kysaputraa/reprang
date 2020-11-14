            <?php 
                $target    = array('targetkegiatan', 'programkerja', 'pending');
                $laporan   = array('lap_mat', 'lap_keg');
            ?>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Menu</li>
                            <li 
                                <?php 
                                if (in_array($this->uri->segment(1), $target)) {
                                    echo "class='mm-active'";
                                }
                                ?>
                            >
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    TARGET
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url('programkerja'); ?>" <?php if ($this->uri->segment(1) == "programkerja" AND $this->uri->segment(2) == "") { echo "class='mm-active'"; } ?> >
                                            <i class="metismenu-icon">
                                            </i>PROGRAM KERJA
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('targetkegiatan'); ?>" <?php if ($this->uri->segment(1) == "targetkegiatan") { echo "class='mm-active'"; } ?> >
                                            <i class="metismenu-icon">
                                            </i>INDIKATOR KINERJA
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('programkerja/pending'); ?>" <?php if ($this->uri->segment(2) == "pending") { echo "class='mm-active'"; } ?> >
                                            <i class="metismenu-icon">
                                            </i>PENDING
                                            <?php 
                                                $this->db->where('status', 0);
                                                $pending = $this->db->get_where('programkerja', array('id_user' => $this->session->userdata('id') ))->num_rows();
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
                                                <a target="_blank" href="<?php echo base_url('lap_mat/laporan/print'); ?>">
                                                    <i class="metismenu-icon">
                                                    </i>Print
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url('lap_mat/laporan/excel'); ?>">
                                                    <i class="metismenu-icon">
                                                    </i>Excel
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-plugin"></i>
                                    PROFIL
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url('profile'); ?>">
                                            <i class="metismenu-icon">
                                            </i>USER
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                </div>