<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {


	private $_table = "products"; //nama tabel

    //Ini adalah properti atau variabel yang kita butuhkan dalam model Product.
    // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $product_id;
    public $name;
    public $price;
    public $image = "default.jpg";
    public $description;

    public function rules() //Method ini akan mengembalikan sebuah array yang berisi rules
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ]; //Pada Rules di atas, kita memberikan aturan untuk wajib mengisi (required) field name, price, dan description.
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

}

/* End of file Product_model.php */
/* Location: ./application/models/Product_model.php */