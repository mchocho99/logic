<?php
function reto0() {
    /*
    * Escribe un programa que muestre por consola (con un print) los
    * números de 1 a 100 (ambos incluidos y con un salto de línea entre
    * cada impresión), sustituyendo los siguientes:
    * - Múltiplos de 3 por la palabra "fizz".
    * - Múltiplos de 5 por la palabra "buzz".
    * - Múltiplos de 3 y de 5 a la vez por la palabra "fizzbuzz".
    */
    for ($i = 1; $i <= 100; $i++ ) {
        $return = "";
        if ($i % 3 === 0) {
            $return .= "fizz";
        }
        if ($i % 5 === 0) {
            $return .= "buzz";
        }
        if ($return === "") {
            echo $i;
            echo "<br>";
        } else {
            echo $return;
            echo "<br>";
        }
    }
}

const DICTIONARY = array(
    'A' => '4',
    'B' => 'I3',
    'C' => '[',
    'D' => ')',
    'E' => '3',
    'F' => '|=',
    'G' => '&',
    'H' => '#',
    'I' => '1',
    'J' => ',_|',
    'K' => '>|',
    'L' => '£',
    'M' => '/\\/\\',
    'N' => '^/',
    'O' => '0',
    'P' => '|*',
    'Q' => '(_,)',
    'R' => 'I2',
    'S' => '5',
    'T' => '7',
    'U' => '(_)',
    'V' => '\\/',
    'W' => '\\/\\/',
    'X' => '><',
    'Y' => ' j',
    'Z' => '2',
    '0' => 'o',
    '1' => 'L',
    '2' => 'R',
    '3' => 'E',
    '4' => 'A',
    '5' => 'S',
    '6' => 'b',
    '7' => 'T',
    '8' => 'B',
    '9' => 'g',
    ' ' => ' '
);
function reto1($text) {
    /*
         * Escribe un programa que reciba un texto y transforme lenguaje natural a
         * "lenguaje hacker" (conocido realmente como "leet" o "1337"). Este lenguaje
         *  se caracteriza por sustituir caracteres alfanuméricos.
         * - Utiliza esta tabla (https://www.gamehouse.com/blog/leet-speak-cheat-sheet/)
         *   con el alfabeto y los números en "leet".
         *   (Usa la primera opción de cada transformación. Por ejemplo "4" para la "a")
     */
    $upperText = strtoupper($text);
    $translatedText = "";

    for ($i = 0; $i < strlen($upperText); $i++) {
        $exist = array_key_exists($upperText[$i], DICTIONARY);
        $exist ? $translatedText .= DICTIONARY[$upperText[$i]] : $translatedText .= $upperText[$i];
    }

    echo $translatedText;
}

reto1("hola como estas");


