var openNav = document.querySelector(".open-nav");
var nav = document.querySelector(".nav-items");
var closeNav = document.querySelector(".close-nav");
var editUser = document.querySelectorAll("#editUser");
var input = document.querySelector("#sno");
var deleteUser = document.querySelectorAll(".btnREd");
openNav.addEventListener("click", OpenHamburgerMenu);
function OpenHamburgerMenu() {
    nav.style.visibility = "visible";
    closeNav.style.display = "block";
    openNav.style.display = "none"
}
closeNav.addEventListener("click", function () {
    nav.style.visibility = "hidden"
    closeNav.style.display = "none";
    openNav.style.display = "block";
});
const LeftBtn = document.querySelector(".category .firstButton");
const rightbtn = document.querySelector(".category .secondButton");
const menu = document.querySelector(".dashboard_container aside");
LeftBtn.addEventListener("click", function () {
    LeftBtn.style.visibility = "hidden";
    rightbtn.classList.add("categorySecondBtn")
    menu.style.visibility = "visible";
});
rightbtn.addEventListener("click", function () {
    LeftBtn.style.visibility = "visible";
    rightbtn.classList.remove("categorySecondBtn")
    menu.style.visibility = "hidden";
});


editUser.forEach(function(e){
    e.addEventListener("click",username);
})

function username(event){
    var td = event.target.parentElement;
    var username =  td.parentElement;
    var result =  username.querySelector(".username");
    sno.value = result.innerHTML;
    localStorage.setItem("username",sno.value);
}
deleteUser.forEach(function(ev){
    ev.addEventListener("click",usernameDel);
})

function usernameDel(event){
    var td = event.target.parentElement;
    console.log(td.parentElement);

}








