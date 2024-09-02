<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User details</title>
</head>
<body>
    
    <h1>User Details</h1>

    @if(session("name"))
        <h1>Welcome : {{session("name")}}</h1>
    @else
        <h1>There are no user available!</h1>
    @endif
</body>
</html>
