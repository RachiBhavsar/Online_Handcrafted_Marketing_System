
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HandCrafted</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>

<body>





<!-- register form -->
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close"
        title="Close Modal">&times;</span>
    <form class="modal-content" action="/action_page.php">
        <div class="container">
            <h1>Sign Up</h1>
            <!-- <p>Please fill in this form to create an account.</p> -->
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email"  required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw"  required>

            <label for="Rep-psw"><b>Repeat Password</b></label>
            <input type="password" placeholder="Enter Password" name="Rep-psw"  required>



            
            

         
            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.
            </p>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                    class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>

