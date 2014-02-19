hideshow = function()
{
	var section = document.getElementById("section");
	var maplink = document.getElementById("map_button_link");
	
	if (section.style.top == "83%")
	{
		section.style.top = "0%";
		maplink.innerHTML = "Click to show map";
	}
	else
	{
		section.style.top = "83%";
		maplink.innerHTML = "Click to hide map";
	}
}