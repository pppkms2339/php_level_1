$(document).on("click", ".image_href", function () {
        let path = $(this).data('name');
        $(".modal-body img").attr("src", path);
		let fileName = path.slice(path.lastIndexOf('/') + 1);
		//$(".modal-title").val(fileName);
		document.getElementById('exampleModalLabel').innerHTML = fileName;
});