<div class="col-sm-12 col-lg-6">
    <div class="card-hover-shadow-2x mb-3 card">
        <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                <i class="header-icon lnr-lighter icon-gradient bg-amy-crisp"></i>
                Data User
            </div>
            <!-- <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                <div class="btn-group dropdown">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                        <i class="pe-7s-menu btn-icon-wrapper"></i>
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                        <button type="button" tabindex="0" class="dropdown-item">
                            <i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                        </button>
                        <button type="button" tabindex="0" class="dropdown-item">
                            <i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                        </button>
                        <button type="button" tabindex="0" class="dropdown-item">
                            <i class="dropdown-icon lnr-book"> </i><span>Actions</span>
                        </button>
                        <div tabindex="-1" class="dropdown-divider"></div>
                        <div class="p-3 text-right">
                            <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                            <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="scroll-area-lg">
            <div class="scrollbar-container ps ps--active-y">
                <div class="p-4">
                    <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                            <div>
                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title">Nama : <?php echo $profile->nama_lengkap; ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                            <div>
                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <p>
                                        NIP :<?php echo $profile->nip; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                            <div>
                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                <div class="vertical-timeline-element-content bounce-in">
                                    <h4 class="timeline-title">Role : <?php echo $profile->role; ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 197px;"></div>
                </div>
            </div>
        </div>
        <div class="d-block text-center card-footer">
            <button class="btn-shadow btn-wide btn-pill btn btn-focus">
                <!-- <span class="badge badge-dot badge-dot-lg badge-warning badge-pulse">Badge</span> -->
                Edit
            </button>
        </div>
    </div>
</div>