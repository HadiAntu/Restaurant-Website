
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
        
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Guest</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Action</th>
        
        <th scope="col">Message</th>
      </tr>
    </thead>
    @foreach ( $data as $data)
    
    <tr>
      
      <td>{{$data->name}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->guest}}</td>
      <td>{{$data->date}}</td>
      <td>{{$data->time}}</td>
      
      
      <td>
          <form action="" method="post">
              @csrf
              @method('Delete')
              <a href="{{ route('deleteBooking', ['id' => $data->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this')">Delete</a>
            </form> 
        </td>
        {{-- <td>
            <a href="" class="btn btn-info" onclick="return confirm('Are you sure you want to Change this')">UPDATE</a>
        </td> --}}
        
        <td>{{$data->message}}</td>

    </tr>
        
    @endforeach
    <tbody style="height:200px">
      
    </tbody>
  </table>







@include('admin.js')
