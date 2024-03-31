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
                <form action="{{ route('products.update', $products->id) }}" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-4">
                                <label for="form-label">First Name</label>
                                <input type="text" class="form-control" value="{{ $products->firstname }}" name="firstname" placeholder="First Name">
                            </div>
                            <div class="mt-4">
                                <label for="form-label">Last Name</label>
                                <input type="text" class="form-control" value="{{ $products->lastname }}" name="lastname" placeholder="Last Name">
                            </div>
                            <div class="mt-4">
                                <label for="form-label">Age</label>
                                <input type="text" class="form-control" value="{{ $products->age }}" name="age" placeholder="Age">
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-success btn-sm"> Save</button>
                                <button type="reset" class="btn btn-danger btn-sm"> reset</button>
                            </div>
                        </div>
                    </div> 
                </form>
            </div>
        </div>
    </body>
</html>
