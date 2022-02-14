<?php


namespace App\classes;
class AddProduct
{
    protected $file;
    protected $directory;
    protected $name;
    protected $imageName;
    protected $tempPath;

    public function __construct($post=null, $file=null)
    {
        $this->file = $file;
        $this->imageName = $file['image']['name'];
        $this->tempPath = $file['image']['tmp_name'];
        $this->directory = 'assets/img/product-image/' .$this->imageName;
    }
    public function index()
    {
        header('Location: action.php?pages=home');
    }
    public function newAddProduct()
    {

        move_uploaded_file($this->tempPath, $this->directory);
    }


}