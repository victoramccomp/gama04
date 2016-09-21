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
        
        $linhas = $stmt->fetchAll(PDO::FETCH_OBJ);
        $output = array();

        foreach ($linhas as $linha) {
            $paginacao++;

            $output[] = array("Title"=>$linha->title, "Post"=>$linha->post);

            if ($paginacao == 5) {
                //Irá realizar paginação
                $paginacao = 0;
            }
        }

        echo json_encode($output);
    }
}

ListarPost($connection);