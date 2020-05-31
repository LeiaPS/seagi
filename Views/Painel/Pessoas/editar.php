<style>
    label {
        margin-top: 10px;
        font-weight: 550;
    }
</style>
<form method="POST" style="background-color:#2e3192 ; color: #fef200; padding: 20px; text-align: center;" class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-7 col-xl-5">
	    <label>Nome</label>
	    <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $pessoa['nome']; ?>">
    </div>
    <div class="col-sm-5 col-md-5 col-lg-5 col-xl-3">
    	<label>Nome de Guerra</label>
    	<input type="text" class="form-control" name="nome_guerra" placeholder="Nome de Guerra" value="<?php echo $pessoa['nome_guerra']; ?>">
    </div>
    <div class="col-sm-7 col-md-7 col-lg-6 col-xl-4">
	    <label>Email</label>
	    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $pessoa['email']; ?>">
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
        <label>Celular 01</label>
        <input type="text" class="form-control" name="celular01" placeholder="Telefone" value="<?php echo $pessoa['celular01']; ?>">
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
        <label>Celular 02</label>
        <input type="text" class="form-control" name="celular01" placeholder="Telefone" value="<?php echo $pessoa['celular02']; ?>">
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
    	<label>CPF</label>
    	<input type="text" class="form-control" name="cpf" placeholder="CPF" value="<?php echo $pessoa['cpf']; ?>">
    </div>
    <div class="col-sm-3 col-md-4 col-lg-3 col-xl-3">
	    <label>Sexo</label>
	    <select name="sexo"  class="form-control">
	    	<option value="M" <?php echo($pessoa['sexo'] == 'M')?'Selected':''; ?>>Masculino</option>
	    	<option value="F" <?php echo($pessoa['sexo'] == 'F')?'Selected':''; ?>>Feminino</option>
	    </select>
    </div>
    <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2">
        <label>RG</label>
        <input type="text" class="form-control" name="rg" placeholder="RG" value="<?php echo $pessoa['rg']; ?>">
    </div>
    <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2">
        <label>RG Org.:</label>
        <input type="text" class="form-control" name="rg" placeholder="RG" value="<?php echo $pessoa['rg_expedidor']; ?>">
    </div>
    <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3">
        <label>RG Expedição:</label>
        <input type="date" class="form-control" name="rg" placeholder="RG" value="<?php echo $pessoa['rg_expedicao']; ?>">
    </div>
    <div class="col-sm-5 col-md-5 col-lg-4 col-xl-3">
    	<label>Data Nasc.:</label>
    	<input type="date" class="form-control" name="nascimento" placeholder="Nascimento" value="<?php echo $pessoa['nascimento']; ?>">
    </div>
    <div class="col-sm-5 col-md-5 col-lg-4 col-xl-2">
        <label>Estado Civil:</label>
    <select name="estado_civil" class="form-control" id="">
        <?php foreach ($estados_civis as $ec): ?>
            <option <?php echo($ec['id'] == $pessoa['id_estado_civil'])?'selected':''; ?> value="<?php echo $ec['id']; ?>"><?php echo $ec['nome']; ?></option>
        <?php endforeach ?>
    </select>
    </div>
    <div class="col-sm col-md col-lg-2 col-xl-2">
	    <label>UF Nasc.:</label>
	    <select name="id_uf_naturalidade" id="editEstado" class="form-control">
	    	<?php foreach ($estados as $estado): ?>
	    		<option <?php echo($estado['id'] == $pessoa['id_uf_naturalidade'])?'selected':''; ?> value="<?php echo $estado['id']; ?>" <?php echo($pessoa['id_uf_naturalidade'] == $estado['id'])?'Selected':''; ?>><?php echo utf8_encode($estado['uf']); ?></option>
	    	<?php endforeach ?>
	    </select>
    </div>
    <div class="col-sm col-md col-lg-5 col-xl-4">
        <label>Cidade Nasc.:</label>
        <select name="id_cidade_naturalidade"  id="editCidade" class="form-control">
        </select>
    </div>
    <div class="col-sm-4 col-md-3 col-lg-5 col-xl-2">
        <label>Matrícula</label>
        <input type="text" class="form-control" name="matricula" placeholder="Matrícula" value="<?php echo $pessoa['matricula']; ?>">
    </div>
    <div class="col-sm-4 col-md-3 col-lg-3 col-xl-3">
        <label>Usuário</label>
        <input type="text" class="form-control" name="usuario" placeholder="Usuário" value="<?php echo $pessoa['usuario']; ?>">
    </div>
    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-1">
        <label>Filhos</label>
        <input type="number" class="form-control" name="dependentes" placeholder="Filhos" value="<?php echo $pessoa['dependentes']; ?>">
    </div>
    <div class="col-sm col-md col-lg-2  col-xl-2">
        <label>Lograd.:</label>
        <select name="id_logradouro" id="editLogradouro" class="form-control">
            <?php foreach ($logradouros as $logradouro): ?>
                <option <?php echo($logradouro['id'] == $pessoa['id_logradouro'])?'selected':''; ?> value="<?php echo $logradouro['id']; ?>" <?php echo($pessoa['id_logradouro'] == $logradouro['id'])?'Selected':''; ?>><?php echo utf8_encode($logradouro['nome']); ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="col-sm-4 col-md-3 col-lg-5 col-xl-7">
        <label>Endereço</label>
        <input type="text" class="form-control" name="nume" placeholder="N°" value="<?php echo $pessoa['endereco']; ?>">
    </div>
    <div class="col-sm-4 col-md-3 col-lg-3 col-xl-3">
        <label>Numero</label>
        <input type="number" class="form-control" name="nume" placeholder="N°" value="<?php echo $pessoa['numero']; ?>">
    </div>
    <div class="col-sm-4 col-md-3 col-lg-4 col-xl-4">
        <label>Bairro</label>
        <input type="text" class="form-control" name="bairro" placeholder="Bairro" value="<?php echo $pessoa['bairro']; ?>">
    </div>
    <div class="col-sm col-md col-lg-2 col-xl-2">
        <label>UF:</label>
        <select name="id_uf_residencial" id="editEstadoResidencial" class="form-control">
            <?php foreach ($estados as $estado): ?>
                <option <?php echo($estado['id'] == $pessoa['id_uf_residencial'])?'selected':''; ?> value="<?php echo $estado['id']; ?>" <?php echo($pessoa['id_uf_residencial'] == $estado['id'])?'Selected':''; ?>><?php echo utf8_encode($estado['uf']); ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="col-sm col-md col-lg-3 col-xl-6">
        <label>Cidade:</label>
        <select name="id_cidade_residencial"  id="editCidadeResidencial" class="form-control">       
        </select>
    </div>

    <hr>
</form>
<script>
    const BASE_URL = '<?php echo BASE_URL; ?>';
    var id_cidade_naturalidade = '<?php echo $pessoa['id_cidade_naturalidade']; ?>';
    var id_cidade_residencial = '<?php echo $pessoa['id_cidade_residencial']; ?>';
</script>