<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="login-box">
    <div class="login-logo">
       <img src="Meri_Awaj_Suno_Logo1.png"  style="height: 150px;width: 250px;margin-top: 150px;" alt="Edge Programmers">
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="verification.php" method="post" accept-charset="utf-8">     
           <div class="form-group has-feedback">
            <input type="text" name="user" class="form-control"  autocomplete="off" id="login" maxlength="80" size="30">
            
                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <span><font color="red"></font></span>
        </div>
        <div class="form-group has-feedback">
                    <input type="password" name="pass" class="form-control" autocomplete="off" id="password" size="30">
            
                 <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <span><font color="red"></font></span>
        </div>
                <div class="row">
            <div class="col-xs-4">
                    <input type="submit" class="btn btn-success" name="submit" id="submit"value="Sign In">
                        </div><!-- /.col -->
        </div>
        </form>   
    </div><!-- /.login-box-body -->
</div>
</body>
</html>