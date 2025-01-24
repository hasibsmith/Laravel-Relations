<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts and Comments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .post {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .post h2 {
            margin: 0;
            font-size: 1.5em;
        }

        .post p {
            margin: 10px 0;
        }

        .comments {
            margin-top: 15px;
        }

        .comment {
            margin-left: 20px;
            padding: 10px;
            border-left: 2px solid #007bff;
            background: #f9f9f9;
            border-radius: 3px;
        }
    </style>
</head>

<body>

    <h1>Posts and Comments</h1>

    @foreach ($post as $posts)
        <div class="post">
            <h2>Post Name</h2>
            <p>{{ $posts->name }}</p>


            <div class="comments">
                <h4>Comments:</h4>
                <ul>
                @foreach ($posts->comment as $comments)
                    <div class="comment">
                        <p><li>{{ $comments->comment }}</li></p>
                       
                    </div>
                @endforeach
            </ul>
            </div>

        </div>
    @endforeach

</body>

</html>
