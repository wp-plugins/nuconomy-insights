function hasNucRSSCookie(c_name)
{
  if (document.cookie.length>0)
  {
    c_start=document.cookie.indexOf(c_name + "=");
    if (c_start!=-1)
    {
      document.cookie = c_name + "=; expires=Fri, 13 Jul 2001 05:28:21 UTC; path=/";
      return true;
    }
  }
  return false;
}

function fastswfembed(src,width,height,index) {
  swfobject.embedSWF(src+'&enablejsapi=1&playerapiid=player'+index,
                     'nuconyt'+index,
                     width,
                     height,
                     "8",
                     null,
                     null, 
                     { allowScriptAccess: "always" },
                     { id: 'player'+index}
                     );
}
