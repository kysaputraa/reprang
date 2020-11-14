                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                        <img width="42" class="rounded-circle" src="<?php echo base_url('img/orang.png'); ?>" alt="">
                                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                    </a>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-info">
                                                <div class="menu-header-image opacity-2" ></div>
                                                <div class="menu-header-content text-left">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="<?php echo base_url('img/orang.png'); ?>" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading"><?php echo $this->session->userdata('username'); ?>
                                                                </div>
                                                                <div class="widget-subheading opacity-8">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-right mr-2">
                                                                <a href="<?php echo base_url('admin/welcome/logout'); ?>">
                                                                    <button class="btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                                </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                            $this->db->select('*');
                                            $this->db->from('user');
                                            $this->db->where('id', $this->session->userdata('id'));
                                            $datalogin = $this->db->get()->row();
                                        ?>
                                        <div class="scroll-area-xs" style="height: 150px;">
                                            <div class="scrollbar-container ps">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-header nav-item">Data
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Nama Lengkap
                                                            <div class="ml-auto badge badge-pill badge-info"><?php echo $datalogin->nama_lengkap; ?>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Role
                                                            <div class="ml-auto badge badge-pill badge-info"><?php echo $datalogin->role; ?>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item-divider nav-item">
                                            </li>
                                            <li class="nav-item-btn text-center nav-item">
                                                <button class="btn-wide btn btn-primary btn-sm">
                                                    Tutup
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left  ml-3 header-user-info">
                                <div class="widget-heading">
                                    <?php echo $this->session->userdata('role'); ?>
                                </div>
                                <div class="widget-subheading">
                                    Selamat Datang !
                                </div>
                            </div>
                        </div>
                    </div>
                </div>