<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Services\Blog\BlogServiceInterface; 

class BlogController extends Controller
{

    /**
     * Blog Interface
     */
    private $blogInterface;
    /**
     * Create a new controller instance.
     * @param BlogServiceInterface $authServiceInterface
     * @return void
     */
    public function __construct(BlogServiceInterface $blogServiceInterface)
    {
        $this->blogInterface = $blogServiceInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        
        return response()->json([
            'data' => $this->blogInterface->all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request): JsonResponse 
    {
        // return ($request->all()); 
        return response()->json(
            [
                'data' => $this->blogInterface->create($request->all())
            ],
            Response::HTTP_CREATED
            // $request->all()
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json([
            'data' => $this->blogInterface->edit($request->route('id'))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        return response()->json([
            'data' => $this->blogInterface->update($request)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $id = $request->route('id');
        $this->blogInterface->delete($id);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
