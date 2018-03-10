//zadanie 1
var age = prompt('Сколько вам лет?: ', );

if (Number.isInteger(+age)){
	if (age<17 && age>7){
	    var name = prompt('Как вас зовут?: ', );
	    if (name){
	        alert('Добрый день ' + name);
	    } else {
	        alert('Пока');
	    }
    } else {
    	alert('Ви родились не в 2000х');
    }
} else {
	alert('нет такого возраста!!');
}

/*
//zadanie 2

alert(null || 2 || undefined)           (2)
alert(alert(213) || 2 || alert(324))    (213,2)
alert(13123 && null && 2)               (null)
alert(alert(1) && alert(2))             (1 , undefined)
alert(null || 2 && 3 || 4)              (3)

if(-1 || 0) alert ("first")             (first)
if(-1 && 0) alert("second")             (не будет alert)


//zadanie 3

"" + 123 + 0                            (1230)
"" - 143 + 0                            (-143)
true + false                            (true)
6 / "3"                                 (2)
("4pt" - 4pt)                           (eror)
5 && 213                                (213)
null + 123                              (123)
undefined + 10                          (nan)

//zadanie 4

var name = "Andrii"
function myName(name) {
    alert(name);
}
myName();         (undefined)
myName("Ivan");   (Ivan)
*/
//zadanie 5

function min(a,b) {
    if (a>b) {
        alert(a);
    } else if (b>a) {
        alert(b);
    } else if (a==b){
        alert (a);
    }
}

min(1,2);
min(23,3);


function pow(x,n) {
    if (n != 1) {
        return x * pow(x, n - 1);
    } else {
        return x;
    }
}

alert (pow(2,2));
alert (pow(2,5));
