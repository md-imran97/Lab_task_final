
var numArr=[0,1,2,3,4,5,6,7,8,9];
function getElement(id){
	return document.getElementById(id);
}

function validate(){
	//refresh();
	var allSet=true;
	var name = getElement("name");
	var date = getElement("date");
	var month = getElement("month");
	var year = getElement("year");
	var credit = getElement("credit");
	var cgpa = getElement("cgpa");
	var department = getElement("department");
	var err_name = getElement("err_name");
	var err_dob = getElement("err_dob");
	var err_credit = getElement("err_credit");
	var err_cgpa = getElement("err_cgpa");
	var err_department = getElement("err_department");
	
	// name validation
	if(name.value == ""){
		allSet=false;
		err_name.innerHTML = " *name Required";
		err_name.style.color="red";
		err_name.style.fontWeight = "900";
		//e_name.focus();
		//return !hasErr;
	}
	else if(1)
	{
		var count=0;
		for(var i=0;i<name.value.length;i++)
		{
			
			for(var j=0;j<numArr.length;j++)
			{
				debugger;
				if(name.value[i]==numArr[j])
				{
					if(j==0)
					{
						if(name.value[i]==" ")
							continue;
					}
					else{count++;}
				}
			}
			
		}
		if(count>0)
		{
			allSet=false;
			err_name.innerHTML = " *Numbers are not allowed";
			err_name.style.color="red";
			err_name.style.fontWeight = "900";
		}
		else
		{
			err_name.innerHTML = " ✓";
			err_name.style.color="green";
			err_name.style.fontWeight = "900";
		}
	}
	
	//date of birth validation
	if(month.value !="0")
	{
		if(date.value !="0")
		{
			if(year.value !="0")
			{
				err_dob.innerHTML = " ✓";
				err_dob.style.color="green";
				err_dob.style.fontWeight = "900";
			}
			else
			{
				err_dob.innerHTML = " *Date, month, year required";
				err_dob.style.color="red";
				err_dob.style.fontWeight = "900";
				allSet=false;
			}
		}
		else
		{
			err_dob.innerHTML = " *Date, month, year required";
			err_dob.style.color="red";
			err_dob.style.fontWeight = "900";
			allSet=false;
		}
	}
	else
	{
		err_dob.innerHTML = " *Date, month, year required";
		err_dob.style.color="red";
		err_dob.style.fontWeight = "900";
		allSet=false;
		
	}
	
	//credit validation
	var cr=parseInt(credit.value);
	if(cr<0){cr=cr*(-1);}
	if(Number.isInteger(cr))
	{
		err_credit.innerHTML = " ✓";
		credit.value=cr;
		err_credit.style.color="green";
		err_credit.style.fontWeight = "900";
	}
	else
	{
		err_credit.innerHTML = " *Credit required only numeric";
		err_credit.style.color="red";
		err_credit.style.fontWeight = "900";
		allSet=false;
	}
	
	//cgpa validation
	var cg=parseFloat(cgpa.value);
	if(cg<0){cg=cg*(-1);}
	var cgI=parseInt(cg);
	if(cg >= cgI && cg <= 4.00)
	{
		err_cgpa.innerHTML = " ✓";
		cgpa.value=cg;
		err_cgpa.style.color="green";
		err_cgpa.style.fontWeight = "900";
	}
	else
	{
		err_cgpa.innerHTML = " *Credit required only numeric and max value is 4.00";
		err_cgpa.style.color="red";
		err_cgpa.style.fontWeight = "900";
		allSet=false;
	}
	
	//department validation
	if(department.value !="0")
	{
		err_department.innerHTML = " ✓";
		err_department.style.color="green";
		err_department.style.fontWeight = "900";
	}
	else
	{
		err_department.innerHTML = " * Department required";
		err_department.style.color="red";
		err_department.style.fontWeight = "900";
		allSet=false;
	}
	
	if(allSet)
	{
		return true;
	}
	else
	{
		return false;
	}

}
