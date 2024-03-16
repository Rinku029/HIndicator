
<!DOCTYPE html>
<html lang="en">
    


    <body >
      

  
        

        <div class="intro-page" >

        <div class="flex-p">

       <div class="content-p">
           <h2> Terms & Policy </h2>
           <p>Before using the checkup, please read Terms of Service. Remember that : </p>
         <ul> 
             <li>Checkup is not a diagnosis. Checkup is for informational purposes and is not a qualified medical opinion.</li>
             <li>Do not use in emergencies. In case of health emergency, call your local emergency number immediately.</li>
             <li>Your data is safe. Information that you provide is anonymous and not shared with anyone.</li>

        </ul>
        <label class="label-text"><input type="checkbox" id="myCheck" class="larger margin-right-20"> I read and accept Terms of Service and Privacy Policy. </label>
        
      </div>

      <div class="image-p">
            <img src="images/policy.JPG">
        
       </div>

      </div>

      <div class="flex-p-inside">
 
<div class="flex-p-1">
<li><a href="intro.php" ><button><<</button></li>
</div>
<div class="flex-p-2">

<li><p id="text" style="display:none"><a href="age.php" ><button id="next-button">NEXT</button></p></li>
</div>

</div>


</div>



</div>




        <!-- /.main-wrapper -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script>
            $(function($) {
                
                $("#myCheck").on('click', function(){
                    $("#text").slideToggle();
                });
            });
        </script>
        

<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
    </body>
</html>
