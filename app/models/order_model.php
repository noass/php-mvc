<?php

class OrderModel {
    private $order_id = null;
    private $customer_id = null;
    private $order_date = null;
    private $status = null;
    private $comments = null;
    private $shipped_date = null;
    private $shipper_id = null;

    private $status_name = null;

    private function setStatusName(){
            $this->status_name = $this->retrieveStatusName();
    }

    private function retrieveStatusName(){
        return ;
    }
}