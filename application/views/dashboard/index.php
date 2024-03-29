<!doctype html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-52115242-14"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-52115242-14');
    </script>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A project management Bootstrap theme by Medium Rare">
    <link href="assets/img/favicon.ico" rel="icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/theme.css" rel="stylesheet" type="text/css" media="all"/>
</head>

<body>

<div class="layout layout-nav-side">
    <div class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="index.html">
            <img alt="<?php echo strtoupper($_SESSION['user_name']) ?>" src="<?php echo base_url()?>assets/img/<?php isset($_SESSION['user_id']) ? printf($_SESSION['user_id']) : 'default-account-image.svg' ?>"/>
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                    aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-block d-lg-none ml-2">
                <div class="dropdown">
                    <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img alt="Image" src="assets/img/avatar-male-4.jpg" class="avatar"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="nav-side-user.html" class="dropdown-item">Profile</a>
                        <a href="utility-account-settings.html" class="dropdown-item">Account Settings</a>
                        <a href="#" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse flex-column" id="navbar-collapse">
            <ul class="navbar-nav d-lg-block">

                <li class="nav-item">

                    <a class="nav-link" href="index.html">Overview</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2"
                       aria-controls="submenu-2">Pages</a>
                    <div id="submenu-2" class="collapse">
                        <ul class="nav nav-small flex-column">

                            <li class="nav-item">
                                <a class="nav-link" href="pages-app.html">App Pages</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="pages-utility.html">Utility Pages</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="pages-layouts.html">Layouts</a>
                            </li>

                        </ul>
                    </div>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3"
                       aria-controls="submenu-3">Components</a>
                    <div id="submenu-3" class="collapse">
                        <ul class="nav nav-small flex-column">

                            <li class="nav-item">
                                <a class="nav-link" href="components-bootstrap.html">Bootstrap</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="components-pipeline.html">Pipeline</a>
                            </li>

                        </ul>
                    </div>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="documentation/index.html">Documentation</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="documentation/changelog.html">Changelog</a>

                </li>

            </ul>
            <hr>
            <div class="d-none d-lg-block w-100">
                <span class="text-small text-muted">Quick Links</span>
                <ul class="nav nav-small flex-column mt-2">
                    <li class="nav-item">
                        <a href="nav-side-team.html" class="nav-link">Team Overview</a>
                    </li>
                    <li class="nav-item">
                        <a href="nav-side-project.html" class="nav-link">Project</a>
                    </li>
                    <li class="nav-item">
                        <a href="nav-side-task.html" class="nav-link">Single Task</a>
                    </li>
                    <li class="nav-item">
                        <a href="nav-side-kanban-board.html" class="nav-link">Kanban Board</a>
                    </li>
                </ul>
                <hr>
            </div>
            <div>
                <form>
                    <div class="input-group input-group-dark input-group-round">
                        <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">search</i>
                                    </span>
                        </div>
                        <input type="search" class="form-control form-control-dark" placeholder="Search"
                               aria-label="Search app" aria-describedby="search-app">
                    </div>
                </form>
                <div class="dropdown mt-2">
                    <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="newContentButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Add New
                    </button>
                    <div class="dropdown-menu" aria-labelledby="newContentButton">
                        <a class="dropdown-item" href="#">Team</a>
                        <a class="dropdown-item" href="#">Project</a>
                        <a class="dropdown-item" href="#">Task</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-lg-block">
            <div class="dropup">
                <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img alt="Image" src="assets/img/avatar-male-4.jpg" class="avatar"/>
                </a>
                <div class="dropdown-menu">
                    <a href="nav-side-user.html" class="dropdown-item">Profile</a>
                    <a href="utility-account-settings.html" class="dropdown-item">Account Settings</a>
                    <a href="#" class="dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <?php include 'nav_side_project.php'?>
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/autosize@4.0.2/dist/autosize.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.10.0/prism.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@shopify/draggable@1.0.0-beta.7/lib/draggable.bundle.legacy.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@shopify/draggable@1.0.0-beta.7/lib/plugins/swap-animation.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/theme.js"></script>


<style type="text/css">
    .layout-switcher {
        position: fixed;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%) translateY(73px);
        color: #fff;
        transition: all .35s ease;
        background: #343a40;
        border-radius: .25rem .25rem 0 0;
        padding: .75rem;
        z-index: 999;
    }

    .layout-switcher:not(:hover) {
        opacity: .95;
    }

    .layout-switcher:not(:focus) {
        cursor: pointer;
    }

    .layout-switcher-head {
        font-size: .75rem;
        font-weight: 600;
        text-transform: uppercase;
    }

    .layout-switcher-head i {
        font-size: 1.25rem;
        transition: all .35s ease;
    }

    .layout-switcher-body {
        transition: all .55s ease;
        opacity: 0;
        padding-top: .75rem;
        transform: translateY(24px);
        text-align: center;
    }

    .layout-switcher:focus {
        opacity: 1;
        outline: none;
        transform: translateX(-50%) translateY(0);
    }

    .layout-switcher:focus .layout-switcher-head i {
        transform: rotateZ(180deg);
        opacity: 0;
    }

    .layout-switcher:focus .layout-switcher-body {
        opacity: 1;
        transform: translateY(0);
    }

    .layout-switcher-option {
        width: 72px;
        padding: .25rem;
        border: 2px solid rgba(255, 255, 255, 0);
        display: inline-block;
        border-radius: 4px;
        transition: all .35s ease;
    }

    .layout-switcher-option.active {
        border-color: #007bff;
    }

    .layout-switcher-icon {
        width: 100%;
        border-radius: 4px;
    }

    .layout-switcher-body:hover .layout-switcher-option:not(:hover) {
        opacity: .5;
        transform: scale(0.9);
    }

    @media all and (max-width: 990px) {
        .layout-switcher {
            min-width: 250px;
        }
    }

    @media all and (max-width: 767px) {
        .layout-switcher {
            display: none;
        }
    }
</style>
<div class="layout-switcher" tabindex="1">
    <div class="layout-switcher-head d-flex justify-content-between">
        <span>Select Layout</span>
        <i class="material-icons">arrow_drop_up</i>
    </div>
    <div class="layout-switcher-body">


    </div>
</div>

<script>
    $(document).ready(function () {
        $('#container').removeClass('container');
    })
</script>

</body>

</html>
