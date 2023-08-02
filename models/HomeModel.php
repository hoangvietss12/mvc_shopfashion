<?php
class HomeModel extends Model{
    public function getProductsByTagsBest() {
        $data = $this->db->table('products')->whereLike('product_tags', '%best%')->limit('8')->get();
        return $data;
    }

    public function getProductsByTagsSale() {
        $data = $this->db->table('products')->whereLike('product_tags', '%sale%')->limit('8')->get();
        return $data;
    }

    public function getProductsByTagsNew() {
        $data = $this->db->table('products')->whereLike('product_tags', '%new%')->limit('8')->get();
        return $data;
    }

    public function checkUser($username, $pass) {
        $data = $this->db->table('users')->where('user_name', '=', $username)->where('user_password', '=', $pass)->get();
        return $data;
    }

    public function checkUserName($username) {
        $data = $this->db->table('users')->where('user_name', '=', $username)->get();
        var_dump($data);
        return $data;
    }

    public function addUser($data) {
        $this->db->table('users')->insert($data);
    }
    public function tableFill(){}
    public function fieldFill(){}

}