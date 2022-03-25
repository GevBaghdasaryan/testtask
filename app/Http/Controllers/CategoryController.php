<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CategoryUpdateRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Interfaces\CategoryServiceInterface;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
use App\Http\Requests\Category\CategoryStoreRequest;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * @var CategoryServiceInterface $categoryService
     */
    private CategoryServiceInterface $categoryService;

    /**
     * CategoryController constructor.
     * @param CategoryServiceInterface $categoryService
     */
    public function __construct(CategoryServiceInterface $categoryService){
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @return CategoryCollection
     */
    public function index() : CategoryCollection
    {
        $categories = $this->categoryService->list();

        return new CategoryCollection(
            $categories
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request) : CategoryResource
    {
        $data = $request->validated();
        $category = $this->categoryService->store($data);

        return new CategoryResource($category);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = $this->categoryService->show($id);

        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, int $id) : CategoryResource
    {
        $data = $request->validated();
        $category = $this->categoryService->store($data, $id);

        return new CategoryResource($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) : JsonResponse
    {
        $category = $this->categoryService->destroy($id);
        if($category){
            $message = 'Successfully deleted';
        }else{
            $message = 'Category not empty';
        }

        return response()->json([
            'status' => 'success',
            'message' => $message
        ], Response::HTTP_OK);
    }
}
