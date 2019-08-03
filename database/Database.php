<?php

    //require ('../config/config.php');

    class Database {

        public $conn = null;
        public $serverName;
        public $username;
        public $password;

        public function __construct(){
            try {

                $this->conn = new PDO(
                    $this->serverName = "mysql:host=127.0.0.1;dbname=simple-blog-php", 
                    $this->username   = "root", 
                    $this->password   = ""
                );
                
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    //echo "Connected successfully"; 
                }

            catch(PDOException $e)
                {
                //echo "Connection failed: " . $e->getMessage();
            }

            
        }

        public function selectAllPosts()
            {
                $sql = 'SELECT * FROM posts ORDER BY id DESC';
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                $posts = $stmt->fetchAll(PDO::FETCH_OBJ);

                    foreach ($posts as $post) {
                        
                    echo'<div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                            '.$post->post_title.'
                            </h2>
                            <h3 class="post-subtitle">
                            '.$post->post_subtitle.'
                            </h3>
                        </a>
                        <p class="post-meta">Posted by
                            <a href="#">Start Bootstrap</a>
                            on '.$post->created_at.'</p>
                        </div>';
                    }
            }
    }

    //Connect

    $conn  = new Database();

    $posts = new Database();
    
   
    