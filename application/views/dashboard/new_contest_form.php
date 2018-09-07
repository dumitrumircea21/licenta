            <form class="modal fade" id="task-add-modal" tabindex="-1" role="dialog"
                  aria-labelledby="task-add-modal" style="display: none;" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">New Task</h5>
                            <button type="button" class="close btn btn-round" data-dismiss="modal"
                                    aria-label="Close">
                                <i class="material-icons">close</i>
                            </button>
                        </div>
                        <!--end of modal head-->
                        <ul class="nav nav-tabs nav-fill">
                            <li class="nav-item">
                                <a class="nav-link active" id="task-add-details-tab" data-toggle="tab"
                                   href="#task-add-details" role="tab" aria-controls="task-add-details"
                                   aria-selected="true">Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="task-add-members-tab" data-toggle="tab"
                                   href="#task-add-members" role="tab" aria-controls="task-add-members"
                                   aria-selected="false">Members</a>
                            </li>
                        </ul>
                        <div class="modal-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="task-add-details" role="tabpanel"
                                     aria-labelledby="task-add-details-tab">
                                    <h6>General Details</h6>
                                    <div class="form-group row align-items-center">
                                        <label class="col-3">Name</label>
                                        <input class="form-control col" placeholder="Task name" name="task-name"
                                               type="text">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">Description</label>
                                        <textarea class="form-control col" rows="3"
                                                  placeholder="Task description"
                                                  name="task-description"></textarea>
                                    </div>
                                    <hr>
                                    <h6>Timeline</h6>
                                    <div class="form-group row align-items-center">
                                        <label class="col-3">Start Date</label>
                                        <input class="form-control col" placeholder="Task start"
                                               name="task-start" type="date">
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-3">Due Date</label>
                                        <input class="form-control col" placeholder="Task due" name="task-due"
                                               type="date">
                                    </div>
                                    <div class="alert alert-warning text-small" role="alert">
                                        <span>You can change due dates at any time.</span>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="task-add-members" role="tabpanel"
                                     aria-labelledby="task-add-members-tab">
                                    <div class="users-manage" data-filter-list="form-group-users">
                                        <div class="mb-3">
                                            <ul class="avatars text-center">

                                                <li>
                                                    <img alt="Claire Connors"
                                                         src="assets/img/avatar-female-1.jpg" class="avatar"
                                                         data-toggle="tooltip" data-title="Claire Connors">
                                                </li>

                                                <li>
                                                    <img alt="Marcus Simmons" src="assets/img/avatar-male-1.jpg"
                                                         class="avatar" data-toggle="tooltip"
                                                         data-title="Marcus Simmons">
                                                </li>

                                                <li>
                                                    <img alt="Peggy Brown" src="assets/img/avatar-female-2.jpg"
                                                         class="avatar" data-toggle="tooltip"
                                                         data-title="Peggy Brown">
                                                </li>

                                                <li>
                                                    <img alt="Harry Xai" src="assets/img/avatar-male-2.jpg"
                                                         class="avatar" data-toggle="tooltip"
                                                         data-title="Harry Xai">
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="input-group input-group-round">
                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <i class="material-icons">filter_list</i>
                                                                </span>
                                            </div>
                                            <input class="form-control filter-list-input"
                                                   placeholder="Filter members" aria-label="Filter Members"
                                                   aria-describedby="filter-members" type="search">
                                        </div>
                                        <div class="form-group-users filter-list-1535824358886">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="task-user-1" checked=""
                                                       type="checkbox">
                                                <label class="custom-control-label" for="task-user-1">
                                                    <div class="d-flex align-items-center">
                                                        <img alt="Claire Connors"
                                                             src="assets/img/avatar-female-1.jpg"
                                                             class="avatar mr-2">
                                                        <span class="h6 mb-0 SPAN-filter-by-text"
                                                              data-filter-by="text">Claire Connors</span>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="task-user-2" checked=""
                                                       type="checkbox">
                                                <label class="custom-control-label" for="task-user-2">
                                                    <div class="d-flex align-items-center">
                                                        <img alt="Marcus Simmons"
                                                             src="assets/img/avatar-male-1.jpg"
                                                             class="avatar mr-2">
                                                        <span class="h6 mb-0 SPAN-filter-by-text"
                                                              data-filter-by="text">Marcus Simmons</span>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="task-user-3" checked=""
                                                       type="checkbox">
                                                <label class="custom-control-label" for="task-user-3">
                                                    <div class="d-flex align-items-center">
                                                        <img alt="Peggy Brown"
                                                             src="assets/img/avatar-female-2.jpg"
                                                             class="avatar mr-2">
                                                        <span class="h6 mb-0 SPAN-filter-by-text"
                                                              data-filter-by="text">Peggy Brown</span>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="task-user-4" checked=""
                                                       type="checkbox">
                                                <label class="custom-control-label" for="task-user-4">
                                                    <div class="d-flex align-items-center">
                                                        <img alt="Harry Xai" src="assets/img/avatar-male-2.jpg"
                                                             class="avatar mr-2">
                                                        <span class="h6 mb-0 SPAN-filter-by-text"
                                                              data-filter-by="text">Harry Xai</span>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="task-user-5"
                                                       type="checkbox">
                                                <label class="custom-control-label" for="task-user-5">
                                                    <div class="d-flex align-items-center">
                                                        <img alt="Sally Harper"
                                                             src="assets/img/avatar-female-3.jpg"
                                                             class="avatar mr-2">
                                                        <span class="h6 mb-0 SPAN-filter-by-text"
                                                              data-filter-by="text">Sally Harper</span>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="task-user-6"
                                                       type="checkbox">
                                                <label class="custom-control-label" for="task-user-6">
                                                    <div class="d-flex align-items-center">
                                                        <img alt="Ravi Singh" src="assets/img/avatar-male-3.jpg"
                                                             class="avatar mr-2">
                                                        <span class="h6 mb-0 SPAN-filter-by-text"
                                                              data-filter-by="text">Ravi Singh</span>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="task-user-7"
                                                       type="checkbox">
                                                <label class="custom-control-label" for="task-user-7">
                                                    <div class="d-flex align-items-center">
                                                        <img alt="Kristina Van Der Stroem"
                                                             src="assets/img/avatar-female-4.jpg"
                                                             class="avatar mr-2">
                                                        <span class="h6 mb-0 SPAN-filter-by-text"
                                                              data-filter-by="text">Kristina Van Der Stroem</span>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="task-user-8"
                                                       type="checkbox">
                                                <label class="custom-control-label" for="task-user-8">
                                                    <div class="d-flex align-items-center">
                                                        <img alt="David Whittaker"
                                                             src="assets/img/avatar-male-4.jpg"
                                                             class="avatar mr-2">
                                                        <span class="h6 mb-0 SPAN-filter-by-text"
                                                              data-filter-by="text">David Whittaker</span>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="task-user-9"
                                                       type="checkbox">
                                                <label class="custom-control-label" for="task-user-9">
                                                    <div class="d-flex align-items-center">
                                                        <img alt="Kerri-Anne Banks"
                                                             src="assets/img/avatar-female-5.jpg"
                                                             class="avatar mr-2">
                                                        <span class="h6 mb-0 SPAN-filter-by-text"
                                                              data-filter-by="text">Kerri-Anne Banks</span>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="task-user-10"
                                                       type="checkbox">
                                                <label class="custom-control-label" for="task-user-10">
                                                    <div class="d-flex align-items-center">
                                                        <img alt="Masimba Sibanda"
                                                             src="assets/img/avatar-male-5.jpg"
                                                             class="avatar mr-2">
                                                        <span class="h6 mb-0 SPAN-filter-by-text"
                                                              data-filter-by="text">Masimba Sibanda</span>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="task-user-11"
                                                       type="checkbox">
                                                <label class="custom-control-label" for="task-user-11">
                                                    <div class="d-flex align-items-center">
                                                        <img alt="Krishna Bajaj"
                                                             src="assets/img/avatar-female-6.jpg"
                                                             class="avatar mr-2">
                                                        <span class="h6 mb-0 SPAN-filter-by-text"
                                                              data-filter-by="text">Krishna Bajaj</span>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="task-user-12"
                                                       type="checkbox">
                                                <label class="custom-control-label" for="task-user-12">
                                                    <div class="d-flex align-items-center">
                                                        <img alt="Kenny Tran" src="assets/img/avatar-male-6.jpg"
                                                             class="avatar mr-2">
                                                        <span class="h6 mb-0 SPAN-filter-by-text"
                                                              data-filter-by="text">Kenny Tran</span>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end of modal body-->
                        <div class="modal-footer">
                            <button role="button" class="btn btn-primary" type="submit">
                                Create Task
                            </button>
                        </div>
                    </div>
                </div>
            </form>
