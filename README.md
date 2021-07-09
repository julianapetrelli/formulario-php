## FORMULÁRIO PHP COM VALIDAÇÕES E RESPONSIVO

### O que aprendi e utilizei nesse projeto:

 - Laços de repetição - Foreach
 - Método POST
 - Condicionais
 - Validação e Escaping
 
 ---

 **Laços de repetição - Foreach**

O construtor foreach fornece uma maneira fácil de iterar sobre arrays. O foreach funciona somente em arrays e objetos. **A cada iteração, o valor do elemento atual é atribuído a $planeta** e o ponteiro interno do array avança uma posição (então a próxima iteração, estará olhando para o próximo elemento).

```php

$planetas = [

"Mercúrio",

"Vênus",

"terra",

"Júpiter"

"Saturno"

"Urano",

"Netuno"

]

forech($planetas as $planeta) {
	echo $planeta . "<br>"
}
```

**empty:** Determina se a variável é vazia, retornando se ela é 0, null, false ou um array vazio:

```php
$nome = "";

empty($nome) -> "", 0, null, false, array()
```

**trim():** Remove o espaço do inicio e do final da minha string

```php
trim ($nome);
```

**is_null:** Verifica se uma variável é do tipo null

```php
if (is_null($nome)) {
	echo "informe o nome";
}
```

**strip_tags:** Retira as tags HTML e PHP de uma string, essa função tenta retornar uma string retirando todas as tags HTML e PHP. 

```php
$mensagem = strip_tags($_POST['mensagem']);
```

**implode:** Junta elementos de uma matriz em uma única string:

```php
	$areaDeAtuacao = implode(", ", $atuacoes);
  echo "<strong>Atuação:</strong>" . $areaDeAtuacao . "<br>";
```

Retorna uma string contendo os elementos da matriz na mesma ordem com uma ligação ( vírgula no caso ) entre cada elemento.

<div align="center">
 <img alt="form" height="540" width="1000" src="https://i.imgur.com/6el4Aeu.gif">
 <img alt="form" height="540" width="1000" src="https://i.imgur.com/Ur2uOPB.gif">
</div>