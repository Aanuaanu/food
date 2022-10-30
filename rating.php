<!DOCTYPE html>
<html>
<body>
	<h1>About</h1>
	<p id="p1">  </p>
	<p id="p2"> </p>
	<p id="p3"></p>
	<p id="p4"></p>
	
     <!-- using jquary object -->
	
	<script>
		var info = new Object();
        
		// Attach properties and methods to person object     
		info.companyName = "Foody";
		info["service"] = "All food items"; 
		info.contact = 1234567898;
        info.add = function () {
				return 'no 3 chennai, tamilnadu'  + ' ' ;
			};
		info.getFullName = function () {
				return 'Any quaries call our'  + ' ' + this.companyName + ' ' + 'by using this number'  + ' ' + this.contact;
			};
            info.ser = function () {
				return 'Our service :'  + ' ' + this.service ;
			};

		// access properties & methods 
		document.getElementById("p1").innerHTML = info.companyName; 
		document.getElementById("p2").innerHTML = info.ser(); 

		document.getElementById("p3").innerHTML = info.add();
		
		document.getElementById("p4").innerHTML = info.getFullName();
       

    </script>
</body>
</html>