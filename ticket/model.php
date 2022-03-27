<?php
    include 'connection.php'; 
    class Model extends Connection
    {
    
        public function __construct()
        {
            $this->conn = $this->get_connection();
        }

        public function insert($id, $nama, $tiket)
        {   
            $sql = "INSERT INTO penumpang (id_penumpang, nama_penumpang, id_ticket) VALUES 
            ('$id', '$nama', '$tiket')";

            $this->conn->query($sql);
        }

        public function tampil_data()
        {
            $sql = "SELECT * FROM penumpang";

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
            $sql = "SELECT * FROM penumpang WHERE id_penumpang='$id'";
            $bind = $this->conn->query($sql); 
            while ($obj = $bind->fetch_object()) {
                $baris = $obj;
            }
            return $baris;
        }

        public function update($id, $nama, $tiket)
        {
            $sql = "UPDATE penumpang SET 
                    nama_penumpang = '$nama',
                    id_ticket = '$tiket'
                    WHERE id_penumpang = '$id'";

            $this->conn->query($sql);
        }

        public function delete($id)
        {
            $sql = "DELETE FROM penumpang WHERE id_penumpang ='$id'";
            $this->conn->query($sql);
        }
    }
