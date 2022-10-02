<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Item_Master_Model;
use App\Models\Masjid_Model;


class Masjid_Minar extends BaseController
{
    public function index()
    {
        $Masjid_Model = new Masjid_Model();

        $data['category_master'] = $Masjid_Model->findAll();

        echo view('Masjid_Minar/header');
        return view('Masjid_Minar/category_master', $data);
        echo view('Masjid_Minar/footer');
    }

    public function store()
    {
        $Masjid_Model = new Masjid_Model();

        $data = [
            'category_name' => $this->request->getPost('category_name')
        ];

        $Masjid_Model->save($data);
        return redirect()->to(base_url('/'))->with('status', 'Category Added Successfully !..');
    }

    public function add_item()
    {
        echo view('Masjid_Minar/header');
        $Masjid_Model = new Masjid_Model();
        $data['category_master'] = $Masjid_Model->findAll();
        return view('Masjid_Minar/item_master', $data);
        echo view('Masjid_Minar/footer');
    }

    public function item_store()
    {
        $Item_Master_Model = new Item_Master_Model();
        $file = $this->request->getFile('item_image');
        if ($file->isValid() && !$file->hasMoved()) {
            $item_imageName = $file->getRandomName();
            $file->move('upload/', $item_imageName);
        }
        $data = [

            'category_id' => $this->request->getPost('category_id'),
            'item_name' => $this->request->getPost('item_name'),
            'item_image' => $item_imageName,
            'editor1' => $this->request->getPost('editor1')
        ];

        $Item_Master_Model->save($data);
        return redirect()->to(base_url('item_master'))->with('status', 'Item Added Successfully !..');
    }

    public function show_item()
    {
        $Item_Master_Model = new Item_Master_Model();

        $data['item_master'] = $Item_Master_Model->findAll();

        echo view('Masjid_Minar/header');
        return view('Masjid_Minar/item_master_list', $data);
        echo view('Masjid_Minar/footer');
    }

    public function login()
    {

        $Item_Master_Model = new Item_Master_Model();

        $result = $Item_Master_Model->where('item_name', $this->request->getVar('item_name'))->first();
        //   print_r($result);
        //   exit;

        if ($result != NULL) {
            if ($result['item_id'] == $this->request->getVar('item_id')) {
                echo "<h1> Welcome , " . $result['item_name'] . "</h1>";
            } else {
                echo "Invalid Item";
                echo view('Masjid_Minar/header');
                return view('Masjid_Minar/login');
                echo view('Masjid_Minar/footer');
            }
        } else {
            echo view('Masjid_Minar/header');
            return view('Masjid_Minar/login');
            echo view('Masjid_Minar/footer');
        }

        echo view('Masjid_Minar/header');
        return view('Masjid_Minar/login');
        echo view('Masjid_Minar/footer');
    }
}
