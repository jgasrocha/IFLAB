<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <style>
        label, input{ display: block;}
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Pessoa</legend>

        <form method="post" action="/pessoa/form/save">

        <input type="hidden" value="<?= $model->id ?>" name="id"/>
        
            <label for="nome">Nome :</label>
            <input id="nome" name= "nome" value="<?= $model->nome ?>" type="text"/>
            
            <label>CPF:</label>
            <input id="cpf" name="cpf" value="<?= $model->cpf ?>" type="number"/>

            <label>Data Nascimento:</label>
            <input id="data_nascimento" name="data_nascimento" value="<?= $model->data_nascimento ?>" type="date">

            <button type="submit">Salvar</button>
        </form>
    </fieldset>
</body>
</html>