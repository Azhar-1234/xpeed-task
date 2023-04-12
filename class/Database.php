<?php
/**
* Database Class
*/
class Database
{
    private $con;
    public function __construct()
    {
        define("HOSTNAME","localhost");
        define("USERNAME","root");
        define("PASSWORD","");
        define("DBNAME","xpeed_task");
        $this->con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME);

        if (!$this->con) {
            echo "Database not connected";
        }
    }

    //insert Data
    public function insert($data)
    {   
        try {
            $amount         = $data['amount'];
            $buyer          = $data['buyer'];  
            $buyer_email    = $data['buyer_email'];
            $note           = $data['note'];
            $city           = $data['city'];
            $phone          = $data['phone'];
            $receipt_id     = $data['receipt_id'];
            $items          = $data['items'];
            $entry_by       = $data['entry_by'];
            $ip = $_SERVER['REMOTE_ADDR'];
            $query = " insert into sample_form (amount,buyer,buyer_email,buyer_ip,note,city,phone,receipt_id,items,entry_at,entry_by) values ('$amount','$buyer','$buyer_email','$ip','$note','$city','$phone','$receipt_id','$items','".date('Y-m-d')."','$entry_by')  ";  
            $save = mysqli_query($this->con,$query);
                        return "data inserted successfully";
        } catch (Exception $e) {
             $this->conn->rollBack();

            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    //read data
    public function show()
    { 
        $id = isset($_GET['search_id'])? $_GET['search_id'] : null;
        $where = $id !== null ? " WHERE ID =  ".$id: '';
        $query = "SELECT * FROM `sample_form`".$where;
        $data = mysqli_query($this->con,$query);
        if ($data) {
            return $data;
        }
        false;
    }
    //edit data
    public function edit($id)
    {
       return  mysqli_query($this->con,"SELECT * FROM `sample_form` WHERE `id`='$id'");
    }
    //update Data
    public function update($data)
    {
        try {
            var_dump($data);
            $id             = $data['ID'];
            $amount         = $data['amount'];
            $buyer          = $data['buyer'];
            $buyer_email    = $data['buyer_email'];
            $note           = $data['note'];
            $city           = $data['city'];
            $phone          = $data['phone'];
            $receipt_id     = $data['receipt_id'];
            $items          = $data['items'];
            $entry_by       = $data['entry_by'];
            $ip = $_SERVER['REMOTE_ADDR'];

            $query = " UPDATE `sample_form` SET   `amount`='$amount',`buyer`='$buyer',`buyer_email`='$buyer_email',`buyer_ip`='$ip',`note`='$note',`city`='$city',`phone`='$phone',`receipt_id`='$receipt_id',`items`='$items',`entry_by`='$entry_by',`entry_at`=".date('Y-m-d')." WHERE `ID`='$id' ";  
            $save = mysqli_query($this->con,$query);
            return "updated successfully";
        }
        catch (Exception $e) {
             $this->conn->rollBack();

            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    //delete data
    public function delete($id)
    {
        $query = "DELETE FROM `sample_form` WHERE `id`='$id'";
        $delete_data = mysqli_query($this->con,$query);
        if ($delete_data) {
            header("Location: ../frontend/index.php");
        }

    }
    //select search 
    public function selectSearch($id)
    {
        return mysqli_query($this->con,"SELECT * FROM `sample_form` WHERE `id`='$id' ");
    }
}












