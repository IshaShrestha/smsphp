<!DOCTYPE html>
<html>
    <head>
        <title></title>
</head>
<body>
    <div class="container">
        @if(session('success'))
            <div class="alert alert.success">{{session('success')}}</div>
        @else
        <div class="alert alert.error">{{session('error')}}</div>
        @endif
</div>
</body>
</html>