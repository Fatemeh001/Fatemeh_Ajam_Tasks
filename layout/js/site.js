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
function changeColor (){
  
        let color = document.getElementById('background').value;
        document.body.style.backgroundColor = color;

    }

    function changeFcolor (){
        let fcolor = document.getElementById('font').value;
        document.body.style.backgroundColor = fcolor;
    }


    //crud
    function crud(){
        let fname=(document.form1.fname.value).trim();
        if (fname.length<5){
        alert("First name must have atleast 5 character");
        return false;}
        let lname=(document.form1.lname.value).trim();
        if (lname.length<15){
        alert("Last name must have atleast 15 character");
        return false;}
          let city=(document.form1.city.value).trim();
        if (city.length<5){
        alert("City name must have atleast 5 character");
        return false;}
         }

    function fname(){
        let fname=(document.form1.fname.value).trim();
        if(fname.length<5){
            alert("fIRST name must have atleast 5 character");
            return false;}
    }