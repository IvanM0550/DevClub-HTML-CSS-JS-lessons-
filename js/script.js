var locate=window.location.href;
function openpopup() {
	$('.popup').fadeIn('normal');
}
function closepopup() {
	$('.popup').fadeOut('normal');
}
function openthedoor1() {
	$('.ur1').slideToggle('normal');
}
function openthedoor2(){
	$('.ur2').slideToggle('normal');
}
function openthedoor3() {
	$('.ur3').slideToggle('normal');
}
function geturl(){
	var locate=window.location.href;
	if(locate='http://devclub-main/PersonalAccount.php'){
		$('#nav-o').addClass('n-li');
		$('#nav-t').removeClass('n-li');
		$('#nav-th').removeClass('n-li');
		$('#nav-fo').removeClass('n-li');
		$('#nav-fi').removeClass('n-li');
	}
	else if(locate='http://devclub-main/Courses.php'){
		$('#nav-t').addClass('n-li');
		$('#nav-o').removeClass('n-li');
		$('#nav-th').removeClass('n-li');
		$('#nav-fo').removeClass('n-li');
		$('#nav-fi').removeClass('n-li');
	}
	else if(locate='http://devclub-main/favorite.php'){
		$('#nav-th').addClass('n-li');
		$('#nav-o').removeClass('n-li');
		$('#nav-t').removeClass('n-li');
		$('#nav-fo').removeClass('n-li');
		$('#nav-fi').removeClass('n-li');
	}
	else if(locate='http://devclub-main/tests.php'){
		$('#nav-fo').addClass('n-li');
		$('#nav-o').removeClass('n-li');
		$('#nav-t').removeClass('n-li');
		$('#nav-th').removeClass('n-li');
		$('#nav-fi').removeClass('n-li');
		
	}
	else if(locate='http://devclub-main/achievements.php'){
		$('#nav-fi').addClass('n-li');
		$('#nav-o').removeClass('n-li');
		$('#nav-t').removeClass('n-li');
		$('#nav-th').removeClass('n-li');
		$('#nav-fo').removeClass('n-li');
	}
	
}