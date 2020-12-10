
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
	
	
	if(name.value == ""){
		allSet=false;
		err_name.innerHTML = " *name Required";
		//e_name.focus();
		//return !hasErr;
	}
	
	if(allSet)
	{
		return false;
	}
	else
	{
		return false;
	}

}
