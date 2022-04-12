
const ccnum=document.getElementById('ccnum');
const m=document.getElementById('expM');
const y=document.getElementById('expY');
const cvv=document.getElementById('cvv');
const btn=document.getElementById('btn');

 btn.addEventListener('click', validIt);
//this functions validates all card details
function validIt(){
let a1, a2, a3, cardno = /^(?:5[1-5][0-9]{14})$/, cvvno= /^[0-9]{3,4}$/;
if(ccnum.value.match(cardno))
{a1 = 1;} else {alert('incorrect number'); a1 = 0;}
//validates the cards ccnum
let myDate = new Date();
if ((y.value>myDate.getFullYear())||((y.value==myDate.getFullYear())&&(m.value>myDate.getMonth())))
{a2 = 1;} else {alert('incorrect date'); a2 = 0;}
//validates the cards date
if(cvv.value.match(cvvno))
{a3 = 1;} else {alert('incorrect cvv'); a3 = 0;}
//validates the cards cvv
if((a1+a2+a3) == 3){
document.getElementById("hidden").value = 1;
}
else {
document.getElementById("hidden").value = -1;
}
//setting deffirent values for the hidden elements load either pay.php or success.php
}