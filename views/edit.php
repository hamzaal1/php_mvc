<?php
include('./views/inc/header.php');
?>

<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container pt-4">
        <form  action="http://localhost/php_mvc/update/user/<?= $data->id ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" value="<?= $data->email ?>" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Username</label>
                <input type="text" name="name" value="<?= $data->name ?>"  class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</main>
<!--Main layout-->



<?php
include('./views/inc/footer.php');
?>