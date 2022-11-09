	
$("document").ready(function(){//говорит о том что скрипт этой функции будет выполняться только при полной загрузке документа
			$("#formRegistr").on("submit", function(){//на форму вешаем событие отправки submit
				let dataForm = $(this).serialize()//создаем переменную и в нее добавляем объект формы в виде serialize
					
					$.ajax({
							url: '/query.php',         /* Куда отправить запрос */
							method: 'post',             /* Метод запроса (post или get) */
							dataType: 'html',          /* Тип данных в ответе (xml, json, script, html). */
							data: dataForm,				/*данные передаваемые из формы, записанные в переменную dataForm (ввиде ассециативного массива ключ-значние в нашем примере в input name="name" это ключ, а значение то что ввели в поле)*/
							//data: {text: 'Текст'},     /* Данные передаваемые в массиве ключ и значение*/
								success: function(data){   /* функция которая будет выполнена после успешного запроса.  В (data) передаются все данные после выполнения скрипта только в строковом формате*/
								console.log(data); /* В переменной data содержится ответ от index.php. */
								}
							});
			})
		
		})
		
		
		
		
//мгновенная проверка полей		
$(document).ready(function(){
      $('form[id="formRegistr"]').validate({
			rules: {
					fname: {required: true,
							minlength: 3,
							maxlength: 15
							},
					lname: {required: true,
							minlength: 3,
							maxlength: 15
							},
					user_email: {
							required: true,
							email: true,
							},
					login: {
							required: true,
							minlength: 8,
							maxlength: 15	 
							},
					psword: {
							required: true,
							minlength: 8,
							maxlength: 15
	  
				}
			  },
					messages: {
								fname: {
									minlength: 'Имя не может быть меньше 3 символов',
									maxlength: 'Имя не может быть больше 15 символов',									
									},
								lname: {
									minlength: 'Фамилия не может быть меньше 3 символов',
									maxlength: 'Фамилия не может быть больше 15 символов',									
									},
								user_email: 'Укажите правильный email',
								login: {
								  minlength: 'Логин не может быть меньше 8 символов',
								  maxlength: 'Логин не может быть больше 15 символов',  
									},
								psword: {
								  minlength: 'Пароль не может быть меньше 8 символов',
								  maxlength: 'Пароль не может быть больше 15 символов',							  
									}
					},
					
				submitHandler: function(form) {
								form.submit();
								}
			});
		});  
	