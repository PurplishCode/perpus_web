<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDR | Registration</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
   @vite(['resources/js/app.js'])

   <script src="{{ mix('js/axios.min.js') }}"></script>
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<style>
    body {
            background: linear-gradient(to bottom, #5746F7, #5746F7);
            margin: 0;
            
    }
    .wizard-step
    {
        justify-content: center;
        display: flex;
        align-items: center;
        
    }
    .step-card {
            width: 275px;
            opacity: 1;
            transition: opacity 0.5s ease-in-out;
        }
        .card-container {
            transition: transform 0.5s ease-in-out;
            position: relative;
        }
        .step-card.hidden {
        opacity: 0;
        pointer-events: none; 
    }
        /* Progress Indicator for Step Wizard 1-2 */
        .step-wizard {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .step-indicator {
            width: 20px;
            height: 20px;
            margin: 0 5px;
            border-radius: 50%;
            background-color: #fff;
            opacity: 0.5;
        }

        .active-step {
            opacity: 1;
        }
        
</style>

</head>
<body class="bg-light">
<section class="d-flex justify-content-center align-items-center min-vh-100 p-3">
    <div class="card border-secondary text-white bg-dark" style="width: 28rem; height:35rem;">

    <div class="col">
        <div class="d-flex justify-content-center pt-2">
            <img src={{ asset('img/Logo_EDR.png') }} style="max-width: 3rem;border-radius: 30px;border: 1px solid white" class="">
        </div>
       <div class="d-flex justify-content-center pt-3"> 
        <h4 class="lead fw-medium" style="font-family:Arial, Helvetica, sans-serif">REGISTRATION</h4>
    </div>
    <div class="pt-1 d-flex justify-content-center align-items-center">
        <small class="" style="color: grey;font-family:Arial, Helvetica, sans-serif;">"Come and join the funfest in EDR!"</small>
    </div>
    <form action="#" class="form-group pt-3">
<div class="d-flex justify-content-center">
    <input type="text" class="p-1" style="border-radius: 10px;width:350px;" placeholder="Username" id="username">
</div>
<div class="d-flex justify-content-center pt-4">
    <input type="text" class="p-1" style="border-radius: 10px;width:350px;" placeholder="Full Name" id="full_name">
</div>
<div class="d-flex justify-content-center pt-4">
    <input type="text" class="p-1" style="border-radius: 10px;width:350px;" placeholder="Email" id="email">
</div>
<div class="d-flex justify-content-center pt-4">
    <input type="password" class="p-1" style="border-radius: 10px;width:350px;" placeholder="Password" id="password">
</div>
<div class="d-flex justify-content-center pt-4 ">
    <input type="text" class="p-2" style="border-radius: 10px;width:350px;" placeholder="Address" id="address">
</div>
<div class="d-flex justify-content-center pt-4 ">
    <button type="button" class="btn text-white" style="border-radius: 10px;width:350px;background-color:purple;font-family:Arial, Helvetica, sans-serif" onclick="submitRegistrations()">
    SIGN UP
    </button>
</div>
</form></div>
 
<div class="container">
    <hr class="mt-3" style="border-color:white;">
    <p class="text-white">Already have an account? <a href="{{ url("/auth-user/login") }}" style="text-decoration: none;"> Sign in!</a></p> 
  </div>
    
</div>

</section>  


<script>
    

    function submitRegistrations()
    {
    
        const username = document.getElementById('username').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const full_name = document.getElementById('full_name').value;
        const address = document.getElementById('address').value;
    
        const userData = {
            username: username,email: email,password: password,full_name: full_name,address: address
        }
    axios.post('/users/create', userData).then(response => {
        console.log('Data succesfully registered into the database.', response.data);
    }).catch((e) => { console.log(e)});
    }
    </script>   
</body>
</html>