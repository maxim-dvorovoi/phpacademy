//zadanie 1
var firstName;
var lastName;
firstName = 'Alex';
lastName = firstName;
alert( lastName );

//zadanie 2
var firstName = 'Maxim';
var lastName = 'Dvorovoy';
var age = 21;
var education = 'неповна вища';
var hobby = 'music';
alert( hobby );

//zadanie 3
var a = prompt('число а: ', );
var b = prompt('число b: ', );

if (Number.isInteger(+a) && Number.isInteger(+b)){
	alert(+a + +b);
} else {
	alert('это не числа!!');
}