<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
   <!--Ana e Gustavo--> 
   <form name="frmcadastro" method="post" action="recebedados.php">
            <label> Nome 
            <input type="text" name="txtname"> 
            </label> 
            <br><br>

            <label>Senha 
            <input type="password" name="txtsenha">
            </label> 
            <br><br>

            <label> Sexo 
            <input type="radio" name="rdbsexo"  value="m">Masculino
            <input type="radio" name="rdbsexo"  value="f">Feminino
            </label> 
            <br><br>

<select name="sltestado" id="estado">
    <option value="">Escolha</option>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
  </select>

<br><br>
<input type="submit" onclick="enviar();" value="Enviar">

</form>

</body>
</html>
