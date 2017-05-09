<script type='text/javascript' src='http://pro-theme.com/wordpress/ismile/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://pro-theme.com/wordpress/ismile/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='http://pro-theme.com/wordpress/ismile/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.2.6'></script>
<script type='text/javascript' src='http://pro-theme.com/wordpress/ismile/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.2.6'></script>
<script type='text/javascript' src='http://pro-theme.com/wordpress/ismile/wp-content/themes/ismiler/assets/countdown/dscountdown.min.js?ver=4.5.8'></script>
<script type='text/javascript' src='http://pro-theme.com/wordpress/ismile/wp-content/themes/ismiler/assets/bootstrap-select/bootstrap-select.min.js?ver=4.5.8'></script>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
if(htmlDiv) {
	htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
}else{
	var htmlDiv = document.createElement("div");
	htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
	document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
}
</script>

<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
if(htmlDiv) {
	htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
}else{
	var htmlDiv = document.createElement("div");
	htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
	document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
}
</script>
<script type="text/javascript">
            /******************************************
        - PREPARE PLACEHOLDER FOR SLIDER  -
        ******************************************/

        var setREVStartSize=function(){
        	try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
        		e.c = jQuery('#rev_slider_1_1');
        		e.responsiveLevels = [1240,1024,778,480];
        		e.gridwidth = [1240,1024,778,480];
        		e.gridheight = [600,600,500,400];
        		
        		e.sliderLayout = "fullwidth";
        		if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
        		
        	}catch(d){console.log("Failure at Presize of Slider:"+d)}
        };
        
        setREVStartSize();
        
        var tpj=jQuery;
        
        var revapi1;
        tpj(document).ready(function() {
        	if(tpj("#rev_slider_1_1").revolution == undefined){
        		revslider_showDoubleJqueryError("#rev_slider_1_1");
        	}else{
        		revapi1 = tpj("#rev_slider_1_1").show().revolution({
        			sliderType:"standard",
        			jsFileLocation:"//pro-theme.com/wordpress/ismile/wp-content/plugins/revslider/public/assets/js/",
        			sliderLayout:"fullwidth",
        			dottedOverlay:"none",
        			delay:9000,
        			navigation: {
        				keyboardNavigation:"off",
        				keyboard_direction: "horizontal",
        				mouseScrollNavigation:"off",
        				mouseScrollReverse:"default",
        				onHoverStop:"off",
        				touch:{
        					touchenabled:"on",
        					swipe_threshold: 75,
        					swipe_min_touches: 50,
        					swipe_direction: "horizontal",
        					drag_block_vertical: false
        				}
        				,
        				bullets: {
        					enable:true,
        					hide_onmobile:true,
        					hide_under:600,
        					style:"hermes",
        					hide_onleave:false,
        					direction:"horizontal",
        					h_align:"center",
        					v_align:"bottom",
        					h_offset:20,
        					v_offset:30,
        					space:15,
        					tmp:''
        				}
        			},
        			responsiveLevels:[1240,1024,778,480],
        			visibilityLevels:[1240,1024,778,480],
        			gridwidth:[1240,1024,778,480],
        			gridheight:[600,600,500,400],
        			lazyType:"smart",
        			parallax: {
        				type:"3D",
        				origo:"slidercenter",
        				speed:1000,
        				levels:[1,2,3,4,5,6,12,16,10,50,47,48,49,50,51,7],
        				type:"3D",
        				ddd_shadow:"off",
        				ddd_bgfreeze:"off",
        				ddd_overflow:"visible",
        				ddd_layer_overflow:"visible",
        				ddd_z_correction:65,
        				disable_onmobile:"on"
        			},
        			spinner:"off",
        			stopLoop:"off",
        			stopAfterLoops:-1,
        			stopAtSlide:-1,
        			shuffle:"off",
        			autoHeight:"off",
        			hideThumbsOnMobile:"off",
        			hideSliderAtLimit:0,
        			hideCaptionAtLimit:0,
        			hideAllCaptionAtLilmit:0,
        			debugMode:false,
        			fallbacks: {
        				simplifyAll:"off",
        				nextSlideOnWindowFocus:"off",
        				disableFocusListener:false,
        			}
        		});
        	}
        }); /*ready*/
        </script>
        <script>
        var htmlDivCss = unescape(".hermes.tp-bullets%20%7B%0A%7D%0A%0A.hermes%20.tp-bullet%20%7B%0A%20%20%20%20overflow%3Ahidden%3B%0A%20%20%20%20border-radius%3A50%25%3B%0A%20%20%20%20width%3A16px%3B%0A%20%20%20%20height%3A16px%3B%0A%20%20%20%20background-color%3A%20rgba%280%2C%200%2C%200%2C%200%29%3B%0A%20%20%20%20box-shadow%3A%20inset%200%200%200%202px%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20%20%20-webkit-transition%3A%20background%200.3s%20ease%3B%0A%20%20%20%20transition%3A%20background%200.3s%20ease%3B%0A%20%20%20%20position%3Aabsolute%3B%0A%7D%0A%0A.hermes%20.tp-bullet%3Ahover%20%7B%0A%09%20%20background-color%3A%20rgba%28226%2C%2069%2C%2069%2C%201%29%3B%0A%7D%0A.hermes%20.tp-bullet%3Aafter%20%7B%0A%20%20content%3A%20%27%20%27%3B%0A%20%20position%3A%20absolute%3B%0A%20%20bottom%3A%200%3B%0A%20%20height%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20box-shadow%3A%200%200%201px%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20-webkit-transition%3A%20height%200.3s%20ease%3B%0A%20%20transition%3A%20height%200.3s%20ease%3B%0A%7D%0A.hermes%20.tp-bullet.selected%3Aafter%20%7B%0A%20%20height%3A100%25%3B%0A%7D%0A%0A");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if(htmlDiv) {
        	htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        }
        else{
        	var htmlDiv = document.createElement('div');
        	htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
        	document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
        </script>
