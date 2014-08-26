<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <script>
    function consultacep(cep){
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
    <style>
    input {
    	width: 300px;
    }
    label {
    	width: 100px;
    	display: inline-block;
    }
    fieldset {
    	width: 410px;
    }
    </style>
  </head>
  <body>
  <h1>Busca de cep do Correio Control</h1>
  <form>
  	<fieldset>
  		<legend>Consulta CEP</legend>
		<label>CEP</label>
		<input id="cep" onblur="consultacep(this.value)" /><br/>
		<label>Logradouro</label>
		<input id="logradouro" /><br/>
		<label>Bairro</label>
		<input id="bairro" /><br/>
		<label>Cidade</label>
		<input id="localidade" /><br/>
		<label>UF</label>
		<input id="uf" />
  	</fieldset>	
  </form>
  <p>API disponível no site <a href="http://avisobrasil.com.br/correio-control/api-de-consulta-de-cep/" target="_blank">Aviso Brasil</a></p> 
  </body>
</html>