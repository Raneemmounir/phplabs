<?php
//Use 5 String Functions from PHP Documentation and understand them with implementation samples.
echo"Usage of five string functions examples:".'<br>'.'<br>';
$name=["mohamed"];

// function to get string length
$len=strlen('name');
echo"$len".'<br>';

//function to Make a string lowercase
$lower=strtolower("MOHAMED");
echo"$lower".'<br>';

// function to make a string uppercase
$upper=strtoupper('name');
echo"$upper".'<br>';

//function to Check if a string ends with a given substring
//true:
$check1=str_ends_with('name','e');
echo"$check1".'<br>';
//false:
$check2=str_ends_with('name','m');
echo"$check2".'<br>';

//Quote string with slashes
$insertion=addslashes('name'."--");
echo"$insertion".'<br>';
echo"<hr>";

//Use 5 Array Functions from PHP Documentation and understand them with implementation samples


echo"Usage of five array functions examples:".'<br>'.'<br>';
//Fill an array with values
$iti=[];
$iti=array_fill(0,3,'mohamed');
   // print_r($iti);
for($i=0;$i<3;$i++)
{
    echo "element of index no". "($i)" ."=" ."$iti[$i]".'<br>';
}


//merge two arrays in one :
$iti2=['ahmed','mohamed','mostafa'];
$nti=['gamal','badr','mahmoud'];
$merge=array_merge($iti2,$nti);

print_r($merge);
var_dump($merge);


//Computes the difference of arrays with additional index check
$colours1=["a"=>"yellow","b"=>"blue","red","purple","green","white"];
$colours2=["a"=>"yellow","green","red"];
$compute=array_diff_assoc($colours1,$colours2);
print_r($compute);
var_dump($compute);
echo'<br>';

//Calculate the sum of values in an array
$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) .'<br>';

$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . '<br>';


//Searches the array for a given value and returns the first corresponding key if successful
$search=array_search('blue',$colours1);
echo"key of value blue is :"."$search".'<br>';
$search1=array_search('black',$colours1);
echo"key of value black is :"."$search1".'<br>';
$search2=array_search('yellow',$colours2);
echo"key of value yellow is :"."$search2".'<br>'.'<br>';


//Make Your Own Valid Function/s to Protect form.php data [not accept empty inputs and validate every string input
//form validation
function validate($data){
$data=strip_tags($data);
$data=trim($data);
$data=stripcslashes($data);
$data=htmlspecialchars($data);
return $data;
}
function is_required($data){
    if(empty($data)){
        echo"no it is required";
    }else{
        return validate($data);
    }
}
echo is_required($_POST['fn']);

?>
<div class="row">
    <div class="col-4">
        <form class="row g-3" method="post" action="?<php echo $_SERVER['PHP_SELF']?>">
            <h3 class="display-3">Please Sign in!</h3>
            <div class="col-12">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" id="FN" name="fn" >
            </div>
            <br/>
            <div class="col-12">
                <label  class="form-label">Password</label>
                <input type="text" class="form-control" id="LN" name="ln" >
            </div>
            <br/>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
