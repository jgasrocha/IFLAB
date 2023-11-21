<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-dWNv2a6bS2ibTAMtEx6d7m5BNvUXF5Ley7NQ4mIbh3eZHQ6Qwaog+kL6Nv1/EmrY3gQ1AxB+PXZdCNo0z89Tfw==" crossorigin="anonymous" />
    <title>Login</title>
</head>

<style>
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: rgb(255, 255, 255);
            font-family: 'Poppins', sans-serif;
        }

        form {
            background-color: white;
            max-width: 500px;
            width: 70%;
            padding: 20px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border-radius: 1vh;
            border: 2px solid rgb(249, 66, 66);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        form:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        button {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #btn:hover {
        color: black;
}
.nav{
    background-color: rgb(255, 255, 255);
    position: absolute;
    border: 4px black;
}

</style>

<body>
    <nav class="nav">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo left" style="color: black">IFLab<i class="material-icons right" style="border: none">date_range</i></a>
            <ul id="nav-mobile" class="left">
                <li><a href="{{route('login.form')}}">
                    <i class="fa-solid fa-calendar" style="color: #000000;"></i>
                </a></li>
            </ul>
        </div>        
     </nav>
    @yield('conteudo')
</body>
</html>