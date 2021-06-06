function triggerClick(){
	document.querySelector('#profileImage').click();
}


function displayImage(e){
	if(e.files[0]) {
		var reader = new FIleReader();

		reader.onload = function(e){
			document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
		}
		reader.readasDataURL(e.files[0]);
	}
}