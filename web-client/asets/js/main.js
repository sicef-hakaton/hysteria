
// global variables //////////////////////////////////////////////////////////////////

var width = 200;	// tab width
var height = 30;	// tab collapsed height
var dx0 = 20;		// space between rightmost tab and right egde of page
var dx1 = 10;		// space between tabs

var backgrounds = [
 
	"url(images/background0.jpg)", 
	"url(images/background1.jpg)",
	"url(images/background2.jpg)", 
	"url(images/background3.jpg)"
];

var current = 0;	// current background

// functions /////////////////////////////////////////////////////////////////////////

function reshape() {

	if ($(window).width() < 920) {
		$(".fluid-element").css("width", "920px");
		$(".rigid-element").removeClass("centered");
	} else {
		$(".fluid-element").css("width", "100%");
		$(".rigid-element").addClass("centered");
	}
}

function tabsPositioning() {

	var tabs = $(".tab").toArray();
	
	for(var i = 0; i < tabs.length; i++) {
			
		$(tabs[i]).css("width",  width + "px");
		$(tabs[i]).css("bottom", height - $(tabs[i]).height() + "px");
		$(tabs[i]).css("right", dx0 + i * (dx1 + width) + "px");
	}
}

// main //////////////////////////////////////////////////////////////////////////////

$("document").ready(function() {

	reshape();
	tabsPositioning();
	
	$(window).resize(reshape);
	
	// background changer //////////////////////////////////////
	
	/*setInterval(function() {
		
		current = (current + 1) % backgrounds.length;
		
		$("#background").fadeOut(500);
		$("#background").css("background-image", backgrounds[current]);
		$("#background").fadeIn(500);
	}, 5000);*/
	
	// tab click handler ///////////////////////////////////////
	
	$(".tab").click(function() {
		
		var tab = $(this);
		
		if(tab.css("bottom") != "0px") {
			tab.animate({bottom: 0});
		}else {
			tab.animate({bottom: height - tab.height()});
		}
	});
});

//////////////////////////////////////////////////////////////////////////////////////

