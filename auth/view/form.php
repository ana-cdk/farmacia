<h2>Login</h2>

<form action="?action=validar" method="POST">

	<div class="login">
		<label>E-mail</label>
		<input type="text" name="usuario" />

		<label>Senha</label>
		<input type="password" name="senha" />

		<button type="submit"  class="btn btn-primary" name="action" value="validar">Entrar</button>
	</div>

</form>

<br />
<p style="color:red; text-align: center;"><?= @$message ?></p>
<br />