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
    return getHeight() - 50;
}

function hideContent()
{
	$('#section').stop();
	
	$('#section').animate({
		top: getMaxHeight() + "px"
	}, 1500, function(){
		$('#filter_container').animate({
			right: "-" + ($('#filter_bar').width()+30) + "px"
		}, 500)
	});
	
	$('#showhide').css("transform","rotate(0deg)");
	$('#showhide').css("-ms-transform","rotate(0deg)");
	$('#showhide').css("-webkit-transform","rotate(0deg)");
	
	$('#mapClick').css("top", getHeight() + "px");
	
	$('#map_button').unbind("click");
	$('#map_button').one("click", function() { showContent(); return false; });
}

function showContent()
{
	$('#section').stop();
	$('filter_container').stop();
	
	$('#filter_container').animate({
		right: "-" + ($('#filter_bar').width()+115) + "px"
	}, 500).add(
		$('#section').animate({
			top: "0px"
		}, 1500)
	);
	
	$('#showhide').css("transform","rotate(180deg)");
	$('#showhide').css("-ms-transform","rotate(180deg)");
	$('#showhide').css("-webkit-transform","rotate(180deg)");
	
	$('#mapClick').css("top", '0px');
	
	$('#map_button').unbind("click");
	$('#map_button').one("click", function() { hideContent(); return false; });
	
	$('#filter_button').unbind("click");
	$('#filter_button').one("click", function() { showFilter(); return false; })
}

function hideFilter()
{
	$('#filter_container').stop();
	
	$('#filter_container').animate({
		right: "-" + ($('#filter_bar').width()+30) + "px"
	}, 1500);
	
	$('#filter_button').unbind("click");
	$('#filter_button').one("click", function() { showFilter(); return false; })
}

function showFilter()
{
	$('#filter_container').stop();
	
	$('#filter_container').animate({
		right: "0px"
	}, 1500);
	
	$('#filter_button').unbind("click");
	$('#filter_button').one("click", function() { hideFilter(); return false; })
}

function load(page, menuitem)
{
	console.log('Loading page:' + page);
	$('#content').load(page);
	$('.active').removeClass("active");
	$('.'+menuitem).addClass("active");
	showContent();
}

function filterChanged()
{
	value = $("#filter-input").val();
	
	country = $("#filter-country").prop("checked");
	city = $("#filter-city").prop("checked");
    
    internship = $("#filter-internship").prop("checked");
    final_thesis = $("#filter-final_thesis").prop("checked");
    minor = $("#filter-minor").prop("checked");
    eps = $("#filter-eps").prop("checked");
    
    year = $("#filter-year").val();
    
    study = $("#filter-study").val();
	
	var filteredMarkers = [];
	
	for( i = 0; i < locations.length; ++i)
	{
		if (
			( // Zoek op
				(country && locations[i].country.toLowerCase().indexOf(value.toLowerCase()) != -1) ||
				(city && locations[i].city.toLowerCase().indexOf(value.toLowerCase()) != -1)
			) 
		)
		{
            var showMarker = false;
            
            for ( j = 0; j < locations[i]['years'].length; ++j)
            {
                if ( 
                    ( // Type
                        (internship && locations[i]['years'][j].type == "Internship") ||
                        (final_thesis && locations[i]['years'][j].type == "Final thesis") ||
                        (minor && locations[i]['years'][j].type == "Minor") ||
                        (eps && locations[i]['years'][j].type == "EPS") ||
                        (internship && final_thesis && minor && eps) //laat alles zien als alles is aangevinkt, ook als de marker geen type heeft
                    ) &&
                    (
                        (year == 0) ||
                        (
                            (locations[i]['years'][j]['start'] <= year) &&
                            (locations[i]['years'][j]['end'] >= year)
                        )
                    ) &&
                    (
                        (study == "") ||
                        (locations[i]['years'][j]['study'] == study)
                    )
                )
                {
                    showMarker = true;
                }
            }
            
            if (showMarker)
            {
                var newMarker = new google.maps.Marker({
                    id: locations[i].id, 
                    position: new google.maps.LatLng(locations[i].lat, locations[i].lng),
                    title: locations[i].title,
                    icon: 'images/markers/default.png'
                });
                
                filteredMarkers.push(newMarker);
                
                google.maps.event.addListener(newMarker,'click',function() {
                    load(organizationDetailURL+this.id);
                });
            }
		}
	}
	
	filterMarkers(filteredMarkers);
}

function resetFilter()
{
	$("#filter-input").val("");
	
	$("#filter-country").prop("checked", true);
	
	$("#filter-internship").prop("checked", true);
	$("#filter-final_thesis").prop("checked", true);
	$("#filter-minor").prop("checked", true);
	$("#filter-eps").prop("checked", true);
    
    $("#filter-year").val("");
    $("#filter-study").val("");
	
	filterChanged();
}

function searchForChanged()
{
    if ($("#filter-country").prop("checked"))
    {
        $('#filter-input').autocomplete({ source: countries});
    }
    else if($("#filter-city").prop("checked"))
    {
        $('#filter-input').autocomplete({ source: cities});
    }
}

//Balk goedzetten bij window resize
$(window).on('resize', function(){
	var maxHeight = getMaxHeight();
	
    $('#mapClick').css("top", maxHeight + "px");
    
	if (!($('#section').css('top') == "0px" || ($('#section').css('top') == "")))
	{
		if (maxHeight > 50)
		{
			$('#section').finish().css('top', maxHeight + "px");
		}
	}
});

$( document ).ready(function() {
	//Stop scrollen van de pagina (content mag wel gescrolld worden)
    $('body').mousedown(function(e){
		if(e.button==1 && !($('.scroll').has($(e.target)).length))return false
	});
	
	$('html, body').on('touchmove',function(e){
		if(!$('.scroll').has($(e.target)).length)
			e.preventDefault();
	});
	
	//Knoppen laten werken
	$('#map_button').one("click", function() { hideContent(); return false; });
	$('#filter_button').one("click", function() { showFilter(); return false; });
	
	//filter
	$("#filter_form").submit(function(event){
		event.preventDefault();
		filterChanged();
		return false;
	});
	
	$(".filter_reset").click(function(){
		resetFilter();
	});
	
    $("#filter-country").change(function(){
        searchForChanged();
    });
    
    $("#filter-city").change(function(){
        searchForChanged();
    });
});

//failsafe: toch gescrolld? Zet de pagina weer terug.
$(window).scroll(function(e){
    $(this).scrollTop(0);
});

