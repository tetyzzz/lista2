<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Questão 5</title>
    </head>
    <body>
        
        <?php
        
         $vetor=array();
         
         $vetor[1]= "Terra";
         $vetor[2]= "Marte";
         $vetor[3]= "Jupiter";
         $vetor[4]= "Urano";
         $vetor[5]= "Netuno";
         $vetor[6]= "Vênus";
         $vetor[7]= "Lua";
         $vetor[8]= "Sol";
         $vetor[9]= "Estrelas";
         $vetor[10]= "Galáxia";
         
         echo "<select>";
                for ($i=0; $i<11; $i++) {
             
        echo "<option>$vetor[$i]</option>"; 
       
                 }
            echo "</select>";

        ?>
    </body>
</html>


