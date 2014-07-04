//LMSOFT Web Creator Pro, Version:6.0.0.8
//LMSOFT Kernel 90

var projectroot="./";
InitResources2('es');
var LMObjects = new Array();
var objindex=0;
var fontbase=96.;
//---------------------------------------------------------------------------------------------
try {
if(isValideBrowser(7.00,5.00)) {
//---------------------------------------------------------------------------------------------
LMObjects[objindex++] = LMDiv("Page",1,0,0,null,0,null,null,null,null,0);
defpagewitdh=960;
LMObjects[objindex++] = LMImage("Img1",1,1,0,null,0,null,null,null,null,0);
if(is.ns) Img1=FindTagFromId('Img1');
LMObjects[objindex++] = LMImage("Img2",1,1,0,null,0,null,null,null,null,0);
if(is.ns) Img2=FindTagFromId('Img2');
LMObjects[objindex++] = LMDiv("Panel1",1,1,0,null,0,null,null,null,null,0);
LMObjects[objindex++] = LMDiv("Panel2",1,1,0,null,0,null,null,null,null,0);
var Photos=new Array();
Photos[0]= new Photo("./photos/aji de gallina_thumb.jpg","./photos/aji de gallina.jpg",1600,1201,"Ají de Galleina del Norte",null);
Photos[1]= new Photo("./photos/aji-de-gallina_thumb.jpg","./photos/aji-de-gallina.jpg",1600,1025,"Ají de Gallina de Centro",null);
Photos[2]= new Photo("./photos/arroz chaufa_thumb.jpg","./photos/arroz chaufa.jpg",1600,900,"Arroz Chaufa",null);
Photos[3]= new Photo("./photos/cc7_thumb.jpg","./photos/cc7.jpg",1600,1204,"Pollo Asado con Papas",null);
Photos[4]= new Photo("./photos/ceviche 3_thumb.jpg","./photos/ceviche 3.jpg",1600,1067,"Ceviche de Pescado del Sur",null);
Photos[5]= new Photo("./photos/ceviche_thumb.jpg","./photos/ceviche.jpg",1600,1198,"Ceviche de Pescado del Norte",null);
Photos[6]= new Photo("./photos/ceviche-2_thumb.jpg","./photos/ceviche-2.jpg",1600,1157,"Ceviche de Pescado del Centro",null);
Photos[7]= new Photo("./photos/Chuletas_thumb.jpg","./photos/Chuletas.jpg",1600,1200,"Chuletas Vetadas",null);
Photos[8]= new Photo("./photos/lomo saltado_thumb.jpg","./photos/lomo saltado.jpg",1600,1200,"Lomo Saltado",null);
Photos[9]= new Photo("./photos/seco de cordero_thumb.jpg","./photos/seco de cordero.jpg",1600,1200,"Seco de Cordero",null);
Photos[10]= new Photo("./photos/SECO DE PATO CON FREJOLES_thumb.jpg","./photos/SECO DE PATO CON FREJOLES.jpg",0,0,"Seco de Pato",null);
Photos[11]= new Photo("./photos/tallarin-pollo_thumb.jpg","./photos/tallarin-pollo.jpg",1600,1200,"Tallarin Saltado",null);
LMObjects[objindex++] = LMGal("Gal1",1,1,0,0,Photos,4000,"Slide", "./", 229, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1);
LMObjects[objindex++] = LMDiv("Panel5",1,1,0,null,0,null,null,null,null,0);
branchlist = new Array();
LMObjects[objindex++] = LMText("Text1",1,1,0,null,0,null,branchlist,null,null);
branchlist = new Array();
LMObjects[objindex++] = LMText("Text6",1,1,0,null,0,null,branchlist,null,null);
LMObjects[objindex++] = LMDiv("Panel3",1,1,0,null,0,null,null,null,null,0);
branchlist = new Array();
LMObjects[objindex++] = LMText("Text4",1,1,0,null,0,null,branchlist,null,null);
LMObjects[objindex++] = LMObjWeb("GoogleTranslate1",1,1,1000,null,0,null,null,null,null,0);
LMObjects[objindex++] = LMObjWeb("Contador1",1,1,0,null,0,null,null,null,null,0);
LMObjects[objindex++] = LMImage("Img3",1,1,0,null,0,null,null,null,null,0);
if(is.ns) Img3=FindTagFromId('Img3');
LMObjects[objindex++] = LMDiv("Panel6",1,1,0,null,0,null,null,null,null,0);
menusystemmodel001Show("Menu1");
LMObjects[objindex++] = LMDiv("Panel7",1,1,0,null,0,null,null,null,null,0);
LMObjects[objindex++] = LMGoogleMap("GoogleMap1",1,1,0,null,0,null,null,null,null,0);
InitGoogleMap('GoogleMap1',-33.5338207,-70.60692369999998,-33.53432151367694,-70.60726702275389,15,'Americo Vespucio 8660, La Florida, Santiago chile');
branchlist = new Array();
branchlist[0] = new LMBranchEx("1","./images/menu.jpg",null,0.0,null,"NULL",1,1,1,1,1,1,0,640,480,"_top");
LMObjects[objindex++] = LMText("Text3",1,1,0,EffectDissolve,0,null,branchlist,null,null);
LMObjects[objindex++] = LMVideoSound("Snd1",1,1,0,null,0,null,null,null,null,0,false,'VideoFlash');
LMObjects[objindex++] = LMVideoSound("Video1",1,1,0,null,0,null,null,null,null,0,false,'VideoFlash');
LMObjects[objindex++] = LMObjWeb("WebObj1",1,1,0,null,0,null,null,null,null,0);
//---------------------------------------------------------------------------------------------
}
}catch(e) {
alert(e.message);
}
SetBaseColor(0x3ef,0x3f4,0x80);
LMObjectAnimate();

