<?php
require_once('services/CategorySer.php');

class CategoryCtrl extends BaseController
{

    public function index()
    {
        $this->load_model('CategorySer');
        $categories = $this->CategorySer::getAllCategory();
        $this->load_view('categories/CategoryIndex', ['categories' => $categories]);
    }

    public function add()
    {
    }

    public function update()
    {
    }

    public function del()
    {
    }
}
