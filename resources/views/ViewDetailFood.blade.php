<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="card" style="width: 18rem;">
        <h1></h1>
        <div class="card-body">
            <img src="/img/{{ $restaurant['image'] }}" class="card-img-top" alt="..." width="50px"></a>
          <h5 class="card-title">{{$restaurant['name']}}</h5>
          <p class="card-subtitle mb-2 text-muted">{{$restaurant['discription']}}</p>
          {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
          <a href="#" class="card-link">{{$restaurant['prices']}}</a>
          <a href="#" class="card-link">VND</a>
        </div>
      </div>
</body>
</html>