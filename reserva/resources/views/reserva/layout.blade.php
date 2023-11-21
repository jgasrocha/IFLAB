<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-dWNv2a6bS2ibTAMtEx6d7m5BNvUXF5Ley7NQ4mIbh3eZHQ6Qwaog+kL6Nv1/EmrY3gQ1AxB+PXZdCNo0z89Tfw==" crossorigin="anonymous" />


    <title>Document</title>
</head>

<style>
    .outer-form {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: font-family: 'Poppins', sans-serif;
}

.outer-box {
    background-color: rgb(255, 255, 255);
    max-width: 600px;
    width: 70%;
    padding: 20px;
    border: 2px solid rgb(249, 66, 66);
    border-radius: 1vh;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
}

.outer-box:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.inner-form {
    padding: 20px;
}

.form-group {
    margin-bottom: 20px;
}

h1 {
    margin-bottom: 20px;
    font-family: font-family: 'Poppins', sans-serif;
}

label {
    display: block;
    margin-bottom: 8px;
}

input,
select {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

button {
    background-color: red;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.pagina{
    justify-content: center;
    justify-items: center;
    align-content: center;
    align-items: center;
    display: inline;
    display: grid;
}

</style>

<body>
    @yield('conteudo')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>