<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="d-flex">
    @foreach ($usuarios as $usuario)
        <div class="card mx-auto m-1 " style="width: 18rem;">
            <img class="w-25 card-img-top mx-auto" src="{{ $usuario['img'] }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $usuario['nombre'] }}</h5>
                <h6 class="card-title">{{ $usuario['apellido'] }}</h6>
                <p class="card-text">{{ $usuario['numero'] }}</p>
                <a href="{{ $usuario['url'] }}" class="btn btn-primary"><i class="fa-brands fa-linkedin"></i>
                    Linkedin</i></a>
                <h6 class="card-title">Tecnologias</h6>

                <div class="d-flex justify-content-center align-items-center">
                    @foreach ($usuario['tecnologias'] as $tec)
                        <p class="card-text btn btn-info m-1">{{ $tec }}</p>
                    @endforeach
                </div>

            </div>

        </div>
    @endforeach
</body>

</html>
