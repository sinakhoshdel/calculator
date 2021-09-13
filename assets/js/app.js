// This function clear all the values
function clearScreen() {
	document.getElementById("result").value = "0";
}

// This function display values
function display(value) {
	if(document.getElementById("result").value == '0'){
		document.getElementById("result").value = '';
	}
	document.getElementById("result").value += value;
}

function calculate() {

 	const oXHR = new XMLHttpRequest();      // Create XMLHttpRequest object.

    // Initiate request.
    oXHR.onreadystatechange = reportStatus;
    oXHR.open("POST", "http://dev.calculator.com/ajax.php", true);
    oXHR.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    oXHR.setRequestHeader('Access-Control-Allow-Origin', '*');
    oXHR.setRequestHeader("Content-Type", "application/json");

    let data = { val:document.getElementById("result").value };
    oXHR.send(JSON.stringify(data));      //  Now send the request (with data);

    function reportStatus() {
        if (oXHR.readyState == 4 && oXHR.status == 200) {    // Check if request is complete.
            document.getElementById("result").value = this.response;
        }
    }
	

}

