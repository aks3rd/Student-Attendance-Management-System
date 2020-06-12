
	   var imagecount = 1;
	   var total = 5;
	   function slide(x){
	   
	   var Image = document.getElementById('img');
	   imagecount = imagecount + x;
	    if(imagecount > total){imagecount= 1;}  
		if(imagecount < 1){imagecount= total;}
	  Image.src = "slider_images/img"+ imagecount +".jpg";
	   }
	   window.setInterval(function slide(x){
	   
	   var Image = document.getElementById('img');
	   imagecount = imagecount + 1;
	    if(imagecount > total){imagecount= 1;}  
		if(imagecount < 1){imagecount= total;}
	  Image.src = "slider_images/img"+ imagecount +".jpg";
	   },2000);