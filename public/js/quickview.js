$(document).ready(function(){$.getScript("//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js").done(function(){quickView()})});function quickView(){$(document.body).on("click",".quick-view",function(){$("#quick-view").length==0&&$(document.body).append('<div id="quick-view"></div>');var d=$(this).data("handle");$("#quick-view").addClass(d),jQuery.getJSON("/products/"+d+".js",function(e){var c=e.title,l=e.type,t=e.vendor,s=0,v=e.sku,o=0,u=e.description,n=e.images,h=e.variants,f=e.options,q="/products/"+d;$(".qv-product-title").text(c),$(".qv-product-type").text(l),e.type.length==0&&$(".qv-product-type-title").hide(),$(".qv-view-vendor").text(t),e.vendor.length==0&&$(".qv-view-vendor-title").hide(),$(".qv-product-description").html(u),$(e.variants).each(function(r,i){i.sku!=null?($(".qv-sku").addClass("show").removeClass("hide"),$(".qv-view-sku").text(e.variants[0].sku)):$(".qv-sku").addClass("hide").removeClass("show")}),$(".view-product").attr("href",q);var g=$(n).length;$(n).each(function(r,i){var a='<div><img src="'+i+'"></div>';a=a.replace(".jpg","_1000x.jpg").replace(".png","_1000x.png"),$(".qv-product-images").append(a);var a='<div class="images-variant" style="display:inline-block;"><img src="'+i+'" fid="'+r+'"></div>';a=a.replace(".jpg","_1000x.jpg").replace(".png","_1000x.png"),$(".qv-product-images-variant").append(a)}),$(".qv-product-images").slick({dots:!1,arrows:!0,respondTo:"min"}).css("opacity","1"),$(".qv-product-images-variant").slick({slidesToShow:3,slidesToScroll:1,infinite:!0,dots:!1,arrows:!0}).css("opacity","1"),$(f).each(function(r,i){var a=i.name,m=".option."+a.toLowerCase();$(".qv-product-options").append('<div class="option-selection-'+a.toLowerCase()+'"><span class="option">'+a+'</span><select class="field__input option-'+r+" option "+a.toLowerCase()+'"></select></div>'),$(i.values).each(function(w,p){$(".option."+a.toLowerCase()).append('<option value="'+p+'">'+p+"</option>")})}),$(document).on("click","#quick-view .images-variant img",function(){var r=$(this).attr("fid");jQuery.getJSON("/products/"+d+".js",function(i){$(n).each(function(a,m){a==r&&$(".qv-product-images").slick("slickGoTo",a)})})}),$(e.variants).each(function(r,i){return i.available==!1?($(".qv-add-button").prop("disabled",!0).val("Sold Out"),s=parseFloat(i.price/100).toFixed(2),o=parseFloat(i.compare_at_price/100).toFixed(2),$(".qv-product-price").text(s),o>0?$(".qv-product-original-price").text(o).show():$(".original-price").hide(),!0):($(".qv-add-button").prop("disabled",!1).val("Add to Cart"),s=parseFloat(i.price/100).toFixed(2),o=parseFloat(i.compare_at_price/100).toFixed(2),$(".qv-product-price").text(s),o>0?$(".qv-product-original-price").text(o).show():$(".original-price").hide(),$("select.option-0").val(i.option1),$("select.option-1").val(i.option2),$("select.option-2").val(i.option3),!1)})}),$(document).on("change","#quick-view select",function(){var e="";$("#quick-view select").each(function(c){e==""?e=$(this).val():e=e+" / "+$(this).val()}),jQuery.getJSON("/products/"+d+".js",function(c){$(c.variants).each(function(l,t){if(t.title==e){if(t.featured_image!==null){var s=t.featured_image.position-1;$(".qv-product-images").slick("slickGoTo",s)}var v=parseFloat(t.price/100).toFixed(2),o=parseFloat(t.compare_at_price/100).toFixed(2),u=t.inventory_quantity,n=t.inventory_management;$(".qv-product-price").text(v),$(".qv-product-original-price").text(o),t.sku!=null?($(".qv-sku").addClass("show").removeClass("hide"),$(".qv-view-sku").text(t.sku)):$(".qv-sku").addClass("hide").removeClass("show"),t.available==!1?$(".qv-add-button").prop("disabled",!0).val("Sold Out"):$(".qv-add-button").prop("disabled",!1).val("Add to Cart")}})})}),$.fancybox({href:"#quick-view",maxWidth:1e3,maxHeight:680,fitToView:!0,width:"80%",height:"88%",autoSize:!1,openEffect:"none",closeEffect:"none",beforeLoad:function(){var e=$("#quick-view").attr("class");$(document).on("click",".qv-add-button",function(){var c=$(".qv-quantity").val(),l="",t="",s="";$("#quick-view select").each(function(o){t==""?t=$(this).val():t=t+" / "+$(this).val()}),$.getJSON("/products/"+e+".js",function(o){$(o.variants).each(function(u,n){n.title==t&&(s=n.id,l=n.title,v())})});function v(){$.post("/cart/add.js",{quantity:c,id:s},null,"json").done(function(){$(".cart-content").addClass("active"),$(".overlay").addClass("overlay_active"),$("#loader").addClass("loader"),setTimeout(function(){$("#loader").removeClass("loader")},1e3),$("#cart_reload").load("#cart_reload .cart_content > *"),$(".cart-count-bubble").load(" .cart-count-bubble > *"),$(".qv-add-to-cart-response").addClass("success").html('<span class="msg">&#128522; Product added to cart successfully</span>'),$(".qv-add-to-cart-response .msg").delay(3e3).fadeTo(1e3,0),$(".qv-add-to-cart-response").removeClass("error"),$.fancybox.close()})}}),$(".fancybox-wrap").css("overflow","hidden !important")},afterShow:function(){$("#quick-view").hide().html(content).css("opacity","1").fadeIn(function(){$(".qv-product-images").addClass("loaded")})},afterClose:function(){$("#quick-view").removeClass().empty()}})})}$(window).resize(function(){$("#quick-view").is(":visible")&&$(".qv-product-images").slick("setPosition")});