function ShowMessage(text, show)
{
	alert(text);
	
	if (show)
		ShowPopUpForm($('#form-zvonok #F_ACTION_TYPE').val());

	return;
}
function ShowPopUpForm(type, form_id, rGoal)
{
	if (type != '')
	{
		$('#form-'+form_id+' #'+form_id+'_F_ACTION_TYPE').val(type);
		$('#form-'+form_id+' .title span').html(type);
	}
	
	$('#'+form_id+'_F_PAGE').val(window.location);
	
	if (rGoal !== undefined)
		YreachGoal = rGoal;
	else
		YreachGoal = 'CALLBACK';
	
	_ShowPopUpForm(form_id, YreachGoal);
	
	return false;
}
function _ShowPopUpForm(form_id, YreachGoal){
	
	var buyPopup = BX.PopupWindowManager.create("ByPopup_"+ form_id, null, {
		autoHide: true,
		//	zIndex: 0,
		offsetLeft: 0,
		offsetTop: 0,
		overlay : true,
		draggable: {restrict:true},
		closeByEsc: true,
		closeIcon: {},
		content: BX("form-"+ form_id)
	});
	
	technotrade.initPhoneMask($('input[name="F_PHONE"]'));

	buyPopup.show();
	
	jQuery('#form-'+ form_id +' form').on('submit', function(){

		if (technotrade.errorPhones > 0) {
			alert('Ошибка при вводе номера телефона');
			return false;
		}

		$('#form-'+ form_id +' .btn[type="submit"]').css('pointer-events', 'none');
        yaCounter34206930.reachGoal(YreachGoal);

		var wait = BX.showWait('form-'+ form_id);
		
		var options = { 
			url: window.location,
			type: 'post',
			dataType: 'json',
			data: {
				ajax: 'Y'
			},
			success: function(data){
				
				BX.closeWait('form-'+ form_id, wait);
                $('#form-'+ form_id +' .btn[type="submit"]').css('pointer-events', 'initial');
				
				if (data.status === 'error')
					alert(data.msg);
				else if (data.status === 'ok')
				{
					$('#form-'+ form_id +' .form-text').html(BX.message('CALLBACK_SUCCESS_'+ form_id));
				}
			}	 		
		};
		$('#form-'+ form_id +' form').ajaxSubmit(options);
	
		return false;
	});
}

	
