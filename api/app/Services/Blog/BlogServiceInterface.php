<?php

namespace App\Services\Blog;

interface BlogServiceInterface
{
    // To get all blogs
    public function all();
    // To get blog
    public function findBy($id);
    // To create blog
    public function create($request);
    // To update blog
    public function update($request);
    //To delete blog     
    public function delete($id);
}
