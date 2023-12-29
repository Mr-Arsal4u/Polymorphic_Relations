<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>One to One </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    @include('partials.navbar')
    @include('partials.flash')
    <div class="container-sm" style="padding-top: 30px">
        <h4>Create your post</h4>
        <form method="POST" action="{{ route('create.posts') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-3">
                <input name="title" type="text" class="form-control" id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput">Title</label>
            </div>
            <div class="form-floating">
                <input name="content" type="text" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Content</label>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Please Select Image</label>
                <input class="form-control" name="image" type="file" id="formFile">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @include('partials.footer')

</body>

</html>
