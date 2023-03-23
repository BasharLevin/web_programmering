<?php
session_start();
class guest_book
{
    private mixed $userName;
    private mixed $comment;
    private mixed $date;

    /**
     * @param mixed $userName
     * @param mixed $comment
     * @param mixed $date
     */
    public function __construct(mixed $userName, mixed $comment, mixed $date)
    {
        $this->userName = $userName;
        $this->comment = $comment;
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getUserName(): mixed
    {
        return $this->userName;
    }

    /**
     * @return mixed
     */
    public function getComment(): mixed
    {
        return $this->comment;
    }

    public function add_comment($obj){
        $a = unserialize(file_get_contents("text_file/output.txt"));
        $a[] = $obj;
        return serialize($a);
    }


    public function remove_comment($index){
        $array = array();
        if(file_exists("text_file/output.txt")){
            $array = unserialize(file_get_contents("text_file/output.txt"));
            $arr=array_reverse($array);
        }
        unset($arr[$index]);
        file_put_contents("text_file/output.txt", serialize($arr));
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }
    public function getDate(): mixed
    {
        return $this->date;
    }


}

