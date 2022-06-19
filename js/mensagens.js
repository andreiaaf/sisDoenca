function cadastro(tipo) {

    if (tipo == '1') {


        swal.fire({
            title: 'Valores salvos com Sucesso!',
            icon: 'success',

            showConfirmButton: true,
            allowOutsideClick: false
        });


    } else {


        swal.fire({
            title: 'Erro ao cadastrar!',
            icon: 'error',

            showConfirmButton: true,
            allowOutsideClick: false
        });



    }

}


function atualiza(tipo) {

    if (tipo == '1') {


        swal.fire({
            title: 'Atualização feita com Sucesso!',
            icon: 'success',

            showConfirmButton: true,
            allowOutsideClick: false
        });


    } else {


        swal.fire({
            title: 'Erro ao atualizar!',
            icon: 'error',

            showConfirmButton: true,
            allowOutsideClick: false
        });





    }
}

function exclui(tipo) {
    if (tipo == '1') {


        swal.fire({
            title: 'Exclusão realizada com Sucesso!',
            icon: 'success',

            showConfirmButton: true,
            allowOutsideClick: false
        });


    } else {


        swal.fire({
            title: 'Erro ao excluir!',
            icon: 'error',

            showConfirmButton: true,
            allowOutsideClick: false
        });


    }
}

function aceita(tipo) {
    if (tipo == '1') {


        swal.fire({
            title: 'Ajuda aceita com sucesso!',
            icon: 'success',

            showConfirmButton: true,
            allowOutsideClick: false
        });


    } else {


        swal.fire({
            title: 'Erro ao aceitar!',
            icon: 'error',

            showConfirmButton: true,
            allowOutsideClick: false
        });


    }
}

function concluir(tipo) {
    if (tipo == '1') {


        swal.fire({
            title: 'Ajuda concluída com sucesso!',
            icon: 'success',

            showConfirmButton: true,
            allowOutsideClick: false
        });


    } else {


        swal.fire({
            title: 'Erro ao concluir ajuda!',
            icon: 'error',

            showConfirmButton: true,
            allowOutsideClick: false
        });


    }
}