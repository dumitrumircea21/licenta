<div class="card-list">
    <div class="card-list-head">
        <h6>This week</h6>
        <div class="dropdown">
            <button class="btn-options" type="button" id="cardlist-dropdown-button-1"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">more_vert</i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Rename</a>
                <a class="dropdown-item text-danger" href="#">Archive</a>
            </div>
        </div>
    </div>
    <div class="card-list-body filter-list-1535824358911">

        <?php foreach ($contests as $contest): ?>
            <div class="card card-task">
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar"
                         style="width: 90%" aria-valuenow="25" aria-valuemin="0"
                         aria-valuemax="100"></div>
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <a href="#">
                            <h6 data-filter-by="text" class="H6-filter-by-text"><?php echo $contest->title?></h6>
                        </a>
                        <span class="text-small">Today</span>
                    </div>
                    <div class="card-meta">
                        <div class="d-flex align-items-center">
                            <i class="material-icons">playlist_add_check</i>
                            <span><?php echo $contest->end_date?></span>
                        </div>
                        <div class="dropdown card-options">
                            <button class="btn-options" type="button"
                                    id="task-dropdown-button-1" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Mark as done</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#">Archive</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>
