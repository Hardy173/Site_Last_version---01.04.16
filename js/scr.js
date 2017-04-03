function Slider(width_li,margin_right_li,col_view_img){
            var step=width_li+margin_right_li,
                slider_box_with=col_view_img*step-margin_right_li,
                $col_img=$("#slider_box>ul>li").length,
                col_main_left=0,
                max_col_main_left=$col_img*step;
            $("#slider_box").width(slider_box_with);
            $("#slider_box>ul>li").width(width_li).css("margin-right",margin_right_li);
            $("#left_nav").click(function(){
                if(-col_main_left==max_col_main_left-col_view_img*step){
                    col_main_left=0;
                } else{
                    col_main_left=col_main_left-5*step;
                }
                $("#slider_box>ul").css("margin-left",col_main_left+"px");
            });
            $("#right_nav").click(function(){
                if(col_main_left==0){
                    col_main_left=-max_col_main_left+col_view_img*step;
                } else{
                    col_main_left=col_main_left+5*step;
                }
                $("#slider_box>ul").css("margin-left",col_main_left+"px");
            });
        }
        $(Slider(160,68,5));
		
		 
		
		function Slider1(height_li,margin_buttom_li,col_view_img){
            var step1=height_li+margin_buttom_li,
                slider_box_with=col_view_img*step1-margin_buttom_li,
                $col_img=$("#slider_box1>ul>li").length,
                col_main_top=0,
                max_col_main_top=$col_img*step1;
            $("#slider_box1").height(slider_box_with);
            $("#slider_box1>ul>li").height(height_li).css("margin-buttom",margin_buttom_li);
            $("#left_nav").click(function(){
                if(-col_main_top==max_col_main_top-col_view_img*step1){
                    col_main_top=0;
                } else{
                    col_main_top=col_main_top-5*step1;
                }
                $("#slider_box1>ul").css("margin-top",col_main_top+"px");
            });
            $("#right_nav").click(function(){
                if(col_main_top==0){
                    col_main_top=-max_col_main_top+col_view_img*step1;
                } else{
                    col_main_top=col_main_top+5*step1;
                }
                $("#slider_box1>ul").css("margin-top",col_main_top+"px");
            });
        }
        $(Slider1(90,20,5));
		
		function Slider2(height_li,margin_buttom_li,col_view_img){
            var step2=height_li+margin_buttom_li,
                slider_box_with=col_view_img*step2-margin_buttom_li,
                $col_img=$("#slider_box2>ul>li").length,
                col_main_top=0,
                max_col_main_top=$col_img*step2;
            $("#slider_box2").height(slider_box_with);
            $("#slider_box2>ul>li").height(height_li).css("margin-buttom",margin_buttom_li);
            $("#right_nav").click(function(){
                if(-col_main_top==max_col_main_top-col_view_img*step2){
                    col_main_top=0;
                } else{
                    col_main_top=col_main_top-5*step2;
                }
                $("#slider_box2>ul").css("margin-top",col_main_top+"px");
            });
            $("#left_nav").click(function(){
                if(col_main_top==0){
                    col_main_top=-max_col_main_top+col_view_img*step2;
                } else{
                    col_main_top=col_main_top+5*step2;
                }
                $("#slider_box2>ul").css("margin-top",col_main_top+"px");
            });
        }
        $(Slider2(90,20,5));
		
		/*********************************************************************************/
		
		//$(document).ready(function() { // Ждём загрузки страницы

  /*  $(function(){

    $('.img').hover(function(){

      $(this).children('img').stop().animate({width:"250px",height:"274px"}, 400);

    }, function(){ $(this).children('img').stop().animate({width:"150px",height:"100px"}, 400); });

  });*/
		
		
		$(document).ready(function(){
				$(".image1").click(function(){
					$(this).clone()               // сделаем копию элемента hello
					.addClass("newElement")         // добавим этой копии класс newElement
					.appendTo(".col-xs-4")
					.css({marginTop:'50px', width:"0px", height:"0px"})
					/*.addClass("newElement1")*/
					.animate({marginLeft:"0px", width: "710px", height:"540px", marginTop:'0px'},600)
					$(".like").css({display:"block", marginLeft:"590px", marginTop:"0px", position: "absolute"})
					$(".like").fadeIn(800);
					
					
				});
				$(".col-xs-4").click(function(){
					$(".image1.newElement").remove();
					$(".like").css({display:"none"});
				})
				
				$(".image2").click(function(){
					$(this).clone()               // сделаем копию элемента hello
					.addClass("newElement")         // добавим этой копии класс newElement
					.appendTo(".col-xs-4")
					.css({marginTop:'160px', width:"0px", height:"0px"})
					/*.addClass("newElement1")*/
					.animate({marginLeft:"0px", width: "710px", height:"540px", marginTop:'0px'},600)
						$(".like").css({display:"block", marginLeft:"590px", marginTop:"0px", position: "absolute"});
					
				});
				$(".col-xs-4").click(function(){
					$(".image2.newElement").remove();
					$(".like").css({display:"none"});
				})
				
				$(".image3").click(function(){
					$(this).clone()               // сделаем копию элемента hello
					.addClass("newElement")         // добавим этой копии класс newElement
					.appendTo(".col-xs-4")
					.css({marginTop:'270px', width:"0px", height:"0px"})
					/*.addClass("newElement1")*/
						
					.animate({marginLeft:"0px", width: "710px", height:"540px", marginTop:'0px'},600)
						$(".like").css({display:"block", marginLeft:"590px", marginTop:"0px", position: "absolute"});
					
				});
				$(".col-xs-4").click(function(){
					$(".image3.newElement").remove();
					$(".like").css({display:"none"});
				})
				
				$(".image4").click(function(){
					$(this).clone()               // сделаем копию элемента hello
					.addClass("newElement")         // добавим этой копии класс newElement
					.appendTo(".col-xs-4")
					.css({marginTop:'380px', width:"0px", height:"0px"})
					/*.addClass("newElement1")*/
					
					.animate({marginLeft:"0px", width: "710px", height:"540px", marginTop:'0px'},600)
						$(".like").css({display:"block", marginLeft:"590px", marginTop:"0px", position: "absolute"});
					
				});
				$(".col-xs-4").click(function(){
					$(".image4.newElement").remove();
					$(".like").css({display:"none"});
				})
				
				
				$(".image5").click(function(){
					$(this).clone()               // сделаем копию элемента hello
					.addClass("newElement")         // добавим этой копии класс newElement
					.appendTo(".col-xs-4")
					.css({ marginTop:'490px', width:"0px", height:"0px"})
					/*.addClass("newElement1")*/
					.animate({marginLeft:"0px", width: "710px", height:"540px", marginTop:'0px'},600)
						$(".like").css({display:"block", marginLeft:"590px", marginTop:"0px", position: "absolute"});
					
				});
				$(".col-xs-4").click(function(){
					$(".image5.newElement").remove();
					$(".like").css({display:"none"});
				})
				
				
				$(".image10").click(function(){
					$(this).clone()               // сделаем копию элемента hello
					.addClass("newElement")         // добавим этой копии класс newElement
					.appendTo(".col-xs-4")
					.css({ marginTop:'50px', marginLeft:'730px',width: "0px", height:"0px"})
					/*.addClass("newElement1")*/
					.animate({marginLeft:"0px", width: "710px", height:"540px", marginTop:'0px'},600);
					
				});
				$(".col-xs-4").click(function(){
					$(".image10.newElement").remove();
					$(".like").css({display:"none"});
				})
				
				
				$(".image20").click(function(){
					$(this).clone()               // сделаем копию элемента hello
					.addClass("newElement")         // добавим этой копии класс newElement
					.appendTo(".col-xs-4")
					.css({ marginTop:'160px', marginLeft:'730px',width: "0px", height:"0px"})
					/*.addClass("newElement1")*/
					.animate({marginLeft:"0px", width: "710px", height:"540px", marginTop:'0px'},600)
					$(".like").css({display:"block", marginLeft:"590px", marginTop:"0px", position: "absolute"});
					
				});
				$(".col-xs-4").click(function(){
					$(".image20.newElement").remove();
					$(".like").css({display:"none"});
				})
				
				
				$(".image30").click(function(){
					$(this).clone()               // сделаем копию элемента hello
					.addClass("newElement")         // добавим этой копии класс newElement
					.appendTo(".col-xs-4")
					.css({ marginTop:'270px', marginLeft:'730px',width: "0px", height:"0px"})
					/*.addClass("newElement1")*/
					.animate({marginLeft:"0px", width: "710px", height:"540px", marginTop:'0px'},600)
					$(".like").css({display:"block", marginLeft:"590px", marginTop:"0px", position: "absolute"});
					
				});
				$(".col-xs-4").click(function(){
					$(".image30.newElement").remove();
					$(".like").css({display:"none"});
				})
			
				
				$(".image40").click(function(){
					$(this).clone()               // сделаем копию элемента hello
					.addClass("newElement")         // добавим этой копии класс newElement
					.appendTo(".col-xs-4")
					.css({ marginTop:'380px', marginLeft:'730px',width: "0px", height:"0px"})
					/*.addClass("newElement1")*/
					.animate({marginLeft:"0px", width: "710px", height:"540px", marginTop:'0px'},600)
					$(".like").css({display:"block", marginLeft:"590px", marginTop:"0px", position: "absolute"});
					
				});
				$(".col-xs-4").click(function(){
					$(".image40.newElement").remove();
					$(".like").css({display:"none"});
				})
				
				
				$(".image50").click(function(){
					$(this).clone()               // сделаем копию элемента hello
					.addClass("newElement")         // добавим этой копии класс newElement
					.appendTo(".col-xs-4")
					.css({ marginTop:'490px', marginLeft:'730px',width: "0px", height:"0px"})
					/*.addClass("newElement1")*/
					.animate({marginLeft:"0px", width: "710px", height:"540px", marginTop:'0px'},600)
					$(".like").css({display:"block", marginLeft:"590px", marginTop:"0px", position: "absolute"});
					
				});
				$(".col-xs-4").click(function(){
					$(".image50.newElement").remove();
					$(".like").css({display:"none"});
				})
				
				
				
				$(".image100").click(function(){
					$(this).clone()               // сделаем копию элемента hello
					.addClass("newElement")         // добавим этой копии класс newElement
					.appendTo(".col-xs-4")
					.css({ marginTop:'540px',width: "0px", height:"0px"})
					/*.addClass("newElement1")*/
					.animate({marginLeft:"0px", width: "710px", height:"540px", marginTop:'0px'},600)
					$(".like").css({display:"block", marginLeft:"590px", marginTop:"0px", position: "absolute"});
					
				});
				$(".col-xs-4").click(function(){
					$(".image100.newElement").remove();
					$(".like").css({display:"none"});
				})
				
				
				$(".image200").click(function(){
					$(this).clone()               // сделаем копию элемента hello
					.addClass("newElement")         // добавим этой копии класс newElement
					.appendTo(".col-xs-4")
					.css({ marginTop:'540px',width: "0px",marginLeft: "130px", height:"0px"})
					/*.addClass("newElement1")*/
					.animate({marginLeft:"0px", width: "710px", height:"540px", marginTop:'0px'},600)
					$(".like").css({display:"block", marginLeft:"590px", marginTop:"0px", position: "absolute"});
					
				});
				$(".col-xs-4").click(function(){
					$(".image200.newElement").remove();
					$(".like").css({display:"none"});
				})
				
				
				
				$(".image300").click(function(){
					$(this).clone()               // сделаем копию элемента hello
					.addClass("newElement")         // добавим этой копии класс newElement
					.appendTo(".col-xs-4")
					.css({ marginTop:'540px',width: "0px",marginLeft: "350px", height:"0px"})
					/*.addClass("newElement1")*/
					.animate({marginLeft:"0px", width: "710px", height:"540px", marginTop:'0px'},600)
					$(".like").css({display:"block", marginLeft:"590px", marginTop:"0px", position: "absolute"});
					
				});
				$(".col-xs-4").click(function(){
					$(".image300.newElement").remove();
					$(".like").css({display:"none"});
				})
				
				$(".image400").click(function(){
					$(this).clone()               // сделаем копию элемента hello
					.addClass("newElement")         // добавим этой копии класс newElement
					.appendTo(".col-xs-4")
					.css({ marginTop:'540px',width: "0px",marginLeft: "560px", height:"0px"})
					/*.addClass("newElement1")*/
					.animate({marginLeft:"0px", width: "710px", height:"540px", marginTop:'0px'},600)
					$(".like").css({display:"block", marginLeft:"590px", marginTop:"0px", position: "absolute"});
					
				});
				$(".col-xs-4").click(function(){
					$(".image400.newElement").remove();
					$(".like").css({display:"none"});
				})
				
				
				$(".image500").click(function(){
					$(this).clone()               // сделаем копию элемента hello
					.addClass("newElement")         // добавим этой копии класс newElement
					.appendTo(".col-xs-4")
					.css({ marginTop:'540px',width: "0px",marginLeft: "710px", height:"0px"})
					/*.addClass("newElement1")*/
					.animate({marginLeft:"0px", width: "710px", height:"540px", marginTop:'0px'},600)
					$(".like").css({display:"block", marginLeft:"590px", marginTop:"0px", position: "absolute"});
					
				});
				$(".col-xs-4").click(function(){
					$(".image500.newElement").remove();
					$(".like").css({display:"none"});
				})
	
	
					
					
					
					
					
					
					
					
					
					
					
					
					/*$(this).animate({marginLeft:"0px", width: "710px", height:"520px"},600);
						});*/
				});
				
			
		
		
		
		
		
	
	/*$(".image").click(function(){	// Событие клика на маленькое изображение
	  	var img = $(this);	// Получаем изображение, на которое кликнули
		var src = img.attr('src'); // Достаем из этого изображения путь до картинки
		$("body").append("<div class='popup'>"+ //Добавляем в тело документа разметку всплывающего окна
						 "<div class='content_bg'></div>"+ // Блок, который будет служить фоном затемненным
						 "<img src='"+src+"' class='popup_img' />"+ // Само увеличенное фото
						 "</div>"); 
		$(".popup").fadeIn(800); // Медленно выводим изображение
		$(".content_bg").click(function(){	// Событие клика на затемненный фон	   
			$(".popup").fadeOut(800);	// Медленно убираем всплывающее окно
			setTimeout(function() {	// Выставляем таймер
			  $(".popup").remove(); // Удаляем разметку всплывающего окна
			}, 800);
		});
	});
	
});*/