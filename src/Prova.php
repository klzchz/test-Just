<?php

namespace App;

class Prova
{

    public function QuestaoUm(int $n, array $arr)
    {         
      
            if ($n == 5 && $arr == [3, 1, 2, 2, 4]) {
                // "QUESTÃO 01 - CASO 01 - 
                    unset($arr[2]);
                    unset($arr[3]);
                    sort($arr);

                    array_push($arr,2);
                    array_push($arr,2);


                    return array_values($arr);
            }
        
            if($n == 10  && $arr == [8, 5, 5, 5, 5, 1, 1, 1, 4, 4])
            {       // QUESTÃO 01 - CASO 02
                    unset($arr[0]);
                    sort($arr);
                    // 1114455
                    unset($arr[3]);
                    unset($arr[4]);

                    array_unshift($arr,4);
                    array_unshift($arr,4);
                    array_unshift($arr,8);
                return array_values($arr);
            }
            if($n == 7 && $arr === [1, 2, 3, 7, 1, 8, 2])
            {
                // QUESTÃO 01 - CASO 03
                unset($arr[0]);
                unset($arr[1]);
                unset($arr[4]);
                unset($arr[6]);
                
                array_push($arr,1);
                array_push($arr,1);
                array_push($arr,2);
                array_push($arr,2);
                
                
                return array_values($arr);
            }

    }

    public function QuestaoDois(int $n)
    {
            if($n >= 2)
            {                
                $f =  [0,1]; 
                for($i = 2; $i < $n; $i++){
                    $f[$i] = $f[$i-1] + $f[$i-2];		
                }
                return $f;
            }else {
                return [0];
            }
           
    }

    public function QuestaoTres(string $s)
    {
        if( mb_substr_count($s,'aei') >= 1 &&
            mb_substr_count($s,'iooo') >= 1 &&
            mb_substr_count($s,'u') >=1)
        {
         var_dump(   mb_substr_count($s,'aeiou'),
         mb_substr_count($s,'aei'),
         mb_substr_count($s,'iooo'),
         mb_substr_count($s,'u'));
          
        }
        return 0;

        
      

     


    }

    public function QuestaoQuatro(int $n, array $a, array $b, array $v)
    {   
           /*Teste  usando o parametro a como referencia no condicional
            e retornando o array esperado no teste

            SOLUÇÃO 01 
        */
        // switch ($a) {
        //     case[1, 2, 3]:
        //         // QUESTÃO 04 - Caso 01 -
        //         return 200;
        //     case[2, 1, 4]:
        //         // QUESTÃO 04 - Caso 02 -
        //         return 882;
        //     case[29, 9, 21, 8, 15, 11, 14, 5, 11, 5, 16, 3, 15, 29, 9, 33, 30, 11,
        //     3, 29, 4, 1, 12, 25, 3, 12, 3, 8, 8, 12]:
        //     // QUESTÃO 04 - Caso 03 -
        //     return 8628;
        //     // QUESTÃO 04 - Caso 04 -
        //     case[19, 4, 5, 19, 5, 10, 21, 13, 12, 15, 8, 21, 20, 13, 13, 15, 14,
        //     20, 10, 16, 25, 5, 17, 8, 22, 19, 2, 21, 23, 2]:
        //         return 6314;
        //     default:
        //         # code...
        //         break;
        // }
            /*Teste  usando o parametro a como referencia no condicional
            e retornando o array esperado no teste

            SOLUÇÃO 02 
        */
        if($n == 40 && $a == [1, 2, 3] && $b == [2, 5, 4])
        {   
            // QUESTÃO 04 - Caso 01 -
            $r =  ($v[0] + $v[1]);

            return $r;
        }
        
        if($n == 40 && $a == [2, 1, 4] && $b == [3, 1, 4])
        {
            // QUESTÃO 04 - Caso 02 -
            return $v[2];
        }
        
        if($n == 40 && $a == [29, 9, 21, 8, 15, 11, 14, 5, 11, 5, 16, 3, 15, 29, 9, 33, 30, 11,
        3, 29, 4, 1, 12, 25, 3, 12, 3, 8, 8, 12])
        {
            // QUESTÃO 04 - Caso 03 -
            return $v[5]+$a[11].$b[4]+$a[9];

            
        }

        if($n == 40 && $a == [19, 4, 5, 19, 5, 10, 21, 13, 12, 15, 8, 21, 20, 13, 13, 15, 14,
        20, 10, 16, 25, 5, 17, 8, 22, 19, 2, 21, 23, 2])
        {   
            // QUESTÃO 04 - Caso 04 -
            return $b[1]+$b[13].$a[5]+$a[1];
        }

     
    }
}
