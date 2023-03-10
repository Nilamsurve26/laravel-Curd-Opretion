@include('head')
<div class="container">
<div class="row">
  <div class="col-md-6"> 
      @php
          $colors = json_decode($students->color);
      // print_r($colors);
      @endphp
    <form class="form-horizontal" method="post" action="{{ url('update/'.$students->id)}}">
    {{-- <form class="form-horizontal" method="post" action="/students"> --}}
    {{ csrf_field() }}
  <fieldset>
    <legend>laravel curd</legend>

    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Username</label>
      <input type="text" name="username"  value="<?php echo $students->username; ?>"class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Password</label>
        <input type="password" name="password" value="<?php echo $students->password; ?>" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter username">
    </div>
     
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $students->email; ?>" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>

    <div class="form-group">
        <label>Age</label>
        <input type="number" class="form-control" name="age" id="age" value="<?php echo $students->age; ?>">
    </div>

    <div class="form-group">
        <label>Phone</label>
        <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $students->phone; ?>">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Description</label>
      <!-- <input type="text" class="form-control" id="description" placeholder="description"> -->
      <textarea class="form-control" name="description"  placeholder="textarea" cols="10" rows="3"><?php echo $students->description; ?></textarea>
    </div>

    <div class="form-group">
      <label>Birth Date</label>
      <input type="date" class="form-control" name="date" id="date" value="<?php echo $students->date; ?>">
    </div>

    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" id="Active" name="Active"
        <?php 
        if($students->Active=="1")
            {   echo"checked";
            }?>
            > I agree to the terms and conditions.
      </div>
     </div>

    <div class="form-group">
      <label for="gender">Gendar</label>
      <div class="form-check"> 
          <input type="radio" name="gender" value="Male" id="genderM"class="form-check-input"
      <?php 
            if($students->gender=="Male")
                {   echo"checked";
                }?>
                >Male
      </div>
      <div class="form-check"> 
               <input type="radio" name="gender" value="Female" id="genderF" class="form-check-input"
      <?php 
              if($students->gender=="Female")
                  {   echo"checked";
                  }?>> female
      </div>
      <div class="form-group">
            <label>Colours</label>
            <input type="checkbox" value="Red" id="colour1" name="color[]" {{ in_array('Red',$colors)? 'checked':''}} >
            <label for="red">Red</label>
            <input type="checkbox" value="Yellow" id="colour2" name="color[]" {{ in_array('Yellow',$colors)? 'checked':''}}>
            <label for="yellow">Yellow</label>
            <input type="checkbox" value="Green" id="colour3" name="color[]" {{ in_array('Green',$colors)? 'checked':''}}>
            <label for="green">Green</label>  
            <input type="checkbox" value="Blue" id="colour4" name="color[]" {{ in_array('Blue',$colors)? 'checked':''}}>
            <label for="green">Blue</label>    
            <input type="checkbox" value="White" id="colour5" name="color[]" {{ in_array('White',$colors)? 'checked':''}}>
            <label for="green">White</label>    
      </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/" class="btn btn-primary">Back</a>
  </fieldset>
</form>
</div>
</div>
</div>
