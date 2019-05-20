<?php

include_once ('app/templates/header.php');

$db = mysqli_connect("localhost", "root", "root", "webshop");

?>


<div class="container">
    <div class="row">

        <div class="col-lg-4">


            <form enctype="multipart/form-data" action="app/upload.php" method="POST">
                <p>Upload your file</p>
                <input type="file" name="uploaded_file"></input><br />
                <input type="submit" value="Upload"></input>
            </form>


        </div>

        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6">Name</div>
                <div class="col-lg-6">Ruben</div>
            </div>
            <div class="row">
                <div class="col-lg-6">Email</div>
                <div class="col-lg-6">Rubenboer@gmail.com</div>
            </div>
            <div class="row">
                <div class="col-lg-6"><a href="changepw.php"> Password (change) </a></div>
                <div class="col-lg-6">*******</div>
            </div>

        </div>

    </div>
</div>



<?php include_once('app/templates/footer.php'); ?>
