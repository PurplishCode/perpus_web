<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDR | Home</title>
    @vite(['resources/js/app.js'])
<style>

::-webkit-scrollbar {
  width: 12px; 
}

::-webkit-scrollbar-track {
  background-color: rgba(238, 130, 238, 0.459); 
}

::-webkit-scrollbar-thumb {
  background-color: violet; 
  border-radius: 6px; 
}

::-webkit-scrollbar-thumb:hover {
  background-color: #4e22223f; 
}

    .background-images {
        background-image: url({{ asset('img/jeme.jpg') }}); background-repeat: no-repeat;position: relative;background-size: cover;box-shadow:0px 3px 17px  rgba(0,0,0,1);
    
    }
    .sub-judul {
            color: #f8f8f8;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
        .card-container {
            display: flex;
            justify-content: space-around; 
            flex-wrap: wrap;
            gap: 20px; /* Gap between card */
            margin-top: 20px; 
        }
        .judul {
            color: #f8f8f8;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
        .text-content {
            position: relative;
            z-index: 1;
            color: #f8f8f8;
            padding: 20px;
        }
        
        .btn-start {
            box-shadow: 12px;
            background-color: purple;
            border-radius: 15px;
            color: #f8f8f8;
z-index: 2;

        }

    .background-overlay {
        
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.301);  
            transition: background 0.3s ease; 
        
    }
    </style>

</head>
<body class="d-flex flex-column min-vh-100">
    @extends('layout.main')

    @section("content")
    <main id="main" class="main main-landing mb-5">
        
        <div class="position-relative overflow-hidden p-5 p-md-5 text-white bg-light bimage background-images  shadow-sm ">
            <div class="text-content">
                <div class="p-lg-3 my-4 judul"><h1 class="display-3 fw-bold" style="z-index: 1;">Eduread</h1>
          
       
                    <blockquote class="blackquote"><p class="lead mt-1 fw-bold" style="">Read Your Favorite Book Everywhere and Anywhere!</p></blockquote></div>
                <div>   
                    <a class="btn btn-lg text-white mr-2 p-lg btn-start" href="{{ url("/login-user") }}" style="box-shadow: 12px;background-color: purple;border-radius: 15px;">Explore!</a>   
                <div class="mt-3">   <div class="sub-judul fw-bold d-flex" style="color:#f8f8f8; font-family:;">"Website Perpustakaan Digital Online.</div>
                <div class="sub-judul fw-bold mb" style="color:#f8f8f8; font-family:;">Dikembangkan demi memudahkan pengguna untuk membaca buku yang unik."</div>
                
                </div>
            </div>

 <figure class="text-end mt-2">
    <blockquote class="blockquote text-white" style="font-size: 15px;"><p>Knowledge is key.</p></blockquote>
    <figcaption class="blockquote-footer"><cite class="Source Title text-white">EDR</cite></figcaption>
    </figure>
    <div class="product-device shadow-sm d-none d-md-block"></div>
<div class="product-device product-device-2 shadow-sm  d-none d-md-block"></div>

</div>

</div>
<div>
    <h2 class="position-relative overflow-hidden text-center mt-5 pb-5 fw-bold" style="font-family: Arial,Helvetica, sans-serif">Featured Books</h2>

</div>

<div class="card-container">
    <div class="card border-secondary rounded" style="width: 18rem;overflow:hidden;">
        <img class="card-img-center" src="{{ asset('img/jeme.jpg') }}" alt="Card image cap"  style="object-fit: cover; height: 300px;">
        <div class="overlay text-white position-absolute top-0 start-0 d-flex flex-column justify-content-center align-items-center">
           <div class="card-body">
          <h5 class="mb-0 fw-bold" style="color:">Scholars of Unity</h5>
          <p class="mb-0 fw-bold" style="color: ; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Made by PurpleCode</p>
          <a href="#" class="btn btn-secondary mt-2">READ</a>
        </div>
    
        </div>
        <div class="card-body">
          <p class="card-text">Book Content or smth, i dunno!!!!!!!!</p>
      </div>   
      </div>
      <div class="card border-secondary" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('img/jeme.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">X-Universe</h5>
          <p class="card-text">Book Content or smth, i dunno!!!!!!!!</p>
          <a href="#" class="btn btn-primary d-flex justify-content-center">READ</a>
        </div>
      </div>
      <div class="card border-secondary" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('img/perpus.jpg') }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Book Title</h5>
          <p class="card-text">Book Content or smth, i dunno!!!!!!!!</p>
          <a href="#" class="btn btn-primary d-flex justify-content-center">READ</a>
      
        </div>
        
      </div>
      
</div>
{{-- <div class="album py-4">
    <div class="container">
<div class="row align-items-top">
   <div class="col-lg-6">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{ asset("img/perpus.jpg") }}" style="max-width: 200px; max-height: 200px;"></div></div></div></div> 
</div>
</div> --}}
  
 </main>
<hr>
 <section class="container my-5 d-flex justify-content-center text-aligns-center">
  <div class="card border-secondary " style="width: 16rem; background-color:antiquewhite">
    <h3 style="font-family:Arial, Helvetica, sans-serif" class="text-center fw-bold">About EDUREAD</h4>
 </section>
  </div>


</body>
</html>