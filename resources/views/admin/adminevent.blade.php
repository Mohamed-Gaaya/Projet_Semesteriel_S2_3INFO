<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">

    @include("admin.navbar")

        <form action="{{url('/uploadevent')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div>
            <label>Name</label>
            <input style="color: blue;" type="text" name="name" placeholder="enter event name">

          </div>
          <div>
            <label>Description</label>
            <input style="color: blue;" type="text" name="name" placeholder="enter event description">

          </div>
          <div>
            
            <input type="file" name="image">

          </div>

          <div>
            
            <input style="color: blue;" type="submit" value="Save">

          </div>
        </form>

        <table  bgcolor="black">
          <tr>
            <th style="padding:30px;">Event Name</th>
            <th style="padding:30px;">Description</th>
            <th style="padding:30px;">Image</th>
            <th style="padding:30px;">action1</th>
            <th style="padding:30px;">action2</th>
          </tr>
          @foreach($data as $data)
          <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>
            <td><img height="200" width="200" src="/eventimage/{{$data->image}}"></td>
            <td><a href="{{url('/updateevent',$data->id)}}">Update</td>
            <td><a href="{{url('/deleteevent',$data->id)}}">Delete</td>
          </tr>
          @endforeach

        </table>


    </div>
    @include("admin.adminscript")

  </body>
</html>