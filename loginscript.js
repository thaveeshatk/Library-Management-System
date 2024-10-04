document.getElementById('newaccount').addEventListener('click',function(){
    document.getElementById('logincontainer').style.display='none';
    document.getElementById('registercontainer').style.display='block';
})

document.getElementById('loginlink').addEventListener('click',function(){
    document.getElementById('registercontainer').style.display='none';
    document.getElementById('logincontainer').style.display='block'
})
