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
        <h2>Add tags to Images</h2>

        <div class="row mt-5">
            @foreach ($images as $image)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/one-one/' . $image->image) }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <p>Tags:
                                @if ($image->tags->isNotEmpty())
                                    {{ str_replace(['[', ']', '"'], '', $image->tags->pluck('name')) }}
                                @else
                                    <b>No tags here </b>
                                @endif


                            </p>
                            <button type="button" data-id="{{ $image->id }}" class="btn btn-warning"
                                data-bs-toggle="modal" data-bs-target="#exampleModal{{ $image->id }}">Add more
                                Tags</button>
                        </div>
                        <div class="modal fade" id="exampleModal{{ $image->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tag for Image</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('imgtag', $image->id) }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Type your
                                                    Tags:</label>
                                                <textarea name="tag_names[]" class="form-control" id="message-text"></textarea>
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>


    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>
