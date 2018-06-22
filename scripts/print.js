//GETTING PRINT BUTTON AND MAKING IT PRINT
let btnPrint = document.getElementById("print");

btnPrint.addEventListener("click",function(){

    btnPrint.hidden = true;
    if(document.getElementById("link")){
        document.getElementById("link").hidden = true;
    }
    window.print();

    btnPrint.hidden = false;

    if(document.getElementById("link")){
        document.getElementById("link").hidden = false;
    }
})
