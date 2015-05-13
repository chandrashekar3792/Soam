var textFields = new Array();
var totalTxtBoxes = 0;
var moveTB = false;
var selectedTBox = null;
// window.onload = function()
// {
	// alert("onload fun called");
	// var imgDispContainer = document.getElementById("UploadedImage");
	// var Container = document.getElementById("HtmlElemDisplayContainer");
	// Container.style.top = imgDispContainer.x+"px";
	// Container.style.left = imgDispContainer.y+"px";
	// Container.x = imgDispContainer.x;
	// Container.y = imgDispContainer.y;
// }
function deleteSelectedTBox()
{
	if(selectedTBox != null)
	{
		//Remove first from the body..
		document.body.removeChild(selectedTBox);
			
		//Then remove from the TBox array...
		textFields.pop(textFields.indexOf(selectedTBox));
		
	}//If any text box is selected, on then delete..
}

function addNewTextBox()
{
	//alert("Adding text box");
	//var uploadedImgElem = document.getElementById("UploadedImage");
	//var Container = document.getElementById("HtmlElemDisplayContainer");
	
	// var xPos = (parseInt(document.getElementById("PosX").value) + parseInt(Container.style.left)) + "px";
	// var yPos = (parseInt(document.getElementById("PosY").value) + parseInt(Container.style.top)) + "px";

	// var xPos = (parseInt(document.getElementById("PosX").value) + Container.x) + "px";
	// var yPos = (parseInt(document.getElementById("PosY").value) + Container.y) + "px";

	 var xPos = document.getElementById("PosX").value + "px";
	 var yPos = document.getElementById("PosY").value + "px";


	if(xPos.length>2 && yPos.length>2)
	{
		var txtInputElem = document.createElement("input");
		txtInputElem.type = "text";
		txtInputElem.style.width = "100px";
		txtInputElem.style.height = "25px";
		txtInputElem.style.position = "absolute";
		txtInputElem.onmouseover = tbSelect;
		//txtInputElem.onmousemove = tbManipulate;
		//txtInputElem.onkeypress = tbManipulate;
		txtInputElem.onkeydown = tbManipulate;
		txtInputElem.onmouseout = tbDeSelect;
		//txtInputElem.disabled = true;
		//txtInputElem.class = "applnTextbox";
		
		document.body.appendChild(txtInputElem);
		txtInputElem.style.top = xPos;
		txtInputElem.style.left = yPos;
		
		textFields.push(txtInputElem);
		totalTxtBoxes++;
	}//end of if valid position details entered..
}//end of function addNewTextBox..

// function setTBPos(tBoxElem,posX,posY)
// {
	// if(posX.length>2 && posY.length>2)
	// {
		// //var txtInputElem = document.createElement("input");
		// // tBoxElem.type = "text";
		// // tBoxElem.style.width = "100px";
		// // tBoxElem.style.height = "25px";
		// tBoxElem.style.position = "absolute";
		// //txtInputElem.class = "applnTextbox";
		
		// //Container.appendChild(tBoxElem);
		// tBoxElem.style.top = posX;
		// tBoxElem.style.left = posY;

		// //textFields.push(txtInputElem);
	// }//end of if valid position details entered..
// }//end of setTBPos function...

function tbManipulate()
{
	//alert("On click fun called");
	//if(event == KeyboardEvent)
	{
		if(moveTB)
		{
			//console.log("moving..");
			var moveByPxAmount = 3;
			var moveDiffX, moveDiffY;
			if(event.keyCode == 46)//If Key pressed is "Delete" button...
			{
				deleteSelectedTBox();
				return;
			}
			else if(event.keyIdentifier == "Down")
			{
				moveDiffX = 1*moveByPxAmount ;
				moveDiffY = 0;
				//move right by 1 px at a time..
			}
			else if(event.keyIdentifier == "Right" )
			{
				moveDiffX = 0;
				moveDiffY = 1*moveByPxAmount ;
				//move left by 1 px at a time...
			}
			else if(event.keyIdentifier == "Up")
			{
				moveDiffX = -1*moveByPxAmount ;
				moveDiffY = 0;
				//move right by 1 px at a time..
			}
			else if(event.keyIdentifier == "Left" )
			{
				moveDiffX = 0;
				moveDiffY = -1*moveByPxAmount ;
				//move left by 1 px at a time...
			}
			//console.log("Event is");
			 this.style.top = ((parseInt(this.style.top)) + moveDiffX) + "px";
			 this.style.left = ((parseInt(this.style.left)) + moveDiffY) + "px";
			 
			document.getElementById("PosX").value = this.style.top;
			document.getElementById("PosY").value = this.style.left;

		}//end of if move...
	}//end of if KeyboardEvent..
}//end of function...

function tbDeSelect()
{
	//console.log("Deselected..");
	this.value = ""
	moveTB = false;
	selectedTBox = null;
}

function tbSelect()
{
	//console.log("selected..");
	document.getElementById("PosX").value = this.style.top;
	document.getElementById("PosY").value = this.style.left;
	this.value = "selected";
	moveTB = true;
	selectedTBox = this;
}


function SaveNewForm()
{
	//alert("To DO: to save new form with text fields");
	var formSaveGetReq = createFormSaveGetReq();
	
	//Take the list of all the textbox arrays and create a post request...
	
	//Take the image path and upload the image file...
	
	//create a xhr POST request and send to server...
	
	//wait for correct response and redirect to Admin home page....
}

function encodeNameAndValue(sName, sValue) 
{ 
	var sParam = encodeURIComponent(sName); 
	sParam += "="; 
	sParam += encodeURIComponent(sValue); 
	return sParam; 
}

function createFormSaveGetReq()
{
	var paramsArray = new Array();
	
	for(i=0;i<
	paramsArray.push(encodeNameAndValue("autho",RadioValue));
	
	return paramsArray.join("&");
	
}

function sendFormSaveReq()
{
	var divElem = document.getElementById("divLoginMsg");
	divElem.innerHTML = "";
	//alert("Sending Login XHR REQ");
	//var xhrReq = zXmlHttp.createRequest();
	frmSavePostReq = createFormSaveGetReq();
	var xhrReq = new XMLHttpRequest();
	xhrReq.async = true;
	xhrReq.onreadystatechange = function()
	{
		if(xhrReq.readyState == 4)
		{
			//alert("Received XHR response ");
			if(xhrReq.status == 200)
			{
				//alert("Correct response received");
				//transformQueXml(xhrReq.responseText);
				if(xhrReq.responseText == "Failure")
				{
					var divElem = document.getElementById("divLoginMsg");
					divElem.innerHTML = "Failed To Save the form..";
					//divElem.innerHTML = xhrReq.responseText;
				}//end of if login failure..
				else
				{
					// var divElem = document.getElementById("divLoginMsg");
					// divElem.innerHTML = "Login Successful";
					
					//Set Logged In Cookie..
					//setCookie("LogInUser",loginPostReq);
					
					//redirect to AdminLoginPage.php
					window.location=xhrReq.responseText;
					
				}//end of else login success..
			}//end of if XHR status == 200
		}//ebd if uf readtState == 4
	}//end of onreadystatechange() anonymous function...
	
	xhrReq.open("get","SaveFormBackend.php", true);
	//xhrReq.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhrReq.send(frmSavePostReq);
	//alert("Sent XHR request");
}//end of function sendReq..