export class Utils {


	public static getSiteCollectionUrl(): string | null {
		if (window
			&& "location" in window
			&& "protocol" in window.location
			&& "pathname" in window.location
			&& "host" in window.location) {
			let baseUrl = window.location.protocol + "//" + window.location.host;
			const pathname = window.location.pathname;
			const siteCollectionDetector = "/sites/";
			if (pathname.indexOf(siteCollectionDetector) >= 0) {
				baseUrl += pathname.substring(0, pathname.indexOf("/", siteCollectionDetector.length));
			}
			return baseUrl;
		}
		return null;
	}


	public static getCurrentAbsoluteSiteUrl(): string | null  {
		if (window
			&& "location" in window
			&& "protocol" in window.location
			&& "pathname" in window.location
			&& "host" in window.location) {
			return window.location.protocol + "//" + window.location.host + window.location.pathname;
		}
		return null;
	}


	public static getWebServerRelativeUrl(): string | null  {
		if (window
			&& "location" in window
			&& "pathname" in window.location) {
			return window.location.pathname.replace(/\/$/, "");
		}
		return null;
	}


	public static getLayoutsPageUrl(libraryName: string): string | null  {
		if (window
			&& "location" in window
			&& "pathname" in window.location
			&& libraryName !== "") {
			return window.location.pathname.replace(/\/$/, "") + "/_layouts/15/" + libraryName;
		}
		return null;
	}


	public static getAbsoluteDomainUrl(): string | null  {
		if (window
			&& "location" in window
			&& "protocol" in window.location
			&& "host" in window.location) {
			return window.location.protocol + "//" + window.location.host;
		}
		return null;
	}
}
