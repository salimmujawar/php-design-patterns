<?php
require_once "./Comment.php";
require_once "./Video.php";
require_once "./Post.php";

$post = new Post();
$video = new Video();
$comment = new Comment();

$comment->saveRelatedComment("This is Post Comment", 1, $post);
$comment->saveRelatedComment("This is Video Comment", 4, $video);
