<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Lista Pessoas</title>
</head>
<body>
     <table>
          <tr>
               <th></th>
               <th>Id</th>
               <th>Nome</th>
               <th>CPF</th>
               <th>Data Nascimento</th>
          </tr>
          <?php foreach($model->rows as $item):?>
          <tr>

               <td>
                    <a href="/pessoa/delete?id= <?= $item->id ?>">X</a>
               </td>

               <td><?php echo $item->id; ?></td>

               <td>
                    <a href="/pessoa/form?id= <?= $item->id ?>"><?php echo $item->nome; ?></a>
               </td>

               <td><?php echo $item->cpf; ?></td>
               <td><?php echo $item->data_nascimento; ?></td>
          </tr>
          <?php endforeach;?>

          <?php if(count($model->rows) == 0): ?>
               <tr>
                    <td colspan="5">Nenhum registro encontrado.</td>
               </tr>
          <?php endif ?>
     </table>
</body>
</html>
