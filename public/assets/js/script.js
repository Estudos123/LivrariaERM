$('.bi-trash').on('click', function (event) {
    event.preventDefault();
    const url = document.getElementById("deleteAccount").href
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
})


$('#informarpagamento').on('click', function(event){
    event.preventDefault();
    const url = this.getAttribute('href');
    swal({
        title: 'Esta conta consta como não paga!',
        text: 'Você ja pagou esta conta?',
        icon: 'warning',
        buttons: ["Não", "Sim!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
})

