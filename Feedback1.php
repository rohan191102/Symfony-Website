<?php

class Feedback
{
    private $id;
    private $author;
    private $created;
    private $text;


    public function __construct($id = null, $author = '', $created = '', $text = '')
    {
        $this->id = $id;
        $this->author = $author;
        $this->created = $created;
        $this->text = $text;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function getText()
    {
        return $this->text;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function setText($text)
    {
        $this->text = $text;
    }
    public function save()
    {
        $pdo = Database::getInstance()->getConnection();
        if ($this->id === null) {
            $stmt = $pdo->prepare("INSERT INTO feedback (author, created, text) VALUES (:author, :created, :text)");
        } else {
            $stmt = $pdo->prepare("UPDATE feedback SET author = :author, created = :created, text = :text WHERE id = :id");
            $stmt->bindParam(':id', $this->id);
        }

        $stmt->bindParam(':author', $this->author);
        $stmt->bindParam(':created', $this->created);
        $stmt->bindParam(':text', $this->text);

        return $stmt->execute();
    }
    public static function findById($id) {
        $pdo = Database::getInstance()->getConnection();
        $stmt = $pdo->prepare("SELECT * FROM feedback WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Feedback');
        return $stmt->fetch();
    }

}