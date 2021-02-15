#local

#local

// Inicio do arquivo funcoes.php

<?php

$makefoo = true;

/* Nos nao podemos chamar foo() daqui
   porque ela ainda não existe,
   mas nos podemos chamar bar() */

bar();

if ($makefoo) {
  function foo()
  {
    echo "Eu não existo até que o programa passe por aqui.\n";
  }
}

/* Agora nos podemos chamar foo()
   porque $makefoo foi avaliado como true */

if ($makefoo) foo();

function bar()
{
  echo "Eu existo imediatamente desde o programa começar.\n";
}

?>
Exemplo #3 Funções dentro de funções

<?php
function foo()
{
  function bar()
  {
    echo "Eu não existo até foo() ser chamada.\n";
  }
}

/* Nós não podemos chamar bar() ainda
   porque ela ainda não foi definida. */

foo();

/* Agora nós podemos chamar bar(),
   porque o processamento de foo()
   tornou a primeira acessivel */

bar();

?>

