<!DOCTYPE html>
<html lang="en">

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/login.css') ?>" />
</head>

<body>
    <div class="form-structor">
        <form method="POST" action="<?php echo base_url('index.php/Daftar/register') ?>">
            <div class="signup">
                <h2 class="form-title" id="signup">Sign up</h2>
                <div class="form-holder">
                    <input type="text" class="input" placeholder="Nama" name="Nama" />
                    <input type="text" class="input" placeholder="Alamat" name="Alamat" />
                    <input type="password" class="input" placeholder="Password" name="Password" required />
                    <input type="radio" id="Laki - Laki" name="Jenis_Kelamin" value="Laki-Laki">
                    <label for="lakiLaki">Laki - Laki</label><br>
                    <input type="radio" id="Perempuan" name="Jenis_Kelamin" value="Perempuan">
                    <label for="perempuan">Perempuan</label>
                    <input type="email" class="input" placeholder="Email" name="Email" required />
                    <input type="text" class="input" placeholder="No_Hp" name="No_Hp" />
                </div>
                <button type="submit" class="submit-btn">Sign up</button>
                <a href="login_form.php"> Already have an account?</a>
            </div>
        </form>
    </div>
</body>

</html>