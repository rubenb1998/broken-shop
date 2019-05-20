<?php include_once('app/templates/header.php'); ?>


    <div class="container">

        <div class="offset-lg-4 col-lg-4">
            <div class="card card-forms">

                <article class="card-body">
                    <form method="POST" action="#">

                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" class="form-control" placeholder="username" type="text" id="username">

                            <label>New password</label>
                            <input name="password" class="form-control" placeholder="password" type="text" id="password">
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Change password </button>
                        </div>

                    </form>
                </article>

            </div>
        </div>

    </div>


<?php include_once('app/templates/footer.php'); ?>