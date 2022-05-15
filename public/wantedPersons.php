<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of wanted persons</title>
    <link rel="stylesheet" href="../css/styling.css">
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
<form id="forms" action="" method="post">
                <div class="form-elements">
                    <h2 class="title">MOST WANTED PERSONS</h2>

                    <div class="form-controls">
                        <input  class="form-groups" type="file" name="profile">
                    </div>
                    <div class="form-controls">
                    <i class="fa fa-user icon"></i>
                        <input class="form-groups" type="text" name="person" placeholder="Name of the person wanted">
                    </div>
                    <div class="form-controls">
                        <i class="fa fa-id-badge  icon"></i>
                        <textarea class="form-groups" name="charges" id="" cols="30" rows="10" placeholder="Crimes committed by the person"></textarea>
                    </div>
                    <div class="form-controls">
                        <!-- <i class="fa fa-id-badge icon"></i> -->
                        <input class="form-groups" type="text" name="reward" placeholder="Amount to award on the ones who help apprehend criminal">
                    </div>
                    <div class="form-controls">
                        <!-- <i class="fa fa-lock icon" ></i> -->
                        <input class="form-groups" type="text" name="hotline" placeholder="Toll number to be called when person is spotted">
                    </div>
                    <button class="btn apprehend" type="submit" name="apprehend" >Apprehended</button>       
                </div>
                </div>
                
            </form>
</body>
</html>