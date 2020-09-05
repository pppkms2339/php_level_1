$(document).on("click", ".image_href", function () {
        let path = $(this).data('name');
        $(".modal-body img").attr("src", path);
		let id = $(this).data('id');
		$.ajax({
			type: "GET",
			url: "count.php",
			data: "id=" + id,
			success: function(answer){
				document.getElementById('exampleModalLabel').innerHTML = 'Просмотров ' + answer;
			}
		});
});