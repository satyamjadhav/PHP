var a;
function show_data(){
	if(a==1)
	{
		document.getElementById("form1").style.display="block";
		return a=0;
	}
	else{
		document.getElementById("form1").style.display="none";
		return a=1;
	}
}