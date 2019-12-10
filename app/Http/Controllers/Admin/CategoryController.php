<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use App\Models\category;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService )
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categoryType = $this->categoryService->getListCategoryType();

        return view('admin.category.index', compact('categoryType'));
    }


    public function create()
    {
        $categoryType = $this->categoryService->getListCategoryType();
        $model = new category();

        return view('admin.category.create', compact('model', 'categoryType'));
    }


    public function store(CategoryRequest $request)
    {
        $params = $request->all();
        $category = $this->categoryService->addCategory($params);

        if ($category) {

            return redirect()->route('admin::category.index')->with('message', 'Add successfully!');
        }

        return redirect()->route('admin::category.index')->with('error', 'Add error!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $categoryType = $this->categoryService->getListCategoryType();
        $model = $this->categoryService->getCategoryById($id);

        return view('admin.category.update', compact('model', 'categoryType'));
    }


    public function update(Request $request, $id)
    {
        $params = $request->all(['name', 'type']);
        $updateCategory = $this->categoryService->update($id, $params);

        if ($updateCategory) {
            return redirect()->route('admin::category.index')->with('message', 'Update successfully!');
        }

        return redirect()->route('admin::category.index')->with('error', 'Update error!');
    }


    public function destroy($id)
    {
        //
    }

    public function getItemCategoryByType(Request $request)
    {
        if (!$request->ajax()) {
            return response()->json(['success' => false]);
        }

        $param = $request->only('type');
        $categories = $this->categoryService->getCategoryByType($param['type'] ?? null );

        if ($categories) {
            $item = view('admin.category.elements.item', compact('categories'))->render();

            return apiSuccess($item);
        }

        return apiError(Response::HTTP_BAD_REQUEST);
    }

    public function updateCategory(Request $request)
    {
        $params = $request->all();

        if ($this->categoryService->updateCategory($params)) {

            return apiSuccess('success','Update successfully!');
        }

        return apiError(Response::HTTP_BAD_REQUEST, 'Update Error!');
    }
}
