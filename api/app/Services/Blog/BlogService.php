<?php

namespace App\Services\Blog;

use App\Services\Blog\BlogServiceInterface;
use App\Dao\Blog\BlogDaoInterface;
use Illuminate\Http\JsonResponse;

class BlogService implements BlogServiceInterface
{
    /**
     * blog Dao
     */
    private $blogDao;
    /**
     * Class Constructor
     * @param BlogDaoInterface
     * @return
     */
    public function __construct(BlogDaoInterface $blogDaoInterface)
    {
        $this->blogDao = $blogDaoInterface; 
    }
    /**
     * To get all blogs.
     * @return array body including data or errors
     * @return int response status
     */
    public function all()
    {
        $blogs = $this->blogDao->all();
    }
    /**
     * To get blog by id
     * @param int $id
     * @return array body including data
     * @return int response status
     */
    public function findBy($id)
    {
        $blog = $this->blogDao->findBy($id);
    }
    /**
     * To store created blog
     * @param object $request
     * @return array body including data
     * @return int response status
     */
    public function create($request)
    {
        $blog = $this->blogDao->create($request); 
    }
    /**
     * To update the specified blog
     * @param object $request
     * @return array body including data
     * @return int response status
     */
    public function update($request)
    {
        $blog = $this->blogDao->update($request); 
    }
    /**
     * To remove the specified blog
     * @param int $id
     * @return array body including data
     * @return int response status
     */
    public function delete($id)
    {
        $blog = $this->blogDao->delete($id); 
    }
}
