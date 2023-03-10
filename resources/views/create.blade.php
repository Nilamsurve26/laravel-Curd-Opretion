@include('head')
<div class="container">
<div class="jumbotron">
{{-- <div class="row">
<div class="col-md-6"> --}}
{{-- @if ((count($errors)>0))
<div class="alert alert-danger">
@foreach ($errors->all() as $error)
{{$error}}
  
@endforeach
</div>
@endif  --}}
<form action="{{ route('insert')}}" method="post" class="form-horizontal">
        {{csrf_field()}}
  <fieldset>
    <legend>laravel curd</legend>
    
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Username</label>
      <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
      @if ($errors->has('username'))
      <div class="alert alert-danger">
        {{$errors->first('username')}}
      </div>  
      @endif
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Password</label>
        <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter password">
        @if ($errors->has('password'))
        <div class="alert alert-danger">
          {{$errors->first('password')}}
        </div>  
        @endif
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        @if ($errors->has('email'))
        <div class="alert alert-danger">
          {{$errors->first('email')}}
        </div>  
        @endif
    </div>

    <div class="form-group">
        <label>Age</label>
        <input type="number" class="form-control" name="age" id="age">
    </div>

    <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control" name="phone" id="phone">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Description</label>
      <textarea class="form-control" name="description" placeholder="textarea" cols="30" rows="3"></textarea>
      @if ($errors->has('description'))
      <div class="alert alert-danger">
        {{$errors->first('description')}}
      </div>  
      @endif
    </div>

    <div class="form-group">
      <label>Birth Date</label>
      <input type="date" class="form-control" name="date" id="date">
    </div>

    <div class="form-group">   
       <label for="gender">Gendar</label>
        <div class="form-check"> 
            <input type="radio" name="gender" value="Male" id="genderM"class="form-check-input" >  Male
        </div>
        <div class="form-check"> 
            <input type="radio" name="gender" value="Female" id="genderF" class="form-check-input"> female
        </div>
    </div><br>

    <div class="form-group">
      <div class="form-check">
          <input class="form-check-input" type="checkbox" value="1" id="Active" name="Active" checked>
          <label class="form-check-label">
              I agree to the terms and conditions.
          </label>
      </div>
    </div><br>

    <div class="form-group">
      <label>kkknnn
        <input type="checkbox" name="notification" value="1">Notification Subscription
      </label>
    </div>
xx
    <div class="form-group">
      <label>Title</label>
      <select class="form-control" name="Ba_status" id="select">
        <option value="">Select Ba status</option>
        <option value="live">Live</option>
        <option value="vacant">Vacant</option>
        <option value="vacant">Hold</option>
        <option value="vacant">Store Closed</option>
      </select>
    </div><br>


    <div class="form-group">
      <label>Colours</label>
      <input type="checkbox" value="Red" id="colour1" name="color[]">
          <label for="red">Red</label>
      <input type="checkbox" value="Yellow" id="colour2" name="color[]">
          <label for="yellow">Yellow</label>
      <input type="checkbox" value="Green" id="colour3" name="color[]">
          <label for="green">Green</label>  
      <input type="checkbox" value="Blue" id="colour4" name="color[]">
          <label for="green">Blue</label>    
      <input type="checkbox" value="White" id="colour5" name="color[]">
          <label for="green">White</label> 
    </div><br>

    

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/" class="btn btn-primary">Back</a>
  </fieldset>
</form>
</div> 
{{-- </div>
</div> --}}
</div>
