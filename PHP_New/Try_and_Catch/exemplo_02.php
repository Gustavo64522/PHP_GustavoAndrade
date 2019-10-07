<?php

function trataNome($name)
{
if (!$name) {
                throw new Exception("Nenhum erro foi informado", 1);
            }
            echo ucfirst($name)."<br>";
}

try 
{
    trataNome("Gustavo");
    trataNome("");
}
catch (Exception $e) 
{
    echo $e->getMessage();

} 
finally 
{
    echo "<br   >Executou o TRY!!!";
}

?>