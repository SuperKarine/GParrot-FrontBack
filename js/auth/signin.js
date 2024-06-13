const mailInput = document.getElementById("EmailInput");
const passwordInput= document.getElementById("passwordInput");
const btnSingin = document.getElementById("btnSignin");

btnSingin.addEventListener("click", checkCredentials);

function checkCredentials(){
    //Ici, il faudra appeler une API pour vérifier les Credentials en BDD
    if(mailInput.value == "test@mail.com" && passwordInput.value == "123"){

        alert("vous êtes connecté")
        //Il faudra récupérer le vrai token

        const token = "lkjsdngfljsqdnglkjsdbglkjqskjgkfjgbqslkfdgbskldfgdfgsdgf";
        setToken(token);


        //placer ce token en cookie
        window.location.replace("/");
    }
    else{
        mailInput.classList.add("is-invalid");
        passwordInput.classList.add("is-invalid");
    }

}

function isConnected(){
    if(getToken() == null || getToken == undefined){
        return false;
    }
    else{
        return true;
    }
}if(isConnected()){

    alert("je suis connecté");
}
else{
    alert("je ne suis pas connecté")
}



