<?php

//http://127.0.0.1/variaveis/exemplo-19.php

$json = '[{"nome":"João","idade":20},{"nome":"Jessica","idade":28},{"nome":"Ademberg","idade":37},{"nome":"Alexsandra","idade":46}]';


//transforma o Json em Array
$data = json_decode($json,true); //sempre usar o true

var_dump($data);


?>