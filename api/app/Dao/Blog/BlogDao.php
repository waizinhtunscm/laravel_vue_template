<?php

namespace App\Dao\Blog;
use App\Models\Blog; 
use App\Dao\Blog\BlogDaoInterface;
use Illuminate\Http\Request;


/**
 * Data Access Object for Blog
 */
class BlogDao implements BlogDaoInterface
{
    public function all() 
    {
        return Blog::all();
    }

    public function findBy($id) 
    {
        return Blog::findOrFail($id);
    }


    public function create($request) 
    {
        return Blog::create($request);
    }

    public function update($request)
    {
        return Blog::update($request);
    }

    public function delete($id) 
    {
        return Blog::whereId($id)->update($newDetails);
    }

}
