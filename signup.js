document.getElementById("validate-signup").addEventListener("click", function () {

	let formdata = {	
		lastname : document.getElementById("lastname").value,
		firstname : document.getElementById("firstname").value,
		gender : document.getElementsByName("gender"),
		birthdate : document.getElementById("birthdate").value,
		mail : document.getElementById("mail").value,
		mailConfirmation : document.getElementById("mail-confirmation").value,
		password : document.getElementById("password").value,
		passwordConfirmation : document.getElementById("password-confirmation").value
	};
	let validatesignup = true;

	console.log(formdata);

	for (let id in formdata) {
		if (id !== "gender")
		{
			if (formdata[id].length === 0)
			{
				alert("Un champ n'a pas été rempli");
				validatesignup = false;
				break;
			}
		}
	}
	if (validatesignup) {

		if (!formdata.gender[0].checked && !formdata.gender[1].checked && !formdata.gender[2].checked)
		{
			validatesignup = false;
			alert("Un champ n'a pas été rempli");
		}

		if (validatesignup)
		{
			if (formdata.mail !== formdata.mailConfirmation)
			{
				validatesignup = false;
				alert("La confirmation du mail n'est pas bonne");
			}
		}

		if (validatesignup)
		{
			if (formdata.password !== formdata.passwordConfirmation)
			{
				validatesignup = false;
				alert("La confirmation du mot de passe n'est pas bonne");
			}
		}


		if (validatesignup)
			document.getElementById("signup-form").submit();
	}

})