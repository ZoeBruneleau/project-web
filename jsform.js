function val(){
    var p = document.coach.nom.value;
    var n = document.coach.nom.value;
    var m = document.coach.mail.value;
    var mdp = document.coach.mdp1.value;
    var mdp2 = document.coach.mdp2.value;
    
    
    if(n==""){
     alert("Veuillez renseigner votre nom");
     document.coach.nom.focus();
     return false
     }
    else if(p==""){
     document.coach.prenom.focus();
     alert("Veuillez renseigner votre prénom");
     return false
     
    }
    var placealt=m.indexOf("@");
    var placepoint=m.indexOf(".",placealt+1);
    if(placealt==-1 && placepoint==-1){
     alert("Veuillez entrer un email valide");
     document.coach.mail.focus();
     }
     
    if ((mdp=="")||(mdp2=="")){
        alert("Veuillez entrer un mdp");
    }
    if(mdp!=mdp2){
    alert ("Veuillez entrer les 2 meme mot de passe");
    }
}