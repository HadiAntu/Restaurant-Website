<base href="/">
@include('admin.css')
@include('admin.nav')
<br>
@if(session()->has('message'))
      <div class="alert alert-success">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        {{session()->get('message')}}
      </div>
      @endif


<div style="width: 600px; margin: auto; ">


      <form action="{{route('cheifupdate',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group" >
          <label for="formGroupExampleInput"><h3>Name</h3></label>
          <input type="text" class="form-control" id="formGroupExampleInput" value="{{$data->name}}"  name="name"  required placeholder="Example Title">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Specility</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" value="{{$data->job}}"  name="job" placeholder="Another input">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2"> Old Image</label>
         <img height="200px" width="200px" src="cheifimage/{{$data->image}}" alt="">
        </div>
        
        <div class="form-group">
            <label for="formGroupExampleInput2">New Image</label>
            <input type="file" class="form-control" id="formGroupExampleInput2"  name="file" placeholder="Another input">
          </div>
          <div class="form-group">
            <div class="col-sm-10">
    
                <button type="submit" class="btn btn-primary btn-lg btn-block">Save Now</button>
            </div>
          </div>
        </div>     
      </form>














@include('admin.js')
