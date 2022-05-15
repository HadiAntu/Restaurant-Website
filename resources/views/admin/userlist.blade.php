
@include('admin.css')
@include('admin.nav')
<br>
@if(session()->has('message'))
      <div class="alert alert-success">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        {{session()->get('message')}}
      </div>
      @endif

<table class="table table-hover table-dark" style="width: 600px; margin: auto; ";>
    <thead style="height:100px">
      <tr>
        
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    @foreach ( $data as $data)
    
    <tr>
      
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>

      @if ($data->usertype=="0")
      <td>
        <form action="" method="post">
            @csrf
            @method('Delete')
            <a href="{{ route('deleteuser', ['id' => $data->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this')">Delete</a>
        </form> 
      </td>
      @else
      <td><a class="btn btn-info"  onclick="return confirm('Admin Can Not Delete Admin')">Not Allowed</a></td> 
      @endif

    </tr>
        
    @endforeach
    <tbody style="height:200px">
      
    </tbody>
  </table>














@include('admin.js')
