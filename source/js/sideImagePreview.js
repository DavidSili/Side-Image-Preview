/*
 *  Plugin is to be used when you want to show image on hover, but only to limit it in constraints
 *  of the container two levels above. It displays the picture only to the left of the thumbnail
 *  and does not move with the cursor. It works with multi Z-index pages.
 *  It is part of a specific project (and thus the configuration is a bit strange), but still
 *  I believe this simple code could be useful for someone looking to adjust for own use.
 *
 *  @Author: David Šili (http://davidsili.com)
 *
 *  Credit for pieces of the code to: Alen Grakalic (http://cssglobe.com)
 */

this.sideImagePreview = function(){
	$("a.thumb-preview").hover(function(){
		var $self = jQuery(this);
		var $selfx = $self.offset().left;
		var $rightx = $( document ).width() - $selfx;
		var $parent = $self.parent().parent();
		var $parentt = $parent.offset().top;
		var $parenth = $parent.height();
		var $parentw = $parent.width() - $self.width();
		$("body").append("<img id='preview-window' src='"+ this.href +"' alt='Image preview' />");
		$("#preview-window")
			.css("right",$rightx + 10 + "px")
			.css("top",$parentt + 15 + "px")
			.css("max-height",$parenth + "px")
			.css("max-width",$parentw - 35 + "px");
    },
	function(){
		$("#preview-window").remove();
	});
};

$(document).ready(function(){
	sideImagePreview();
});