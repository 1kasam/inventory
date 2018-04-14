<!doctype html>
<html>
    <?php
    include("./views/includes/head.php");
    require_once'./core/config.php';
    ?>
    <body class="login_body">
        <div class="container-fluid login_container">
            <div class="container login_container">

                <h2>ADD NEW USER</h2>
                <hr>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="login_form">
                    <div class="login_top_content">
                        <h3>REGISTER</h3>
                    </div>
                    <div class="login_attr">

                        <hr>
                        <form id="registerform"   method="POST">

                            <input type="text" id="name" name="first" class="form-control user_cred" placeholder="First" required>

                            <input type="text" id="last" name="last" class="form-control user_cred" placeholder="Last" >

                            <input type="email" id="email" name="email" class="form-control user_cred" placeholder="Email" >
                            <input type="password" id="password" name="password" class="form-control user_cred" placeholder="Password" >
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control user_cred" placeholder="Confirm the password" >
                            <hr>  
                            <div id="responsemsg"></div>
                            <button id="submit" type="submit" class="btn btn-primary my_button">Register</button>     

                        </form>
                        <!--DELETE THIS-->
                        <div class="row resetrow">
                            <a href="/index" class="reset_a">Login</a>
                        </div>
                        <!--TILL HERE-->
                    </div>
                </div>
            </div>
        </div>
        <!--include footer here-->
        <?php include("./views/includes/footer.php"); ?>
    </body>
</html>