<?php


require_once 'DB.php';
class book_table {
    private string $title;

    public function __construct(string $title) {
        $this->title = $title;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title): book_table {
        $this->title = $title;
        return $this;
    }

    static function getAllBooks() : array {

        $db = DB::getInstance()->getConnection();

        $stm = $db->prepare('SELECT title FROM book');
        $stm->execute();
        $result = array();
        while ($item = $stm->fetch()) {
            $book_table = new book_table($item['title']);
            $result[] = $book_table;
        };
        return $result;
    }
}

?>