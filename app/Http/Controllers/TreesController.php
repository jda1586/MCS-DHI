<?php

namespace DHI\Http\Controllers;

use DHI\UserTree;
use Illuminate\Http\Request;

use DHI\Http\Requests;
use DHI\Http\Controllers\Controller;

class TreesController extends Controller
{
    protected $children_tree = [];

    public function binary()
    {
        $this->children_tree[] = auth()->user()->trees;
        dd($children = auth()->user()->trees->children);
        $this->tree_children($children, 2, 5);

        dd($this->children_tree);

        return view('trees.binary', [
            'children' => $children
        ]);

        /*
         * memberId = user_id
         * parent_id = 0 para raiz
         * positions (1 izquierda, 2 derecha) basado en pantalla
         *  [
            {memberId : 1, parentId:0, position: 1, name: 'Pedro Tompson', initialDate:"29/05/2015", enroller:"Gabriel Arnaldo", type: 1, img: "user-image.png", NumMembersDown: 0},
            {memberId : 2, parentId:1, position: 2, name: 'Marta Marieta', initialDate:"12/01/2015", enroller:"Silvia Matias", type: 1, img: "user-image.png", NumMembersDown: 3},
            {memberId : 3, parentId:1, position: 1, name: 'Agnaldo Arstrides', initialDate:"08/12/2015", enroller:"Augusto Martins", type: 2, img: "user-image.png", NumMembersDown: 4},
            {memberId : 4, parentId:2, position: 2, name: 'Ferdinando Mureta', initialDate:"17/03/2015", enroller:"Gabriel Arnaldo", type: 3, img: "user-image.png", NumMembersDown: 5},
            {memberId : 5, parentId:4, position: 1, name: 'Marcos Verne', initialDate:"30/08/2015", enroller:"Flávio Mercedez", type: 2, img: "user-image.png", NumMembersDown: 6},
            {memberId : 6, parentId:4, position: 2, name: 'Ariano Suassuna', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 3, img: "user-image.png", NumMembersDown: 7},
            {memberId : 7, parentId:3, position: 2, name: 'Marcela Nunes', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 3, img: "user-image.png", NumMembersDown: 8},
            {memberId : 8, parentId:3, position: 1, name: 'Amanda Braga', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 3, img: "user-image.png", NumMembersDown: 9},
            {memberId : 9, parentId:8, position: 1, name: 'Claudenir Santana', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 1, img: "user-image.png", NumMembersDown: 10},
            {memberId : 10, parentId:9, position: 1, name: 'Naye Nidie', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 1, img: "user-image.png", NumMembersDown: 7},
            {memberId : 11, parentId:9, position: 2, name: 'Jack Wilbert', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 1, img: "user-image.png", NumMembersDown: 3},
            {memberId : 13, parentId:6, position: 1, name: 'Juliano Nunes', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 3, img: "user-image.png", NumMembersDown: 12},
            {memberId : 14, parentId:7, position: 1, name: 'Felipe Nestorsss', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 3, img: "user-image.png", NumMembersDown: 15},
            {memberId : 15, parentId:7, position: 2, name: 'Katia Napaline', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 3, img: "user-image.png", NumMembersDown: 16},
            {memberId : 16, parentId:15, position: 2, name: 'Maria Nunes', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 3, img: "user-image.png", NumMembersDown: 4},
            {memberId : 17, parentId:2, position: 1, name: 'Julia Luna', initialDate:"30/01/2016", enroller:"Silvia Matias", type: 1, img: "user-image.png", NumMembersDown: 3}
        ];
         */
    }

    private function tree_children($children, $level, $final)
    {
        $new_children = [];
        if ($level < 5) {
            foreach ($children as $child_a) {
                foreach ($child_a->chlildren as $child_b) {
                    $new_children[] = $child_b;
                    $this->children_tree[] = $child_b;
                }
            }
            $level++;
            $this->tree_children($new_children, $level, $final);
        }
    }

    public function unilevel()
    {
        return view('trees.unilevel');
    }

    public function tree()
    {
        return view('trees.tree');
    }
}
