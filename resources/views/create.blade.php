<!DOCTYPE html>
<html>

<head>
    <title>Paginated Tests</title>
    <!-- Include Bootstrap for styling (optional) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>

<body>


    @foreach ($tests as $test )
        <h1>{{$test->name}}</h1>
        <h1>{{$test->user_age}}</h1>
    @endforeach

</body>

</html>
