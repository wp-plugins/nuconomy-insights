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


