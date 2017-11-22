function getCookie(name){
   var cookie = " " + document.cookie;
   var search = " " + name + "=";
   var setStr = null;
   var offset = 0;
   var end = 0;
   if (cookie.length > 0){
      offset = cookie.indexOf(search);
      if (offset != -1){
         offset += search.length;
         end = cookie.indexOf(";", offset);
         if (end == -1){
            end = cookie.length;
         }
         setStr = unescape(cookie.substring(offset, end));
      }
   }
   return(setStr);
}
var forcemain = getCookie('forcemain');
if (forcemain == null || forcemain != 'yes') {
   if(navigator.userAgent.match(/iphone/i))
   { 
   //Iphone 
   location.replace("http://m.dojki.com"); 
   }
   else if(navigator.userAgent.match(/ipod/i))
   { 
   //Ipod 
   location.replace("http://m.dojki.com"); 
   }
   else if(navigator.userAgent.match(/ipad/i))
   { 
      //Ipad 
      location.replace("http://ipad.dojki.com"); 
   }
   else if(navigator.userAgent.match(/android/i))
   { 
   //Android 
   location.replace("http://m.dojki.com"); 
   }
   else if(navigator.userAgent.match(/sgh/i))
   { 
   //Samsung 
   location.replace("http://m.dojki.com"); 
   }
   else if(navigator.userAgent.match(/sonyericsson/i))
   { 
   //Sony Ericsson 
   location.replace("http://m.dojki.com"); 
   }
   else if(navigator.userAgent.match(/psp/i))
   { 
   //Playstation Portable 
   location.replace("http://m.dojki.com"); 
   }
   else if(navigator.userAgent.match(/mot/i))
   { 
   //Motorolla 
   location.replace("http://m.dojki.com"); 
   }
   else if(navigator.userAgent.match(/htc/i))
   { 
   //HTC 
   location.replace("http://m.dojki.com"); 
   }
   else if(navigator.userAgent.match(/lg/i))
   { 
   //LG 
   location.replace("http://m.dojki.com"); 
   }

   else if(navigator.userAgent.match(/opera mini/i))
   { 
   //Opera mini 
   location.replace("http://m.dojki.com"); 
   }
   else if(navigator.userAgent.match(/blackberry/i))
   { 
   //BlackBerry 
   location.replace("http://m.dojki.com"); 
   }
   else if(navigator.userAgent.match(/nokia/i))
   { 
   //Nokia 
   location.replace("http://m.dojki.com"); 
   }
   else if(navigator.userAgent.match(/palm/i))
   { 
   //PALM 
   location.replace("http://m.dojki.com"); 
   }
   else if(navigator.userAgent.match(/ipaq/i))
   { 
   //iPAQ 
   location.replace("http://m.dojki.com"); 
   }

   else if(navigator.userAgent.match(/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|vodafone|o2|pocket|kindle|mobile|pda|treo|windows ce)/i))
   { 
   //Other Device 
   location.replace("http://m.dojki.com"); 
   }
}
