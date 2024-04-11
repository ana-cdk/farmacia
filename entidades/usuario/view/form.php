<h2>
    Cadastro de usuário
</h2>

<form method="POST" action="."  onsubmit='valida()'>

  <input type="hidden" name="action"  value="salvar" />

  <div>
    <label>Nome</label>
    <input type="text" name="nome" id="nome" placeholder="Ex.: Ana Kotz"/>
  </div>

  <div>
    <label>Data de Nascimento</label>
    <input type="date" name="nascimento" id="data" placeholder="dd/mm/aaaa"/>
  </div>

  <div>
    <label>E-mail</label>
    <input type="mail" name="email" id="email" placeholder="exemplo@exemplo.com.br" />
  </div>

  <div>
    <label>Telefone</label>
    <input type="tel" name="telefone" id="tel" placeholder="(xx) xxxxx-xxxx" />
  </div>

  <div>
    <label>Cidade</label>
    <input type="text" name="cidade" id="cidade" />
  </div>

  <div>
    <label>UF</label>
    <input type="text" name="uf" id="uf" />
  </div>

  <div>
    <label>País</label>
    <input type="text" name="pais" id="pais"/>
  </div>

  <div>
    <label>Senha</label>
    <input type="password" name="senha" id="senha" placeholder="Digite uma senha" />
  </div>

  <div>
    <label>Confirmar senha</label>
    <input type="password" name="senha2" id="senha2" placeholder="Repita a senha" />
  </div>

  <div>
    <button type="submit" class="btn btn-primary" id="button" >Cadastrar</button>
  </div>

</form>

<script>
  const button = document.getElementById('button')

  button.addEventListener('click', (event)=>{
    

    const nome = document.getElementById('nome')
    const data = document.getElementById('data')
    const email = document.getElementById('email')
    const tel = document.getElementById('tel')
    const cidade = document.getElementById('cidade')
    const uf = document.getElementById('uf')
    const pais = document.getElementById('pais')
    const senha = document.getElementById('senha')
    const senha2 = document.getElementById('senha2')

    if(nome.value == ''){
      nome.classList.add("errorInput")
      event.preventDefault()
    }else{
      nome.classList.remove("errorInput")
    }
    if(data.value == ''){
      data.classList.add("errorInput")
      event.preventDefault()
    }else{
      data.classList.remove("errorInput")
    }
    if(email.value == ''){
      email.classList.add("errorInput")
      event.preventDefault()
    }else{
      email.classList.remove("errorInput")
    }
    if(tel.value == ''){
      tel.classList.add("errorInput")
      event.preventDefault()
    }else{
      tel.classList.remove("errorInput")
    }
    if(cidade.value == ''){
      cidade.classList.add("errorInput")
      event.preventDefault()
    }else{
      cidade.classList.remove("errorInput")
    }
    if(uf.value == ''){
      uf.classList.add("errorInput")
      event.preventDefault()
    }else{
      uf.classList.remove("errorInput")
    }
    if(pais.value == ''){
      pais.classList.add("errorInput")
      event.preventDefault()
    }else{
      pais.classList.remove("errorInput")
    }
    if(senha.value == ''){
      senha.classList.add("errorInput")
      event.preventDefault()
    }else{
      senha.classList.remove("errorInput")
    }
    if(senha2.value == ''){
      senha2.classList.add("errorInput")
      event.preventDefault()
    }else{
      senha2.classList.remove("errorInput")
    }

  })
</script>