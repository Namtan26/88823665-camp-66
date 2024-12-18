<h1>File index.php</h1>
<?php
$my_arr = array(1,2,3,4,5, "myindex" => 6);
foreach ($my_arr as $key => $value) {
    echo "<h1>". $value ."</h1>";
}
for ($i = 0; $i < count($my_arr); $i++) {
    echo "<h1>".$my_arr[$i]."/<h1>";
?>
<h1><?php echo $my_arr[$i];  ?></h1>
<?php
}
/** File index.php */
#comment
//comment
$my_arr =  array(1,array(2),3,4,5,"myindex" => (3+3), "myindex2" => 7);
print_r($my_arr);
echo"<br>";
$my_arr2[] = 2;
$my_arr2[] =1;
$my_arr2[] = 3;
print_r($my_arr2);

if(False) {
    echo "if false";
}else if(True || False) {
    echo "else if true";
}else{
    echo "if true";
}


$myvar = "Hello World";
$myvar = 1;
echo "<h1>" .$myvar."</h1>";
echo"<br>";
$x = 1;
function x(){
    global $x;
    $x = 2;
}
echo $x;
echo "<br>";
x();
echo $x;
echo "<br>";
echo "1.2" + "1.5";
echo "<br>";
$x = "A";
$x++;
echo $x;
echo "<br>";
 ?>
 <h1><?php echo $myvar; ?></h1>