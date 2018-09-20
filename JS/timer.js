var xmlHttp;
function srvTime(){
    try {
        //FF, Opera, Safari, Chrome
        xmlHttp = new XMLHttpRequest();
    }
    catch (err1) {
        //IE
        try {
            xmlHttp = new ActiveXObject('Msxml2.XMLHTTP');
        }
        catch (err2) {
            try {
                xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
            }
            catch (err3) {
                //AJAX not supported, use CPU time.
                alert("AJAX not supported");
            }
        }
    }
    xmlHttp.open('HEAD',window.location.href.toString(),false);
    xmlHttp.setRequestHeader("Content-Type", "text/html");
    xmlHttp.send('');
    return xmlHttp.getResponseHeader("Date");
}

var st = srvTime();
var today = new Date(st);
var start = new Date('Sep 05, 2018 12:00:00');
var years = today.getFullYear() - start.getFullYear();
var months = (today.getMonth()+1) - start.getMonth();
var days = today.getDate() - start.getDate();
var day, year, month;


console.log(days);
//if not full month
if ((days < 0) && today.getMonth !=1 && ((today.getMonth = 0) || (today.getMonth = 2) || (today.getMonth = 4) || (today.getMonth = 6) || (today.getMonth = 7) || (today.getMonth = 9) || (today.getMonth = 11))) {
    days = 30 + days; // for short months
    months = months - 1;
    console.log ('Short months');
}else if ((days < 0) && ((today.getMonth = 1) || (today.getMonth = 3) || (today.getMonth = 5) || (today.getMonth = 8) || (today.getMonth = 10))) {
    days = 31 + days; // for longer months
    months = months -1;
    console.log ('Long months');
}else if ((days < 0) && (today.getMonth = 2)) {
    days = 28 + days; // for February (28 days)
    months = months -1;
    console.log ('February');
}
// if not full year
if  (months < 0) {
    months = 12 + months;
    years = years -1;
} 
 
if (days == 1) { 
    day = 'Day';
}else{
    day = 'Days';
}

if (months == 1) {
    month = 'Month';
}else if (month == 0){
    month = 'Month';
}else{
    month = 'Months';
}

if (years == 0) {
    year = 'years';
}else if (years == 1 ){
    year = 'years';
}else{
    year = 'years';
}

document.getElementById("timer").textContent += 'Coding with passion from '+years+' '+year;
document.getElementById("timer").textContent += ' '+months+' '+month;
document.getElementById("timer").textContent += ' '+days+' '+day;


