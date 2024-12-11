const username = document.getElementById("username");
const password = document.getElementById("password");
const btnsignin = document.getElementById("btnSignin");

btnsignin.addEventListener("click", checkCredentials);

function checkCredentials() {
    // ici il faudra appeler l'api

    if(username.value == "administrateur@arcadia.fr" && password.value == "admin") {
        
        
        //Il faudra recup le vrai token
        const token = "Token mis en place dans js en connexion vituelle je suis l'administrateur"
        setToken(token);
        // place ce token en cookie

        setCookie(RoleCookieName, "admin", 7);
        window.location.replace("/pages/admin.php");
    }

    if(username.value == "veterinaire@arcadia.fr" && password.value == "veto") {
        
        
        //Il faudra recup le vrai token
        const token = "Token mis en place dans js en connexion vituelle je suis le veterinaire"
        setToken(token);
        // place ce token en cookie

        setCookie(RoleCookieName, "veterinaire", 7);
        window.location.replace("/pages/sante.php");
    }

    if(username.value == "employe@arcadia.fr" && password.value == "empl") {
        
        
        //Il faudra recup le vrai token
        const token = "Token mis en place dans js en connexion vituelle je suis l'employe"
        setToken(token);
        // place ce token en cookie

        setCookie(RoleCookieName, "employe", 7);
        window.location.replace("/pages/employe.php");
    }

    else {
        username.classList.add("is-invalid");
        mdp.classList.add("is-invalid");
    }


if(username.value == "administrateur" && password.value == "admin2025") {
        
        
    //Il faudra recup le vrai token
    const token = "Token mis en place dans js en connexion vituelle je suis l'administrateur"
    setToken(token);
    // place ce token en cookie

    setCookie(RoleCookieName, "admin", 7);
    window.location.replace("/pages/admin.php");
}

if(username.value == "veterinaire1" && password.value == "V1-2025") {
    
    
    //Il faudra recup le vrai token
    const token = "Token mis en place dans js en connexion vituelle je suis le veterinaire"
    setToken(token);
    // place ce token en cookie

    setCookie(RoleCookieName, "veterinaire1", 7);
    window.location.replace("/pages/sante.php");
}

if(username.value == "veterinair2" && password.value == "V2-2025") {
    
    
    //Il faudra recup le vrai token
    const token = "Token mis en place dans js en connexion vituelle je suis le veterinaire"
    setToken(token);
    // place ce token en cookie

    setCookie(RoleCookieName, "veterinaire2", 7);
    window.location.replace("/pages/sante.php");
}

if(username.value == "veterinaire3" && password.value == "V3-2025") {
    
    
    //Il faudra recup le vrai token
    const token = "Token mis en place dans js en connexion vituelle je suis le veterinaire"
    setToken(token);
    // place ce token en cookie

    setCookie(RoleCookieName, "veterinaire3", 7);
    window.location.replace("/pages/sante.php");
}

if(username.value == "employe1" && password.value == "E1-2025") {
    
    
    //Il faudra recup le vrai token
    const token = "Token mis en place dans js en connexion vituelle je suis l'employe"
    setToken(token);
    // place ce token en cookie

    setCookie(RoleCookieName, "employe1", 7);
    window.location.replace("/pages/employe.php");
}

if(username.value == "employe2" && password.value == "E2-2025") {
    
    
    //Il faudra recup le vrai token
    const token = "Token mis en place dans js en connexion vituelle je suis l'employe"
    setToken(token);
    // place ce token en cookie

    setCookie(RoleCookieName, "employe2", 7);
    window.location.replace("/pages/employe.php");
}

if(username.value == "employe3" && password.value == "E3-2025") {
    
    
    //Il faudra recup le vrai token
    const token = "Token mis en place dans js en connexion vituelle je suis l'employe"
    setToken(token);
    // place ce token en cookie

    setCookie(RoleCookieName, "employe3", 7);
    window.location.replace("/pages/employe.php");
}

else {
    username.classList.add("is-invalid");
    password.classList.add("is-invalid");
}
}