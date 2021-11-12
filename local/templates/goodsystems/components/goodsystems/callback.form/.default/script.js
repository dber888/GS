
function ShowMessage(text, show)
{
	alert(text);

	//if (show)
	//	ShowPopUpForm($('#form-zvonok #F_ACTION_TYPE').val());

	return;
}
//
// function sendCallBack(form){
// 	alert('asdf"');
// }
//
// function ShowPopUpForm(type, form_id, rGoal)
// {
// 	if (type != '')
// 	{
// 		$('#form-'+form_id+' #'+form_id+'_F_ACTION_TYPE').val(type);
// 		$('#form-'+form_id+' .title span').html(type);
// 	}
//
// 	$('#'+form_id+'_F_PAGE').val(window.location);
//
// 	if (rGoal !== undefined)
// 		YreachGoal = rGoal;
// 	else
// 		YreachGoal = 'CALLBACK';
//
// 	_ShowPopUpForm(form_id, YreachGoal);
//
// 	return false;
// }
// function _ShowPopUpForm(form_id, YreachGoal){
//
// 	var buyPopup = BX.PopupWindowManager.create("ByPopup_"+ form_id, null, {
// 		autoHide: true,
// 		//	zIndex: 0,
// 		offsetLeft: 0,
// 		offsetTop: 0,
// 		overlay : true,
// 		draggable: {restrict:true},
// 		closeByEsc: true,
// 		closeIcon: {},
// 		content: BX("form-"+ form_id)
// 	});
//
// 	technotrade.initPhoneMask($('input[name="F_PHONE"]'));
//
// 	buyPopup.show();
$("document").ready(function(){

	$('form[name="iblock_add"]').submit(function(){

		form_id=$(this).find("[name='ID']").val();

		$('#form-'+ form_id +' .btn[type="submit"]').css('pointer-events', 'none');

		var wait = BX.showWait('form-'+ form_id);

        submit=true;
        $('#form-'+ form_id).find("[required]").each(function(){

				var label = $(this).closest('label');

				if ($(this).val() == "") {

				    $(label).addClass('error');
				    submit = false;
				}

				if ($(this).attr("type") == 'email' &&  !(/.+@.+\../.test($(this).val()))) {
					$(label).addClass('error');
					submit = false;
			    }

				if ($(this).attr("type") == 'checkbox' &&  !$(this).prop("checked")) {
			    	$(label).addClass('error');
				    submit = false;
			    }

		});

        if (submit) {

			var options = {
				url: window.location,
				type: 'post',
				dataType: 'json',ajax: 'Y',
				data: {
					ajax: 'Y'
				},
				success: function(data) {

					BX.closeWait('form-' + form_id, wait);
					$('#form-' + form_id + ' .btn[type="submit"]').css('pointer-events', 'initial');

					if (data.status === 'error'){

						alert(data.msg);

					}else if (data.status === 'ok') {
						$('#form-'+ form_id +' .form-text').html(BX.message('CALLBACK_SUCCESS_'+ form_id));
					}
                    $('form[name="iblock_add"]').hide();

                    $('div.new_project span.h_border').remove();

					$('.button-gray.button-green.btn.cancel').closest("div.new_project").removeClass("act");

					$('div.new_project div.title h2').text("Ваше сообщение отправлено!");

					return false;
				}
			};
			$('#form-'+ form_id +' form').ajaxSubmit(options);

        } else {
		}
		return false;
	});
// }


});