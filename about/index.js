function loaderDone(){
    document.getElementById('loaderDiv').style.display='none';
    document.getElementById('bdy').style.visibility='visible';
}

window.addEventListener('load',loaderDone);