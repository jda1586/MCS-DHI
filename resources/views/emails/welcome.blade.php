<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>


<div style="text-align: center;">
    <img src="http://www.dreamhouseinternational.com/wp-content/uploads/2015/10/Logo-mini5.png" alt="">
</div>
<div style="width: 75%; margin: auto;">
    <h2>Welcome to Dream House </h2>
    <div>
        <p>Dear: {!! $data['name'].' '.$data['lastname']  !!} .<br>
            Welcome to the biggest opportunity of your life. Below we give you access to the platform DreamHose International.<br><br>
            User: {!! $data['user']  !!}  <br>
            Password: {!! $data['password'] !!}    <br><br>

            Welcome!
        </p>
        <p>Sincerely: <br>
            DreamHouse International.
        </p>

        {{--<p>Este correo se genero de forma automatica, no contestar. Si usted tiene alguna duda mandar un correo a la siguente dirección: "soporte&#64;dreamhouseinternational.com"</p>--}}
    </div>
</div>
</body>
</html>