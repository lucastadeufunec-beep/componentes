<?php
fuction middleware ($rota){
echo "3. Middleware está vericando a requisição.<br>";
}
if($permitido){
    echo"4. Middleware permitiu continuar.<br>";
    dispatcher($rota);
} else{
    echo "4. Middleware bloqueou a requisição.<br>";
}