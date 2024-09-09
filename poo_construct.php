<!DOCTYPE html>
<html>
<body>
<?php
class fruta{
    public $name;
    public $color;

    function _construct($name){
     $this ->name = $name;     
    }
    function get_name(){
        return $this ->name;        
    }
}
$apple = new fruta("apple");
echo $apple->get_name();
?>
</body>
</html>