<?php include_once('app/templates/header.php'); ?>


    <div class="container">

        <div class="offset-lg-4 col-lg-4">
            <div class="card card-forms">

                <header class="card-header">
                    <a href="login.php" class="float-right btn btn-outline-primary mt-1">Log in</a>
                    <h4>Register</h4>
                </header>

                <article class="card-body">
                    <form action="app/register_code.php" method="POST">

                        <div class="form-group">
                            <label> Username</label>
                            <input type="text" class="form-control" name="username" id="username">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" id="password">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Register  </button>
                        </div>
                    </form>

                </article>
                <div class="border-top card-body text-center">Already registered? <a href="login.php">Log In</a></div>
            </div>
        </div>

    </div>


<?php include_once('app/templates/footer.php'); ?>