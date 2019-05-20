<?php session_start(); ?>
<?php include_once('app/templates/header.php'); ?>

<div class="container">
    <div class="offset-lg-4 col-lg-4">

        <div class="card card-forms">
            <article class="card-body">

                <a href="register.php" class="float-right btn btn-outline-primary">Register</a>
                <h4 class="card-title mb-4 mt-1">Login</h4>

                <form method="POST" action="#">

                    <div class="form-group">
                        <label>username</label>
                        <input name="username" class="form-control" placeholder="username" id="username">
                    </div>

                    <div class="form-group">
                        <a class="float-right" href="#">Forgot?</a>
                        <label>Your password</label>
                        <input class="form-control" placeholder="Password" type="password" id="password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Login </button>
                    </div>

                </form>

                <?php
                if (isset($_POST['login']))
                {
                    $username = mysqli_real_escape_string($conn, $_POST['user']);
                    $password = mysqli_real_escape_string($conn, $_POST['pass']);

                    $query 		= mysqli_query($conn, "SELECT * FROM users WHERE  password='$password' and username='$username'");
                    $row		= mysqli_fetch_array($query);
                    $num_row 	= mysqli_num_rows($query);

                    if ($num_row > 0)
                    {
                        $_SESSION['id']=$row['id'];
                        header('location: home.php');

                    }
                    else
                    {
                        echo 'probeer harder';
                    }
                }
                ?>


            </article>
        </div>

    </div>
</div>

<?php include_once('app/templates/footer.php'); ?>
