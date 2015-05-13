function loadImageOnBrowser()
{
	alert("Fun called");
	var fileInput = document.getElementById('fileInput');
	var fileDisplayArea = document.getElementById('fileDisplayArea');

	var file = fileInput.files[0];
	var imageType = /image.*/;

	if (file.type.match(imageType)) 
	{
		var reader = new FileReader();

		reader.onload = function(e) 
		{
			//fileDisplayArea.innerHTML = "";

			//var img = new Image();
			var imgElem = document.getElementById("UploadedImage");
			imgElem.src = reader.result;
			//fileDisplayArea.appendChild(imgElem);
		}

		reader.readAsDataURL(file);	
	}//end of if block...
	else 
	{
		fileDisplayArea.innerHTML = "File not supported!";
	}//end of else block..
}//end of LoadImageOnBrowser function...
