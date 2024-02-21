 <?php
include 'connect.php';

extract($_POST);

if(isset($_POST['nameSend']) && isset($_POST['emailSend']) && isset($_POST['mobileSend']) && isset($_POST['placeSend']))
{

   //$response['error']=$response['success']=array();

   //$response['error']=error($_POST);
   //if(empty(  $response['error'])){
    //$response['success'] = insert($nameSend,$emailSend,$mobileSend,$placeSend,$con);
   //} 

    // echo json_encode($response);

    $sql = "insert  into `crud` (name,email,mobile,place)
     values ('$nameSend','$emailSend','$mobileSend','$placeSend')";
     $result=mysqli_query($con,$sql);
}

// function error($Post){

    // $response=array();

    // $response['error']['name']='Please enter the valid name';
    // $response['error']['email']='Please enter the valid email';
    // $response['error']['mobile']='Please enter the valid mobile';
    // $response['error']['place']='Please enter the valid place';

    // return  $response;

// }

// funcion insert($nameSend,$emailSend,$mobileSend,$placeSend,$con){
    // $response=array();
    // $sql = "insert  into `crud` (name,email,mobile,place) values ('$nameSend','$emailSend','$mobileSend','$placeSend')";

    // $result=mysqli_query($con,$sql);
//    return 'Insert Successfully';

// }



?> 

    
