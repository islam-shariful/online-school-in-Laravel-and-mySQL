<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/student/css/style.css">
    <link rel="stylesheet" type="text/css" href="/student/css/bootstrap.min.css">
	<link href="/student/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/student/css/app.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="auth-fluid-pages pb-0">
    
    <div class="auth-fluid">
        <div class="auth-fluid-form-box">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">
                    <div class="text-center text-lg-left mb-3">
                        <a href="">
                            <span><img src="/student/img/Za0w3yPlDGFr2ukS5cAq.jpg" alt="" height="35"></span>
                        </a>
                    </div>
                    <h2 class="mt-0">sign in</h2>
                    <p class="text-muted mb-4"><h4>Enter_your_email_address_and_password_to_access_account.</h4></p>

                    <form method="post" action="/login">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="emailaddress"><h4>User ID:</h4></label>
                            <input class="form-control" type="text" name="userid" placeholder="Enter your id" value="{{$userid}}">
                        </div>
                        <div class="form-group">
                            <label for="password"><h4>Password</h4></label>
                            <input class="form-control" type="password" name="password" placeholder="Enter your password" value="{{$password}}">
                            
                        </div>
                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" type="submit"><h4> login </h4></button>
                        </div>
                    </form><h4>{{session('msg')}}</h4>
                    @foreach($errors->all() as $err)
                        {{$err}} <br>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="auth-fluid">
            <img src="/student/img/Za0w3yPlDGFr2ukS5cAq.jpg" height="800px" width="1250px">
        </div> 
    </div>
</body>
</html>