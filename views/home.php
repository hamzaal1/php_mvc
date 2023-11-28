<?php
include('./views/inc/header.php');
?>

<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container pt-4">
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $user) {
                    ?>
                    <tr>
                        <td>
                            <?= $user->id ?>
                        </td>
                        <td>
                            <?= $user->name ?>
                        </td>
                        <td>
                            <?= $user->email ?>
                        </td>

                        <td>
                            <a class="btn btn-danger" href="/php_mvc/delete/user/<?= $user->id ?>">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                            <a class="btn btn-info" href="/php_mvc/edit/user/<?= $user->id ?>">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                        </td>
                    </tr>


                    <?php
                } ?>
            </tbody>
        </table>
    </div>
</main>
<!--Main layout-->



<?php
include('./views/inc/footer.php');
?>