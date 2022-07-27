// ------- script loader---------// 
 var  myVar;

function myFunction(){
    myVar = setTimeout(showPage, 2000);
}

function showPage(){
    document.getElementById("load").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
}
