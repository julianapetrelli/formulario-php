<?php

/* O que vai ligar o meu formulário ao meu PHP é o name de cada INPUT */

$nome = trim($_POST['nome']);
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];

if (is_numeric($celular) && !empty($celular)) {
    echo "<strong>Celular:</strong>" . $celular . "<br>";
} else {
    echo "<strong>Celular:</strong> Preencha o campo de contato! <br>";
}

if (is_numeric($telefone) && !empty($telefone)) {
    echo "<strong>Telefone:</strong>" . $telefone . "<br>";
} else {
    echo "<strong>Telefone:</strong> Preencha o campo de contato! <br>";
}

$atuacoes = $_POST['atuacao'] ?? null;
$ondeConheceu = $_POST['ondeConheceu'];
$mensagem = strip_tags( $_POST['mensagem']);
$option = $_POST['option'];

if (empty($nome)) {
    echo "Nome não preenchido <br>"; 
} else {
    echo "<strong>Nome:</strong>" . $nome . "<br>";
}

echo "<strong>Email:</strong>" . $email . "<br>";


    if (is_null($atuacoes)) {
        echo "<strong>Atuação:</strong> Nenhuma área de atuação foi preenchida <br>";
    } else {

        $areaDeAtuacao = implode(", ", $atuacoes);
        echo "<strong>Atuação:</strong>" . $areaDeAtuacao . "<br>";

    }

echo "<strong>Por onde nos conheceu:</strong>" . $ondeConheceu . "<br>";
echo "<strong>Conte um pouco mais sobre você:</strong>" . $mensagem . "<br>";
echo "<strong>Você gostaria de trabalhar:</strong>" . $option . "<br>";

?>
