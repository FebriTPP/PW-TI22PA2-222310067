<!-- resources/views/personal.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Personal Data</h1>
    <table>
        <tr>
            <th>Name</th>
            <td>{{ $personalData['name'] }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $personalData['email'] }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $personalData['phone'] }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $personalData['address'] }}</td>
        </tr>
    </table>
</body>
</html>
