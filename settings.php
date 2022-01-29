<?php
    require 'header.php';
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<div class="container">
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <h1>Change Password</h1>
            <form method="post" action="setting_script.php">
                <div class="form-group">
                    <input type="password" class="form-control" name="oldPassword" placeholder="Old Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="newPassword" placeholder="New Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="retype" placeholder="Re-type new password">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Change">
                </div>
            </form>
        </div>
    </div>
</div>
           
<?php require 'footer.php'; ?>