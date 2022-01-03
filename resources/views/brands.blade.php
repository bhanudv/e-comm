<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brands</title>
</head>
<body>
    <form action={{ route('brands.store') }} method="POST">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="Submit Brand">
    </form>
    @foreach($brands as $brand)
        <p>
            {{ $brand->name }}
        </p>
    @endforeach
</body>
</html>