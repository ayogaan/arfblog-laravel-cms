<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('assets/css/sleek.css')}}">
    
    <title>Document</title>
</head>
<body class="px-1 px-md-5 px-lg-1 mx-auto  px-xl-5 py-5">
<div class="container-fluid p-0 shadow" >

    <div class="py-4 bg-white"> 
        
    </div>

    <div class="card card0 border-0">
        <div class="row m-0 d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="https://i.imgur.com/uNGdWHi.png" class="image"> </div>
                    
                </div>
            </div>
            
            
            
            <div class="col-lg-6">
                @yield('content')


            </div>
        </div>
        <div class="bg-blue py-4" style="background-color: #f5f5f5;"> 
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div>

    
</body>
</html>