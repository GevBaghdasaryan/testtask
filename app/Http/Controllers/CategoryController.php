<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Interfaces\CategoryServiceInterface;
use App\Http\Resources\CategoryCollection;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
