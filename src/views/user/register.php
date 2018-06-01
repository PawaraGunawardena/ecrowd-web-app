<div style="padding: 100px;">
    <h1>Register into New Account</h1>

    <form class="form-signin" action = "<?php echo URL;?>register/create" method="POST">
        <label for="username" class="col-md-0 control-label">Username:</label><br/>
    <!--        <input type="text" name="username">-->
            <div class="col-md-6" style="padding-left: 55px;">
                <input id="text" type="text" class="form-control" name="username" value="" required><br/><br/>
            </div>

        <label for="email" class="col-md-1 control-label" style="padding-left: 25px;">Email:</label> <br/>
    <!--        <input type="text" name="email"><br/><br/>-->
            <div class="col-md-6" style="padding-left: 55px;">
                <input id="text" type="email" class="form-control" name="email" value="" required><br/><br/>
            </div>


        <label for="first_name" class="col-md-0 control-label">First name:</label> <br/>
    <!--        <input type="text" name="first_name"><br/><br/>-->
            <div class="col-md-6" style="padding-left: 55px;">
                <input id="text" type="text" class="form-control" name="first_name" value="" required><br/><br/>
            </div>

        <label for="last_name" class="col-md-0 control-label">Last name:</label> <br/>
    <!--        <input type="text" name="last_name"><br/><br/>-->
            <div class="col-md-6" style="padding-left: 55px;">
                <input id="text" type="text" class="form-control" name="last_name" value="" required><br/><br/>
            </div>

        <label for="password" class="col-md-0 control-label">Password:</label> <br/>
    <!--        <input type="password" name="password"><br/><br/>-->
            <div class="col-md-6" style="padding-left: 55px;">
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
        <br/>

        <label for="role" class="col-md-1 control-label">Role:</label> <br/>
            <div class="col-md-6" style="padding-left: 55px;">
                <select name="role">
                    <option value="user">General User</option>


                </select><br/><br/>
            </div>

    <!--    <label>&nbsp</label> <input type="submit" value="Add">-->

        <div class="form-group" style="padding-left: 55px;" >

            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </div>

        </div>

    </form>


    <hr/>
</div>