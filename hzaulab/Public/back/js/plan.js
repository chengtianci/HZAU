window.onload =function () {
	var oRowNum = document.getElementById('rowNum'); 
	var oColNum = document.getElementById('colNum'); 
	var oCreateButton = document.getElementById('create_tab');
	var oTable = document.getElementById('tbl_t');

	oCreateButton.onclick = function () {
			var div = document.createElement("div");
			var input = document.createElement("input");
			var br = document.createElement("br");
			input.className	= "gallery_eqt";
			input.name	= "gallery_eqt";
			var delButton = document.createElement("input");
			delButton.className = "button";
			delButton.type = "button";
			delButton.value = "删除";
			delButton.addEventListener("click",del,false);
			div.appendChild(input);
			div.appendChild(delButton);
			div.appendChild(br);
			oTable.appendChild(div);
	}
	function del() {
		this.parentNode.parentNode.removeChild(this.parentNode);
	}

}