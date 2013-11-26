/* Constants */
var rootDirectory = "templates";

PINT_BrowserDetection("browserupgrade.htm");

function init() {
	var fileName  = PINT_GetCurrentFileName();
	var directory = PINT_GetCurrentDirectory();
}

function cleanup(){}


window.onload = init;
window.onunload = cleanup;
