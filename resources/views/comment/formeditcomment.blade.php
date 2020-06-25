<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Comment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">Edit Comment</div>
                    <div class="card-body">
                        <form action="{{route('updatecomment', $comment->id)}}" method="post">
                            @csrf
                            @method('put')
                            <input type="text" name="comment" value="{{$comment->comment}}">
                           <button type="submit">Update Comment</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>