//GETTING PRINT BUTTON AND MAKING IT PRINT
let btnPrint = document.getElementById("print");
let link = document.getElementById("link");
link.style.visibility = "hidden";
btnPrint.addEventListener("click",function(){

    btnPrint.hidden = true;

    window.print();

    btnPrint.hidden = false;
    link.hidden  = false;

})