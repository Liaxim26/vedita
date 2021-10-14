function setInvisible(id) {
	performAction('setInvisible', id).success(function(data) {
    	$("#block"+id).hide()
  	})
}

function increaseQuantity(id) {
	performAction('increaseQuantity', id).success(function(data) {
		$("#block"+ id + " #quantity").text(function(index, curValue){
			return parseInt(curValue) + 1
		})
	})
}

function decreaseQuantity(id) {
	performAction('decreaseQuantity', id).success(function(data) {
		$("#block"+ id + " #quantity").text(function(index, curValue){
			return parseInt(curValue) - 1
		})
	})
}


function performAction(actionName, productId) {
	return $.ajax({
		url:"productApi.php",
		async: true,
		type: "POST",
		dataType: "text",
		data: {
			action: actionName,
			id: productId
		}
	})
}





