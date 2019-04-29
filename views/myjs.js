
/* Controle de saisir page Registre */

function test1(){

var username = ff.username.value;
var password = ff.password.value;
var age = ff.age.value;
var numtel = ff.numtel.value;
var email = ff.email.value;



if(username.length== 0)
{
alert("saisir le nom d'utilisateur ");	
}

else if(password.length== 0)
{
alert("Saisir votre mot de passe");
} 

else if(age.length== 0)
{
alert("Saisir votre âge");
} 

else if(numtel.length== 0) 
{
alert("Saisir votre numero de tel");
} 

else if(email.length== 0)
{
alert("Saisir votre adresse e-mail");
} 


else
{
alert('Bienvenue') ;
ff.username.value="";
ff.password.value="";
ff.age.value="";
ff.numtel.value="";
ff.email.value="";
}

}