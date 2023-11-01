<?php

class BaseModel extends Database
{
    public $connect;

    public function __construct()
    {
        $this->connect = $this->connect();
    }

    // Lấy tất cả dữ liệu trong bảng
        public function all($select, $table, $orderBy, $limit)
        {
            $select = implode(",", $select);
           
            $order = [];
            if ($orderBy === []) {
                $orderBy = '';
            } else {
                foreach ($orderBy as $key => $value) {
                    $order[] = $key . ' ' . $value;
                }
                $orderBy = "ORDER BY " . implode(",", $order);
            }
            $sql = "SELECT ${select} FROM ${table} ${orderBy} LIMIT ${limit}";

            $data = $this->query($sql);
            return $data->fetchAll();
        }   

    //update và trả về số hàng bị ảnh hưởng
    public function update($table, $data, $id): int
    {
        $setValue = [];
        foreach ($data as $key => $value) {
            $setValue[] = $key . "='" . $value . "'";
        }
        $setValue = implode(",", $setValue);

        $sql = "UPDATE ${table} SET ${setValue}  WHERE id=${id}";
        $data = $this->query($sql);
        return $data->rowCount();
    }

    public function delete($table, $id):int
    {
        $sql = "DELETE FROM ${table} WHERE id=${id}";
        $data = $this->query($sql);
//        $sql="SELECT * FROM ";
        return $data->rowCount();
    }

    public function query($sql): PDOStatement
    {
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

}
