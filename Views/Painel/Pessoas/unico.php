<style>
	.svg-inline--fa.fa-w-16 {
		width: 45px;
		height: 25px;
	}
</style>
<div class="container-fluid"  style="background-color:#2e3192 ; color: #fef200; text-align: center;">
	<div class="row" style="padding: 20px;">
		<div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-1">
			<!-- Botão para acionar modal -->
			<label style="font-weight:bold;" for="nome">Foto:</label>
			<a data-toggle="modal" class="form-control" style="background-color: #fef200; color: #2e3192; padding-left: 0" data-target="#mudaFoto"><i class="far fa-image"></i></a>
		</div>
		<!-- Modal Mudar Avatar -->
		<div class="modal fade" id="mudaFoto" tabindex="-1" role="dialog" aria-labelledby="mudaFotoLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header"  style="background-color:#fef200 ; color: #2e3192; text-align: center;">
						<h5 class="modal-title" id="mudaFotoLabel">Configurações de foto:</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body"  style="background-color:#2e3192 ; color: #fef200; text-align: center;">
						<figure style="background-image: url(<?php echo BASE_URL.'assets/img/avatares/'.$pessoa['avatar']; ?>); background-size: cover; background-position: center; min-height: 445px;">
						</figure>
						<form method="POST" enctype="multipart/form-data">
							<div class="row">
								<div class="form-group col-sm-12 col-md col-lg">
									<input type="file" class="form-control-file" name="avatar">
								</div>
							</div>	
							<input type="submit" class="form-control btn" value="Enviar foto de perfil" style="background-color:#fef200 ; color: #2e3192; text-align: center;">
						</form>
					</div>
					<div class="modal-footer" style="background-color:#fef200 ; color: #2e3192; text-align: center;">
						<button type="button" style="background-color:#2e3192 ; color: #fef200; text-align: center;" class="btn form-control" data-dismiss="modal">Desistir</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Final do Modal de Mudança do Avatar -->
		<div class="form-group col-sm-10 col-md-10 col-lg-10 col-xl-6">
			<label style="font-weight:bold;" for="nome">Nome:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['nome']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-5 col-lg-4 col-xl-5">
			<label style="font-weight:bold;" for="nome">Nome de Guerra:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['nome_guerra']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md col-lg-8 col-xl-6">
			<label style="font-weight:bold;" for="email">Email:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['email']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-4 col-lg-3 col-xl-3">
			<label style="font-weight:bold;" for="telefone">Celular:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['celular01']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-4 col-lg-3 col-xl-3">
			<label style="font-weight:bold;" for="telefone">Celular 02:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['celular02']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-4 col-lg-3 col-xl-2">
			<label style="font-weight:bold;" for="cpf">CPF:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['cpf']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-3 col-lg-3 col-xl-2">
			<label style="font-weight:bold;" for="sexo">Sexo:</label>
			<div class="form-control"><?php echo($pessoa['sexo'] == 'M')?'Masculino':'Feminino' ; ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-2 col-lg-2 col-xl-1">
			<label style="font-weight:bold;" for="idade">Idade:</label>
			<?php 
//calcular a idade
// Declara a data!
			$data = utf8_encode($pessoa['nascimento']);

// Separa em dia, mês e ano
			list($ano, $mes, $dia) = explode('-', $data);

// Descobre que dia é hoje e retorna a unix timestamp
			$hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
// Descobre a unix timestamp da data de nascimento do fulano
			$nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

