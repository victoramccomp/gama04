<?php

require_once "connection.php";
$connection = DBConnection();

class Posts
{
    public $id;
    public $title;
    public $post;
    public $author_id;
    public $date_Posted;
    
    function __construct($inId = null, $inTitle = null, $inPost = null, $inAuthor_ID = null, $inDate_Posted = null)
    {
        $this->id = $inId;
        $this->title = $inTitle;
        $this->post = $inPost;
        $this->author_id = $inAuthor_ID;
        $this->date_Posted = $inDate_Posted;
    }
    
    function ListarPost($connection) {
        $stmt = $connection->prepare("SELECT title, post, author_id, date_Posted FROM Posts");
        $stmt->execute();
        
        $paginacao = 0;

        while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $paginacao++;

            echo "<p>{$linha['post']}</p>" .
                 "</br>";
            if ($paginacao == 5) {
                //Irá realizar paginação
                $paginacao = 0;
            }
        }
    }
}

ListarPost($connection);