<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TeSt</title>
</head>
<body>
    @foreach ($tests as $test )
        <h1><?= $test; ?></h1>
    @endforeach
    <h1>This is the added part</h1>


</body>
</html>