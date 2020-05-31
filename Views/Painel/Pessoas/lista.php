<div class="table-responsive">
  <table class="table table-sm table-bordered table-striped lista-clientes" style="background-color: #2e3192; color: #fef200; text-align: center;">
    <?php if (!empty($pessoas)): ?>

      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Nome de Guerra</th>
          <th scope="col">Matrícula</th>
          <th scope="col">Telefone</th>
          <th colspan="4" scope="col"> Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pessoas as $pessoa): ?>          
          <tr>
            <td scope="col"><?php echo utf8_encode($pessoa['nome']); ?></td>
            <td scope="col"><?php echo utf8_encode($pessoa['nome_guerra']); ?></td>
            <td scope="col"><?php echo utf8_encode($pessoa['matricula']); ?></td>
            <td scope="col"><?php echo utf8_encode($pessoa['celular01']); ?></td>
            <td scope="col"><a class="btn" style="background-color: #fef200; color: #2e3192; text-align: center;" href="<?php echo BASE_URL.'pessoas/unico/'.$pessoa['id']; ?>"><i class="fas fa-eye"></i></a></td>
            <td scope="col"><a class="btn" style="background-color: #fef200; color: #2e3192; text-align: center;" href="<?php echo BASE_URL.'pessoas/editar/'.$pessoa['id']; ?>"><i class="fas fa-user-edit"></i></a></td>
            <td scope="col"><a class="btn" style="background-color: #fef200; color: #2e3192; text-align: center;" href="<?php echo BASE_URL.'pessoas/relatorio/'.$pessoa['id']; ?>"><i class="far fa-file-pdf"></i></a></td>
            <td scope="col"><a data-toggle="modal" class="btn" style="background-color: #fef200; color: #2e3192; text-align: center;" data-target="#apagarficha<?php echo utf8_encode($pessoa['id']); ?>"><i class="fas fa-user-times"></i></a></td>
          </tr>

          <!-- Modal Deletar -->
          <div class="modal fade" id="apagarficha<?php echo utf8_encode($pessoa['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="apagarficha<?php echo utf8_encode($pessoa['id']); ?>Label" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header"  style="background-color:#fef200 ; color: #2e3192; text-align: center;">
                          <h5 class="modal-title" id="apagarficha<?php echo utf8_encode($pessoa['id']); ?>Label">Confirmar exclusão?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                         <strong> Não poderá ser revertida esta exclusão!</strong>
                      </div>
                      <div class="modal-footer"  style="background-color:#2e3192 ; color: #fef200; text-align: center;">
                          <button type="button" style="background-color: #fef200; color: #2e3192; text-align: center;" class="btn btn-secondary" data-dismiss="modal">Desistir</button>
                          <a type="button" style="background-color: #ff0000; color: #000; text-align: center;" class="btn btn-primary" href="<?php echo BASE_URL.'pessoas/deletar/'.$pessoa['id']; ?>">Confirmar exclusão!</a>
                      </div>
                  </div>
              </div>
          </div>
        <?php endforeach ?>
      </tbody>
      <?php else: ?>
        <tr>
          <th>Não há usuários cadastrados</th>
        </tr>
      <?php endif ?>
    </table>
  </div>