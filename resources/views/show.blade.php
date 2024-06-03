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


    <h1 class="font-bold">This is the name: <span class="font-normal">{{$test->name}}</span></h1>

</body>

</html>
