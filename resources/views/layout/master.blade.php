<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Final-Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="d-flex flex-row align-items-center mt-3">
        <div class="col-1">
            <form action="{{route('home')}}" method="get">
                <button type="submit" class="btn btn-info">Home</button>
            </form>
        </div>
        <div class="col-11">
            <h1 class="text-center">Nguyễn Đình Nhân - APTECH PHP 12</h1></h1>
        </div>
    </div>
</div>
<div class="container">
    @section('content')

    @show
</div>
</body>
</html>