<?php

class MainModel
{
    public $select_all = "SELECT * FROM `posts`";

    public function getAllPosts()
    {
        require_once("components/config/db.php");
        mysqli_fetch_all($DBconnect->query($this->select_all));
        $title = $DBconnect->query("SELECT `title` FROM `posts`");
        $id = $DBconnect->query("SELECT `id` FROM `posts`");
        $image_link = $DBconnect->query("SELECT `image_link` FROM `posts`");
        $post_link = $DBconnect->query("SELECT `post_link` FROM `posts`");
        $datetime = $DBconnect->query("SELECT `datetime` FROM `posts`");
    }
}