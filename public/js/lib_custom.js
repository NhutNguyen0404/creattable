$(document).ready(function() {
	$('.check_null').blur(function() {
		var value = $(this).val();
		var id ='#'+$(this).attr('data');
		if(value =="")
		{
			$(this).addClass('border-warring');
			$(id).attr('return','false');
		}
		else
		{
			$(this).removeClass('border-warring');
			$(id).attr('return','true');
		}
	});
	$('.check_mail').blur(function() {
		var reg_mail = /^[A-Za-z0-9]+([_\.\-]?[A-Za-z0-9])*@[A-Za-z0-9]+([\.\-]?[A-Za-z0-9]+)*(\.[A-Za-z]+)+$/;
		var value = $(this).val();
		var id ='#'+$(this).attr('data');
		if(reg_mail.test(value) == false){
			$(this).addClass('border-warring');
			$(id).attr('return','false');
		}
		else
		{
			$(this).removeClass('border-warring');
			$(id).attr('return','true');
		}
	});
	$('#validation').click(function() {
		var status = $(this).attr('return');
		if(status =='false')
		{
			alert('Form missing value or warring value');
		}
		else
		{
			$('#creat_user').submit();
		}
	});

});