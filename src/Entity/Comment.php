<?php

namespace App\Entity;

class Comment
{
    private $id;
    private $title;
    private $author;
    private $content;
    private $date_updated;
    private $id_post;
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

    public function getContent() {
        return $this->content;
    } 

    public function getDateUpdated() {
        return $this->date_updated;
    }

    public function getIdPost() {
        return $this->id_post;
    }

    public function getIdUser() {
        return $this->id_user;
    }
}
