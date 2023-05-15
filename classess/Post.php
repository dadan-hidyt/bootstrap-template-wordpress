<?php

class Post{
    public function getAll(  ){
        $post = new Wp_Query(array('post_type'=>'post'));

        return $post->posts;
    }
}