<?php
// Returns all public posts
function getPublishedPosts() {

  global $conn;
  $sql = "SELECT * FROM posts WHERE published=true";
  $result = mysqli_query($conn, $sql);

  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

  return $posts;
}

?>