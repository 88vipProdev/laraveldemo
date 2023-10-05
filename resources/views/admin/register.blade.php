<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <div>
            <h1>Register</h1>
            <form action="{{route('admin.register')}}" method="post">
                @csrf
                <label for="">username</label><br>
                <input type="text" name="username" id="" placeholder="username"><br>
                <label for="">email</label><br>
                <input type="text" name="email" id="" placeholder="email"><br>
                <label for="">password</label><br>
                <input type="text" name="password" id="" placeholder="password"><br>
                <label for="">confirm password</label><br>
                <input type="text" name="password" id="" placeholder="confirm password"><br>
                <button type="submit" >Register</button>
            </form>
        </div>
</body>
</html>