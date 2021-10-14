<?php 

require_once('connection.php');
require_once('product.php');

class CProduct 
{
	private $connection;
	private $table_name = "product";
	
	public function __construct() {
        $this->connection = (new Database())->getConnection();
    }

    function setInvisible($id) {
        $query = "UPDATE " . $this->table_name . " SET visibility = 0 WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }
    
    function increaseQuantity($id) {
        $query = "UPDATE " . $this->table_name . " SET product_quantity = product_quantity+1 WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

    function decreaseQuantity($id) {
        $query = "UPDATE " . $this->table_name . " SET product_quantity = product_quantity-1 WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

	function returnSortedProducts($maxCount) {
        $query = "SELECT * FROM " . $this->table_name . " 
                WHERE visibility = 1
                ORDER BY date_create DESC
                LIMIT $maxCount ";

        $statement = $this->connection->prepare($query);
        $statement->execute();
        $products = array();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $product = $this->convertToProduct($row);
            array_push($products, $product);

        }
        return $products;
    }

	private function convertToProduct($row) {
        $product = new Product();
        $product->id = (int) $row['id'];
        $product->productId = (int) $row['product_id'];
        $product->productName = $row['product_name'];
        $product->productPrice = (int) $row['product_price'];
        $product->productArticle = (int) $row['product_article'];
        $product->productQuantity = (int) $row['product_quantity'];
        $product->dateCreate = $row['date_create'];
        return $product;
    }

}

?>
