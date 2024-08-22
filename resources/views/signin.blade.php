<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form id="signinForm" method="POST">
        <div data-mdb-input-init class="form-outline form-white mb-4">
            <label class="form-label" for="typeEmailX">Email</label>
            <input type="email" name="email" class="form-control form-control-lg" />
            <div class="text-danger" id="emailError"></div>
        </div>
        <br>
        <div data-mdb-input-init class="form-outline form-white mb-4">
            <label class="form-label" for="typeEmailX">Password</label>
            <input type="password" name="password" class="form-control form-control-lg" />
            <div class="text-danger" id="emailError"></div>
        </div>
        <br>
        <input type="submit" value="Log in" id="login">
    </form>
    <script src="{{asset('assets/js/login.js')}}">

    </script>
</body>
</html>