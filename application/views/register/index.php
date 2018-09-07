<div class="col-lg-8 offset-lg-2">

    <?php if (isset($_SESSION['success'])){?>
        <div class="alert alert-success"> <?php echo $_SESSION['success'] ?> </div>
    <?php }; ?>

    <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

    <form action="" method="POST">

        <div class="form-group">
            <label for="username" class="label-default">Username</label>
            <input class="form-control" name="username" id="username" type="text" value="<?php if (isset($user_name )) echo $user_name?>">
        </div>

        <div class="form-group">
            <label for="password" class="label-default">Password</label>
            <input class="form-control" name="password" id="password" type="password">
        </div>

        <div class="form-group">
            <label for="password2" class="label-default">Confirm Password</label>
            <input class="form-control" name="password2" id="password2" type="password">
        </div>

        <div class="text-center">
            <button class="btn btn-primary" name="register">Register</button>
        </div>

    </form>
</div>