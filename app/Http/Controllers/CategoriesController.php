<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function  __construct()
    {

    }
    //hiện thị danh sách chuyên mục
    public function  index(Request $request) {
// $all=$request ->all();
// echo $all['id'];
// dd($all);
        // return 'danh sach chuyen muc';
    }
    //lấy ra một chuyên mục theo id
    public function  getCategory($id)  {
        
    }
    //cập nhật 1 chuyên mục
    public function  updateCategory($id)  {
        
    }
    // show form thêm dữ liệu

    public function showForm()  {
        
    }
    // thêm dữ liệu 
    public function  addCategory() {
        
    }
    // thêm dữ liệu vào chuyên mục 
    public function  handleAppCatrgory() {
        
    }
    // xóa dữ liệu 
    public function deleteCategory(){

    }
}
