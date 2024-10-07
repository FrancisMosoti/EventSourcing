<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Sourcing</title>
</head>
<body>
    {{-- <h1>Hello World</h1> --}}
    <h1>Order History</h1>
<ul>
    @foreach($history as $event)
        <li>
            <strong>Event:</strong> {{ class_basename($event['event']) }} <br>
            <strong>Data:</strong> {{ json_encode($event['data']) }} <br>
            <strong>Occurred at:</strong> {{ $event['occurred_at'] }}
        </li>
    @endforeach
</ul>

</body>
</html>