<?php
class CartModel extends Model{
    public function getProductById($id) {
        $data = $this->db->table('products')->select('product_id, product_name, product_img, product_quantity, product_price')->where('product_id', '=', $id)->first();
        return $data;
    }
    public function tableFill($table){}
    public function fieldFill($table){}
}