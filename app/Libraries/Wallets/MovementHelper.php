<?php

/**
 * Created by PhpStorm.
 * User: Pedro
 * Date: 13/01/2016
 * Time: 12:04 AM
 */
namespace DHI\Libraries\Wallets;

use DHI\UserMovement;

class MovementHelper
{
    static function getMinRow(UserMovement $user_movement)
    {
        $result = '<tr>';
        $result .= '<td>' . $user_movement->id . '</td>';
        switch ($user_movement->movement_id) {
            case 1:
                $result .= '<td><b>' . $user_movement->movement->name . ':</b> ' . $user_movement->payment->user->user . '
                [' . $user_movement->payment->product->name . ']</td >';
                break;
            case 2:
                $result .= '<td><b>' . $user_movement->movement->name . '</b></td >';
                break;
        }
        $result .= '<td><span class="' . ($user_movement->type == 'income' ? 'text-success' : 'text-danger') . ' text-semibold" >
                <i class="icon ' . ($user_movement->type == 'income' ? 'md-chevron-up' : 'md-chevron-down') . '" aria - hidden = "true" >
                </i > $' . number_format($user_movement->amount, 2, '.', ',') . '</span ></td>';
        $result .= '<td>' . date('Y M d', strtotime($user_movement->created_at)) . '</td>';
        $result .= '</tr>';
        return $result;
    }
}