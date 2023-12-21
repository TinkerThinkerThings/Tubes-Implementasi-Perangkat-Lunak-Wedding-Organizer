<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/login.css') ?>" />
</head>

<body>
    <form method="post" action="<?php echo base_url('index.php/Verifikasidata/login') ?>">
        <div class="form-structor">
            <div class="signup">
                <h2 class="form-title" id="signup">Login</h2>
                <div class="form-holder">
                    <input type="email" class="input" placeholder="Email" name="Email" />
                    <input type="password" class="input" placeholder="Password" name="Password" />
                </div>
                <button type="submit" class="submit-btn">Login</button>
                <a href="<?php echo base_url('index.php/Daftar') ?>">Create Account</a>
            </div>
        </div>
    </form>
</body>

</html>