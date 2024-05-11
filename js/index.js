
// const first = document.getElementById('loginForm')
// const sec = document.getElementById('sign-in')
// const btn_p = document.getElementById("Sign-up")
// btn_p.onclick = function changeOver() {
//     first.style.display = "none"
//     sec.style.display = "block"
// }
const first = document.getElementById('loginForm');
const sec = document.getElementById('sign-in');
const btn_p = document.getElementById("Sign-up");
if (btn_p && first && sec) {
    btn_p.onclick = function changeOver() {
        first.style.display = "none";
        sec.style.display = "block";
    };
}