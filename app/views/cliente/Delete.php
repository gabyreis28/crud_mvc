<div class="base-home">
    <h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
    <div class="base-formulario">	
        <label>Nome</label>
            <input name="txt_nome" value="<?=$cliente->nome?>" type="text" placeholder="Insira umm nome">
        <label>Email</label>
            <input name="txt_email" value="<?=$cliente->email?>" type="text" placeholder="Insira um email">
        <label>Telefone</label>
            <input name="txt_fone" value="<?=$cliente->fone?>" type="text" placeholder="Insira seu telefone">

        <a href="<?=URL_BASE.'cliente/delete/'.$cliente->id_cliente.'/S'?>" class="btn">Excluir</a>
    </div>	
</div>	