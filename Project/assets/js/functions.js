function getHeight() {
  myHeight = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    myHeight = window.innerHeight;
  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
    myHeight = document.documentElement.clientHeight;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
    myHeight = document.body.clientHeight;
  }
  return myHeight;
}

hideshow = function()
{	
	var section = document.getElementById("section");
	var maplink = document.getElementById("map_button_link");
	var maxHeight = getHeight()-150;
	var stepSize = maxHeight/30;
	
	if (section.style.top == "0px" || (section.style.top == ""))
	{
		var top = 0;
		function frame2() 
		{
			top = top+stepSize;
			if (top > maxHeight)
			{
				top = maxHeight;
			}
			section.style.top = top + "px";
			if (top >= maxHeight)
			{
				clearInterval(id)
			}
		}
		var id = setInterval(frame2, 10) // draw every 10ms
		
		maplink.innerHTML = "Click to hide map";
	}
	else
	{
		var top = maxHeight;;
		function frame() 
		{
			top = top-stepSize;
			if (top < 0)
			{
				top = 0;
			}
			section.style.top = top + "px";
			if (top <= 0)
			{
				clearInterval(id)
			}
		}
		var id = setInterval(frame, 10) // draw every 10ms
		
		maplink.innerHTML = "Click to show map";
	}
}

$(window).on('resize', function(){
	var section = document.getElementById("section");
	var maxHeight = getHeight()-150;
	
	if (!(section.style.top == "0px" || (section.style.top == "")))
	{
		if (maxHeight > 50)
		{
			section.style.top = maxHeight + "px";
		}
		else
		{
			//section.style.top = maxHeight + "px";
		}
	}
	
});