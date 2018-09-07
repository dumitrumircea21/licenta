
<div class="navbar bg-white breadcrumb-bar">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Overview</a></li>
        </ol>
    </nav>

    <div class="dropdown">
        <button class="btn btn-round" role="button" data-toggle="dropdown" aria-expanded="false">
            <i class="material-icons">settings</i>
        </button>
        <div class="dropdown-menu dropdown-menu-right">


            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#project-edit-modal">Edit Profile</a>
            <a class="dropdown-item" href="#">Share</a>
            <a class="dropdown-item" href="#">Mark as Complete</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="<?php base_url()?>logout">LogOut</a>


        </div>
    </div>

</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-11 col-xl-10">
            <div class="page-header">
                <h1>Brand Concept and Design</h1>
                <p class="lead">Research, ideate and present brand concepts for client consideration</p>
                <div class="d-flex align-items-center">
                    <ul class="avatars">

                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Claire Connors">
                                <img alt="Claire Connors" class="avatar" src="assets/img/avatar-female-1.jpg">
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Marcus Simmons">
                                <img alt="Marcus Simmons" class="avatar" src="assets/img/avatar-male-1.jpg">
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Peggy Brown">
                                <img alt="Peggy Brown" class="avatar" src="assets/img/avatar-female-2.jpg">
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Harry Xai">
                                <img alt="Harry Xai" class="avatar" src="assets/img/avatar-male-2.jpg">
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Sally Harper">
                                <img alt="Sally Harper" class="avatar" src="assets/img/avatar-female-3.jpg">
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Ravi Singh">
                                <img alt="Ravi Singh" class="avatar" src="assets/img/avatar-male-3.jpg">
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top"
                               title="Kristina Van Der Stroem">
                                <img alt="Kristina Van Der Stroem" class="avatar"
                                     src="assets/img/avatar-female-4.jpg">
                            </a>
                        </li>

                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="David Whittaker">
                                <img alt="David Whittaker" class="avatar" src="assets/img/avatar-male-4.jpg">
                            </a>
                        </li>

                    </ul>
                    <button class="btn btn-round" data-toggle="modal" data-target="#user-manage-modal">
                        <i class="material-icons">add</i>
                    </button>
                </div>
                <div>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width:25%;"></div>
                    </div>
                    <div class="d-flex justify-content-between text-small">
                        <div class="d-flex align-items-center">
                            <i class="material-icons">playlist_add_check</i>
                            <span>3/12</span>
                        </div>
                        <span>Due 9 days</span>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tasks" role="tab" aria-controls="tasks"
                       aria-selected="true">Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#files" role="tab" aria-controls="files"
                       aria-selected="false">Files</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#activity" role="tab" aria-controls="activity"
                       aria-selected="false">Activity</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tasks" role="tabpanel" aria-labelledby="tasks-tab"
                     data-filter-list="card-list-body">
                    <div class="row content-list-head">
                        <div class="col-auto">
                            <h3>Tasks</h3>
                            <button class="btn btn-round" data-toggle="modal" data-target="#task-add-modal">
                                <i class="material-icons">add</i>
                            </button>
                        </div>
                        <form class="col-md-auto">
                            <div class="input-group input-group-round">
                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">filter_list</i>
                                                    </span>
                                </div>
                                <input class="form-control filter-list-input" placeholder="Filter tasks"
                                       aria-label="Filter Tasks" aria-describedby="filter-tasks" type="search">
                            </div>
                        </form>
                    </div>
                    <!--end of content list head-->
                    <div class="content-list-body">

                        <?php include 'card_list.php'?>
                        <?php include 'card_list.php'?>
                        <?php include 'card_list.php'?>

                        <!--end of content list body-->
                    </div>
                    <!--end of content list-->
                </div>
                <!--end of tab-->
                <div class="tab-pane fade" id="files" role="tabpanel" aria-labelledby="files-tab"
                     data-filter-list="dropzone-previews">
                    <div class="content-list">
                        <div class="row content-list-head">
                            <div class="col-auto">
                                <h3>Files</h3>
                            </div>
                            <form class="col-md-auto">
                                <div class="input-group input-group-round">
                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="material-icons">filter_list</i>
                                                        </span>
                                    </div>
                                    <input class="form-control filter-list-input" placeholder="Filter files"
                                           aria-label="Filter Tasks" aria-describedby="filter-tasks"
                                           type="search">
                                </div>
                            </form>
                        </div>
                        <!--end of content list head-->
                        <div class="content-list-body row">
                            <div class="col">
                                <div class="d-none dz-template">
                                    <li class="list-group-item dz-preview dz-file-preview">
                                        <div class="media align-items-center dz-details">
                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                <div class="dz-file-details">
                                                    <a href="#" class="dz-filename">
                                                        <span data-dz-name=""></span>
                                                    </a>
                                                    <br>
                                                    <span class="text-small dz-size" data-dz-size=""></span>
                                                </div>
                                                <img alt="Loader" src="assets/img/loader.svg"
                                                     class="dz-loading">
                                                <div class="dropdown">
                                                    <button class="btn-options" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        <i class="material-icons">more_vert</i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Download</a>
                                                        <a class="dropdown-item" href="#">Share</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#"
                                                           data-dz-remove="">Delete</a>
                                                    </div>
                                                </div>
                                                <button class="btn btn-danger btn-sm dz-remove"
                                                        data-dz-remove="">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                        <div class="progress dz-progress">
                                            <div class="progress-bar dz-upload" data-dz-uploadprogress=""></div>
                                        </div>
                                    </li>
                                </div>
                                <form class="dropzone dz-clickable"
                                      action="http://mediumra.re/dropzone/upload.php">
                                    <span class="dz-message">Drop files here or click here to upload</span>
                                </form>
                                <ul class="list-group list-group-activity dropzone-previews flex-column-reverse filter-list-1535824358907">
                                    <li class="list-group-item" data-t="null" data-i="null" data-l="null"
                                        data-e="null">
                                        <div class="media align-items-center">
                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#" data-filter-by="text" class="A-filter-by-text">client-questionnaire</a>
                                                    <br>
                                                    <span class="text-small SPAN-filter-by-text"
                                                          data-filter-by="text">48kb Text Doc</span>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn-options" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        <i class="material-icons">more_vert</i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Download</a>
                                                        <a class="dropdown-item" href="#">Share</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item" data-t="null" data-i="null" data-l="null"
                                        data-e="null">
                                        <div class="media align-items-center">
                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#" data-filter-by="text" class="A-filter-by-text">moodboard_images</a>
                                                    <br>
                                                    <span class="text-small SPAN-filter-by-text"
                                                          data-filter-by="text">748kb ZIP</span>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn-options" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        <i class="material-icons">more_vert</i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Download</a>
                                                        <a class="dropdown-item" href="#">Share</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item" data-t="null" data-i="null" data-l="null"
                                        data-e="null">
                                        <div class="media align-items-center">
                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#" data-filter-by="text" class="A-filter-by-text">possible-hero-image</a>
                                                    <br>
                                                    <span class="text-small SPAN-filter-by-text"
                                                          data-filter-by="text">1.2mb JPEG image</span>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn-options" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        <i class="material-icons">more_vert</i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Download</a>
                                                        <a class="dropdown-item" href="#">Share</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item" data-t="null" data-i="null" data-l="null"
                                        data-e="null">
                                        <div class="media align-items-center">
                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#" data-filter-by="text" class="A-filter-by-text">LandingPrototypes</a>
                                                    <br>
                                                    <span class="text-small SPAN-filter-by-text"
                                                          data-filter-by="text">415kb Sketch Doc</span>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn-options" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        <i class="material-icons">more_vert</i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Download</a>
                                                        <a class="dropdown-item" href="#">Share</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item" data-t="null" data-i="null" data-l="null"
                                        data-e="null">
                                        <div class="media align-items-center">
                                            <div class="media-body d-flex justify-content-between align-items-center">
                                                <div>
                                                    <a href="#" data-filter-by="text" class="A-filter-by-text">Branding-Proforma</a>
                                                    <br>
                                                    <span class="text-small SPAN-filter-by-text"
                                                          data-filter-by="text">15kb Text Document</span>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="btn-options" type="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        <i class="material-icons">more_vert</i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Download</a>
                                                        <a class="dropdown-item" href="#">Share</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--end of content list-->
                </div>
                <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="activity-tab"
                     data-filter-list="list-group-activity">
                    <div class="content-list">
                        <div class="row content-list-head">
                            <div class="col-auto">
                                <h3>Activity</h3>
                            </div>
                            <form class="col-md-auto">
                                <div class="input-group input-group-round">
                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="material-icons">filter_list</i>
                                                        </span>
                                    </div>
                                    <input class="form-control filter-list-input" placeholder="Filter activity"
                                           aria-label="Filter activity" aria-describedby="filter-tasks"
                                           type="search">
                                </div>
                            </form>
                        </div>
                        <!--end of content list head-->
                        <div class="content-list-body">
                            <ol class="list-group list-group-activity filter-list-1535824358897">
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <div>
                                                <span class="h6 SPAN-filter-by-text" data-filter-by="text">Claire</span>
                                                <span data-filter-by="text" class="SPAN-filter-by-text">completed the task</span><a
                                                    href="#" data-filter-by="text" class="A-filter-by-text">Set
                                                    up client chat channel</a>
                                            </div>
                                            <span class="text-small SPAN-filter-by-text" data-filter-by="text">Just now</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <div>
                                                        <span class="h6 SPAN-filter-by-text"
                                                              data-filter-by="text">Ravi</span>
                                                <span data-filter-by="text" class="SPAN-filter-by-text">joined the project</span>
                                            </div>
                                            <span class="text-small SPAN-filter-by-text" data-filter-by="text">5 hours ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <div>
                                                <span class="h6 SPAN-filter-by-text" data-filter-by="text">Kristina</span>
                                                <span data-filter-by="text" class="SPAN-filter-by-text">added the task</span><a
                                                    href="#" data-filter-by="text" class="A-filter-by-text">Produce
                                                    broad concept directions</a>
                                            </div>
                                            <span class="text-small SPAN-filter-by-text" data-filter-by="text">Yesterday</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <div>
                                                <span class="h6 SPAN-filter-by-text" data-filter-by="text">Marcus</span>
                                                <span data-filter-by="text" class="SPAN-filter-by-text">added the task</span><a
                                                    href="#" data-filter-by="text" class="A-filter-by-text">Present
                                                    concepts and establish direction</a>
                                            </div>
                                            <span class="text-small SPAN-filter-by-text" data-filter-by="text">Yesterday</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <ul class="avatars">
                                            <li>
                                                <div class="avatar bg-primary">
                                                    <i class="material-icons">person_add</i>
                                                </div>
                                            </li>
                                            <li>
                                                <img alt="Sally" src="assets/img/avatar-female-3.jpg"
                                                     class="avatar filter-by-alt" data-filter-by="alt">
                                            </li>
                                        </ul>
                                        <div class="media-body">
                                            <div>
                                                        <span class="h6 SPAN-filter-by-text"
                                                              data-filter-by="text">Sally</span>
                                                <span data-filter-by="text" class="SPAN-filter-by-text">joined the project</span>
                                            </div>
                                            <span class="text-small SPAN-filter-by-text" data-filter-by="text">2 days ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <ul class="avatars">
                                            <li>
                                                <div class="avatar bg-primary">
                                                    <i class="material-icons">date_range</i>
                                                </div>
                                            </li>
                                            <li>
                                                <img alt="Claire" src="assets/img/avatar-female-1.jpg"
                                                     class="avatar filter-by-alt" data-filter-by="alt">
                                            </li>
                                        </ul>
                                        <div class="media-body">
                                            <div>
                                                <span class="h6 SPAN-filter-by-text" data-filter-by="text">Claire</span>
                                                <span data-filter-by="text" class="SPAN-filter-by-text">rescheduled the task</span><a
                                                    href="#" data-filter-by="text" class="A-filter-by-text">Target
                                                    market trend analysis</a>
                                            </div>
                                            <span class="text-small SPAN-filter-by-text" data-filter-by="text">2 days ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center">
                                        <ul class="avatars">
                                            <li>
                                                <div class="avatar bg-primary">
                                                    <i class="material-icons">add</i>
                                                </div>
                                            </li>
                                            <li>
                                                <img alt="David" src="assets/img/avatar-male-4.jpg"
                                                     class="avatar filter-by-alt" data-filter-by="alt">
                                            </li>
                                        </ul>
                                        <div class="media-body">
                                            <div>
                                                        <span class="h6 SPAN-filter-by-text"
                                                              data-filter-by="text">David</span>
                                                <span data-filter-by="text" class="SPAN-filter-by-text">started the project</span>
                                            </div>
                                            <span class="text-small SPAN-filter-by-text" data-filter-by="text">12 days ago</span>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!--end of content list-->
                </div>
            </div>

            <?php include 'manage_users_form.php'?>

            <?php include 'edit_project_form.php'?>

            <?php include 'new_contest_form.php'?>

        </div>
    </div>
