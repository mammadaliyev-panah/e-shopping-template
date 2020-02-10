<?php include "includes/header.php" ?>
<?php include "includes/navigation.php"; ?>
        <div class="container loginSection">
            <div class="loginHead">
                <div class="loginText">
                    <h1>LOGIN OR REGISTRATION</h1>
                </div>
            </div>
        </div>
        <div class="container logReg pt-5 pb-5"">
            <div class="col-md-6 login">
                <h5><span>LOGIN</span> FORM</h5>
                <form  class="pt-4">
                    <input type="text" class="form-control form-control-sm userName" placeholder="Username">
                    <input type="password" class="form-control form-control-sm password mt-3" placeholder="Password">
                    <button class="btn btn-secondary mt-3 continue">Sign In</button>
                </form>
            </div>
            <div class="col-md-6 registration">
                    <h5><span>REGISTRATION</span> FORM</h5>
                    <form class="pt-4">
                        <input type="text" class="form-control form-control-sm userName" placeholder="Username">
                        <input type="email" class="form-control form-control-sm password mt-3" placeholder="E-mail">
                        <input type="password" class="form-control form-control-sm password mt-3" placeholder="Password">
                        <button class="btn btn-secondary mt-3 continue">Create Your Account</button>
                    </form>
            </div>
        </div>
        <?php include "includes/footer.php" ?>
        <script>
            $(function(){
                $(".logReg").wrapInner("<div class='row'></div>");
            })
        </script>
    </body>
</html>
