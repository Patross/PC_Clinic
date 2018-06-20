let form = document.getElementById("form");

let newUser = document.getElementById("newUser");
newUser.addEventListener("click",function(){
	console.log("newUser");
	form.innerHTML = "newUser";
});

let existingUser = document.getElementById("existingUser");
existingUser.addEventListener("click",function(){
	console.log("existingUser");
	form.innerHTML = "existingUser";
});

//?mode=new

