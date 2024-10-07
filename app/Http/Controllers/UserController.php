<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    protected $users = 
        [
            [
                "id" => 1,
                "name" => "Beyoncé Knowles",
                "age" => 42,
                "email" => "beyonce@example.com",
                "occupation" => "Singer"
            ],
            [
                "id" => 2,
                "name" => "Leonardo DiCaprio",
                "age" => 49,
                "email" => "leonardo.dicaprio@example.com",
                "occupation" => "Actor"
            ],
            [
                "id" => 3,
                "name" => "Taylor Swift",
                "age" => 34,
                "email" => "taylor.swift@example.com",
                "occupation" => "Singer-Songwriter"
            ],
            [
                "id" => 4,
                "name" => "Chris Hemsworth",
                "age" => 40,
                "email" => "chris.hemsworth@example.com",
                "occupation" => "Actor"
            ],
            [
                "id" => 5,
                "name" => "Ariana Grande",
                "age" => 31,
                "email" => "ariana.grande@example.com",
                "occupation" => "Singer"
            ],
            [
                "id" => 6,
                "name" => "Dwayne Johnson",
                "age" => 52,
                "email" => "dwayne.johnson@example.com",
                "occupation" => "Actor"
            ],
            [
                "id" => 7,
                "name" => "Zendaya Coleman",
                "age" => 27,
                "email" => "zendaya@example.com",
                "occupation" => "Actress"
            ],
            [
                "id" => 8,
                "name" => "Bruno Mars",
                "age" => 38,
                "email" => "bruno.mars@example.com",
                "occupation" => "Singer"
            ],
            [
                "id" => 9,
                "name" => "Rihanna Fenty",
                "age" => 36,
                "email" => "rihanna.fenty@example.com",
                "occupation" => "Singer and Entrepreneur"
            ],
            [
                "id" => 10,
                "name" => "Tom Holland",
                "age" => 28,
                "email" => "tom.holland@example.com",
                "occupation" => "Actor"
            ],
            [
                "id" => 11,
                "name" => "Selena Gomez",
                "age" => 32,
                "email" => "selena.gomez@example.com",
                "occupation" => "Singer-Actress"
            ],
            [
                "id" => 12,
                "name" => "Ed Sheeran",
                "age" => 33,
                "email" => "ed.sheeran@example.com",
                "occupation" => "Singer-Songwriter"
            ],
            [
                "id" => 13,
                "name" => "Scarlett Johansson",
                "age" => 39,
                "email" => "scarlett.johansson@example.com",
                "occupation" => "Actress"
            ],
            [
                "id" => 14,
                "name" => "Shawn Mendes",
                "age" => 25,
                "email" => "shawn.mendes@example.com",
                "occupation" => "Singer"
            ],
            [
                "id" => 15,
                "name" => "Lady Gaga",
                "age" => 38,
                "email" => "lady.gaga@example.com",
                "occupation" => "Singer-Actress"
            ]
        ];
        

    public function index()
    {
        return view('admin', ['users' => $this->users]);
    }

    public function create()
    {
        return view('admin-create');
    }

    public function edit($id)
    {

        $user = User::find($id);

        if (!$user) {
            dd("No record");
        }
        return view("admin-edit", compact('user'));
    }
    public function show($id)
    {
        $user = collect($this->users)->firstWhere('id', $id);

        if (!$user) {
            abort(404, 'User not found');
        }

        return view('admin-show', ['user' => $user]);
    }
}