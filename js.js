
form=document.querySelector('form');
erreur=document.querySelector('#envoye');

afficheMessage=document.querySelector('#affichageMessage');

form.addEventListener('submit',function(e){
   e.preventDefault();

   let xhr = new XMLHttpRequest();
    xhr.addEventListener('readystatechange',function(e){
        console.log(xhr.readyState);
        if(xhr.readyState == 4 && xhr.status == 200){
            data = JSON.parse(xhr.responseText);
            
            
            message=document.createElement('p');
            message.innerHTML=data.pseudo+ " dit: "+data.message;
            afficheMessage.prepend(message);
            console.log(message);

            /*message=document.createElement('p');
            message.innerHTML='coucou';
            afficheMessage.appendChild(message);*/

            //console.log(data);
        }
       
    });
    
    let formData=new FormData(form);
    xhr.open('POST', form.getAttribute('action'),true);
    xhr.setRequestHeader('X-Requested-With','xmlhttprequest');
    //xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send(formData);
});

