<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <div class="container my-5">
        <h1>Register Form</h1>
        {{--  @dump($errors->any())  --}}
        {{--  @dump($errors->all())  --}}


{{--  global error  --}}
        {{--  @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ( $errors->all() as  $error)
                        <li><p>{{  $error }}</p></li>
                    @endforeach
                </ul>
            </div>
        @endif  --}}



        <form action="{{ route('form3_data') }}" method="post">
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
                <label >Email</label>
                <input class="form-control @error('email')is-invalid @enderror" type="email" placeholder="email" name="email" value="{{ old('email')}}">
                @error('email')
                        <small class="invalid-feedback">{{ $message }}</small>
                    @enderror

            </div>

            <div class="mb-3">
                <label >Password</label>
                <input class="form-control @error('password')is-invalid @enderror" type="password" placeholder="password" name="password" autocomplete="new-password">
                @error('password')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
            </div>


            <div class="mb-3">
                <label >Confirm Password</label>
                <input class="form-control @error('password_confirmation')is-invalid @enderror" type="password" placeholder="Confirm password" name="password_confirmation">
                @error('password_confirmation')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
            </div>



            <div class="mb-3">
                <label >Bio</label>
                <textarea class="form-control @error('bio')is-invalid @enderror" type="text" placeholder="bio" name="bio" rows="5" value="{{ old('bio')}}"></textarea>
                @error('bio')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
            </div>



            <div class="text-center">
                <button class="btn btn-primary w-25">send</button>
            </div>
            </div>

        </form>
    </div>



</body>
</html>
