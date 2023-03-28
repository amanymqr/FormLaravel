<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <div class="container my-5">
{{--  global error  --}}
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ( $errors->all() as  $error)
                        <li><p>{{  $error }}</p></li>
                    @endforeach
                </ul>
            </div>
        @endif


        <h1 class="text-center my-4">Upload your CV</h1>
        <form action="{{ route('form4_data') }}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="mb-3">
                <div class="mb-3">
                    <label >Name</label>
                    <input class="form-control @error('name')is-invalid @enderror " type="text" placeholder="name" name="name"
                    value="{{ old('name')}}">
                {{--  inline validation  --}}
                    @error('name')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror
            </div>


            <div class="mb-3">
                <label >CV</label>
                <input class="form-control " type="file" name="cv">
            </div>

            <div class="text-center">
                <button class="btn btn-dark w-100">Upload</button>
            </div>

        </form>


    </div>
</body>
</html>
