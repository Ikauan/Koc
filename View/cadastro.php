<?php
include_once("header.php");
?>

<h1 class="titulo w3-sans-serif w3-container">Cadastre-se</h1>
<div class="logo_empresa w3-container">
    <img src="../View/img/logo_empresa.png" style="width: 100%;">
</div>

<form class="w3-container formulario">
    <label for="inputNome"></label>
    <input class="w3-input w3-border w3-border-black w3-round-large" type="text" id="inputNome" placeholder="Nome" name="nomeCli" style="width: 45%; margin-bottom: 10px;">

    <label for="inputEmailCli"></label>
    <input class="w3-input w3-border w3-border-black w3-round-large" type="text" id="inputEmailCli" placeholder="Email" name="emailCli" style="width: 45%; margin-bottom: 10px;">

    <label for="inputCPF"></label>
    <input class="w3-input w3-border w3-border-black w3-round-large" type="text" id="inputCPF" placeholder="CPF" name="cpfCli" style="width: 45%; margin-bottom: 10px;">

    <label for="inputData"></label>
    <input class="w3-input w3-border w3-border-black w3-round-large" type="date" id="inputData" name="dataCli" style="width: 45%; margin-bottom: 10px;">

    <label for="inputTel"></label>
    <input class="w3-input w3-border w3-border-black w3-round-large" type="tell" id="inputTel" placeholder="Telefone" name="foneCli" style="width: 45%; margin-bottom: 10px;">    

    <label for="inputEnd"></label>
    <input class="w3-input w3-border w3-border-black w3-round-large" type="text" id="inputEnd" placeholder="Endereço" name="endCli" style="width: 45%; margin-bottom: 10px;">

    <button type="submit" class="w3-bar-item w3-button w3-blue w3-round-xlarge w3-hover-brown w3-text-black w3-padding btn">Cadastrar</button>
</form>

<?php
include_once("footer.php");
?>