</div>
<button class="btn btn-primary btn-round btn-floating btn-lg" type="button" data-toggle="collapse"
        data-target="#floating-chat" aria-expanded="false" aria-controls="sidebar-floating-chat">
    <i class="material-icons">chat_bubble</i>
    <i class="material-icons">close</i>
</button>
<div class="collapse sidebar-floating" id="floating-chat">
    <div class="sidebar-content">
        <div class="chat-module" data-filter-list="chat-module-body">
            <div class="chat-module-top">
                <form>
                    <div class="input-group input-group-round">
                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">search</i>
                                            </span>
                        </div>
                        <input class="form-control filter-list-input" placeholder="Search chat"
                               aria-label="Search Chat" aria-describedby="search-chat" type="search">
                    </div>
                </form>
                <div class="chat-module-body filter-list-1535824358874">
                    <div class="media chat-item">
                        <img alt="Claire" src="assets/img/avatar-female-1.jpg" class="avatar">
                        <div class="media-body">
                            <div class="chat-item-title">
                                        <span class="chat-item-author SPAN-filter-by-text"
                                              data-filter-by="text">Claire</span>
                                <span data-filter-by="text" class="SPAN-filter-by-text">4 days ago</span>
                            </div>
                            <div class="chat-item-body DIV-filter-by-text" data-filter-by="text">
                                <p>Hey guys, just kicking things off here in the chat window. Hope you're all
                                    ready to tackle this great project. Let's smash some Brand Concept &amp;
                                    Design!</p>

                            </div>

                        </div>
                    </div>
                    <div class="media chat-item">
                        <img alt="Peggy" src="assets/img/avatar-female-2.jpg" class="avatar">
                        <div class="media-body">
                            <div class="chat-item-title">
                                        <span class="chat-item-author SPAN-filter-by-text"
                                              data-filter-by="text">Peggy</span>
                                <span data-filter-by="text" class="SPAN-filter-by-text">4 days ago</span>
                            </div>
                            <div class="chat-item-body DIV-filter-by-text" data-filter-by="text">
                                <p>Nice one <a href="#">@Claire</a>, we've got some killer ideas kicking about
                                    already.
                                    <img src="https://media.giphy.com/media/aTeHNLRLrwwwM/giphy.gif"
                                         alt="alt text" title="Thinking">
                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="media chat-item">
                        <img alt="Marcus" src="assets/img/avatar-male-1.jpg" class="avatar">
                        <div class="media-body">
                            <div class="chat-item-title">
                                        <span class="chat-item-author SPAN-filter-by-text"
                                              data-filter-by="text">Marcus</span>
                                <span data-filter-by="text" class="SPAN-filter-by-text">3 days ago</span>
                            </div>
                            <div class="chat-item-body DIV-filter-by-text" data-filter-by="text">
                                <p>Roger that boss! <a href="">@Ravi</a> and I have already started gathering
                                    some stuff for the mood boards, excited to start! 🔥</p>

                            </div>

                        </div>
                    </div>
                    <div class="media chat-item">
                        <img alt="Ravi" src="assets/img/avatar-male-3.jpg" class="avatar">
                        <div class="media-body">
                            <div class="chat-item-title">
                                        <span class="chat-item-author SPAN-filter-by-text"
                                              data-filter-by="text">Ravi</span>
                                <span data-filter-by="text" class="SPAN-filter-by-text">3 days ago</span>
                            </div>
                            <div class="chat-item-body DIV-filter-by-text" data-filter-by="text">
                                <h1 id="-">😉</h1>

                            </div>

                        </div>
                    </div>
                    <div class="media chat-item">
                        <img alt="Claire" src="assets/img/avatar-female-1.jpg" class="avatar">
                        <div class="media-body">
                            <div class="chat-item-title">
                                        <span class="chat-item-author SPAN-filter-by-text"
                                              data-filter-by="text">Claire</span>
                                <span data-filter-by="text" class="SPAN-filter-by-text">2 days ago</span>
                            </div>
                            <div class="chat-item-body DIV-filter-by-text" data-filter-by="text">
                                <p>Can't wait! <a href="#">@David</a> how are we coming along with the <a
                                        href="#">Client Objective Meeting</a>?</p>

                            </div>

                        </div>
                    </div>
                    <div class="media chat-item">
                        <img alt="David" src="assets/img/avatar-male-4.jpg" class="avatar">
                        <div class="media-body">
                            <div class="chat-item-title">
                                        <span class="chat-item-author SPAN-filter-by-text"
                                              data-filter-by="text">David</span>
                                <span data-filter-by="text" class="SPAN-filter-by-text">Yesterday</span>
                            </div>
                            <div class="chat-item-body DIV-filter-by-text" data-filter-by="text">
                                <p>Coming along nicely, we've got a draft for the client questionnaire
                                    completed, take a look! 🤓</p>

                            </div>

                            <div class="media media-attachment">
                                <div class="avatar bg-primary">
                                    <i class="material-icons">insert_drive_file</i>
                                </div>
                                <div class="media-body">
                                    <a href="#" data-filter-by="text" class="A-filter-by-text">questionnaire-draft.doc</a>
                                    <span data-filter-by="text" class="SPAN-filter-by-text">24kb Document</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="media chat-item">
                        <img alt="Sally" src="assets/img/avatar-female-3.jpg" class="avatar">
                        <div class="media-body">
                            <div class="chat-item-title">
                                        <span class="chat-item-author SPAN-filter-by-text"
                                              data-filter-by="text">Sally</span>
                                <span data-filter-by="text" class="SPAN-filter-by-text">2 hours ago</span>
                            </div>
                            <div class="chat-item-body DIV-filter-by-text" data-filter-by="text">
                                <p>Great start guys, I've added some notes to the task. We may need to make some
                                    adjustments to the last couple of items - but no biggie!</p>

                            </div>

                        </div>
                    </div>
                    <div class="media chat-item">
                        <img alt="Peggy" src="assets/img/avatar-female-2.jpg" class="avatar">
                        <div class="media-body">
                            <div class="chat-item-title">
                                        <span class="chat-item-author SPAN-filter-by-text"
                                              data-filter-by="text">Peggy</span>
                                <span data-filter-by="text" class="SPAN-filter-by-text">Just now</span>
                            </div>
                            <div class="chat-item-body DIV-filter-by-text" data-filter-by="text">
                                <p>Well done <a href="#">@all</a>. See you all at 2 for the kick-off meeting. 🤜
                                </p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-module-bottom">
                <form class="chat-form">
                            <textarea class="form-control" placeholder="Type message" rows="1"
                                      style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 40px;"></textarea>
                    <div class="chat-form-buttons">
                        <button type="button" class="btn btn-link">
                            <i class="material-icons">tag_faces</i>
                        </button>
                        <div class="custom-file custom-file-naked">
                            <input class="custom-file-input" id="customFile" type="file">
                            <label class="custom-file-label" for="customFile">
                                <i class="material-icons">attach_file</i>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

