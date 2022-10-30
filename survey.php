<!DOCTYPE html> 

<html> 

<head> 

    <script src= 

"https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> 

    </script> 

      <!-- using loop jquary -->

    <script> 

        $(document).ready(function() { 

            $("button").click(function() { 

                $("#output").html("Thanks for your review.." + "<br />");

                var x = $("form").serializeArray(); 

                $.each(x, function(i, field) { 

                    $("#output").append(field.name + ":" 

                            + field.value + " " + "<br />" ); 
                }); 

              

            }); 

        }); 

    </script> 

      

    

</head> 

   

<body> 

    <div id="GFG"> 

        <form action="#"> 

            Name: <input type="text"  name="Name"><br><br>
            Rating: <input type="text"  name="food"><br><br>
            food: <input type="text"  name="food"><br><br>
            commend: <input type="text"  name="commends"> <br><br>

            <br> 

        </form> 

   

        <button id="bb">Submit</button> <br><br>

    </div> 

   

    <div id="output"></div> 

</body> 

   

</html> 