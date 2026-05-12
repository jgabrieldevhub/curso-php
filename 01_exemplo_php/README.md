# formulario php

```html
<form action="validar_cadastro.php" method="Post">
```

> O action do form serve para levar a uma direcçao de validação do form

> O Post serve como método de envio dos dados

<br>

```html
<button type="submit">Acessar</button>
<button type="reset">Limpar</button>
```

> O tipo submit do button serve para enviar

> O tipo reset do button serve para resetar

```html
<input type="email" name="email"><br>
<input type="password" name="senha"><br>
```

> usamos o name para poder pegar as informações no php

```php
$email = $_POST['email'];
$senha = $_POST['senha'];
```

> se cria uma variavel com o método usado chamando pelo nome do campo