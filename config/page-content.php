<?php if($page='hostel'){?>

<div class="right-div log-div"  id="next_1">
    <div class="login-in-div">
        <div class="logo-div">
            <img src="all-images/body-pix/logo.png" alt="">
        </div>
        <div class="log-title">
            <i class="bi bi-person-fill"></i>
            <h3>Administrative Log-in</h3>
        </div>

        <div class="abstract-purple"></div>

        <div class="form-div">
            <form action=" " method="POST">
                <label for="email_address"> <i class="bi bi-envelope-fill"> </i>Email Address:</label><br>
                <input type="text" name="email" placeholder="e.g sunafi@gmail.com"><br>

                <label for="password"> <i class="bi bi-lock-fill"></i>Password:</label><br>
                <input type="text" name="password" placeholder="Enter Your Password">

                <button class = "btn"><i class="bi bi-check"></i>Login-In</button>
            </form>

            <div class="forgot-div">
                Forget Password? <span  onclick=" _next_page('next_2')">RESET PASSWORD</span> 
            </div>
        </div>
    </div>
</div>



<div class="right-div log-div" id="next_2">
    <div class="login-in-div">
        <div class="green-set-all">
            <div class="green-all-head">
                <span class="topic-green"><i class="bi bi-lock-fill"></i>RESET PASSWORD</span>
            </div>

            <div class="form-div">
                <form action=" " method="POST">
                    <label for="email_address"> </i>Provide Email Address:</label><br>
                    <input type="text" class="in-res-pass" name="email" placeholder="e.g sunafi@gmail.com"><br>
                    <a href="reset.php"><button class = "btn">Proceed <i class="bi bi-arrow-right-short"></i></button></a>
                </form>
                <div class="forgot-div saamu">
                    Existing User? <span onclick="_next_page('next_1')">LOG-IN HERE</span> 
                </div>
            </div>
        </div>
    </div>
</div>

   

<?php }?>