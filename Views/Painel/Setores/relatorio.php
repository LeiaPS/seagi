
<div class="table-responsive">
  <table class="table table-sm table-bordered table-striped lista-clientes" style="background-color: #2e3192; color: #fef200; text-align: center;">
    <?php if (!empty($usuarios)): ?>

      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Nome de Guerra</th>
          <th scope="col">Matrícula</th>
          <th scope="col">Telefone</th>
          <th colspan="3" scope="col"> Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($usuarios as $usuario): ?>          
          <tr>
            <td scope="col"><?php echo utf8_encode($usuario['nome']); ?></td>
            <td scope="col"><?php echo utf8_encode($usuario['nome_guerra']); ?></td>
            <td scope="col"><?php echo utf8_encode($usuario['matricula']); ?></td>
            <td scope="col"><?php echo utf8_encode($usuario['celular01']); ?></td>
            <td scope="col"><a class="btn" style="background-color: #fef200; color: #2e3192; text-align: center;" href=""><i class="fas fa-eye"></i></a></td>
            <td scope="col"><a class="btn" style="background-color: #fef200; color: #2e3192; text-align: center;" href=""><i class="fas fa-user-edit"></i></a></td>
            <td scope="col"><a class="btn" style="background-color: #fef200; color: #2e3192; text-align: center;" href=""><i class="fas fa-user-times"></i></a></td>
          </tr>
        <?php endforeach ?>
      </tbody>
      <?php else: ?>
        <tr>
          <th>Não há usuários cadastrados</th>
        </tr>
      <?php endif ?>
    </table>
  </div>