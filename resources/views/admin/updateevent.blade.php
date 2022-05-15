<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">

    @include("admin.navbar")
    <form action="{{url('/updatexevent',$data->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      <div>
        <label>Event Name</label>
        <input style="color: blue" type="text" name="name" value="{{$data->name}}">
        
      </div>
      <div>
        <label>Event Description</label>
        <input style="color: blue" type="text" name="name" value="{{$data->description}}">
        
      </div>

      <div>
        <label>Old Image</label>
        <input height="200" width="200" src="/eventimage/{{$data->image}}">
        
      </div>

      <div>
        <label>New Image</label>
        <input type="file" name="image">
        
      </div>

      <div>
        
        <input  style="color:blue;" type="submit" value="Update Event" required="">
        
      </div>

    </form>

    </div>
    @include("admin.adminscript")

  </body>
</html>