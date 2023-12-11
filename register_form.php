<!DOCTYPE html>
<html lang="en">

<head>
    <title>Signup</title>
    <link rel="stylesheet" href="src\style\login.css" />
</head>

<body>
    <div class="form-structor">
        <form>
            <div class="signup">
                <h2 class="form-title" id="signup">Sign up</h2>
                <div class="form-holder">
                    <input type="text" class="input" placeholder="Name" />
                    <input type="text" class="input" placeholder="Alamat" />
                        <input type="radio" id="lakiLaki" name="jenisKelamin" value="Laki - laki">
                        <label for="lakiLaki">Laki - Laki</label></br>
                        <input type="radio" id="perempuan" name="jenisKelamin" value="Perempuan">
                        <label for="perempuan">Perempuan</label>
                    <input type="email" class="input" placeholder="Email" />
                    <input type="text" class="input" placeholder="Nomor HP" />
                </div>
                <button class="submit-btn">Sign up</button>
                <a href="login_form.php"> Already have account?</a>
            </div>
        </form>
    </div>
</body>

</html>