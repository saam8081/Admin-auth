<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

        <!-- Website CSS style -->
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">

        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

        <title>Admin</title>
        <style> 

/*
 * General styles
 */

body, html{
     height: 100%;
     background-repeat: no-repeat;
    background-color: #d3d3d3;
    font-family: 'Oxygen', sans-serif;
    font-size: 12px;
}

.main{
    margin-top: 70px;
    margin-bottom: 50px;
}

h1.title { 
    font-size: 50px;
    font-family: 'Passion One', cursive; 
    font-weight: 400; 
}

hr{
    width: 10%;
    color: #fff;
}

.form-group{
    margin-bottom: 15px;
}

label{
    margin-bottom: 14px;
}

input,
input::-webkit-input-placeholder {
    font-size: 9px;
    padding-top: 3px;
}

.main-login{
    background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
    margin-top: 30px;
    margin: 0 auto;
    max-width: 330px;
    padding: 40px 40px;

}

.login-button{
    margin-top: 3px;
}

.login-register{
    font-size: 8px;
    text-align: center;
}

        </style>
    </head>
    <body>
    <form method="POST" action="{{ route('login.admin') }}">
            @csrf
        <div class="container">
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <h2 class="title">Admin Login</h1>
                        <hr />
                    </div>
                </div> 
                <div class="main-login main-center">
                <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
                    <form class="form-horizontal" method="post" action="{{route('login.admin')}}">
                    @csrf
                        
                            <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Username</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="username" id="username"  placeholder="Username"/>
                                </div>
                            </div>
                        </div>
                       <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password" id="password"  placeholder="Password"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="cols-sm-2 control-label required">PIN Code</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="pincode" id="pin_code"  placeholder="6 digits PIN code"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    </body>
</html>