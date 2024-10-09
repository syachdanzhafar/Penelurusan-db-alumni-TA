<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFFFFF;
            color: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-box {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 5px;
        }

        .form-group {
            position: relative;
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        .form-control {
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            color: #495057;
            font-size: 1.25rem;
            padding: 10px 15px;
            height: auto;
            padding-left: 40px;
        }

        .form-control::placeholder {
            color: #adb5bd;
        }

        .icon-placeholder {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            font-size: 1.5rem;
            color: #adb5bd;
        }

        .btn-primary {
            width: 100%;
            padding: 15px;
            background-color: #1DB954;
            border: none;
            border-radius: 4px;
            color: #FFFFFF;
            font-size: 1.25rem;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-primary:hover {
            background-color: #1AA34A;
        }

        .alert-danger {
            background-color: #d9534f;
            border-color: #d43f3a;
        }

        .login-header {
            margin-bottom: 30px;
            text-align: center;
        }

        .login-header img {
            max-width: 150px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <div class="login-header">
            <img src="<?= base_url('images/logo.png') ?>" alt="Logo SMP Nurul Anwar">
            <h2>Login</h2>
            <p>Sistem Penelusuran Data Alumni SMP Nurul Anwar</p>
        </div>
        <form action="/admin/login" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <i class="bi bi-person icon-placeholder"></i>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group mt-3">
                <label for="password">Password</label>
                <i class="bi bi-lock icon-placeholder"></i>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4">Login</button>
        </form>
    </div>
</body>

<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
    <?php if (session()->getFlashdata('msg')) : ?>
        swal({
            title: "Login Gagal",
            text: "<?= session()->getFlashdata('msg') ?>",
            icon: "error",
            button: "OK",
        });
    <?php endif; ?>
</script>

</html>