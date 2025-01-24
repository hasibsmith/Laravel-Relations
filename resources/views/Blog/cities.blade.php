<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cities and Addresses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .city-list {
            list-style-type: none;
            padding: 0;
        }
        .city-item {
            margin-bottom: 15px;
        }
        .city-item h3 {
            margin: 0;
            font-size: 1.2em;
        }
        .city-item p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <h1>Cities and Addresses</h1>
    <ul class="city-list">
        @foreach ($info as $item)
       
        <li class="city-item">
            <h3>{{$item->cities_name}}</h3>
            @foreach ($item->addresses as $address)
            <p>{{ $address->addresses_name }}</p>
        @endforeach
        </li> 
        @endforeach
       

    </ul>

</body>
</html>
