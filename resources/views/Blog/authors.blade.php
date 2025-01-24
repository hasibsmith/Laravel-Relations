<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors and Books</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .category {
            margin-bottom: 30px;
        }

        .category h2 {
            color: #444;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
        }

        .authors,
        .books {
            margin-left: 20px;
        }

        .author,
        .book {
            margin: 5px 0;
        }

        .subheading {
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Authors and Books</h1>




    @foreach ($info as $item)
        <div class="category">
            <h2>Fiction</h2>
            <div class="subheading">Authors:</div>

            <div class="authors">
                <div class="author">
                    <{{ $item->authors_name }}< /div>

                </div>

                @if ($item->firstAddress)
                    <p>{{ $item->firstAddress->books_name }}</p>
           
                @endif

                {{-- @foreach ($item->books as $book)
                    <div class="subheading">Books:</div>


                    <div class="books">
                        <div class="book">{{ $book->books_name }}</div>

                    </div>
                @endforeach --}}

            </div>
    @endforeach

</body>

</html>
