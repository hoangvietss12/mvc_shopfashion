<?php
class ShopModel extends Model{
    private $productsPerPage = 12;
    public function getCategories(){
        $data = $this->db->table('category')->get();
        return $data;
    }
    public function getBrands(){
        $data = $this->db->table('vendors')->get();
        return $data;
    }

    public function getSizes(){
        $data = $this->db->table('size')->get();
        return $data;
    }

    public function getProducts($currentPage){
        $totalProducts = $this->db->select('count(*) as numbers')->table('products')->get();
        $totalPages = ceil($totalProducts[0]['numbers'] / $this->productsPerPage);
        $offset = ($currentPage -1) * $this->productsPerPage;

        $this->db->limit($this->productsPerPage, $offset);

        $data = $this->db->table('products')->get();
        return [$data, $totalPages];
    }

    public function getProductById($id){
        $data = $this->db->table('products')->join('category', 'products.product_category=category.category_id')->where('product_id', '=', $id)->get();
        return $data;
    }

    public function getRelatedProducts($category){
        $data = $this->db->table('products')->join('category', 'products.product_category=category.category_id')->where('category_name', '=', $category)->limit(4)->get();
        return $data;
    }

    public function showCategory($name, $currentPage){
        $totalProducts = $this->db->select('count(*) as numbers')->table('products')->join('category', 'products.product_category=category.category_id')->where('category_name', '=', $name)->get();
        $totalPages = ceil($totalProducts[0]['numbers'] / $this->productsPerPage);
        $offset = ($currentPage -1) * $this->productsPerPage;

        $this->db->limit($this->productsPerPage, $offset);
        $data = $this->db->table('products')->join('category', 'products.product_category=category.category_id')->where('category_name', '=', $name)->get();
        return [$data, $totalPages];
    }

    public function showBrand($name, $currentPage){
        $totalProducts = $this->db->select('count(*) as numbers')->table('products')->join('vendors', 'products.product_vendor=vendors.vendor_id')->where('vendor_name', '=', $name)->get();
        $totalPages = ceil($totalProducts[0]['numbers'] / $this->productsPerPage);
        $offset = ($currentPage -1) * $this->productsPerPage;

        $this->db->limit($this->productsPerPage, $offset);
        $data = $this->db->table('products')->join('vendors', 'products.product_vendor=vendors.vendor_id')->where('vendor_name', '=', $name)->get();
        return [$data, $totalPages];
    }

    public function showPrice($range, $currentPage){
        $totalProducts = $this->db->select('count(*) as numbers')->table('products')->where('product_price', '>=', $range[0][0])->where('product_price', '<=', $range[0][1])->get();
        $totalPages = ceil($totalProducts[0]['numbers'] / $this->productsPerPage);
        $offset = ($currentPage -1) * $this->productsPerPage;

        $this->db->limit($this->productsPerPage, $offset);
        $data = $this->db->table('products')->where('product_price', '>=', $range[0][0])->where('product_price', '<=', $range[0][1])->get();
        return [$data, $totalPages];
    }

    public function showProductSortedByPrice($orderBy, $currentPage){
        $totalProducts = $this->db->select('count(*) as numbers')->table('products')->orderBy('product_price', $orderBy)->get();
        $totalPages = ceil($totalProducts[0]['numbers'] / $this->productsPerPage);
        $offset = ($currentPage -1) * $this->productsPerPage;

        $this->db->limit($this->productsPerPage, $offset);
        $data = $this->db->table('products')->orderBy('product_price', $orderBy)->get();
        return [$data, $totalPages];
    }

    public function showProductsBySearch($keyword, $currentPage){
        $totalProducts = $this->db->select('count(*) as numbers')->table('products')->whereLike('product_name', "%$keyword%")->get();
        $totalPages = ceil($totalProducts[0]['numbers'] / $this->productsPerPage);
        $offset = ($currentPage -1) * $this->productsPerPage;

        $this->db->limit($this->productsPerPage, $offset);
        $data = $this->db->table('products')->whereLike('product_name', "%$keyword%")->get();
        return [$data, $totalPages];
    }

    public function tableFill(){}
    public function fieldFill(){}
}