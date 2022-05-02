// JavaScript Document

function validar(){
	var error = 0;
	
	//Validar Email 
	if(((/^\s+$/.test(document.getElementById("email").value)) || document.getElementById("email").value=="") && error==0){
		if((/^\s+$/.test(document.getElementById("email").value))){
			document.getElementById("email").value="";
		}
		
		alert("Proporcione el usuario");
		
		$(document).ready(function(){	
			$('#email').focus(function(){
				$(this).css('background', '#E7A7B4');
			});
		});	
		document.getElementById("email").focus();
		error=1;
	}
	
	//Validar Password
	if(((/^\s+$/.test(document.getElementById("password").value)) || document.getElementById("password").value=="") && error==0){
		if((/^\s+$/.test(document.getElementById("password").value))){
			document.getElementById("password").value="";
		}
		
		alert("Proporcione la contraseña !!");
			
			
		$(document).ready(function(){	
			$('#password').focus(function(){
				$(this).css('background', '#E7A7B4');
			});
		});
		
		document.getElementById("password").focus();
		error=1;
	}
	
	if (error!=1){
		document.login.submit();
	}
	
}