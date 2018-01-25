<?php

namespace Tool;


class PigLatinTranslator
{

    //přeloží slovo do Pig latin a vrátí přeloženou hodnotu
    public function translate($word)
    {


        //šlo přidat ještě 'y' pro češké samohlásky
        $vowels = ['a', 'e', 'i', 'o', 'u'];


        $consonants = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z',];

        //nejsem si jistý jak to funguje s tou skupinou hlásky a souhlásky
        $special = ['qu'];


        $index = 0;
        $addition = "ay";

        if(in_array(strtolower($word[0]),$vowels)){

            $addition = '-' . $consonants[rand(0,sizeof($consonants)-1)] . $addition;

        }
        else{
            while ($index < strlen($word))
            {
                if (in_array(strtolower($word[$index]),$vowels)){

                    //pro speciální případ se skupinou hlásky a souhlásky
                    if(in_array(strtolower($word[$index-1].$word[$index]),$special)){
                        $index++;
                    }

                    break;
                }
                $index++;
            }
            $addition = '-' . substr($word,0, $index) . $addition;
        }

        return substr($word,$index) . $addition;

    }

}