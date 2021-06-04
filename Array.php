<html>
    <head><title>Arrays...</title></head>
    <body>
        <table border="3">
            <tr><td>
<?php
$arr = array('php','c','c++','java','Android');
echo count($arr)
?>
                </td></tr>
<tr><td>
<?php
$arr = array("C","php","C","android","php","java");
$newarr = array_count_values($arr);
foreach($newarr as $key => $value){
    echo"$key - <strong>$value</strong></br>";
}
?>
</td></tr>
<tr><td>
<?php
$myarray = array(1,2,3,4,5);
echo array_sum($myarray);
?>
</td></tr>
<tr><td>
<?php
$myarray = array(1,2,3,4,5);
echo array_product($myarray);
?>
</td></tr>
        <tr><td>
<?php
$arr = array('c','c++','java','android','php');
$revarr = array_reverse($arr);
print_r($revarr);
?>
</td></tr>
                <tr><td>
<?php
$arr = array('c','c++','java','android','php');
$temp = in_array('php',$arr);
echo $temp;
?>
</td></tr>
<tr><td>
    <?php
$arr = array('c','c++','java','android','php');
$indexofarray = array_rand($arr);//Returns Array Index
echo $arr[$indexofarray];
?>
</td></tr>
        <tr><td>
<?php
$arr = array('c','c++','java','android','php');
$indexofarray = array_rand($arr,2);
foreach($indexofarray as $key => $value)
{
    echo "$key - <strong>" . $arr[$value] . "</strong></br>";
            
}
?>
</td></tr>
                <tr><td>
<?php
$arr = array('c','c++','java','android','php');
print_r(array_unique($arr));
?>
</td></tr>
                        <tr><td>
<?php
$arr1 = array('c','c++','java','android','php');
$arr2 = array(10,20,30,40,50);

$Newarr = array_merge($arr1,$arr2);
print_r($Newarr);
?>
</td></tr>
                                <tr><td>
<?php
$myarr = array('c','c++','java','android','php');
$check = array_search('android',$myarr);
echo $check;
?>
</td></tr>
                                        <tr><td>
<?php
$arr = range("11","20");
foreach ($arr as $key => $value) {
    echo "$key - $value</br>";
}
?>
</td></tr>
<tr><td>
    <?php
$arr =array(10,40,80,60,20,100);
sort($arr);
print_r($arr);
?>
</td></tr>
<tr><td>
    <?php
$arr = array(10,50,40,80,20,100);
rsort($arr);
print_r($arr);
?>
</td></tr>
<tr><td>
    <?php
$arr = array(10,50,40,80,20,100);
asort($arr);
print_r($arr);
?>
</td></tr>
<tr><td>
    <?php
$arr = array( 
     "Banana" => "Yellow",
    "Apple" => "Red",
    "Mango" => "Green");
ksort ($arr);
foreach ($arr as $key => $value){
    echo "$key - $value</br>";
}
?>
        </td></tr>
        <tr><td>
<?php
$arr = array( 
     "Banana" => "Yellow",
    "Apple" => "Red",
    "Mango" => "Green");
krsort ($arr);
foreach ($arr as $key => $value){
    echo "$key - $value</br>";
}
?>
</td></tr>
<tr><td>

<?php
$myArray = array("Football","Baseball","Hockey","Tennis","Boxing");
shuffle($myArray);

foreach($myArray as $key => $value){
    echo "$value</br>";
}
?>
</td></tr>
        <tr><td>
<?php
$arr = array("a" => "apple", "b" => "banana");
echo array_key_exists('a',$arr);
?>
</td></tr>
                <tr><td>
<?php
$arr = array( 
     "Banana" => "Yellow",
    "Apple" => "Red",
    "Mango" => "Green");
$uppercase = array_change_key_case($arr,CASE_UPPER);
print_r($uppercase);

?>
</td></tr>
    <tr><td>
    <?php
$arr1 = array("Banana","Apple","Mango");
$arr2 = array("Yellow","Red","Green");
$Newarr = array_combine($arr1,$arr2);
?>
</td></tr>
            
 <tr><td>           
<?php
$arr = array('c','c++','java','android','php');
echo end($myarr);
?>
</td></tr>
<tr><td>
    <?php
$name = "Mihir";
$subject = "PHP";
$arr = compact("name","subject");
print_r($arr);
?>
</td></tr>
<tr><td>
    <?php
$arr = array("a" => "Mihir","b" => "banana","c" => "computer");
$fliparray = array_flip($arr);
print_r($fliparray);
?>
</td></tr>
<tr><td>
    <?php
$a = array("Mihir","c","c++","java","android","php");
$b = array("Mihir","c","java","php");
$diff = array_diff($a, $b);
print_r($diff);
?>
</td></tr>
<tr><td>
    <?php
$arr1 = array(0=>"sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(0=>"Tuesday",1=>"Sunday",2=>"Thursday");
print_r(array_intersect($arr1,$arr2));
?>
</td></tr>
<tr><td>
    <?php
$arr = array("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($arr);
foreach($myarr as $key => $value){
    echo "$key - $value</br>";
}
?>
</td></tr>
<tr><td>
    <?php
$a = array("c","c++");
array_push($a,"java","php");
print_r($a);
?>
</td></tr>
<tr><td>
    <?php
$a = array("c","c++","java","PHP","ASP");
array_pop($a);
print_r($a);
array_pop($a);
print_r($a);
?>
</td></tr>
<tr><td>
    <?php
$mystring = "I Love PHP Language";
$arr = explode(" ",$mystring);
print_r($arr);
?>
</td></tr>
<tr><td>
    <?php
$arr = array("i","love","php","language");
$mystring = implode(" ",$arr);
?>
        </td></tr>
    </table>
    </body>
</html>