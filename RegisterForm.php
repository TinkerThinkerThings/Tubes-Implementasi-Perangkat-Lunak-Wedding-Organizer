<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Signup</title>
        <link rel="stylesheet" href="src\style\LoginStyle.css" />
    </head>
    <body>
        <form action="signupPengguna.php" method="post">
            <div class="form-structor">
                <div class="signup">
                    <h2 class="form-title" id="signup">Sign up</h2>
                    <div class="form-holder">
                        <input type="text" class="input" placeholder="Name" name="nama"/>
                        <input type="textfield" class="input" placeholder="Alamat" name="alamat"/>
                        <p>Pilih Jenis Kelamin</p>
                        <input type="radio" id="laki" name="jenisKelamin" value="Laki - Laki">
                        <label for="laki">Laki - Laki</label><br>
                        <input type="radio" id="perempuan" name="jenisKelamin" value="Perempuan">
                        <label for="perempuan">Perempuan</label><br>
                        <input type="email" class="input" placeholder="Email" name="email"/>
                        <input type="text" class="input" placeholder="Nomor HP" name="noHP"/>
                    </div>
                    <button class="submit-btn">Sign up</button>
                    <a href="LoginForm.php"> Already have account?</a>
                </div>
            </div>
        </form>
    </body>
</html>