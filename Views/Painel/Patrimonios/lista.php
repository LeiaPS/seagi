<table class="table table-striped table-bordered  usuarios lista-clientes" style="color: #fef200; background-color: #2e3192;">
  <thead>
    <tr>
      <th colspan="9">
        <a class="btn form-control" style="color: #2e3192; background-color: #fef200;font-weight: bold; font-size: 15px;" href="<?php echo BASE_URL; ?>">Home</a>
      </th>
    </tr>
    <tr>
      <th colspan="9">
        <a class="btn form-control" style="color: #2e3192; background-color: #fef200;font-weight: bold; font-size: 15px;" href="<?php echo BASE_URL.'usuarios/criar'; ?>">Adicionar Usuário</a>
      </th>
    </tr>
    <form method="POST">
      <tr>
        <th colspan="6">
          <select name="filtro" id="" class="form-control">
            <option <?php echo($filtro == 'nome_guerra')?'selected':''; ?> class="form-control" value="nome_guerra">Nome de Guerra (Padrão)</option>
            <option <?php echo($filtro == 'nome')?'selected':''; ?> class="form-control" value="nome">Nome</option>
            <option <?php echo($filtro == 'graduacao')?'selected':''; ?> class="form-control" value="graduacao">Graduação</option>
            <option <?php echo($filtro == 'permissao')?'selected':''; ?> class="form-control" value="permissao">Permissão</option>
          </select>
        </th>
        <th colspan="3">
          <input type="submit" value="Filtrar" class="form-control">
        </th>
      </tr>
      </form>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Nome de Guerra</th>
      <th scope="col">Graduação</th>
      <th scope="col">Função</th>
      <th scope="col">Situação</th>
      <th scope="col">Permissão</th>
      <th colspan="3" scope="col">Ações</th>
    </tr>
    <tr>
    <th colspan="11">
  <input type="text" alt="lista-clientes" class="form-control input-search" placeholder="Buscar em todos os campos" style="text-align: center;">
  </th></tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $key => $usuario): ?>     
      <tr>
        <td ><?php echo utf8_encode($usuario['nome']); ?></td>
        <td><?php echo utf8_encode($usuario['nome_guerra']); ?></td>
        <td><?php echo utf8_encode($usuario['graduacao']); ?></td>
        <td><?php echo utf8_encode($usuario['funcao']); ?></td>
        <td><?php echo ($usuario['status'] == 1)?'Ativo':'Inativo'; ?></td>
        <td><?php echo ($usuario['permissao'] == 1)?'Administrador':'Usuário'; ?></td>
        <td class="link"><a href="<?php echo BASE_URL.'usuarios/ver/'.$usuario['id']; ?>"><i class="fas fa-eye"></i></a></td>
        <td class="link"><a href="<?php echo BASE_URL.'usuarios/editar/'.$usuario['id']; ?>"><i class="fas fa-user-edit"></i></a></td>
        <td class="link"><a data-toggle="modal" data-target="#apagarUsuario<?php echo $usuario['id']; ?>"><i class="fas fa-user-minus"></i></a></td>
      </tr>
<!-- Modal -->
<div class="modal fade" id="apagarUsuario<?php echo $usuario['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="apagarUsuario<?php echo $usuario['id']; ?>Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="apagarUsuario<?php echo $usuario['id']; ?>Label">Confirmar exclusão?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Não poderá ser revertida esta exclusão!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Desistir</button>
        <a type="button" class="btn btn-primary" href="<?php echo BASE_URL.'usuarios/deletar/'.$usuario['id']; ?>">Confirmar exclusão!</a>
      </div>
    </div>
  </div>
</div>
    <?php endforeach ?>
  </tbody>
</table>

