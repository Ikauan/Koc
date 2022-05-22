<?php
include_once("header.php")
?>

<div class="w3-container card">
    <div class="w3-container">
        <h5 class="font">Fale conosco</h5>
        <p class="msg">Deixe aqui na caixa sua mensagem ou suas dúvídas</p>
    </div>

    <form id="fr" class="w3-container formulario">
        <label for="inputNome3">Nome</label>
        <input class="w3-input w3-border w3-border-amber w3-round-large" type="text" id="inputNome3" placeholder="Nome" style="width: 90%; margin-bottom: 10px;">

        <label for="inputEmail3">Email</label>
        <input class="w3-input w3-border w3-border-amber w3-round-large" type="text" id="inputEmail3" placeholder="Email" style="width: 90%; margin-bottom: 10px;">

        <div class="w3-container w3-card w3-yellow card1">
            <div class="w3-container w3-yellow">
                Deixe aqui o seu comentario
                <div>
                    <textarea class="w3-container" id="exampleFormControlTextarea1" rows="3" cols="20"></textarea><br>
                    <button type="submit" class="w3-bar-item w3-button w3-blue w3-round-xlarge w3-hover-brown w3-text-black w3-padding btn">Enviar</button>
                </div>
            </div>
        </div>
    </form>
    <div class="vazio"></div>
</div>

<?php
include_once("footer.php")
?>