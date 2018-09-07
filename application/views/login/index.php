

<div class="col-lg-8 offset-lg-2">

    <h1>login page</h1>

    <?php if (isset($_SESSION['error'])){?>
        <div class="alert alert-danger"> <?php echo $_SESSION['error'] ?> </div>
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

        <div class="text-center">
            <button class="btn btn-primary" name="login">LogIn</button>
        </div>

    </form>
</div>