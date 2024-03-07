<?php


require_once 'DB.php';
class feedback_table {
    private string $author;
    private string $feedback;

    public function __construct(string $feedback) {
        $this->feedback = $feedback;
    }

    public function getFeedback(): string {
        return $this->feedback;
    }

    public function setAuthor(string $author): feedback_table {
        $this->author = $author;
        return $this;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function setFeedback(string $feedback): feedback_table {
        $this->feedback = $feedback;
        return $this;
    }

    static function getAllFeedback() : array {

        $db = DB::getInstance()->getConnection();

        $stm = $db->prepare('SELECT author, feedback FROM feedback');
        $stm->execute();
        $result = array();
        while ($item = $stm->fetch()) {
            $feedback_table = new feedback_table($item['feedback']);
            $feedback_table->setAuthor($item['author']);
            $result[] = $feedback_table;
        };
        return $result;
    }

    public function save() : feedback_table {

        $db = DB::getInstance()->getConnection();

        $stm = $db->prepare('INSERT INTO feedback (author, feedback) VALUES (?, ?);');
        $stm->execute([$this->author, $this->feedback]);
        return $this;
    }

}

?>