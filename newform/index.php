<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  
<!-- Modal -->
<div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">new user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <p class="form-message mb-3"></p>

    
  <div class="form-group">
    <label for="completename">Name</label>
    <input type="text" class="form-control" id="completename" placeholder="Enter Your Name">
    <p class="form-message"></p>
</div>


<div class="form-group">
    <label for="completeemail">Email</label>
    <input type="text" class="form-control" id="completeemail" placeholder="Enter Your email">
    <p class="form-message"></p>

</div>

<div class="form-group">
    <label for="completemobile">Mobile</label>
    <input type="text" class="form-control" id="completemobile" placeholder="Enter Your mobile">
    <p class="form-message"></p>

</div>

<div class="form-group">
    <label for="completeplace">Place</label>
    <input type="text" class="form-control" id="completeplace" placeholder="Enter Your place">
    <p class="form-message"></p>

</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" onclick="adduser()">submit</button>
        <button type="button" class="btn btn-danger">close</button>
      </div>
    </div>
  </div>
</div>

<!-- ubdated model -->

<div class="modal fade" id="updatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
  <div class="form-group">
    <label for="updatename">Name</label>
    <input type="text" class="form-control" id="updatename" placeholder="Enter Your Name">
    <small class="text-danger" id="nameerror"></small>
</div>  


<div class="form-group">
    <label for="updateemail">Email</label>
    <input type="text" class="form-control" id="updateemail" placeholder="Enter Your email">
    <small class="text-danger" id="emailerror"></small>
</div>

<div class="form-group">
    <label for="updatemobile">Mobile</label>
    <input type="text" class="form-control" id="updatemobile" placeholder="Enter Your mobile">
    <small class="text-danger" id="mobileerror"></small>

</div>

<div class="form-group">
    <label for="updateplace">Place</label>
    <input type="text" class="form-control" id="updateplace" placeholder="Enter Your place">
    <small class="text-danger" id="placeerror"></small>

</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" onclick="updateDetails()">Update</button>
        <button type="button" class="btn btn-danger">close</button>
        <input type="hidden" id="hiddendata">
      </div>
    </div>
  </div>
</div>  

<!-- container -->
    <div class="container my-3">
        <h2 class="text-center">PHP CRUD Operations  using bootstrap model</h2>

           <!-- Button trigger modal -->
<button type="button" class="btn btn-dark mx-4 my-3" data-toggle="modal" data-target="#completeModal">
  Add new users
</button>
<div id="displayDataTable" class="p-8"></div>
    </div>

    <!-- <input type="hidden" value="submit"> -->


    <!-- js -->

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script >
//validation

$(document)ready(function()){
  $("#completeModal").submit(function(event){
    event.preventDeafault();

    name=$("#completename").val();
    name=$("#completeemail").val();
    name=$("#completemobile").val();
    name=$("#completephone").val();

  })
}






//once the doc ind ready the data should be shown , even i refreshed the page it shouldnot vanished

  $(document).ready(function(){
    displayData(); 
  });

//display function
  function displayData(){
    var displayData="true";
    $.ajax({
      url:"display.php",
      type:'post',
      data:{
        displaySend:displayData
      },
      success:function(data,status){
        $('#displayDataTable').html(data);

      }
    })

  }

  function adduser(){
    var nameAdd = $('#completename').val();
    var emailAdd = $('#completeemail').val();
    var mobileAdd = $('#completemobile').val();
    var placeAdd = $('#completeplace').val();

    $.ajax ({
      url:"insert.php",
      type:'post',
      data:{
        nameSend:nameAdd,
        emailSend:emailAdd,
        mobileSend:mobileAdd,
        placeSend:placeAdd
      },
      success: function(data,status){
        //console.log(status);
        $('#completeModal').modal('hide');
        displayData();
      }
    });
  }
  

  //delete record
  //deleteid is if we dlete 2 id na thats is deleted id

  function DeleteUser(deleteid){
    $.ajax({
      url:"delete.php",
      type:'post',
      data:{
        deleteSend:deleteid
      },
      success:function(data,status){
        displayData();//after deleted 
      }
    });
  }

  //ubdate function


function GetDetails(updateid) {
     $('#hiddendata').val(updateid);

     $.post("update.php", { updateid: updateid }, (data, status) => {
         const userid = JSON.parse(data);
         $('#updatename').val(userid.name);
         $('#updateemail').val(userid.email);
         $('#updatemobile').val(userid.mobile);
         $('#updateplace').val(userid.place);
       });
        
         $('#updatemodal').modal("show");
        // $('#updateModal').modal('show');
    
}


//update a function:

function updateDetails(){
  var updatename=$('#updatename').val();
  var updateemail=$('#updateemail').val();
  var updatemobile=$('#updatemobile').val();
  var updateplace=$('#updateplace').val();

  var hiddendata=$('#hiddendata').val();

  $.post("update.php",{
    updatename:updatename,
    updateemail:updateemail,
    updatemobile:updatemobile,
    updateplace:updateplace,
    hiddendata:hiddendata

  },
  function(data,status){
    $('#updatemodal').modal('hide');
    displayData();
  });
  
}


</script>
</body>
</html>