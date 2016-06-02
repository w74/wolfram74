"use strict";

$(document).ready(function(){
	// Hide all tree branches 
	$('.tree').css('display', 'none');
	$('.content').before('<span class="lead-in"></span>');

	// Show logo animation
	$('.logo-version #w, .logo-version #t, .logo-version #f').css({
		'animation-play-state': 'running',
		'-webkit-animation-play-state': 'running',
		'-moz-animation-play-state': 'running'
	});

	// Adds target="_blank" to all anchors
	$('a').attr('target', '_blank');

	// Opens branch and sets it as active
	$('.branch').on('click keyup', function(e){
		// checks if key is the Enter key
		if(e.keyCode && e.keyCode !== 13){return;}

		var tree = $(this).next('.tree');
		
		// if branch is active, close itself and all subsequent branches
		if($(this).hasClass('active')){
			$(this).removeClass('active').attr('aria-expanded', 'false');
			tree.attr('aria-hidden', 'true');
			tree.velocity('slideUp', {
				duration: 400,
				easing: 'easeOutCubic',
				complete: function(){
					tree.find('.tree').velocity('slideUp').attr('aria-hidden', 'true');
					tree.find('.branch.active').removeClass('active').attr('aria-expanded', 'false');
					tree.find('.content').css('opacity', 0);
					tree.find('.lead-in').css('width', 0);
				}
			});
		} else {
			// if branch isn't active, expand it and display line animation
			$(this).addClass('active').attr("aria-expanded", "true");
			tree.attr('aria-hidden', 'false');
			var nodes = tree.children('.node');
			tree.velocity('slideDown', {
				duration: 400 * nodes.length,
				easing: 'easeOutCubic'
			});
			nodes.each(function(i, e){
				$(e).children('.lead-in').velocity({
					width: ['3em', 0]
				}, {
					duration: 500,
					easing: 'easeInCubic',
					delay: 400 + (i * 250),
					complete: function(){
						$(e).children('.content').velocity({
							opacity: [1, 0]
						}, {
							duration: 500,
							easing: 'flicker',
							delay: Math.random() * 500
						});
					}
				});
			});
		}
	});
});

// notes on logo
var lrrr = "^";
$('#w, #t, #f').click(function(e){
	let note = undefined;
	switch(this.id){
		case 'w':
			note = document.getElementById('d3');
			lrrr += "1";
			break;
		case 't':
			note = document.getElementById('e3');
			lrrr += "2";
			break;
		case 'f':
			note = document.getElementById('a3');
			lrrr += "3";
			break;
	}
	note.currentTime = 0;
	note.play();

	if("22331122".match(RegExp(lrrr))){
		if(lrrr === "^22331122"){
			$('h1, h2, h3, h4, h5, h6, p').text("ALL HAIL HYPNOTOAD!");
			lrrr = "^";
		}
	} else { lrrr = "^"; }
});


$.Velocity.Easings.flicker = function(p){
	return p * Math.abs( Math.sin( 3.5 * Math.PI * p ) );
}