// Depois apenas fazemos o cálculo já citado :)
			$idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
			?>
			<div class="form-control"><?php echo $idade; ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-7 col-lg-6 col-xl-4">
			<label style="font-weight:bold;" for="rg">RG - Expedidor - Expedição:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['rg'].' - '.$pessoa['rg_expedidor'].' - '.date('d/m/Y', strtotime($pessoa['rg_expedicao']))); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-3 col-lg-4 col-xl-3">
			<label style="font-weight:bold;" for="nascimento">Nascimento:</label>
			<div class="form-control"><?php echo date('d/m/Y',  strtotime(utf8_encode($pessoa['nascimento']))); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-4 col-lg-3 col-xl-3">
			<label style="font-weight:bold;" for="estado_civil">Est. Civ.:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['estado_civil']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-5 col-lg-5 col-xl-4">
			<label style="font-weight:bold;" for="nacionalidade">Naturalidade:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['cidade_naturalidade'].'-'.$pessoa['uf_naturalidade_sigla']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-5 col-lg-4 col-xl-2">
			<label style="font-weight:bold;" for="naturalidade">Matrícula:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['matricula']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-5 col-lg-4 col-xl-3">
			<label style="font-weight:bold;" for="naturalidade">Usuário:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['usuario']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-2 col-lg-1 col-xl-1">
			<label style="font-weight:bold;" for="filhos">Filhos:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['dependentes']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-9 col-lg-7 col-xl-6">
			<label style="font-weight:bold;" for="endereco">Logradouro / Endereço</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['logradouro'].' '.$pessoa['endereco']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-3 col-lg-2 col-xl-2">
			<label style="font-weight:bold;" for="numero">Número:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['numero']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-6 col-lg-4 col-xl-3">
			<label style="font-weight:bold;" for="bairro">Bairro:</label>
			<div class="form-control"><?php echo $pessoa['bairro']; ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-6 col-lg-6 col-xl-5">
			<label style="font-weight:bold;" for="cidade">Cidade:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['cidade_residencial']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-12 col-lg-12 col-xl-7">
			<label style="font-weight:bold;" for="complemento">Complemento:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['complemento']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-12 col-lg-5 col-xl-4">
			<label style="font-weight:bold;" for="bairro">Função:</label>
			<div class="form-control"><?php echo $pessoa['funcao']; ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-5 col-lg-3 col-xl-3">
			<label style="font-weight:bold;" for="bairro">CNH:</label>
			<div class="form-control"><?php echo $pessoa['cnh']; ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-2 col-lg-1 col-xl-2">
			<label style="font-weight:bold;" for="`cidade">Cat.:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['cnh_cat']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-5 col-lg-3 col-xl-3">
			<label style="font-weight:bold;" for="complemento">Venc. CNH:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['cnh_venc']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-12 col-lg-5 col-xl-4">
			<label style="font-weight:bold;" for="`cidade">Graduação:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['graduacao']); ?></div>
		</div><hr>
		<div class="form-group col-sm-12 col-md-12 col-lg-7 col-xl-8">
			<label style="font-weight:bold;" for="conjuge">Conjuge:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['conjuge_nome']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-7 col-lg-7 col-xl-6">
			<label style="font-weight:bold;" for="conjuge">Profissão do Conjuge:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['conjuge_profissao']); ?></div>
		</div>
		<div class="form-group col-sm-12 col-md-5 col-lg-5 col-xl-6">
			<label style="font-weight:bold;" for="conjuge">Celular do Conjuge:</label>
			<div class="form-control"><?php echo utf8_encode($pessoa['conjuge_celular']); ?></div>
		</div>
	</div>
	<hr>
	
	<div style="margin-bottom: 20px;">
	<a href="<?php echo BASE_URL; ?>pessoas" class="btn form-control" style="background-color:#fef200 ; color: #2e3192; text-align: center;">
		Voltar
	</a><br>
	</div>
	<div style="margin-bottom: 20px;">
	<a href="<?php echo BASE_URL.'pessoas/editar/'.$pessoa['id']; ?>" class="btn form-control" style="background-color:#fef200 ; color: #2e3192; text-align: center;">
		Editar
	</a><br>
	</div>
	<div style="margin-bottom: 20px;">
	<a href="<?php echo BASE_URL.'pessoas/relatorio/'.$pessoa['id']; ?>" class="btn form-control" style="background-color:#fef200 ; color: #2e3192; text-align: center;">
		Gerar PDF
	</a>
	</div>
</div>
