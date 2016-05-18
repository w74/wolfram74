$(document).ready(function(){
	// Hide all tree branches 
	$('.tree').css('display', 'none');
	$('.content').before('<span class="lead-in"></span>');

	// Set text-indent property for command line
	$('[name=command]').css('text-indent', $('[for=command]').outerWidth());
});


/*
	Event (click, non-active branch)
  	-> opens branch and sets it as active
 */
$('body').on('click', '.branch p:not(.active)', function(e){
	$(this).addClass('active');
	var tree = $(this).parent().next('.tree');
	var nodes = tree.children('.node');
	tree.velocity('slideDown', {
		duration: 400 * nodes.length,
		easing: 'easeOutCubic'
	});
	/*
		Function anon
			-> expand horizontal line then flash in the text after a slightly random delay
		@param {Int} i -> index
		@param {DOM Node} i -> element being referenced
	 */
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
					delay: Math.random() * 750
				});
			}
		});
	});
});

$('body').on('click', '.branch p.active', function(){
	$(this).removeClass('active');
	var tree = $(this).parent().next('.tree');
	tree.velocity('slideUp', {
		duration: 400,
		easing: 'easeOutCubic',
		complete: function(){
			tree.find('.tree').velocity('slideUp');
			tree.find('p.active').removeClass('active');
			tree.find('.content').css('opacity', 0);
			tree.find('.lead-in').css('width', 0);
		}
	});
});

$.Velocity.Easings.flicker = function(p){
	return p * Math.abs( Math.sin( 3.5 * Math.PI * p ) );
}