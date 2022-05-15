<base href="/public">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Cafe-Restaurant.com</title>
    <link rel="shortcut icon" href="assets/images/icon.jpg">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #customers {
            margin: auto;
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 65%;
        }
        
        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        
        #customers tr:hover {background-color: #ddd;}
        
        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #e74e4e;
          color: white;
        }
        
    .badge {
    background-color: #6394F8;
    border-radius: 10px;
    color: white;
    display: inline-block;
    font-size: 12px;
    line-height: 1;
    padding: 3px 7px;
    text-align: center;
    vertical-align: middle;
    white-space: nowrap;
     }
 </style> 
</head>
<body>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{route('home')}}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{route('home')}}">About</a></li>
                           	
                        
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                          
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            

                            @auth  
                          

                                <li>
                                    <li class="scroll-to-section"><a href="{{url('showcart', Auth::user()->id)}}"><i class="fa fa-shopping-cart"></i> Cart <span class="badge">{{$count}}</span>
                                    </a></li>
                                <li>
                             
                            @endauth

                                @if (Route::has('login'))
                                 <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                   @auth
                                <li>
                                    <x-app-layout>
    
                                    </x-app-layout>
                  
                                </li>
                                @else
                                <li> <a href="{{ route('login') }}">Log in</a></li>

                        @if (Route::has('register'))
                        <li>  <a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
                            </li>
                        </ul>        
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>

<div id="top">
    
    <h1>My Cart </h1>

    <table id="customers">
      <tr>
        <th>Food Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Action</th>
      </tr>


      <form action="{{url('orderconfirm')}}" method="post">
          @csrf
      @foreach ($data as $data)
          
      <tr>
          <td>
              <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">
              {{$data->title}}
            </td>
          <td>
            <input type="text" name="price[]" value="{{$data->price}}" hidden="">
            {{$data->price}}$</td>
          <td>
            <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
            {{$data->quantity}}</td>
          
        </tr>
        
    @endforeach

    @foreach ($data2 as $data2)
        <tr style="position:relative;top:-60px;  right: -700px">

        <td>
            <a href="{{url('/remove',$data2->id)}}" class="btn btn-warning">Remove</a>
        </td>
        </tr>
        
    @endforeach
    </table>
</div>

<div align="center">
    <a  class="btn btn-primary btn-lg active" type="button" aria-pressed="true" id="order">Order Now</a>
</div>

<div id="appear" align="center" style="padding: 10px ; display:none" >
    <div style="padding: 10px">
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Name">
    </div >
    <div style="padding: 10px">
        <label for="">Phone</label>
        <input type="number" name="phone" placeholder="Phone">
    </div>
    <div style="padding: 10px">
        <label for="">Adress</label>
        <input type="text" name="address" placeholder="Address">
    </div>

    <div style="padding: 10px">
        <input type="submit" class="btn btn-success" value="Confirm Order">
        
        
    </div>
</div>

</form>
@if(session()->has('message'))
<div class="alert alert-success">
<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  {{session()->get('message')}}
</div>
@endif

<script type="text/javascript">
 $("#order").click(
    function()
    {
        $("#appear").show();
    }
);

</script>



</body>
</html>