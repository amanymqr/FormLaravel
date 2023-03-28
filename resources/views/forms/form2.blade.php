<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <div class="container my-5">
        <h1>Basic Form</h1>
        <form action="{{ route('form2_data') }}" method="post">
            @csrf

            <div class="mb-3">
            {{--  <input type="hidden" name="_token" value="{{ csrf_token() }}">  --}}

            {{--  {{ csrf_feild()}}  --}}
            <label >Name</label>
            <input class="form-control mb-4" type="text" placeholder="name" name="name">

            <label >Email</label>
            <input class="form-control mb-4" type="email" placeholder="email" name="email">

            <label >Age</label>
            <input class="form-control mb-4" type="number" placeholder="age" name="age">



            <div class="text-center">
                <button class="btn btn-primary w-25">send</button>
            </div>
            </div>

        </form>
    </div>
</body>
</html>
