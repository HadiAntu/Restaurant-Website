
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        #customers {
            margin: auto;
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 80%;
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
        .maindiv{
            margin: auto;
            width: 80%;
        }
        </style>
</head>
<body>
    @include('admin.css')
@include('admin.nav')

<br>
<br>
<h2 style="margin:auto">Customer Order</h2>
<div class="maindiv">
<form action="{{url('search')}}" method="post">
    @csrf 
    <input type="text" placeholder="Search.." name="search">
    <button type="submit"><i class="fa fa-search"></i></button>
</form>

<table id="customers">
    <tr  align="center">
      <th>Name</th>
      <th>Phone</th>
      <th>Address</th>
      <th>Food Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Total</th>
    </tr>

 @foreach ($data as $data)
    
    <tr align="center">
      <td>{{$data->name}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->adress}}</td>
      <td>{{$data->foodname}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->price * $data->quantity}} $</td>
    </tr>
@endforeach
   
  </table>
  
</div>
</body>
</html>