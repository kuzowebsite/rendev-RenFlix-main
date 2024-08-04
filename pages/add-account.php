<?php 
    // Jika tombol submit ditekan
    if (isset ($_POST["submit"])) {
        
        // Cek berhasil atau tidak menambah data
        if (tambah ($_POST) > 0) {
            echo "
            <script>
                alert('New Account Successfully Created!');
                document.location.href = 'admin.php?p=registry-admin';
            </script>";
        }else {
            echo "
            <script>
                alert('Failed To Add Account');
                document.location.href = 'admin.php?p=add-account';
            </script>";
        }
    }
?>
<!-- Start -->
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                Самбарын админ | Бүртгэлийн маягт
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i> <a href="admin.php">Хяналтын самбар</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i> <a href="admin.php?p=registry-admin">Бүртгэл бүртгүүлэх</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> Бүртгэл нэмэх маягт
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                    <form action="admin.php?p=add-account" method="POST">
                        <table id="table-input">
                            <tr>
                                <td><label for="username">Хэрэглэгчийн нэр</label></td>
                                <td><input class="form-control" type="text" name="username" id="username" required></td>
                            </tr>
                            <tr>
                                <td><label for="password">Нууц үг</label></td>
                                <td><input class="form-control" type="password" name="password" id="password" required></td>
                            </tr>
                            <tr>
                                <td><label for="level">Түвшин</label></td>
                                <td><input class="form-control" type="level" name="level" id="level" required></td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-primary btn-lg" type="submit" name="submit">Данс нэмэх</button></td>
                            </tr>
                        </table>
                    </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div>