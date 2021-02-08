// JavaScript Document
function calc()
{
	var a=parseFloat(document.getElementById('age').value);
	var f=parseFloat(document.getElementById('feet').value);
	var i=parseFloat(document.getElementById('inch').value);
	var h=parseFloat(30.48*f)+(2.54*i);
	var w=parseFloat(document.getElementById('weight').value);
	var bmr=0;
	if(document.getElementById('m').checked)
		bmr=parseInt(10*w+6.25*h-5*a+5);
	else
		 bmr=parseInt(10*w+6.25*h-5*a-161);
		
		
	if(document.getElementById('a').selected)
		document.getElementById('des').innerHTML='BMR= '+bmr+' Calories/day';
	
	
	var bmrlb1=0,bmrlb2=0,bmrwk1=0,bmrwk2=0; 
	
	if(document.getElementById('b').selected)
	{
		bmrmain=parseInt(bmr*1.2);
		bmrlbl1=parseInt(bmrmain-500);
		bmrlbl2=parseInt(bmrmain-1000);
		bmrlbg1=parseInt(bmrmain+500);
		bmrlbg2=parseInt(bmrmain+1000);
		
	}
	if(document.getElementById('c').selected)
	{
		bmrmain=parseInt(bmr*1.375);
		bmrlbl1=(bmrmain-500);
		bmrlbl2=(bmrmain-1000);
		bmrlbg1=(bmrmain+500);
		bmrlbg2=(bmrmain+1000);
		
	}
	if(document.getElementById('d').selected)
	{
		bmrmain=parseInt(bmr*1.55);
		bmrlbl1=(bmrmain-500);
		bmrlbl2=(bmrmain-1000);
		bmrlbg1=(bmrmain+500);
		bmrlbg2=(bmrmain+1000);
		
	}
	if(document.getElementById('e').selected)
	{
		bmrmain=parseInt(bmr*1.725);
		bmrlbl1=(bmrmain-500);
		bmrlbl2=(bmrmain-1000);
		bmrlbg1=(bmrmain+500);
		bmrlbg2=(bmrmain+1000);
		
	}
	if(document.getElementById('f').selected)
	{
		bmrmain=parseInt(bmr*1.9);
		bmrlbl1=(bmrmain-500);
		bmrlbl2=(bmrmain-1000);
		bmrlbg1=(bmrmain+500);
		bmrlbg2=(bmrmain+1000);
		
	}


document.getElementById('des').innerHTML+='You need '+bmrmain+' Calories/day to <span style="color:#FF0">maintain</span> your weight';
   
document.getElementById('des').innerHTML+='<br />You need '+bmrlbl1+' Calories/day to <span style="color:#F00">lose</span> 1.lb per week';
document.getElementById('des').innerHTML+='<br />You need '+bmrlbl2+' Calories/day to <span style="color:#F00">lose</span> 2.lb per week';
document.getElementById('des').innerHTML+='<br />You need '+bmrlbg1+' Calories/day to <span style="color:#0F0">gain</span> 1.lb per week';	
document.getElementById('des').innerHTML+='<br />You need '+bmrlbg2+' Calories/day to <span style="color:#0F0">gain</span> 2.lb per week';	


}
