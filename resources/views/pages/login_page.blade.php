<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDR | Login</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
   
    <script src="{{ mix('js/axios.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    @vite(['resources/js/app.js'])
    
    <style>
       body {
            background: linear-gradient(to bottom, #5746F7, #5746F7);
            margin: 0;
    }
    </style>
    <script src="{{ mix('js/axios.min.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>

    <section class="d-flex align-items-center justify-content-center min-vh-100">
        <div class="card bg-dark border-secondary d-md-block d-none" style="width: 20rem; height:26rem">
        <div class="d-flex justify-content-center align-items-center">
            <h4 class="lead text-white p-3" style="font-family: Arial, Helvetica, sans-serif;">Releases v1.0</h4>
        </div>
        <div class="container lead card-text text-white" style="font-size: 14px">
        <h5 style="font-family: Arial, Helvetica, sans-serif;">Apa yang baru?</h5>    
       
    <div class="pt-1 pl-4" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">
    <div class="card text-white border-secondary p-1" style="width: 18rem; height: 17rem; background-color:darkslategray    ">
   <p>Epic EDR showdown!</p>
    </div>
    </div>
    </div>
        </div>
        <div class="card border-secondary bg-dark" style="width: 20rem;height:26rem;">
            <div class="d-flex justify-content-center align-items-center pt-3">
                <img src="{{ asset('img/Logo_EDR.png') }}" class="card-img-top" style="object-fit: cover; border-radius:23px;width:40px;border:1px solid white">
           
                
            </div>
            <h4 class="text-white card-title fw-medium text-center pt-3" style="font-family:Arial, Helvetica, sans-serif;">LOGIN</h4>
       <small class="mt-1 text-white text-center">Menuju fantasi yang luar biasa di EDR!</small>         
    <div class="col pt-4 d-flex justify-content-center">
        <form action="{{ route('postLogin') }}" class="form-group" method="POST">
            @csrf
            <input type="text" class="form-control" placeholder="Email" style="width: 275px;border-radius:10px;" name="email"> 
<div class="pt-4 ">
    <input type="password" class="form-control" placeholder="Password" style="width: 275px;border-radius:10px;" name="password"> 
<div class="pt-4">
    <button type="submit" class="btn text-white fw-medium" style="width: 270px;background-color:purple;">SIGN IN</button>     
    <div class="container">
        <hr class="mt-3" style="border-color:white;">
        <p class="text-white">Don't have an account yet? <a href="{{ url("/auth-user/register") }}" style="text-decoration: none;"> Sign up!</a></p> 
    </div>
</div>
</div>

</div>
        </form>
    </div>    
    </div>
    </section>
   

</body>
</html>