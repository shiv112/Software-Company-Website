<?php 

//variable setting
$firstname = $_POST['fname'];
$middlename = $_POST['mname'];
$lastname = $_POST['lname'];

$email = $_POST['email'];
$email2 = $_POST['email2'];

$mbl1 = $_POST['mbl1'];
$mbl2 = $_POST['mbl2'];
$address = $_POST['address'];

$colg = $_POST['colg'];
$course = $_POST['course'];
$sem = $_POST['sem'];
$skills = $_POST['skills'];

$to_email = 'ankity1707@gmail.com';
$subject = 'Enquiry register';


//check input feilds
// if(empty($firstname) ||empty($lastname) ||empty($email) ||empty($mbl1) ||empty($colg) ||empty($course) ||empty($sem) ||empty($skills) ){
//     echo"Please fillup all fields";
// }else{
//     mail($to_email, $subject, "From: $firstname<$email>");
//     echo"<script type='text/javascript'>
//         alert('your details sent successfully !!')
//     </script>";
// }

if( mail($to_email, $subject, "From: $firstname<$email>")){
    
    echo"<script type='text/javascript'>
    alert('email sent successfully !!')
    </script>";
}else{
   
    echo"<script type='text/javascript'>
        alert('not send successfully !!')
    </script>";
}

?>