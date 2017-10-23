<html>
<head>
  <title>LIB</title>
  <link rel="icon" href="logo2.png">
  <!-- meta viewport tag-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
</head>
<body>
  <div class="nav" style="position: absolute;">
    <ul>
  <li><a  href="home.html">Home</a></li>
  <li><a class="active" href="add1.php">Add</a></li>
  <li><a href="delete.html">Delete</a></li>
  <li><a href="search.html">Search</a></li>
   <li><a href="modify.html">Modify</a></li>
    <li><a href="renewal.html">Renewal</a></li>
     <li><a href="return.html">Return</a></li>
      <li style="color: red;"><a href="login.html">Sign Out</a></li>
</ul>
</div>
<div class="signup" style="    position: absolute;
    top: 16%;
    left: 40%;">

  <div class="forms">
    <form action ="" method="post">
        
            <input type="text" id="bid" name="bid" placeholder="Book ID" >

            <input type="text" id="bname" name="bname" placeholder="Book Name"  >
            <input type="text" id="author" name="author" placeholder="Author" >
            <input type="text" id="publisher" name="publisher" placeholder="Publisher" >
            <input type="text" id="type" name="type" placeholder="Type" >
            <input type="text" id="categ" name="categ" placeholder="Category" >
            <input type="submit" id="myBtn" name="Add" value="Add">
      
    
  



    </form>
    </div>
<div id="myModal" class="modal">

  
  <div class="modal-content">
        
      <i class="material-icons" style="color: #00baff;
    padding-right: 6px;
    position: relative;
    font-size: 115px;"></i><p style="margin-top:0px"></p>
      
      
  </div>
</div>
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js">
  </script>
<script>

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");




btn.onclick=function(e) {
  e.preventDefault();
  var bookid = $("#bid").val();
  var bookname = $("input#bname").val();
  var author = $("input#author").val();
  var publisher = $("input#publisher").val();
  var type = $("input#type").val();
  var category = $("input#categ").val();
  //AJAX PART
  $.post('addBook.php', { //send data to addbook.php without loading page with POST
          bid: bookid,
          bname: bookname,
          author: author,
          publisher: publisher,
          type: type,
          categ: category
          }, 

          function(data){//data returned from addbook.php
            if(data=='OK'){
              modal.style.display = "block";
              $(".modal-content i").html("check_circle");
              $(".modal-content p").html("Added Successfully");
            }
            else{
              modal.style.display = "block";
              $(".modal-content i").html("error");
              $(".modal-content p").html("Error");
            }
    });
  //AJAX PART ENDS


}




// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
   if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>


</body>
</html>