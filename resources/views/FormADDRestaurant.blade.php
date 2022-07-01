<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* * {
    margin: 0;
    padding: 0;
    font-family: 'Open Sans', sans-serif;
    box-sizing: border-box;
    scroll-behavior: smooth;
} */
.container {
    position: absolute;
    top: calc(25% - 200px);
    left: calc(40% - 350px);
    padding: 3px;
    min-width: 700px;
    min-height: 350px;
    border: 1px solid #ddd;
    font-size: 1.2em;
    text-transform: capitalize;
    font-weight: 600;
    color: #222;
}
form#form {
    background-color: rgb(238 238 238 / 60%);
    width: 100%;
    min-height: 100%;
    padding: 25px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.column {
    width: 48%;
}
.field {
    margin: 10px 0px;
}
input {
    position: relative;
    padding: 12px;
    margin-top: 10px;
    width: 100%;
    text-transform: capitalize;
    font-weight: 600;
    border: 0px;
    outline: 0;
    border-bottom: 1px solid #a7a7a7;
    border-radius: 5px;
}
.username label::after ,
.password label::after ,
.email label::after {
    content: "*";
    position: absolute;
    color: red;
    margin-left: 5px;
    font-size: 16px;
}
input::placeholder {
    color: #a7a7a7;
}
input.register {
    background-color: rgb(0, 153, 153);
    color: white;
    border: 0px;
    border-radius: 5px;
    padding: 12px;
    font-size: 16px;
}
.Brief label {
    margin-bottom: 10px;
}
textarea {
    margin-top: 10px;
    height: 120px;
    border: 0;
    width: 100%;
    border-radius: 5px;
   outline: 0;
  padding:12px;
}
    </style>
</head>
<body>
    <div class="container">
        <center> <h3>FORM THÊM FOOD</h3></center>
        <button class="btn btn-success"> <a href="{{ route('restaurants.index') }}">Quay lại trang</a></button>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form method='POST' enctype='multipart/form-data' action='{{ route('restaurants.store') }}' id="form">
                @csrf
                <div class="column one">
               
                    <div class="field username">
                        <label for="Username_">Hinh anh</label>
                        <input type="file" name="image"  id="Username_" placeholder="hinh anh"  onchange="changeImage(event)" required/>
                        <img src="/img/{{ isset($restaurants) ? $restaurants->image : '' }}" alt="" id="preview-img" />
                        <script>
                            const changeImage = (e) => {
                                var imgEle = document.getElementById('preview-img')
                                imgEle.src = URL.createObjectURL(e.target.files[0])
                                imgEle.onload = () => {
                                    RL.revokeObjectURL(output.src)
                                }
                            }
                        </script>
                    </div>
                    <div class="field password">
                        <label for="Password_">name</label>
                        <input type="text"name="name" id="Password_" placeholder="type a complex password" required/>
                    </div>
                    <div class="field email">
                        <label for="Email_">prices</label>
                        <input type="text" name="prices" id="Email_"  placeholder="type a valid email" required/>
                    </div>
                </div>
                <div class="column two">
                    <div class="field phone">
                        <label for="Phone_">discription</label>
                        <input type="text" name="discription" id="Phone_"/>
                    </div>
                    <div class="field Brief">
                        <label for="inputCity">Chọn Tên nhà sx</label>

                        {{-- <input type="text" value="{{ isset($car) ?$car->manufacture->name : '' }}" name="name"class="form-control"
                            id="inputCity"> --}}
        
                        <select name="name" id="restaurants">
                            {{-- <option value="{{ isset($car) ?$car->manufacture->name : '' }}"></option>
                              <option value="{{ isset($car) ?$car->manufacture->name : '' }}"></option>
                              <option value="{{ isset($car) ?$car->manufacture->name : '' }}"></option>
                              <option value="{{ isset($car) ?$car->manufacture->name : '' }}"></option> --}}
                            @foreach ($list as $item)
                                <option value="{{ $item->id }}"> {{ $item->name }} </option>
                            @endforeach
                        </select>
                        <br><br>
                    </div>
                </div>
                <input type="submit" class="register"/>
            </form>
        </div>
</body>
</html>