import { AdminPanel } from "./adminPanel";

class Main {
	constructor() {

		if (document.getElementById("wapsApp")) {
			const sessionStorage = this.getSessionStorage()

			console.log("Hello world, this is " + sessionStorage.configData.Name + " app!")
			const app = <HTMLDivElement>document.getElementById("wapsApp")
			this.main(app);
		}

		new AdminPanel();
	}

	private main(app:HTMLDivElement) {
		const sessionStorage = this.getSessionStorage()
		var logo = document.createElement("img")
		var text = document.createElement("p")

		logo.src = "https://gitlab.com/waps/framework/-/raw/master/framework.src/content/img/fav.png"
		logo.className = "waps_plugin_logo"
		logo.width = 40
		text.className = "waps_plugin_text"
		text.style.fontFamily = "Ubuntu"

		text.innerHTML = "Hello World, this is your " + sessionStorage.configData.Name + " Plugin"

		app.innerHTML = ""
		app.appendChild(logo)
		app.appendChild(text)
		app.style.border = "solid 8px"
	}

	private getSessionStorage() {
		let sessionString = <HTMLDivElement>document.getElementById("wapsAppStorage")
		let obj = JSON.parse(sessionString.innerHTML);

		return obj
	}
}

new Main();
