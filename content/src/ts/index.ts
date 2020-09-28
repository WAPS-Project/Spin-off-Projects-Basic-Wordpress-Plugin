import { AdminPanel } from "./adminPanel";

class Main {
	constructor() {

		if (document.getElementById("app")) {
			console.log("Hello world, this is WAPS app!")
			const app = <HTMLDivElement>document.getElementById("app")
			this.main(app);
		}

		new AdminPanel();
	}

	private main(app:HTMLDivElement) {
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
	}
}

new Main();
