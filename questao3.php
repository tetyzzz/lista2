<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Questão 3</title>
    </head>
    <body>
        
        <?php
            $vetor=array();
            $maior=0;
            $posicao=0;
            $soma=0;
            
    
                for ($i=0; $i <31; $i++) {
                    $vetor[$i]= $i;
                
                    if ($vetor[$i]> $maior){
                        $maior = $vetor[$i];
                        $posicao = $i;
        
                        }    
                
                $soma= $vetor[$i] + $soma;
                
                $media= $soma / count($vetor);
                
                }
                
                $media = $soma / count($vetor);
                            echo"<pre>";
                                print_r($vetor);
                            echo"</pre>";
                            echo 'O maior número é: '. $maior. ' Encontrado na posição: '. $posicao . '<br>';
                            echo 'A soma é: '.$soma. '<br>';
                            echo 'A média do do vetor é ='.$media. '<br>';
        ?>
        
    </body>
</html>
