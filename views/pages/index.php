<!doctype html>
<html>
    <?php include("./views/includes/head.php");?>
    <body class="login_body">
        <div class="container-fluid login_container">
            <div class="container login_container">
                <h2>INVENTORY</h2>
                <hr>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="login_form">
                    <div class="login_top_content">
                        <h3>LOGIN</h3>
                    </div>
                    <div class="login_attr">
                        <hr>
                        <form action="#" method="POST">
                              
                            <input type="email" name="email" class="form-control user_cred" placeholder="Email">
                            <input type="password" name="password" class="form-control user_cred" placeholder="Password">
                            <hr>  
                            <button type="submit" class="btn btn-primary my_button">Login</button>
                            
                        </form>
                        
                        <div class="row resetrow">
                            <a href="#" class="reset_a">Forgot your password?</a>
                        </div>
                        <div class="row resetrow">
                            <a href="/register" class="reset_a">Register</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <?php include("./views/includes/footer.php");?>
    </body>
</html>