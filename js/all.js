function closebar() {
            var spanObj = document.getElementById("emotion");
            spanObj.style.display = "none"
        }

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
    })