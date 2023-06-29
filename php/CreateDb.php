<?php


class CreateDb
{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename;
        public $con;


        // class constructor
    public function __construct(
        $dbname = "Newdb",
        $tablename = "Productdb",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
      $this->dbname = $dbname;
      $this->tablename = $tablename;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;

      // create connection
        $this->con = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }

        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table
            $sql = " CREATE TABLE IF NOT EXISTS $tablename
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             product_name VARCHAR (25) NOT NULL,
                             product_price FLOAT,
                             product_image VARCHAR (100)
                            );";

            if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : " . mysqli_error($this->con);
            }

        }else{
            return false;
        }
    }

    // get product from the database
    public function getData(){
        $sql = "SELECT * FROM $this->tablename";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function Shoes_men(){
        $sql = "SELECT * FROM $this->tablename WHERE category='Shoes_men'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function Slides_sandals_men(){
        $sql = "SELECT * FROM $this->tablename WHERE category='Slides_sandals_men'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function Clothing_men(){
        $sql = "SELECT * FROM $this->tablename WHERE category='Clothing_men'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function  Shoes_women(){
        $sql = "SELECT * FROM $this->tablename WHERE category='Shoes_women'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function Slides_women(){
        $sql = "SELECT * FROM $this->tablename WHERE category='Slides_women'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function Clothing_women(){
        $sql = "SELECT * FROM $this->tablename WHERE category='Clothing_women'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function Clothing_kids(){
        $sql = "SELECT * FROM $this->tablename WHERE category='Clothing_kids'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function shoes_kids(){
        $sql = "SELECT * FROM $this->tablename WHERE category='shoes_kids'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function shoes(){
        $sql = "SELECT * FROM $this->tablename WHERE sub_category='shoes'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function clothing(){
        $sql = "SELECT * FROM $this->tablename WHERE sub_category='clothing'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function slides_sandals(){
        $sql = "SELECT * FROM $this->tablename WHERE sub_category='Sandals'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function sport(){
        $sql = "SELECT * FROM $this->tablename WHERE sub_category='sport'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function ATHLEISURE_ESSENTILS(){
        $sql = "SELECT * FROM $this->tablename WHERE category='ATHLEISURE_ESSENTILS'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function MONEY_HEIST(){
        $sql = "SELECT * FROM $this->tablename WHERE category='MONEY_HEIST'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function RUNNING_GEAR(){
        $sql = "SELECT * FROM $this->tablename WHERE category='RUNNING_GEAR'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function TRAINING_ESSENTILS(){
        $sql = "SELECT * FROM $this->tablename WHERE category='TRAINING_ESSENTILS'";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
    public function search(){
        $query = $_GET["search"];
        $sql = "select * from producttb where match(product_name,category,sub_category) against ('$query')";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
}
