<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Driver</title>
</head>
<body>
    
    <form action="{{ route('driver_store') }}" method="post">
        {{ csrf_field() }}
        First Name : <input type="text" name="first_name" id="first_name"><br />
        Last Name : <input type="text" name="last_name" id="last_name"><br />
        Address : <textarea name="address" id="address" cols="30" rows="10"></textarea><br />
        <button type="submit">Save</button>
    </form>

</body>
</html>