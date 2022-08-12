<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div id="div1">
        @foreach ($names as $name)
            {{ $name->name }}
            <br>
        @endforeach
    </div>
    @vite(['resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        Pusher.logToConsole = true;
        var pusher = new Pusher('efc04d30c4ebdeded88b', {
            cluster: 'ap1'
        });
        var channel = pusher.subscribe('channel-chat');
        channel.bind('channel-chat', function(data) {
            $.ajax({
                url: "view",
                success: function(result) {
                    $("#div1").html(result);
                }
            });
        });
    </script>
</body>

</html>
