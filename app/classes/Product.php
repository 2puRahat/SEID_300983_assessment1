<?php


namespace App\classes;
class Product
{
    protected $id;
    protected $result;
    protected $products = [];



    public function getAllProduct()
    {
        return [
            0 =>[
                'id'=> 1,
                'title' => 'Blajer',
                'description' => 'Winter Product',
                'category' => 'Shiter Poshak',
                'brand' => 'Gentle park',
                'price' => 'Tk. 5000',
                'image'=> '0.jpg'
            ],
            1 =>[
                'id'=> 2,
                'title' => 'T shirt',
                'description' => 'Half Sleev',
                'category' => 'Shiter Poshak',
                'brand' => 'Dorjibari',
                'price' => 'Tk. 6000',
                'image'=> '1.jpg'
            ],
            2 =>[
                'id'=> 3,
                'title' => 'Shirt',
                'description' => 'Full Hata',
                'category' => 'Casual',
                'brand' => 'Easy',
                'price' => 'Tk. 1000',
                'image'=> '2.jpg'
            ],
            3 =>[
                'id'=> 4,
                'title' => 'Pant',
                'description' => 'Full Pant',
                'category' => 'Regular',
                'brand' => 'Grameen Uniqlo',
                'price' => 'Tk. 2000',
                'image'=> '3.jpg'
            ],
            4 =>[
                'id'=> 5,
                'title' => 'Pant Formal',
                'description' => 'Formal Pant',
                'category' => 'Regular Pant',
                'brand' => 'Dorjibari',
                'price' => 'Tk. 4000',
                'image'=> '4.jpg'
            ],
            5 =>[
                'id'=> 6,
                'title' => 'Shirt Formal',
                'description' => 'Shirt cotton',
                'category' => 'Cotton Shirt',
                'brand' => 'Easy',
                'price' => 'Tk. 1500',
                'image'=> '5.jpg'
            ],

        ];
    }
    public function getAllProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }
    public function getSearchProductById()
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($this->id == $product['id'])
            {
                $this->result = $product;
                break;
            }
        }
        return $this->result;
    }

}