<div class="container contest text-center ">
    <br><br><br><br>
    <div class="col-md-6 offset-md-3 main-border">
        <div class="row">
            <div class="col-md-4 your-entries-border">
                <div class="text-center"><h3>100</h3></div>
                <div class="text-center"><h5>Your Entries</h5></div>
            </div>
            <div class="col-md-4  total-entries-border">
                <div class="text-center"><h3>100</h3></div>
                <div class="text-center"><h5>Total Entries</h5></div>
            </div>
            <div class="col-md-4  days-left-border">
                <div class="text-center"><h3>100</h3></div>
                <div class="text-center"><h5>Days Left</h5></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="<?php base_url() ?>assets/images/contests/<?php echo $contest_id ?>" alt="#">
            </div>
        </div>
        <div class="row" style="background-color: #ECEFF1">
            <div class="col-md-12 text-center"><h3><?php echo $contest_title ?></h3></div>
            <div class="col-md-12 text-center"><?php echo $contest_description ?></div>
        </div>
        <?php foreach ($links as $link): ?>

<!--        --><?php //echo sprintf($link['href'], "" . substr($link['link'],5,strlen($link['link'])-1));die;?>
<!--        --><?php //echo substr($link['link'],6);die;?>

            <div id="linck" class="row">
                <div class="col-sm-1"><img class="logo" src="<?php echo base_url() ?>assets/images/logos/<?php echo substr($link['category'], 0, strpos($link['category'], '_')) ?>.png"></div>
                <div class="col-sm-9 text-left align-self-center"><h5><?php echo $link['message'] ?></h5></div>
                <div class="col-sm-2 align-self-center">
                    <?php ?>
                    <a class="btn btn-primary custom-btn" href="<?php echo sprintf($link['href'], substr($link['link'],8)); ?>" onclick="window.open(this.href, 'windowName', 'width=1000, height=700, left=24, top=24, scrollbars, resizable'); return false;"><?php echo $link['points'] ?></a>
                </div>
            </div>

            <div class="modal fade" id="linkModal" tabindex="-1" role="dialog" aria-labelledby="linkModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="linkModalTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

        <a href="#">
        <div class="row">
            <div class="col-md-12 text-center" style="background-color: #ECEFF1">
                <a href="#">Terms & Conditions</a> |
                <a href="http://laurentiuvdorin.com">Powered by Dorin </a>
            </div>
        </div>
        </a>
    </div>
</div>

<style>

    .custom-btn{
        width: 50px;
        height: 35px;
        text-align: center;
    }

    .logo{
        width: 40px;
        height: 40px;
        margin-left: -15px;
    }

    .your-entries-border{
        border-bottom: 6px solid red;
        border-right: 1px solid #138496;
    }

    .total-entries-border{
        border-bottom: 6px solid blue;
        border-right: 1px solid #138496;
    }

    .days-left-border{
        border-bottom: 6px solid orange;
    }

    .main-border{
        border: 6px solid #138496;
    }
</style>

