<?php
include_once("header.php")
?>

<h1 class="titulo1 w3-container">Agende sua Manutenção</h1>
<form class="w3-container" action="" method="POST">

    <div class="area1">
    <label for="inputCodFK">Nos informe seu código de usuário</label>
    <input class="w3-input w3-border w3-border-black w3-round-large" type="text" id="inputCodFK" placeholder="Código de usuário" name="codCliFK" style="width: 45%; margin-bottom: 10px;">
    <button type="submit" class="w3-bar-item w3-button w3-blue w3-round-xlarge w3-hover-brown w3-text-black w3-padding btn" formaction="">LIsta de Códigos</button>
    </div>

    <div class="area2">
    <label for="exampleFromControlTextarea1">O que está acontecendo com o seu computador?</label>
    <textarea id="exampleFormControlTextarea1" rows="3" cols="60" name="descPed"></textarea>
    </div>

    <label for="inputData">Insira a data de hoje</label>
    <input class="w3-input w3-border w3-border-black w3-round-large" type="date" id="inputData" name="dataPed" style="width: 45%; margin-bottom: 10px;">

    <button type="submit" class="w3-bar-item w3-button w3-blue w3-round-xlarge w3-hover-brown w3-text-black w3-padding btn">Cadastrar</button>
</form>
<div class="vazia">

</div>
<?php
include_once("footer.php")
?>