const deleteButton = document.getElementsByClassName("delete");
console.log("hey");
console.log([...deleteButton]);
[...deleteButton].forEach(b => {
	b.addEventListener("click", function () {
		if (confirm("¿Desea eliminar la transacción " + this.getAttribute("value") + "?")) {
			window.location.href = "../../controller/trans.controller.php?delete=" + this.classList[3];
		}
	});
});


const deleteButton2 = document.getElementsByClassName("deleted");
console.log("hey");
console.log([...deleteButton]);
[...deleteButton2].forEach(b => {
	b.addEventListener("click", function () {
		if (confirm("¿Desea eliminar el producto " + this.getAttribute("value") + "?")) {
			window.location.href = "../../controller/product.controller.php?delete=" + this.classList[3];
		}
	});
});