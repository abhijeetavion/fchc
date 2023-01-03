
var btn=document.getElementsByClassName('first')[0];
btn.addEventListener('click', function() {
    // alert('Hii');
     var ele=document.getElementsByName('opportunity[]');  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  
}, false);    

// var btn = document.getElementById('button1');

// btn.addEventListener('click', function() {
//     var participant=document.getElementById('particname')
//     var myEl = document.getElementById('add-partic').value;
//     var rel = document.getElementById('relatn').value;
//     document.getElementById('particname').append(myEl+ ' - ' + rel);
//     document.getElementById('add-partic').value='';
//     alert(myEl + rel);
// }, false);


document.getElementsByClassName('wpcf7-submit')[0].value = 'SUBMIT';            