<?php  

namespace App\Entity;

class Post
{
    private $id;
    private $title;
    private $author;
    private $chapo;
    private $content;
    private $date_updated;
    private $id_user;

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getChapo() {
        return $this->chapo;
    }

    public function getContent() {
        return $this->content;
    } 

    public function getDateUpdated() {
        return $this->date_updated;
    }

    public function getIdUser() {
        return $this->id_user;
    }
    
}