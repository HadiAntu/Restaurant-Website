
@include('admin.css')
@include('admin.nav')
<br>
@if(session()->has('message'))
      <div class="alert alert-danger">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        {{session()->get('message')}}
      </div>
      @endif

<table class="table table-hover table-dark" style="width: 600px; margin: auto; ";>
    <thead style="height:100px">
      <tr>
        
        
        <th scope="col">Cheif Name</th>
        <th scope="col">Specelity</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
        <th scope="col">Update</th>
      </tr>
    </thead>
    @foreach ( $cheif as $data)
    
    <tr>
      
      <td>{{$data->name}}</td>
      <td>{{$data->job}}</td>
      
      <td class="img-rounded"><img   height="200px" src="/cheifimage/{{$data->image}}" alt=""></td>
      

      
      <td>
        <form action="" method="post">
            @csrf
            @method('Delete')
            <a href="{{ route('deletecheif', ['id' => $data->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this')">Delete</a>
        </form> 
      </td>
      <td>
        <a href="{{ route('updateCheifForm', ['id' => $data->id]) }}" class="btn btn-info" onclick="return confirm('Are you sure you want to Change this')">UPDATE</a>
      </td>
     

    </tr>
        
    @endforeach
    <tbody style="height:200px">
      
    </tbody>
  </table>














@include('admin.js')
