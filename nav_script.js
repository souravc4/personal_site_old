var title = document.getElementsByTagName("title")[0].innerHTML;
var liarray = document.getElementsByClassName("navli");
var l = liarray.length;
var i,x;
for(i=0 ; i<l ; i++)
{
	if (liarray[i].innerHTML==title) {
		x = liarray[i].parentNode;
		x.className += " active";
		liarray[i].style.color='#000000';
		break;
	}
}

var liarray1 = document.getElementsByClassName("dropli");
var l = liarray1.length;
for(i=0 ; i<l ; i++)
{
	if (liarray1[i].innerHTML==title) 
	{
		x = liarray1[i].parentNode.parentNode.parentNode;
		x.className += " active";
		break;
	}
}
