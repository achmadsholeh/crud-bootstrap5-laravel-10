<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </head>
    <body class="antialiased">
        <div class="container">
            <div class="bg-light mt-4 pg-4">
                <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm"> Create </a>
                <p>
                
                    <table class="table">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Age</th>
                            <th>Action</th>
                        </tr>

                        @forelse ($products as $product)

                        <tr>
                            <td>{{ $product->firstname }}</td>
                            <td>{{ $product->lastname }}</td>
                            <td>{{ $product->age }}</td>
                            <td>
                            <form onsubmit="return confirm('Anda yakin ??');" action="{{ route('products.destroy', $product->id) }}" method="POST">
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm"> Show </a>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm"> Edit </a>

                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>
                        </tr>

                        @empty
                            <tr>
                                <td>Data Empty</td>
                            </tr>
                        @endforelse 
                    </table>
            </div>
        </div>
    </body>
</html>
