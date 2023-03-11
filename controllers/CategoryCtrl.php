<?php
require_once(SERVICE_PATH.'/CategorySer.php');

class CategoryCtrl
{
    private $category;
    function view($page, $categories){
        if (isset($categories)){
            extract($categories);
        }
        require_once (VIEW_PATH.'/categories/'.$page.'.php');
    }
    public function index()
    {
        $this->category = new CategorySer();
        $categories = $this->category->getAllCategory();
        $this->view('CategoryIndex', $categories);
    }

    public function add()
    {
        $this->category = new CategorySer();
        $categories = $this->category->addCategory();
    }

    public function update()
    {
        $this->category->updateCategory();
    }

    public function del()
    {
        $this->category->delCategory();
    }
}
$obj = new CategoryCtrl();
echo var_dump($obj->index());
