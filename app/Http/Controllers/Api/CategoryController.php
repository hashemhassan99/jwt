<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use GeneralTrait;
    public function index(){
        //.app()->getLocale() this is function used to return the selected language
        $categories = Category::select('id','name_'.app()->getLocale() . ' as  name')->get();

        return $this->returnData('category',$categories);
//        return response()->json($categories);
    }

    public function getCategoryById(Request $request){

        $category = Category::select()->find($request->id);
         if(!$category)
             return$this->returnError('001','هذا القسم غير موجود');
         return $this->returnData('category',$category,'تم ايجاد القسم بنجاح');
    }
    public function changeStatus(Request $request)
    {
        Category::where('id',$request->id) -> update(['active' => $request->active]);

        return $this->returnSuccessMessage('تم التعديل بنجاح','0111');

    }
}
