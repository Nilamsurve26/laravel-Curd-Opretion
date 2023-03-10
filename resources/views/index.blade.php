@include('head')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>Document</title>
</head>
<body>
<div class="container">
  <div class="col-md-12">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
    @endif
     <a href="/create" class="btn btn-success my-5">Add New User</a>
     {{-- <a href="{{route('students.create')}}" class="btn btn-success my-5">Add New User</a>  --}}

    <table class='table table-bordered table-striped'>
   <thead>
        <tr>
        <th scope="col">Sr no </th>   
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Email</th>
        <th scope="col">Description</th>
        <th scope="col">Gender</th>
        <th scope="col">Phone</th>
        <th scope="col">Age</th>
        <th scope="col">Date</th>
        <th scope="col">Active</th>
        <th scope="col">Colors</th>
        <th scope="col">Action</th>
        </tr>
  </thead>
  <tbody>
    <?php
    $sr = 0;
    ?>
    
    @foreach ($students as $student)
    
    <tr class="table-active">
      <th><?php $sr++;?>{{$sr}}</th>
      <td>{{ $student->username}}
      <span class="pull-right">{{$student->created_at->diffForHumans()}}</span></td>
      <td>{{ $student->password}}</td>
      <td>{{ $student->email}}</td>
      <td>{{ $student->description}}</td>
      <td>{{$student->gender}}</td>
      <td>{{$student->phone}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->date}}</td>
      <td>{{$student->Active}}</td>
       {{-- <td>{{$student->color}}</td>  --}}
      <td>
       @php
        $colors = json_decode($student->color);
          print_r($colors);
        @endphp
        {{-- @foreach ($colors as $color)
        {{$color}}   
        @endforeach --}}
        {{-- @foreach($colors as $color )
         {{$color}},
        @endforeach</td> --}}
      
      <td>
        <a href="/edit/{{ $student->id}}" class="btn btn-success">Edit</a>
        <a href="/delete/{{ $student->id}}" class="btn btn-danger"onclick="return confirm('Are you sure to delete?')">delete</a>
      </td> 
    </tr>
    @endforeach
    </tbody>
</table>
{{-- {{$students->links()}}  --}}
</div>
</div>
</body>
</html>
