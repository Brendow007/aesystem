@extends('app')
@section('content')



    {{Cart::add('192ao12', 'Product 1', 1, 9.99)}}
    {{Cart::add('1239ad0', 'Product 2', 2, 5.95, array('size' => 'large'))}}

    // View

    <table>
        <thead>
        <tr >
            <th>Product</th>
            <th>Qty</th>
            <th>Item Price</th>
            <th>Subtotal</th>
        </tr>
        </thead>

        <tbody>

        <?php foreach($cart as $row) :?>

        <tr>
            <td>
                <p><strong><?php echo $row->name;?></strong></p>
                <p><?php echo ($row->options->has('size') ? $row->options->size : '');?></p>
            </td>
            <td><input type="text" value="<?php echo $row->qty;?>"></td>
            <td>$<?php echo $row->price;?></td>
            <td>$<?php echo $row->subtotal;?></td>
        </tr>

        <?php endforeach;?>

        </tbody>
    </table>


    @stop