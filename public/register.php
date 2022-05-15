<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Police sign up form</title>
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
                        <h2 class="title">Bio Data</h2>
                        <!-- <div class="center">
                            <img class="image" src="../images/kenya-police-logo.png" alt="Kenya police logo">
                        </div> -->
                        <div class="form-controls">
                            <i class="fa fa-user icon"></i>
                            <input  class="form-groups" type="text" name="UserName" placeholder="All the names as per work id">
                        </div>
                        <div class="form-controls">
                            <i class="fa fa-envelope icon env" ></i>
                            <input class="form-groups" type="email" name="email" placeholder="Your current email address or mobile number">
                        </div>
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
                        <div class="form-controls">
                            <i class="fa fa-lock icon" ></i>
                            <input class="form-groups" type="password" name="secure" placeholder="Repeat password above">
                        </div>
                        <button type="submit" name="register" class="btn">Register</button>       
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>