<div class="card">
    <div class="card-body">
        <form action="cadastro/cadastrar" method="POST" name="cad" class="form__cadastro">
            <label class="form-label">Nome: </label>
            <input type="text" id="nome" name="nome_cadastro" class="form-control">
            <label class="form-label">Usuário: </label>
            <input type="text" id="usuario" name="usuario_cadastro" class="form-control">
            <label class="form-label">E-mail: </label>
            <input type="text" id="email" name="email_cadastro" class="form-control">
            <label class="form-label">Senha: </label>
            <input type="password" id="senha" name="senha_cadastro" class="form-control">
            <label class="form-label">Repita sua Senha: </label>
            <input type="password" id="senha2" name="senha_confirmacao_cadastro" class="form-control">
            <button type="submit"  class="btn btn-primary mt-2 btn_cadastrar">Cadastrar</button>
        </form>
        <div class="error-msg" style="padding: .6em 0em;"></div>
    </div>
</div>

