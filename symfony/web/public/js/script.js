function toggle(element) {

   	   var myInfo = document.getElementById(element);
   	   var displayinfo = myInfo.style.display;
   	   var idButton = element +"button";
   	   var elementButton = document.getElementById(idButton);
   	   myInfo.style.display="block";

   	   if (element == 'phone')
   	   {
   	   	myInfo.innerHTML = "07 86 49 55 85";
   	   }

   	   else if (element == 'mail') 
   	   {
   	   	myInfo.innerHTML = 'S.villagordo@gmail.com'
   	   }
   	   else 
   	   {
   	   	alert("erreur");
   	   }
}

function untoggle(element) {
	   var myInfo = document.getElementById(element);
   	   var displayinfo = myInfo.style.display;
   	   var idButton = element +"button";
   	   var elementButton = document.getElementById(idButton);
   	   myInfo.style.display="none";
}

	function updateTime() {
		var now = new Date();
		var hours = now.getHours();
		var minutes = now.getMinutes();
		var seconds = now.getSeconds();

		  if (minutes < 10) { 
    minutes = '0' + minutes;
  }
  if (seconds < 10) { 
    seconds = '0' + seconds;
  }	

    // get time of day (am or pm) 
  if (hours >= 12 && hours < 24) { 
    var timeOfDay = 'pm';
  }
  else { 
    var timeOfDay = 'am'; 
  }

    // convert hours from 24-hour time to 12-hour time
  if (hours > 12) { 
    hours = hours - 12;
  }

		var currentTime= hours + ':' + minutes + ':' + seconds + timeOfDay;

		var myClock = document.getElementById('clock');

		myClock.innerHTML = currentTime;