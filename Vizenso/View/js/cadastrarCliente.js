function MascaraCPF(keypress){

    if(keypress>=48 && keypress<=57){

        separador1 = '.';
        separador2 = '-';
        conjunto1 = 3;
        conjunto2 = 7;
        conjunto3 = 11;

        if(eval(document.CadastrarCliente.txtCPFClie.value.length)==conjunto1){

            document.CadastrarCliente.txtCPFClie.value = document.CadastrarCliente.txtCPFClie.value + separador1;

        }
        if(eval(document.CadastrarCliente.txtCPFClie.value.length)==conjunto2){

            document.CadastrarCliente.txtCPFClie.value = document.CadastrarCliente.txtCPFClie.value + separador1;

        }
        if(eval(document.CadastrarCliente.txtCPFClie.value.length)==conjunto3){

            document.CadastrarCliente.txtCPFClie.value = document.CadastrarCliente.txtCPFClie.value + separador2;

        }
        return true;
    }else{

        return false;

    }

}

function MascaraRG(keypress){

    if(keypress>=48 && keypress<=57){

        separador1 = '.';
        separador2 = '-';
        conjunto1 = 2;
        conjunto2 = 6;
        conjunto3 = 10;

        if(eval(document.CadastrarCliente.txtRGClie.value.length)==conjunto1){

            document.CadastrarCliente.txtRGClie.value = document.CadastrarCliente.txtRGClie.value + separador1;

        }
        if(eval(document.CadastrarCliente.txtRGClie.value.length)==conjunto2){

            document.CadastrarCliente.txtRGClie.value = document.CadastrarCliente.txtRGClie.value + separador1;

        }
        if(eval(document.CadastrarCliente.txtRGClie.value.length)==conjunto3){

            document.CadastrarCliente.txtRGClie.value = document.CadastrarCliente.txtRGClie.value + separador2;

        }
        return true;
    }else{

        return false;

    }

}