<?php include_once('modeles/admin/login.php'); ?>

<?php

if(!$success){?>
<section class="container">
    <div class="row">
        <div class="col-12 offset-lg-4 col-lg-4">
            <?php if($error!==null){foreach($error as $e){ ?>
                <div class="alert alert-danger">
                    <?= $e ?>
                </div>
            <?php }} ?>
            <form action="index.php?p=admin_login" method="post" id = "contact">
                <fieldset>
                    <legend>Connexion Zone Admin</legend>

                    <div class="form-group">
                        <label for="login">Login</label>
                        <input class="form-control" type="text" id="login" name="login" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" id="password" name="password" >
                    </div>
                    <input type="hidden" name="role" id="role" value="admin">





                    <button class="btn btn-primary">Register</button>
                </fieldset>
            </form>
        </div>
    </div>
</section>

<?php }else{?>

Connexion ok

<?php } ?>
