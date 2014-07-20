/***********************************************************************************
*	(c) Ger Versluis 2000 version 5.411 24 December 2001 (updated Jan 31st, 2003 by Dynamic Drive for Opera7)
*	For info write to menus@burmees.nl		          *
*	You may remove all comments for faster loading	          *		
***********************************************************************************/

	var NoOffFirstLineMenus=6;			// Number of first level items
	var LowBgColor='';			// Background color when mouse is not over
	var LowSubBgColor='#00B0F9';	// Background color when mouse is not over on subs
	var HighBgColor='';		// Background color when mouse is over
	var HighSubBgColor='#E7670E';		// Background color when mouse is over on subs
	var FontLowColor='#FFFFFF';			// Font color when mouse is not over
	var FontSubLowColor='#000000';		// Font color subs when mouse is not over
	var FontHighColor='#000000';			// Font color when mouse is over
	var FontSubHighColor='#FFFFFF';			// Font color subs when mouse is over
	var BorderColor='';			// Border color
	var BorderSubColor='white';			// Border color for subs
	var BorderWidth=1;				// Border width
	var BorderBtwnElmnts=1;			// Border between elements 1 or 0
	var FontFamily="arial,comic sans ms,technical"	// Font family menu items
	var FontSize=9;				// Font size menu items
	var FontBold=1;				// Bold menu items 1 or 0
	var FontItalic=0;				// Italic menu items 1 or 0
	var MenuTextCentered='left';              // Item text position 'left', 'center' or 'right'
	var MenuCentered='center';			// Menu horizontal position 'left', 'center' or 'right'
	var MenuVerticalCentered='top';	// Menu vertical position 'top', 'middle','bottom' or static
	var ChildOverlap=.10;			// horizontal overlap child/ parent
	var ChildVerticalOverlap=.2;			// vertical overlap child/ parent
	var StartTop=198;				// Menu offset x coordinate
	var StartLeft=0;				// Menu offset y coordinate
	var VerCorrect=0;				// Multiple frames y correction
	var HorCorrect=0;				// Multiple frames x correction
	var LeftPaddng=5;				// Left padding
	var TopPaddng=2;				// Top padding
	var FirstLineHorizontal=1;	// SET TO 1 FOR HORIZONTAL MENU, 0 FOR VERTICAL
	var MenuFramesVertical=1;			// Frames in cols or rows 1 or 0
	var DissapearDelay=1000;			// delay before menu folds in
	var TakeOverBgColor=1;	// Menu frame takes over background color subitem frame
	var FirstLineFrame='navig';			// Frame where first level appears
	var SecLineFrame='space';			// Frame where sub levels appear
	var DocTargetFrame='space';			// Frame where target documents appear
	var TargetLoc='';				// span id for relative positioning
	var HideTop=0;		// Hide first level when loading new document 1 or 0
	var MenuWrap=1;				// enables/ disables menu wrap 1 or 0
	var RightToLeft=0;				// enables/ disables right to left unfold 1 or 0
	var UnfoldsOnClick=0;			// Level 1 unfolds onclick/ onmouseover
	var WebMasterCheck=0;			// menu tree checking on or off 1 or 0
	var ShowArrow=1;				// Uses arrow gifs when 1
	var KeepHilite=1;				// Keep selected path highligthed
	var Arrws=['tri.gif',5,10,'tridown.gif',5,5,'trileft.gif',5,10];	// Arrow source, width and height

function BeforeStart(){return}
function AfterBuild(){return}
function BeforeFirstOpen(){return}
function AfterCloseAll(){return}


// Menu tree
//	MenuX=new Array(Text to show, Link, background image (optional), number of sub elements, height, width);
//	For rollover images set "Text to show" to:  "rollover:Image1.jpg:Image2.jpg"

Menu1=new Array("Home","index.htm","",0,20,80);

Menu2=new Array("Company Info","company.htm","",0,20,120);
	Menu2_1=new Array("Introduction","introduction.htm","",0,20,82);
	
Menu3=new Array("Products","products.htm","",6,22,100);
	Menu3_1=new Array("Teak Deckings","","",5,20,170);
		Menu3_1_1=new Array("Flexidecks Panels","flexidecks.htm","",0,20,180);
		Menu3_1_2=new Array("Prefabricated Teak Deckings ","prefabricated.htm","",0,20,140);
		Menu3_1_3=new Array("Decking Veneer","decking.htm","",0,20,140);
		Menu3_1_4=new Array("Mini Decking and Margins","mini.htm","",0,20,140);
		Menu3_1_5=new Array("Lumber","lumber.htm","",0,20,140);
		
	Menu3_2=new Array("Marine Plywood","light.htm","",1,20,150);
		Menu3_2_1=new Array("Light weight plywood","light.htm","",0,20,155);
		Menu3_2_2=new Array("Premium Grade Plywood","premium.htm","",0,20,90);
		Menu3_2_3=new Array("Architectual Grade Plywood","architectual.htm","",0,20,90);

	Menu3_3=new Array("Speciality Plywood","#","",4,20,150);
		Menu3_3_1=new Array("Teak Mahagony Plywood","teak_mp.htm","",0,20,150);
		Menu3_3_2=new Array("Holly Teak","holly_teak.htm","",0,20,90);
		Menu3_3_3=new Array("Flexiply","flexiply.htm","",0,20,90);
		Menu3_3_4=new Array("Sandwitch Plywood","sandwitch_p.htm","",0,20,90);

	Menu3_4=new Array("Solid Wood Panel Doors","solid_wpd.htm","",0,20,90);
	Menu3_5=new Array("PVC Molded Designer Doors","pvc_molded.htm","",0,20,90);
	Menu3_6=new Array("3DMembran Designer Doors","kitchen_s.htm","",0,20,90);

Menu4=new Array("Facilites","facilities.htm","",0,22,90);

Menu5=new Array("Job Careers","job_careers.htm","",0,22,110);

Menu6=new Array("Contact Us","contact.htm","",0,22,100);
