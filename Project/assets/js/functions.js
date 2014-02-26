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

function getMaxHeight()
{
    return getHeight() - 60;
}

function hide()
{
	$('#section').stop();
	
	$('#section').animate({
		top: getMaxHeight() + "px"
	}, 1500);
	
	$('#map_button').unbind("click");
	$('#map_button').one("click", function() { show() });
}

function show()
{
	$('#section').stop();
	
	$('#section').animate({
		top: "0px"
	}, 1500);
	
	$('#map_button').unbind("click");
	$('#map_button').one("click", function() { hide() });
}

//hideshow = function()
//{	
//	if ($('#section').css('top') == "0px" || ($('#section').css('top') == ""))
//	{
//        $('section').animate({
//            top: getMaxHeight() + "px"
//          }, 1500);
//        
//		$('#map_button_link').html("Click to hide map");
//	}
//	else
//	{
//        $('section').animate({
//            top: "0px"
//          }, 1500);
//        
//		$('#map_button_link').html("Click to show map");
//	}
//}

$(window).on('resize', function(){
	var maxHeight = getMaxHeight();
	
	if (!($('#section').css('top') == "0px" || ($('#section').css('top') == "")))
	{
		if (maxHeight > 50)
		{
			$('#section').css('top', maxHeight + "px");
		}
	}
	
});