function navbar(){
    var icon=document.getElementById('collapse');
    icon.style.display='block';
    
}
function select(){
    
    var slct=document.getElementById('select');
    var icon=document.getElementById('icon');
    if(slct.style.display=='block'){
    slct.style.display='none';
    icon.style.transform='rotateX(0deg)';
    }
    else{
    slct.style.display='block';
    icon.style.transform='rotateX(180deg)';
    }
}
function onloading(){
    document.getElementById("button").addEventListener("click", function(event){
        event.preventDefault()
      });
}
function selectopt(a){
   document.getElementById('select1').innerHTML=a;
   var slct=document.getElementById('select');
   slct.style.display='none';
   icon.style.transform='rotateX(0deg)';
}
//form validate
function validate(){
    var x=document.getElementsByClassName('forminputcontainer')[0].elements; 
    var i;
    var flag=0;
    console.log(x.length);
    var j=document.getElementsByClassName('forminputcontainer')[0].childElementCount;
    for(i=0;i<j-3;i++)
     {
         if(x[i].value=='')
         {
         flag=1;
         x[i].style.border='1px solid red';
          window.scrollTo(x[i].offsetTop,0);
         }
      }
      var e=x[2].value;
   if( e.search('@')==-1){ 
    x[2].style.border='1px solid red';
    flag=1;
    window.scrollTo(x[2].offsetTop,0);  
   }  
   if(x[2].value!=x[3].value){
    x[3].style.border='1px solid red';
    flag=1;
    window.scrollTo(x[3].offsetTop,0);                         
   }
   if(x[4].value!=x[5].value){
    x[5].style.border='1px solid red';
    flag=1;
    window.scrollTo(x[5].offsetTop,0);                         
   }
   if(x[6].value!=x[6].value){
    x[7].style.border='1px solid red';
    flag=1;
    window.scrollTo(x[7].offsetTop,0);                         
   }
      if(flag==0){
        for(i=0;i<j-3;i++)
     {
         x[i].style.border='none';
         x[i].value='';
      }
    }
}    