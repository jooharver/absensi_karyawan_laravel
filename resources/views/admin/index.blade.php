<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Admin</title>
</head>
<body>
    <h1>Daftar Admin</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $admin->username }}</td>
                    <td>{{ $admin->password }}</td> <!-- Biasanya tidak ditampilkan, ini hanya untuk tujuan debugging -->
                    <td>{{ $admin->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
