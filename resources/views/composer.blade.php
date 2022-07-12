<!DOCTYPE html>
<html>
    <head>
        <title></title>
</head>
<body>

<form method="post" action="{{route('send.sms')}}">
  {{method_field('post')}}
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">mobile number</label>
    <input type="text" name="mobile_no" class="form-control" id="mobile_no" aria-describedby="emailHelp" placeholder="Enter number">
    
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
</div>
</body>
</html>
