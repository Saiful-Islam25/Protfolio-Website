const text = "ML and Data Science Enthusiast";
let index = 0;

function type() {
    if (index < text.length) {
        document.getElementById("typing-text").innerHTML += text.charAt(index);
        index++;
        setTimeout(type, 150);
    }
}
document.getElementById("typing-text").innerHTML = "";
type();
