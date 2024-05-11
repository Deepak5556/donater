const first = document.getElementById('Details');
const sec = document.getElementById('table');
const btn_p = document.getElementById("submit");

if (btn_p && first && sec) {
    btn_p.onclick = function changeOver() {
        first.style.display = "none";
        sec.style.display = "block";
    };
}