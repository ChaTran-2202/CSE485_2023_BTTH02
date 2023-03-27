<?php
require_once(SERVICE_PATH.'/CategorySer.php');

class CategoryCtrl
{
    private $category;
    function view($page, $data){
//        if (isset($data)){
//            extract($data);
//        }
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
        require_once (VIEW_PATH.'/categories/CategoryAdd.php');
    }

    public function addCat(){
        $this->category = new CategorySer();
        $this->category->addCategory($_POST['txtCatName']);
    }

    public function edit()
    {
        require_once (VIEW_PATH.'/categories/CategoryEdit.php');
    }

    public function update()
    {
        $this->category = new CategorySer();
        $this->category->updateCategory($_POST['txtCatId'], $_POST['txtCatName']);
    }

    public function delete()
    {
        $this->category = new CategorySer();
        $this->category->delCategory($_GET['id']);
    }
}
