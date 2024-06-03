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


    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Balance
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Age
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tests as $test)
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $test->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $test->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ 'P'.$test->balance }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $test->user_age }}
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div> 
    <div>
        <nav>
            {{$tests->links()}}
        </nav>
    </div>

    
    </div>

    {{-- <h1 class="font-bold">This is the name: <span class="font-normal">{{$test->name}}</span></h1> --}}

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
