<?php defined('SYSPATH') or die('No direct script access.');

class Model_Product extends ORM {
    protected $_has_many = array(
        'comments' => array(
            'model' =>  'comment',
            'foreign_key'   =>  'product_id',
        ),
        'images'    =>  array(
            'model' =>  'ProductImage',
            'foreign_key'   =>  'product_id'
        ),
        'categories'    =>  array(
            'model' =>  'category',
            'foreign_key'   =>  'product_id',
            'through'   =>  'products_categories',
            'far_key'   =>  'kategory_id',
        )
    );
}