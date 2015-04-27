$( document ).ready(function() {
	$('#showTitles').click(function () {
    	$(".new_screenshot h3").toggle(this.checked);
	});
	$('#showMilestones').click(function () {
    	$(".milestone").toggle(this.checked);
	});
});