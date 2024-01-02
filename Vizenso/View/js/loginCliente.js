function MascaraCPF(keypress){

    if(keypress>=48 && keypress<=57){

        separador1 = '.';
        separador2 = '-';
        conjunto1 = 3;
        conjunto2 = 7;
        conjunto3 = 11;

        if(eval(document.LoginCliente.txtCPFClie.value.length)==conjunto1){

            document.LoginCliente.txtCPFClie.value = document.LoginCliente.txtCPFClie.value + separador1;

        }
        if(eval(document.LoginCliente.txtCPFClie.value.length)==conjunto2){

            document.LoginCliente.txtCPFClie.value = document.LoginCliente.txtCPFClie.value + separador1;

        }
        if(eval(document.LoginCliente.txtCPFClie.value.length)==conjunto3){

            document.LoginCliente.txtCPFClie.value = document.LoginCliente.txtCPFClie.value + separador2;

        }
        return true;
    }else{

        return false;

    }

}