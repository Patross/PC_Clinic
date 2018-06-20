//GETTING PRINT BUTTON AND MAKING IT PRINT
let btnPrint = document.getElementById("print");
btnPrint.addEventListener("click",function(){
    btnPrint.style.display = "none";
    window.print();
    btnPrint.style.display = "block";
})