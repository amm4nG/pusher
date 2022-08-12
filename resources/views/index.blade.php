@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Nama</h4>
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                    </tr>
                    @foreach ($names as $name)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td> {{ $name->name }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
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
                url: "/",
                success: function(result) {
                    $("#div1").html(result);
                }
            });
        });
    </script>
@endsection
