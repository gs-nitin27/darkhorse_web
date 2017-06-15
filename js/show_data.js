var myDiv1 = ['a','b','c','d','e'];
  jQuery(document).ready(function() {
          
        jQuery("#rev_slider_280_1").show().revolution({
          sliderType: "hero",
          jsFileLocation: "revo-slider/js/",
          sliderLayout: "fullscreen",
          dottedOverlay: "none",
          delay: 9000,
          /*navigation: {},*/
          responsiveLevels: [1240, 1024, 778, 480],
          visibilityLevels: [1240, 1024, 778, 480],
          gridwidth: [1240, 1024, 778, 480],
          gridheight: [868, 768, 960, 720],
          lazyType: "none",
          parallax: {
            type: "off",
            origo: "slidercenter",
            speed: 1000,
            levels: [0],
            type: "scroll",
            disable_onmobile: "on"
          },
          shadow: 0,
          spinner: "spinner2",
          autoHeight: "off",
          fullScreenAutoWidth: "off",
          fullScreenAlignForce: "off",
          fullScreenOffsetContainer: "",
          fullScreenOffset: "",
          disableProgressBar: "on",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            disableFocusListener: false,
          }
        });
 
// var myDiv = $('.fq');
// myDiv.text(myDiv.text().substring(0,180) + ' [...]')
 

var cstyle = '';
var dataDiv = [];
i = 0;
myDiv1.forEach(function(myDiv1){
cstyle = $('.'+myDiv1+'');
title =  $('#'+i+'').parent().find('h3').text();
dataDiv[i] = title+'|'+cstyle.text(); 
//dataDiv[i] = cstyle.text(); 
cstyle.text(cstyle.text().substring(0,180) + ' [...]');
i++;

});

localStorage.setItem("obj", JSON.stringify(dataDiv));



}); 




var data3 = '';
knowMore = function(id){

window.open('icon_detail.html?n='+id+'');
 
}

 showData = function(){
  var data1=[];
  var data = localStorage.getItem('obj');
  var results = (window.location.href); 
  var url = new URL(results);
  var c = url.searchParams.get("n");
  
  data = JSON.parse(data);
  
  //alert(data);


var text1  = data[c].split("|");

var topic=text1[0];
var details=text1[1];




$("#topic").html(topic);
$("#detail").html(details);

  
 

 }
