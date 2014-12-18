<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Unbenanntes Dokument</title>
<script src="/mimes/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="/mimes/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="/mimes/SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<script src="/mimes/SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="/mimes/SpryAssets/SpryTooltip.js" type="text/javascript"></script>
<link href="/mimes/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="/mimes/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<link href="/mimes/SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<link href="/mimes/SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<link href="/mimes/SpryAssets/SpryTooltip.css" rel="stylesheet" type="text/css" />
</head>

<body>
<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a class="MenuBarItemSubmenu" href="#">Element 1</a>
    <ul>
      <li><a href="#">Element 1.1</a></li>
      <li><a href="#">Element 1.2</a></li>
      <li><a href="#">Element 1.3</a></li>
    </ul>
  </li>
  <li><a href="#">Element 2</a></li>
  <li><a class="MenuBarItemSubmenu" href="#">Element 3</a>
    <ul>
      <li><a class="MenuBarItemSubmenu" href="#">Element 3.1</a>
        <ul>
          <li><a href="#">Element 3.1.1</a></li>
          <li><a href="#">Element 3.1.2</a></li>
        </ul>
      </li>
      <li><a href="#">Element 3.2</a></li>
      <li><a href="#">Element 3.3</a></li>
    </ul>
  </li>
  <li><a href="#">Element 4</a></li>
</ul>
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">Registerkarte 1</li>
    <li class="TabbedPanelsTab" tabindex="0">Registerkarte 2</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">Inhalt 1</div>
    <div class="TabbedPanelsContent">Inhalt 2</div>
  </div>
</div>
<div id="Accordion1" class="Accordion" tabindex="0">
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Accordion1</div>
    <div class="AccordionPanelContent">Inhalt 1</div>
  </div>
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">Accordion2</div>
    <div class="AccordionPanelContent">Inhalt 2</div>
  </div>
</div>
<div id="CollapsiblePanel1" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="0">Registerkarte</div>
  <div class="CollapsiblePanelContent">Inhalt</div>
  <div class="CollapsiblePanelTab" tabindex="0">Registerkarte</div>
  <div class="CollapsiblePanelContent">Inhalt2</div>
</div>
<div class="tooltipContent" id="sprytooltip1">QuickInfo-Inhalt hier einfügen</div>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"/SpryAssets/SpryMenuBarDownHover.gif", imgRight:"/SpryAssets/SpryMenuBarRightHover.gif"});
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
var sprytooltip1 = new Spry.Widget.Tooltip("sprytooltip1", "#CollapsiblePanel1");
//-->
</script>
</body>
</html>