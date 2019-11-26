<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <form action="{{url('/dashboard/login/auth')}}" method="GET">
        <input type="text" placeholder="email" name="email">
        <input type="password" placeholder="password" name="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>