

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OB number page</title>
    <link rel="stylesheet" href="../css/styling.css">
    <link rel="stylesheet" 
          href=
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="ob-number">
        <form action="" method="get">
                <div class="avatar">
                    <img id="i-avatar" src="../images/avatar.png" alt="">
                
                </div>
                <h2 id="kp">Kenya Police</h2>
                <div class="st">
                    <!-- display from current station  -->
                    <h3>Box 2534</h3>
                    <h3>Station</h3>
                    <h3>Date:<?php
                            // Return current date from the remote server
                            date_default_timezone_set('Africa/Nairobi');
                            $date = date('d-m-y h:i:s');
                            echo $date;
                            ?> </h3>
                    <!-- display current date here -->
                </div>
                <div id="flex">
                <div class="reporter">
                    <label for="reporter" >Name of Reporter:<!-- echo the name of the person who has reported from the written statement--></label>
                    <label for="nature">Nature of Report:</label>
                        <div class="inline-block">
                            <label for="ob-number">OB Number:<!-- select from database using the current session --></label>
                            

                        
                            </label>
                        </div>
                    <label for="action">Action taken: <!--action should be recorded--></label>    
                    <input type="text" name="action" placeholder="Action taken on the reported issue">

                    <label for="investigation-officer">Investigating Officer: <!-- echo from current session name of the logged in officer --></label>
                </div>
                            <div class="time">
                                <label for="date">Date:<?php
                                        // Return current date from the remote server
                                        date_default_timezone_set('Africa/Nairobi');
                                        $date = date('d-m-y h:i:s');
                                        echo $date;
                                        ?>
                            </div>
                </div>
                <button class="sms" type="submit" name="sendMessage">SendMessage</button>
        </form>        
    </div>
</body>
</html>