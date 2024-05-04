 <?php
include"koneksi.php";
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register ke Perpustakaan Digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-info">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Register ke Perpustakaan Digital</h3></div>
                                    <div class="card-body">
                                        <?php
                                        if(isset($_POST['register'])){
                                            $nama = $_POST['nama'];
                                            $email = $_POST['email'];
                                            $alamat = $_POST['alamat'];
                                            $no_telepon = $_POST['no_telepon'];
                                            $username = $_POST['username'];
                                            $level = $_POST['level'];
                                            $password = md5($_POST['password']) ;

                                            $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telepon,username,password,level) 
                                                VALUES ('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");
                                            if($insert){
                                                 echo '<script>alert("Selamat, Resgister berhasil.silahkan login");
                                                    location.href="login.php";</script>';
                                            }else{
                                                echo '<script>alert("Resgister gagal, silahkan ulangi kembali.");</script>';
                                            }

                                        }


                                         ?>
                                       
                                        
                                        <form method="post">
                                            <div class="form-group">
                                                 <label class="smallmb-1" for="inputnama">Nama Lengkap</label>
                                                <input class="form-control py-4" id="inputnama" type="nama" required name="nama" placeholder="Masukan Nama Lengkap">
                                               
                                            </div>
                                            <div class="form-group">
                                                <label class="smallmb-1" for="inputemail">Email</label>
                                                <input class="form-control py-4" id="inputemail" type="email" required  name="email" placeholder="Masukan Email">
                                            </div>
                                            <div class="form-group">
                                                <label class="smallmb-1" for="inputno_telepon">No Telepon</label>
                                                <input class="form-control py-4" id="inputno_telepon" type="no_telepon" required name="no_telepon" placeholder="Masukan Nama Lengkap">
                                            </div>
                                            <div class="form-group">
                                                <label class="smallmb-1">Alamat</label>
                                                <textarea name="alamat" rows="5" required class="form-control"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label class="smallmb-1" for="inputusername">Username</label>
                                                <input class="form-control  py-4" id="inputusername" type="username" required name="username" placeholder="username">
                                            </div>
                                            <div class="form-group">
                                                <label class="smallmb-1" for="inputpassword">Password</label>    
                                                <input class="form-control  py-4" id="inputPassword" type="password" required name="password" placeholder="Password">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label class="smallmb-1">Level</label>
                                                <select name="level" required class="form-control">
                                                    <option value="peminjam">Peminjam</option>
                                                      <option value="peminjam">Admin</option>


                                                </select>

                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="register" value="register">Register</button>
                                                <a class="btn btn-danger" href="login.php">Login</button></a>         
                                            </div>


                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">
                                            &copy; 2024 perpustakaan digital
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
         
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
