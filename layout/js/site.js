function hello(){
    alert ("Welcome to my website");
}

function add(){
    document.write(5+6);
}

//documen.write
//window.alert
//innerHTML
//console.log

//function to change the bacj=kground color of the page
function changeColor (where, newColor){
    if (where == "background"){
        document.body.style.backgroundColor=newColor;
    }