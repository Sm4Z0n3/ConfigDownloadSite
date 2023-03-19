document.getElementById("usw").style = "background-color: white; opacity: 0.8; border: 0.5px solid white; border-radius: 20px; padding: 10px; margin-bottom: 10px;transition: background-color 0.2s ease-in-out;";
document.getElementById("psw").style = "background-color: white; opacity: 0.8; border: 0.5px solid white; border-radius: 20px; padding: 10px; margin-bottom: 10px;transition: background-color 0.2s ease-in-out;";
document.getElementById("mail").style = "background-color: white; opacity: 0.8; border: 0.5px solid white; border-radius: 20px; padding: 10px; margin-bottom: 10px;transition: background-color 0.2s ease-in-out;";
document.getElementById("sub").style = "background-color: white; opacity: 1;border: 0.5px solid white; border-radius: 20px; width: 100px; height: 40px; margin-top: 10px; transition: background-color 0.2s ease-in-out;";
document.getElementById("sub").onclick = "submita()";

document.getElementById("type").style.display = "none";

document.getElementById("submit").addEventListener("mouseout", function () {
    this.style.backgroundColor = "rgba(255, 255, 255, 0.5)";
});
document.getElementById("submit").addEventListener("mouseover", function () {
    this.style.backgroundColor = "rgba(179,179,164,1)";
});

document.getElementById("usw").addEventListener("mouseout", function () {
    this.style.backgroundColor = "rgba(255, 255, 255, 0.5)";
});
document.getElementById("usw").addEventListener("mouseover", function () {
    this.style.backgroundColor = "rgba(179,179,164,1)";
});

document.getElementById("psw").addEventListener("mouseout", function () {
    this.style.backgroundColor = "rgba(255, 255, 255, 0.5)";
});
document.getElementById("psw").addEventListener("mouseover", function () {
    this.style.backgroundColor = "rgba(179,179,164,1)";
});

document.getElementById("mail").addEventListener("mouseout", function () {
    this.style.backgroundColor = "rgba(255, 255, 255, 0.5)";
});
document.getElementById("mail").addEventListener("mouseover", function () {
    this.style.backgroundColor = "rgba(179,179,164,1)";
});

/*
function submita() {
    var usw = document.getElementById("usw").value;
    var psw = document.getElementById("psw").value;
    var url = "http://" + window.location.hostname + ":20775";
    document.getElementById("form").action = url;
    document.getElementById("form").method = "post";
    console.log(url);
}
*/