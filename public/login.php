
<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" 
          href=
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
    <div class="rows">
        <div class="columns">
            <form id="forms" action="" method="post">
                <div class="form-elements">
                    <h2 class="title">Login here</h2>
                    <div class="form-controls">
                        <i class="fa fa-id-badge  icon"></i>
                        <input class="form-groups" type="text" name="WID" placeholder="Your work ID or the PF Number">
                    </div>
                    <div class="form-controls">
                        <i class="fa fa-id-badge icon"></i>
                        <input class="form-groups" type="text" name="title" placeholder="Your current job title">
                    </div>
                    <div class="form-controls">
                        <i class="fa fa-lock icon" ></i>
                        <input class="form-groups" type="password" name="password" placeholder="A strong password">
                    </div>
                    <button type="submit" name="login" class="btn">Login</button>  
                </div>
            </form>        
        </div>            
    </div>
</body>
</html>