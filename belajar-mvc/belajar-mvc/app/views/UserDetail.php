<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Detail User</h1>
    <table class="table table-bordered mt-3">
        <tr><th>ID</th><td><?= htmlspecialchars($user['id']); ?></td></tr>
        <tr><th>Nama</th><td><?= htmlspecialchars($user['name']); ?></td></tr>
        <tr><th>Email</th><td><?= htmlspecialchars($user['email']); ?></td></tr>
    </table>
    <a href="index.php" class="btn btn-primary mt-3">Kembali</a>
</div>
</body>
</html>
