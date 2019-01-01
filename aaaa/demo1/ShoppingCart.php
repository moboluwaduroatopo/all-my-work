<?php
require_once "DBController.php";

class ShoppingCart extends DBController
{

    function getAllProduct()
    {
        $query = "SELECT * FROM product_tb";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getMemberCartItem($member_id)
    {
        $query = "SELECT product_tb.*, cart.id as cart_id,cart_tb.quantity FROM product_tb, cart_tb WHERE 
            product_tb.id = cart_tb.product_id AND cart_tb.member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $cartResult = $this->getDBResult($query, $params);
        return $cartResult;
    }

    function getProductByCode($product_code)
    {
        $query = "SELECT * FROM product_tb WHERE code=?";
        
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $product_code
            )
        );
        
        $productResult = $this->getDBResult($query, $params);
        return $productResult;
    }

    function getCartItemByProduct($product_id, $member_id)
    {
        $query = "SELECT * FROM cart_tb WHERE product_id = ? AND member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $product_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $cartResult = $this->getDBResult($query, $params);
        return $cartResult;
    }

    function addToCart($product_id, $quantity, $member_id)
    {
        $query = "INSERT INTO cart_tb (product_id,quantity,member_id) VALUES (?, ?, ?)";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $product_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $quantity
            ),
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $this->insertDB($query, $params);
    }

    function updateCartQuantity($quantity, $cart_id)
    {
        $query = "UPDATE cart_tb SET  quantity = ? WHERE cart_id= ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $quantity
            ),
            array(
                "param_type" => "i",
                "param_value" => $cart_id
            )
        );
        
        $this->updateDB($query, $params);
    }

    function deleteCartItem($cart_id)
    {
        $query = "DELETE FROM cart_tb WHERE cart_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $cart_id
            )
        );
        
        $this->updateDB($query, $params);
    }

    function emptyCart($member_id)
    {
        $query = "DELETE FROM cart_tb WHERE member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $this->updateDB($query, $params);
    }
    
    function insertOrder($customer_detail, $member_id, $amount)
    {
        $query = "INSERT INTO order_tb (customer_id, amount, name, address, city, state, zip, country, payment_type, order_status, order_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $member_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $amount
            ),
            array(
                "param_type" => "s",
                "param_value" => $customer_detail["name"]
            ),
            array(
                "param_type" => "s",
                "param_value" => $customer_detail["address"]
            ),
            array(
                "param_type" => "s",
                "param_value" => $customer_detail["city"]
            ),
            array(
                "param_type" => "s",
                "param_value" => $customer_detail["state"]
            ),
            array(
                "param_type" => "s",
                "param_value" => $customer_detail["zip"]
            ),
            array(
                "param_type" => "s",
                "param_value" => $customer_detail["country"]
            ),
            array(
                "param_type" => "s",
                "param_value" => "PAYPAL"
            ),
            array(
                "param_type" => "s",
                "param_value" => "PENDING"
            ),
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d H:i:s")
            )
        );
        
        $order_id = $this->insertDB($query, $params);
        return $order_id;
    }
    
    function insertOrderItem($order, $product_id, $price, $quantity)
    {
        $query = "INSERT INTO rder_item (order_id, product_id, item_price, quantity) VALUES (?, ?, ?, ?)";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $order
            ),
            array(
                "param_type" => "i",
                "param_value" => $product_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $price
            ),
            array(
                "param_type" => "i",
                "param_value" => $quantity
            )
            );
        
        $this->insertDB($query, $params);
    }
    
    function insertPayment($order, $payment_status, $payment_response)
    {
        $query = "INSERT INTO payment_tb(order_id, payment_status, payment_response) VALUES (?, ?, ?)";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $order
            ),
            array(
                "param_type" => "s",
                "param_value" => $payment_status
            ),
            array(
                "param_type" => "s",
                "param_value" => $payment_response
            )
        );
        
        $this->insertDB($query, $params);
    }
    
    function paymentStatusChange($order, $status) {
        $query = "UPDATE order_tb SET  order_status = ? WHERE order_id= ?";
        
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $status
            ),
            array(
                "param_type" => "i",
                "param_value" => $order
            )
        );
        
        $this->updateDB($query, $params);
    }
}
