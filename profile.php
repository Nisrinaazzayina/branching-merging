<?php 
session_start();
if ($_SESSION['role'] != 'user') {
    echo "Anda bukan role user";
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow p-4">
            <div class="card-body">
                <h1 class="text-center mb-4">Selamat Datang, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h1>
                <p class="text-center text-success">Anda berhasil login sebagai <strong>User</strong>.</p>
                <div class="text-center mt-4">
                    <a href="./backend/logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
