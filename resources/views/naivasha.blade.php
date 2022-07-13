<?php
$a='demo';
 echo$a;

?>



<?php
if(isset($_POST['name'],$_POST['contact'],$_POST['email'])){
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];


    echo $name;

}

{
    //public function create(){
        // $shoes=['heels', 'jordans', 'flats','airforce','boots'];
        //return view ('array')->with('s',$shoes);
 }