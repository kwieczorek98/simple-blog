<?php

    class Functions {

        public function getPageTitle($path = array())
            {
                $link = explode('.php', $path);

                $UpperCaseFirstCharacter = ucfirst($link[0]);

                return print_r($UpperCaseFirstCharacter);

            }
        }
    
    $functions = new Functions();
    