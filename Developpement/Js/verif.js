function surligne(champ,erreur) {
  if (erreur) {
  champ.style.background="#FF0000";
  }else {
    champ.style.background="";
  }
}
function verifNom(champ) {
  if(champ.value.length < 2 || champ.value.length > 25){
    surligne(champ, true);
    return false;
  }  else {
    surligne(champ,false);
    return true;
  }

}
