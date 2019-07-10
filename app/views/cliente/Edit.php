<div class="base-home">
    <h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
    <div class="base-formulario">	
        <form action="<?=URL_BASE.'cliente/salvar'?>" method="POST">
            <label>Nome</label>
                <input name="txt_nome" value="<?=$cliente->nome?>" type="text" placeholder="Insira umm nome">
            <label>Email</label>
                <input name="txt_email" value="<?=$cliente->email?>" type="text" placeholder="Insira um email">
            <label>Telefone</label>
                <input name="txt_fone" value="<?=$cliente->fone?>" type="text" placeholder="Insira seu telefone">

            <input type="hidden" name="id_cliente" value="<?=$cliente->id_cliente?>">
            <input type="submit" value="Cadastrar" class="btn">
            <input type="reset" name="Reset" id="button" value="Limpar" class="btn limpar">
        </form>
    </div>	
</div>	