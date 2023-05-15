<?php
class Product_model extends CI_Model {
    public function get_products_by_ids($ids, $baseUrl) {
        $products = [];

        if (($handle = fopen($baseUrl."assets/csv/products.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                $id = $data[0];
                if (in_array($id, $ids)) {
                    $product = [
                        'id' => $id,
                        'name' => $data[1],
                        'description' => $data[2],
                        'store' => $data[3],
                        'price' => $data[4],
                        'affiliate_url' => $data[5],
                        'image_url' => $data[6],
                    ];
                    array_push($products, $product);
                }
            }
            fclose($handle);
        }
        return $products;
    }
}
