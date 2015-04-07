  
  function check(){ 

  	var form = document.form1;
  	if(form.name.value == ''){ 
  		alert("请输入用户名");
  		form.name.focus();
  		return false;
  	}
  	if(form.psw.value == ''){ 
  		alert("请输入密码");
  		form.psw.focus();
  		return false;
  	}
  	form.submit();
  }