
$(document).ready(function() {
	$('.showPopup').magnificPopup({
	  type: 'inline',

	  fixedContentPos: false,
	  fixedBgPos: true,

	  overflowY: 'auto',

	  closeBtnInside: true,
	  preloader: false,
	  
	  midClick: true,
	  removalDelay: 300,
	  mainClass: 'my-mfp-zoom-in'
	});
	$(".tabs").tabs();
	$("#sortable").sortable({
      revert: true
    });
	$("#shortablestream").sortable({
      revert: true,
	  handle: ".stream-header"
    });
	$("button#add-tab").click(function() {
		var num_tabs = $("#tabrow ul li").length + 1;
		$("#tabrow ul").append(
			"<li id='navtab" + num_tabs + "'><div class='navtab'><a href='#tab" + num_tabs + "'>untitled " + num_tabs + "</a><a class='remove' href='#'><i class='icon-close'></i></a></div></li>"
		);
		$("#tabrow").append("<div id='tabrow"+num_tabs+"'></div>");
		$("#tabrow").tabs("refresh");
	});
	$( "ul, li" ).disableSelection();
		
		
		
});