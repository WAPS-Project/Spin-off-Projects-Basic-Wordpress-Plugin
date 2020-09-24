// console.log('Hello World, im a Test Plugin');

var app = <HTMLDivElement>document.getElementById("app")
var logo = document.createElement("img")
var text = document.createElement("p")

logo.src = "https://gitlab.com/waps/framework/-/raw/master/framework.src/content/img/fav.png"
logo.className = "waps_plugin_logo"
logo.width = 40
text.className = "waps_plugin_text"
text.style.fontFamily = "Ubuntu"

text.innerHTML = "Hello World, this is your WAPS Plugin"

app.innerHTML = ""
app.appendChild(logo)
app.appendChild(text)
app.style.border = "solid 8px"