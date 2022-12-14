<?php require_once '../risorse/config.php'; ?>
<?php include (FRONT_END . DS . 'header.php'); ?>

<div class="container my-5">
<h4 class="bg-warning text-center"><?php mostraAvviso() ?></h4>
<?php login(); ?>
        <form class="form-horizontal" role="form" method="post" action="">
        
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-7">
                    <h2>Accedi al tuo account personale</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">    
                    <div class="form-group">
                        <label class="sr-only" for="text">Nome utente </label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="material-icons">email</i></div>
                            <input type="text" name="username" class="form-control">
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="material-icons">verified_user</i></div>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                        
                        </span>
                    </div>
                </div>
            </div>
           
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" name="login" class="btn btn-success btn-block">Login</button>
               
                </div>
            </div>
        </form>
    </div>

<!-- footer -->
<?php include (FRONT_END . DS .'footer.php'); ?>