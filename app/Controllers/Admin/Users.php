<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        $data['title'] = "Index";
        return view('admin/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => "About",
            'tes' => ["coba", "faisal", "Ryan"]
        ];
        return view('admin/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => "Contact",
            'alamat' => [
                [
                    'tes' => "shfsjdfhsd",
                    'nama' => "sdhfjkshdf"
                ],
                [
                    'tes' => "sdjhfksue",
                    'nama' => "dshfjksdfe"
                ]
            ]
        ];
        return view('admin/contact', $data);
    }
}
