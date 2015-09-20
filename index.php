
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <script>
    function atualizacep(cep){
      cep = cep.replace(/\D/g,"")
      url="http://cep.correiocontrol.com.br/"+cep+".js"
      s=document.createElement('script')
      s.setAttribute('charset','utf-8')
      s.src=url
      document.querySelector('head').appendChild(s)
    }

    function correiocontrolcep(valor){
      if (valor.erro) {
        alert('Cep não encontrado');
        return;
      };
      document.getElementById('logradouro').value=valor.logradouro
      document.getElementById('bairro').value=valor.bairro
      document.getElementById('localidade').value=valor.localidade
      document.getElementById('uf').value=valor.uf
    }

    </script>
    <style type="text/css">
    fieldset {
      width: 410px;
    }
    input {
      width: 300px;
    }
    label {
      width: 100px; display: inline-block;
    }
    </style>
  </head>
  <body>
  <h1>Busca de cep do Correio Control</h1>
  <form>
    <fieldset>
      <legend>Consulta por CEP</legend>
      <label>CEP</label>
      <input id="cep" />
      <button type="button" onclick="atualizacep(cep.value)">Buscar CEP</button><br/>
      <label>Logradouro</label>
      <input id="logradouro" />
      <label>Bairro</label>
      <input id="bairro" />
      <label>Cidade</label>
      <input id="localidade" />
      <label>UF</label>
      <input id="uf" />
    </fieldset>
  </form>
  <p>
  <a href="http://avisobrasil.com.br/api-de-consulta-de-cep/">Voltar para a página de documentação</a>
  </p>
  </body>
</html>
