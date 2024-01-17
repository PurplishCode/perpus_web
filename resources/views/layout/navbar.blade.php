<head>
   @include('layout.part.link')
   
   <style>
 
   </style>
</head>

<header id="header" class="header fixed-top d-flex align-items-center bg-dark">
    <div class="d-flex align-items-center justify-content-between">
    
    </div>
    
  
        <div class="d-flex justify-content-center p-2">
            <h1 class="" style="font-family: Arial, Helvetica, sans-serif; color: rgb(231, 44, 231)">EDR</h1>
        </div>
        <a type="button" id="open-sidebar"><i style="" class="bi bi-list toggle-sidebar-btn text-white"></i></a>
       
            <ul class="nav flex-column">
              
            </ul>
        </div>


    <nav class="header-nav ms-auto">
        <div class="d-flex align-items-center">
            <!-- Navigation for authenticated users -->
            @if (Auth::check())
                <div class="px-4 py-1 mb-1">
                    <div class="btn btn-primary"><a href="{{ url("/logout") }}" class="text-white">LOGOUT</a></div>
                  {{-- <div class="datatest text-white border-secondary"  ><img src="{{ asset('img/avatar-masyarakat.png') }}" style="width: 50px;height:50px;border-radius:15px"></div> --}}
                </div>
            @else
                <!-- Navigation for non-authenticated users -->
                <div class="px-3 py-1 mb-2">
                    <div class="container d-flex flex-wrap justify-content-center">
                        <a href="{{ url('/auth-user/login') }}" class="btn text-white btn-md mt-2 me-2" style="background-color: purple; border-radius:13px">Log In</a>
                        <a href="{{ url('/auth-user/register') }}" class="btn text-white btn-md mt-2" style="background-color: purple; border-radius:13px">Sign Up</a>
                    </div>
                </div>
            @endif
        </div>
    </nav>

    <!-- Your JavaScript to handle the burger menu toggle -->
    <script>

    </script>
</header>
