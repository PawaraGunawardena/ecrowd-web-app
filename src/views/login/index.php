<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/11/2018
 * Time: 9:57 PM
 */


?>


<html>
<div style="padding: 100px;">
    <head>


        <title>
            Login Page
        </title>


    </head>

    <body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="padding: 10px; padding-left: 10px; "><h1 class="panel-heading" padding="10px">Login</h1></div>

                            <div id="content">
                                                    <form action = "login/run" method="POST">
                                                    <!--                Username : <input type="text" name="username"><br><br>-->
                                                    <!--                Password : <input type="password" name="password"><br><br>-->



                                                    <!--                Email : <input type="text" name="email"><br><br>-->
                                                    <!--                First Name : <input type="text" name="first_name"><br><br>-->
                                                    <!--                Last Name : <input type="text" name="last_name"><br><br>-->


                                                        <label for="email" class="col-md-0 control-label">E-Mail Address:</label>
                                                        <br><br>
                                                        <div class="col-md-6">
                                                            <input id="text" type="text" class="form-control" name="username" value="" required autofocus>
                                                        </div>
                                                        <br>

                                                        <label for="password" class="col-md-1 control-label">Password:</label>
                                                        <br><br>
                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control" name="password" required>
                                                        </div>
                                                        <br><br>
                                                        <!--                <input type="submit" value="Log In">-->

                                                                        <div class="form-group">
                                                                            <div class="col-md-8 col-md-offset-4">
                                                                                <button type="submit" class="btn btn-primary">
                                                                                    Login
                                                                                </button>

                                                        <!--                        <a class="btn btn-link" href="{{ route('password.request') }}">-->
                                                        <!--                            Forgot Your Password?-->
                                                        <!--                        </a>-->
                                                            </div>
                                                        </div>

                                                    </form>

                            </div>
                </div>
                    </div>
            </div>
        </div>
    </div>



    </body>
</div>
</html>

