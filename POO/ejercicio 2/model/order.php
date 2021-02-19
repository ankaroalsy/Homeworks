<?php
    class Order {
        private $id;
        private $tx_id;
        private $amount;
        private $username;
        private $buyer_email; 
        private $status;
        public function setId($id){
            $this->id = $id;
        }
        public function getId(){
            return $this->id;
        }
        public function setTxId($tx_id){
            $this->tx_id = $tx_id;
        }
        public function getTxId(){
            return $this->tx_id;
        }
        public function setAmount($amount){
            $this->amount = $amount;
        }
        public function getAmount(){
            return $this->amount;
        }
        public function setUsername($username){
            $this->username = $username;
        }
        public function getUsername(){
            return $this->username;
        }
        public function setBuyerEmail($buyer_email){
            $this->buyer_email = $buyer_email;
        }
        public function getBuyerEmail(){
            return $this->buyer_email;
        } 
        public function setStatus($status){
            $this->status = $status;
        }
        public function getStatus(){
            return $this->status;
        }
        public function createOrder(){
            // in case to save the order to the db
            // $sql = "INSERT INTO orders (id, txid, amount, email, status) VALUES (
            //         " . $this->getId() . ",
            //         " . $this->getTxId() . ",
            //         " . $this->getAmount() . ",
            //         " . $this->getBuyerEmail() . ",
            //         " . $this->getStatus() . ")";
            // $this->con->query($sql);
            echo "<center><h1>Hi, " . $this->getUsername() . " Your order has been created.</h1>
                    Your account will be created as soon as posible with the ID: " . $this->getTxId() . " <br>
                    We will send a confirmation mail to <b>" . $this->getBuyerEmail() . "</b> When the account is ready.<br>
                    Status: " . $this->getStatus() . "
                  </center>";
        }
    }
?>