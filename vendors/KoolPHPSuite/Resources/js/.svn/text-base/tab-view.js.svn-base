// Copyright (C) 2005-2008 Ilya S. Lyubinskiy. All rights reserved.
// Technical support: http://www.php-development.ru/
//
// YOU MAY NOT
// (1) Remove or modify this copyright notice.
// (2) Re-distribute this code or any part of it.
//     Instead, you may link to the homepage of this code:
//     http://www.php-development.ru/javascripts/tab-view.php
//
// YOU MAY
// (1) Use this code on your website.
// (2) Use this code as part of another product.
//
// NO WARRANTY
// This code is provided "as is" without warranty of any kind.
// You expressly acknowledge and agree that use of this code is at your own risk.


// ***** Auxiliary *************************************************************

function tabview_aux(TabViewId, CurrentId)
{
  var TabView = document.getElementById(TabViewId);

  // ***** Tabs *****

  var Tabs = TabView.firstChild;
  while (Tabs.className != "Tabs") Tabs = Tabs.nextSibling;
  var Tab  = Tabs   .firstChild;
  var i    = 0;

  do
  {
    if (Tab.tagName == "A")
    {
      i++;
      Tab.href         = "javascript:tabview_switch('"+TabViewId+"', "+i+");";
      Tab.className    = (i == CurrentId) ? "Current" : "";
      Tab.blur();
    }
  }
  while (Tab = Tab.nextSibling);

  // ***** Pages *****

  var Pages = TabView.firstChild;
  while (Pages.className != 'Pages') Pages = Pages.nextSibling;
  var Page  = Pages  .firstChild;
  var i     = 0;

  do
  {
    if (Page.className == 'Page')
    {
      i++;
      if (Pages.offsetHeight) Page.style.height = (Pages.offsetHeight-2)+"px";
      Page.style.display  = (i == CurrentId) ? 'block' : 'none';
    }
  }
  while (Page = Page.nextSibling);
}


// ***** Tab View **************************************************************

function tabview_switch(TabViewId, id) { tabview_aux(TabViewId, id); }
function tabview_initialize(TabViewId) { tabview_aux(TabViewId,  1); }