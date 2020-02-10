<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

        <div class="container checkoutSection">
            <div class="checkoutHead">
                <div class="chText">
                    <h1>CHECK OUT</h1>
                </div>
            </div>
        </div>

        <div class="container checkoutMain pt-5 pb-5">
            <div class="checkout-item options">
                <a href="#">Checkout Options</a>
            </div>
            <div class="optionsMain">
                <div class="row p-3">
                    <div class="col-md-6 newCustomer">
                        <h5>New Customer</h5>
                        <p>By creating an account you will be able to shop faster, be up to date on an order's status, and 
                           keep track of the orders you have previously made.
                        </p>
                        <label><input type="radio" name="customer">  Register Account</label> <br>
                        <label><input type="radio" name="customer">  Guest Checkout</label><br>
                        <button class="btn btn-secondary mt-3">Continue</button>
                    </div>
                    <div class="col-md-6 returning">
                        <h5>Returning Customer</h5>
                        <p>I am a returning customer.</p>
                        <form>
                            <input type="text" class="form-control form-control-sm userName" placeholder="Username">

                            <input type="password" class="form-control form-control-sm password" placeholder="Password">
                            <button class="btn btn-secondary mt-3 continue">Continue</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="checkout-item account">
                <a href="#">Account & Billing Details</a>
            </div>
            <div class="accountMain">
                <div class="row p-3">
                    <div class="col-md-6 personal">
                        <h5>Your Personal Informations</h5>
                        <form>
                            <label for="">First Name</label>
                            <input type="text">
                            <label for="">Last Name</label>
                            <input type="text">
                            <label for="">E-mail Address</label>
                            <input type="email">
                            <label for="">Telephone</label>
                            <input type="text">
                            <label for="">Fax</label>
                            <input type="text">
                        </form>
                    </div>
                    <div class="col-md-6 yourAddress">
                        <h5>Your Address</h5>
                        <form action="">
                            <label>Company Name</label>
                            <input type="text">
                            <label for="">* City</label>
                            <input type="text">
                            <label for="">Address</label>
                            <input type="email">
                            <label for="">* Post Code</label>
                            <input type="text">
                            <label for="">* Country</label>
                            <select id="country" name="country" class="form-control-sm form-control">
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="China">China</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Spain">Spain</option>   
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="checkout-item confirm">
                <a href="#">Confirm Order</a>
            </div>
            <div class="confirmMain p-3">
                <label for="">Comment:</label>
                <textarea name="" id="" cols="30" rows="4" class="form-control form-control-sm"></textarea>
                <button class="btn btn-secondary">Confirm Order</button>
            </div>
        </div>

        <?php include "includes/footer.php"; ?>
        <script>
        $(function(){
            $(".optionsMain p,label").addClass("text-muted");
            $(".accountMain input").addClass("form-control form-control-sm").css('width','300px');
         
            $(".options").click(function(){
                $(".optionsMain").slideToggle(1000);
            })
            $(".account").click(function(){
                $(".accountMain").slideToggle(1000);
            })
            $(".confirm").click(function(){
                $(".confirmMain").slideToggle(1000);    
            })      
        })
        </script>
    </body>
</html>