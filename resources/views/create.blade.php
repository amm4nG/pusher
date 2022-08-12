<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <form action="{{ route('data.store') }}" method="post">
                    @csrf
                    <input type="text" name="name" class="form-control" id="">
                    <button class="btn btn-danger mt-2" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
