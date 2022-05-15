
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


      <form action="{{route('cheif-upload')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group" >
          <label for="formGroupExampleInput">Name</label>
          <input type="text" class="form-control" id="formGroupExampleInput"  name="title"  required placeholder="Example Title">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Job</label>
          <input type="text" class="form-control" id="formGroupExampleInput2"  name="job" placeholder="Another input">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Image</label>
          <input type="file" class="form-control" id="formGroupExampleInput2"  name="file" placeholder="Another input">
        </div>
        <div class="form-group" >
            <label for="formGroupExampleInput">Facebook</label>
            <input type="text" class="form-control" id="formGroupExampleInput"  name="facebook"  required placeholder="Example Title">
          </div><div class="form-group" >
            <label for="formGroupExampleInput">Twitter</label>
            <input type="text" class="form-control" id="formGroupExampleInput"  name="twitter"  required placeholder="Example Title">
          </div><div class="form-group" >
            <label for="formGroupExampleInput">Instagram</label>
            <input type="text" class="form-control" id="formGroupExampleInput"  name="instagram"  required placeholder="Example Title">
          </div>
        
          <div class="form-group">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
          </div>
        </div>     
      </form>



@include('admin.js')
