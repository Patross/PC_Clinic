//GETTING PRINT BUTTON AND MAKING IT PRINT
let btnPrint = document.getElementById("print");
let link = document.getElementById("link");

btnPrint.addEventListener("click",function(){

    btnPrint.hidden = true;
	link.hidden = true;

    window.print();

    btnPrint.hidden = false;
	link.hidden = false;
})

link.addEventListener("click",function(){

    btnPrint.hidden = true;
	link.hidden = true;

    window.print();

    link.hidden  = false;
	btnPrint.hidden = false;
})