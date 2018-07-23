$(function(){
	
		function hide(){
			$('.section_modal_phone').css("display", "none");
			$('#mask').css("display", "none");
			$('.modal_phone_button').removeAttr('id');
		}

		hide();
		
		var href = document.location.href;
		/// определяем ссылку
		if(~href.indexOf("pc-master.loc")){
			var clear_href = "http://pc-master.loc/";
		}else if(~href.indexOf("localhost")){
			var clear_href = "http://localhost:3000/";
		}else if(~href.indexOf("pc-master.com.ua/")){
			var clear_href = "http://pc-master.com.ua/";
		}
		
 			switch (href){
			case clear_href : 
				$('h1.help_header').css("display", "inline-block");
			break;  
			
			case clear_href+"#windows" : 
				$('h1.windows_header').css("display", "inline-block");
				break;  
			default :
				$('h1.help_header').css("display", "inline-block");
				break;

		}


		function auto_complit(type){
			if(type!="problem"){
				$('input#phoneName').val('Ваше имя:');
				$('input#phonePhone').val('Ваш телефон:');
			}else{
				$('#problem_name').val('Ваше имя:');
				$('#problem_phone').val('Ваш телефон:');
				$('.description_problem_text').val('Опишите проблему тут...');
			}
				
		}
		
		function in_bd(type,name,phone ,message,way){
			var dataString = 'name=' + name + '&phone=' + phone +'&description=' + message;
			$.ajax({
				type: "POST",
				url: way,
				data: dataString,
				success: function() {
					alert('Наш менеджер скоро с Вами свяжется');
					$('.modal_phone_button').removeAttr('id');
					auto_complit(type);				
					hide();

			}
			 });
		}


		$('.phoneButton').click(function(){
			$('#phoneOrderName').text("Заказать звонок");
			$('.section_modal_phone').css("display", "block");
			$('#mask').css("display", "block");
			$('.modal_phone_button').attr('id', 'phoneSend');
		})


		$(".evoke_master").click(function(){	
			$('#phoneOrderName').text("Вызвать мастера");
			$('.section_modal_phone').css("display", "block");
			$('#mask').css("display", "block");
			$('.modal_phone_button').attr('id', 'evoke_master');
	 })

		$('#mask').click(function(){
			hide();		
		});
		
		$('.close').click(function(e){
			hide();
		})
		var temp;
		// фокус на инпуты 
		$('input[type="text"]').focus(function(){
				if(($(this).val()=='Ваше имя:') || ($(this).val()=='Ваш телефон:')){
					temp = $(this).val()
					$(this).val('');
					}
		})
		$('input[type="text"]').blur(function(){
				if(($(this).val()=='')){
					$(this).val(temp);
					}
		})
	//	фокус на textarea 
	$('.description_problem_text').focus(function(){
			if($(this).val()=="Опишите проблему тут..."){
				temp = $(this).val()
				$(this).val('');
				}
	})
		$('.description_problem_text').blur(function(){
			if(($(this).val()=='')){
				$(this).val(temp);
				}
	})

// Форма отправки на Заказ звонка		
			$('body').on('click','#phoneSend', function(){
			var phoneName, phonePhone;		
		if( ($('input#phoneName').val() == '') || ($('input#phoneName').val() == 'Ваше имя:')){
			$("input#phoneName").focus();
			return false;
		}else{
		phoneName = $('input#phoneName').val();
		}
		if( ($('input#phonePhone').val() == '') || ($('input#phonePhone').val() == 'Ваш телефон:')){
			
			$("input#phonePhone").focus();
			return false;
		}else{
		phonePhone = $('input#phonePhone').val();
		}		
			in_bd("call_back",phoneName,phonePhone,"*Звонок*", "../modal/handlerModalPhone.php");
		});

// Форма отправки на Вызов мастера		
		$('body').on('click','#evoke_master', function(){
			var phoneName, phonePhone;		
		if( ($('input#phoneName').val() == '') || ($('input#phoneName').val() == 'Ваше имя:')){
			$("input#phoneName").focus();
			return false;
		}else{
		phoneName = $('input#phoneName').val();
		}
		if( ($('input#phonePhone').val() == '') || ($('input#phonePhone').val() == 'Ваш телефон:')){
			
			$("input#phonePhone").focus();
			return false;
		}else{
		phonePhone = $('input#phonePhone').val();
		}

		in_bd("evoke_master",phoneName,phonePhone,"*Вызов мастера*", "modal/handlerModalPhone.php");	
				
		});
 

		// Форма отправки описания проблеммы		
		$('body').on('click','.problem_description', function(){
			var phoneName, phonePhone, description_problem;		
		if( ($('input#problem_name').val() == '') || ($('input#problem_name').val() == 'Ваше имя:')){
			$("input#problem_name").focus();
			return false;
		}else{
		phoneName = $('input#problem_name').val();
		}
		if( ($('input#problem_phone').val() == '') || ($('input#problem_phone').val() == 'Ваш телефон:')){
			
			$("input#problem_phone").focus();
			return false;
		}else{
		phonePhone = $('input#problem_phone').val();
		}
		description_problem = $('.description_problem_text').val();

		in_bd("problem",phoneName,phonePhone,description_problem, "modal/description_problem.php");
			
				
		});

});