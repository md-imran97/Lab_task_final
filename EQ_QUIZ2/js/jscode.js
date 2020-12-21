function liveSearch(searchField)
			{
				if(searchField.value.length>1)
				{
					var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("suggestion").innerHTML =this.responseText;
						
						//document.write("yo");
				   }
				};
				xhttp.open("GET", "controller/suggestion.php?name="+searchField.value, true);
				xhttp.send(); 
				}
				else
				{
					document.getElementById("suggestion").innerHTML ="";
				}
				
				
				/* if(searchField.value.length==2)
				{
					document.getElementById("suggestion").innerHTML =null;
				} */
				//document.getElementById("suggestion").innerHTML ="yo";
			}