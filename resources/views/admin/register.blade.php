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
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username" placeholder="Username"><br>
    
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Email"><br>
    
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="Password"><br>
    
            <label for="password_confirmation">Confirm Password</label><br>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"><br>
    
            <button type="submit">Register</button>
        </form>
    
     </div>
</body>
</html>