import "./utils"
import { Utils } from "./utils"

export class AdminPanel {
	constructor() {
		const adminPanelObj = <HTMLDivElement>document.getElementById("wapsAdminPanel")
		adminPanelObj.innerHTML = ""
		this.header(adminPanelObj)
		this.body(adminPanelObj)
	}

	private header(adminPanelObj:HTMLDivElement) {

		const header = document.createElement("div");
		let header_h1 = document.createElement("h1");

		header.id = "wapsHeader"
		header_h1.innerHTML = "This is your Test WAPS Plugin"

		header.appendChild(header_h1)
		adminPanelObj.appendChild(header);
	}

	private body(adminPanelObj: HTMLDivElement) {
		const body = document.createElement("div")
		body.id = "wapsBody"

		let divider = document.createElement("hr")
		let navHeader = document.createElement("h2")

		navHeader.innerHTML = "Config"

		body.appendChild(navHeader)
		body.appendChild(divider)
		body.appendChild(this.displayConfigData())

		adminPanelObj.appendChild(body)
	}

	private getSessionStorage() {
		const sessionStorage = <HTMLDivElement>document.getElementById("wapsSessionStorage");
		const data = JSON.parse(sessionStorage.innerHTML)
		return data;
	}

	private displayConfigData() {
		const form = document.createElement("form")
		const data = this.getSessionStorage()
		const submit = document.createElement("button")

		submit.type = "submit"
		submit.innerHTML = "Submit"
		submit.className = "btn-success"

		for (let item in data.configData) {
			let value = data.configData[item]
			let div = document.createElement("div")
			let label = document.createElement("label")
			let input = document.createElement("input")
			let divider = document.createElement("hr")

			form.id = "wapsForm"
			form.action = <string>Utils.getCurrentAbsoluteSiteUrl() + "?page=waps-plugin"
			form.method = "post"

			div.className = "wapsFormGroup"
			label.textContent = item
			label.className = "wapsFormLabel"
			input.value = value
			input.className = "wapsFormInput"
			input.name = item

			div.appendChild(label)
			div.appendChild(input)
			form.appendChild(div)
			form.appendChild(divider)
		}

		form.appendChild(submit)

		return form;
	}
}


// if (!document.getElementById("wapsAdminPanel")) {
// 	return;
// }
