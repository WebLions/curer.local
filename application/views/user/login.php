<body class="login-img3-body">

<div class="container">

    <form class="login-form" action="/user/login" method="post">
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                <input type="text" name="login" class="form-control" placeholder="Username" autofocus>
                <? echo form_error('login');?>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <? echo form_error('password');?>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        </div>
    </form>

</div>


</body>