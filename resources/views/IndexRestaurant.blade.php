<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    #idimg{
        width: 30%;
        /* height: 1000px; */
    }
</style>
<body>
    {{-- <div class="container"> --}}
        <div>
            @if (Session::has('thành công'))
                {{ Session::get('thành công') }}
            @endif
        </div>
        <div class="row">
            <div class="col-xs-5">
                <h2>AUNVU <b>Listfood</b></h2>
            </div>
            <div class="col-xs-7">
                <a href="{{ route('restaurants.create') }}" class="btn btn-primary"><i
                        class="material-icons">&#xE147;</i><span>Add New User</span></a>
            </div>
        </div>
        <div class="card-deck" id="idimg">
            @foreach ($restaurants as $restaurants)
                <form action="{{ route('restaurants.index', $restaurants->id) }}" method="post">
                    <div class="card">
                        <img src="/img/{{ $restaurants['image'] }}" class="card-img-top" alt="..." width="50px">
                        <div class="card-body">
                            {{-- <h5 class="card-title">{{$restaurants['image']}}</h5> --}}
                            <p class="card-text" >{{$restaurants['prices']}}</p>
                            <p class="card-text" >{{$restaurants['discription']}}</p>
                            <p class="card-text" ><small class="text-muted">SAN PHAM NGON</small></p>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    {{-- </div> --}}
</body>

</html>
