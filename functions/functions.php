<?php

    

    class Functions {

        public function getPageTitle($path = array())
            {
                $link = explode('.php', $path);

                $UpperCaseFirstCharacter = ucfirst($link[0]);

                return print_r($UpperCaseFirstCharacter);

            }
        
        public function menu()
            {
                //add later form config.php
                $menu = array(
                    "home" => "index.php",
                    "about" => "about.php",
                    "contact" => "contact.php",
                    "sample-post" => "post.php"
                );

                foreach($menu as $menuName => $menuLink){
                echo '<li class="nav-item">
                        <a class="nav-link" href="'.$menuLink.'">'.$menuName.'</a>
                    </li>';
                }
            }
        }
    $functions = new Functions();
    