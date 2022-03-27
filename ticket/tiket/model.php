<?php
    include 'connection.php'; 
    class Model extends Connection
    {
    
        public function __construct()
        {
            $this->conn = $this->get_connection();
        }

        public function insert($id, $asal, $tujuan, $harga)
        {   
            $sql = "INSERT INTO ticketpesawat (id_ticket, asal, tujuan, harga) VALUES 
            ('$id', '$asal', '$tujuan','$harga')";

            $this->conn->query($sql);
        }

        public function tampil_data()
        {
            $sql = "SELECT * FROM ticketpesawat";

            $bind = $this->conn->query($sql); 
            while ($obj = $bind->fetch_object()) {
                $baris[] = $obj;
            }
            if (!empty($baris)) { 
                return $baris;
            }
        }

        public function edit($id)
        { 
            $sql = "SELECT * FROM ticketpesawat WHERE id_ticket='$id'";
            $bind = $this->conn->query($sql); 
            while ($obj = $bind->fetch_object()) {
                $baris = $obj;
            }
            return $baris;
        }

        public function update($id, $asal, $tujuan, $harga)
        {
            $sql = "UPDATE ticketpesawat SET 
                    asal = '$asal', 
                    tujuan = '$tujuan',
                    harga = '$harga'
                    WHERE id_ticket = '$id'";
                    
            $this->conn->query($sql);
        }

        public function delete($id)
        {
            $sql = "DELETE FROM ticketpesawat WHERE id_ticket ='$id'";
            $this->conn->query($sql);
        }
    }
