<?php
include('modeles/admin/adduser.php');

if(count($error) !== 0 || $error===null){
?>

<section class="container">
    <div class="row">
        <div class="col-12 offset-lg-4 col-lg-4">
            <?php if($error!==null){foreach($error as $e){ ?>
            <div class="alert alert-danger">
                <?= $e ?>
            </div>
            <?php }} ?>
            <form action="index.php?p=admin_adduser" method="post" id = "contact">
                <fieldset>
                    <legend>Ajouter une entrée</legend>

                    <div class="form-group">
                        <label for="login">Login</label>
                        <input class="form-control" type="text" id="login" name="login" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" id="password" name="password" >
                    </div>

                    <div class="form-group">
                        <label for="email">email</label>
                        <input class="form-control" type="email" id="email" name="email" >
                    </div>

                    <div class="form-group">
                        <label for="role">role</label>
                        <select class="form-control" id="role" name="role">
                            <option>admin</option>
                            <option>user</option>



                        </select>
                    </div>




                    <button class="btn btn-primary">Register</button>
                </fieldset>
            </form>
        </div>
    </div>
</section>

<?php }else{ ?>

    Enregistrement effectué.

<?php } ?>
