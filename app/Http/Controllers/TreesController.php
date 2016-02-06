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

        return view('trees.binary');
    }

    private function tree_children($children, $level, $final)
    {
        $new_children = [];
        if ($level < 5) {
            foreach ($children as $child_a) {
                $this->children_tree[] = json_encode([
                    'memberId' => $child_a->user->id,
                    'parentId' => $child_a->parent_id,
                    'position' => $child_a->position,
                    'name' => $child_a->user->name,
                    'initialDate' => $child_a->user->created_at->format('Y-m-d'),
                    'enroller' => $child_a->sponsor->name,
                    'type' => $child_a->product_id,
                    'img' => '',
                    'NumMembersDown' => 0
                ]);
                foreach ($child_a->children as $child_b) {
                    $new_children[] = $child_b;
                }
            }
            $level++;
            $this->tree_children($new_children, $level, $final);
        }
    }

    public function tree()
    {
        $this->children_tree[] = json_encode([
            'memberId' => auth()->user()->id,
            'parentId' => auth()->user()->trees->parent_id,
            'position' => auth()->user()->trees->position,
            'name' => auth()->user()->name,
            'initialDate' => auth()->user()->created_at->format('Y-m-d'),
            'enroller' => auth()->user()->trees->sponsor_id > 0 ? auth()->user()->trees->sponsor->name : '',
            'type' => auth()->user()->product_id,
            'img' => '',
            'NumMembersDown' => 0
        ]);
        $children = auth()->user()->trees->children;
        $this->tree_children($children, 2, 5);

//        dd($this->children_tree);

        return view('trees.tree', [
            'children' => $this->children_tree,
        ]);

        /*
         * memberId = user_id
         * parent_id = 0 para raiz
         * positions (1 izquierda, 2 derecha) basado en pantalla
         *  [
            {memberId : 1, parentId:0, position: 1, name: 'Pedro Tompson', initialDate:"29/05/2015", enroller:"Gabriel Arnaldo", type: 1, img: "user-image.png", NumMembersDown: 0},
            {memberId : 2, parentId:1, position: 2, name: 'Marta Marieta', initialDate:"12/01/2015", enroller:"Silvia Matias", type: 1, img: "user-image.png", NumMembersDown: 3},
            {memberId : 3, parentId:1, position: 1, name: 'Agnaldo Arstrides', initialDate:"08/12/2015", enroller:"Augusto Martins", type: 2, img: "user-image.png", NumMembersDown: 4},
            ...
        ];
         */
    }
}
