


$(document).ready(function(){

    //ajax
    var default_content="";

    checkURL();
    $('ul li a').click(function (e){

            checkURL(this.hash);

    });

    default_content = $('#main').html();
    
    
    setInterval("checkURL()",250);

    //photos info

    
   



});

    var lasturl="";

   function checkURL(hash)
{
    if(!hash) hash=window.location.hash;
    
    if(hash != lasturl)
    {
        lasturl=hash;
        
        // FIX - if we've used the history buttons to return to the homepage,
        // fill the pageContent with the default_content
        
        if(hash==""){
            $('#main').html(default_content);
            // $('aside').html(default_menu);
        }
        
        
        else{
             loadPage(hash);
        }


       
    }
}

   function loadPage(url){
    url=url.replace("#","");
    console.log(url);
    // $("#loading").css("visibility","visible");
    $.ajax({
        type: "POST",
        url: "php/load_page.php",
        data: "page="+url,
        dataType: "html",
        success: function(msg){
            if(parseInt(msg)!=0){
                // console.log("gh0");
                $("#main").html(msg);
                // $("aside").html(msg);
                // $("loading").css('visibility','hidden');
            }
        }
    });
   }

     $.ajax({
    type: "POST",
    url: "php/hasSession.php",
    success: function(msg){
        // console.log(msg);
        if(msg==true){
            $("#aFirst").text("Изход");
            $("#aFirst").attr("href","php/logout.php");

            $('#leftSide').find('li').show();
            $("#aSecond").text("Моят профил");
            $("#aSecond").attr("href","#profile");

            $("#aside1").text("Данни за мен");
            $("#aside1").attr("href","#myprofile");

            $("#aside2").text("Мои снимки");
            $("#aside2").attr("href","#myphotos");

            $("#aside3").text("Мои албуми");
            $("#aside3").attr("href","#");

            $("#aside4").text("Качи снимки");
            $("#aside4").attr("href","#upload");

            $("#aside5").text("Редакция на профил");
            $("#aside5").attr("href","#");

            $("#aside6").text("Изтрии профил");
            $("#aside6").attr("href","#");

        }
        else{
            // $('#leftSide').hide();

            $("#aFirst").text("Регистрация");
            $("#aFirst").attr("href","#reg");


            $("#aSecond").text("Вход");
            $("#aSecond").attr("href","#login");


            $("#aside1").text("");
            $("#aside1").attr("href","#");

            $("#aside2").text("");
            $("#aside2").attr("href","#");

            $("#aside3").text("");
            $("#aside3").attr("href","#");

            $("#aside4").text("");
            $("#aside4").attr("href","#");

            $("#aside5").text("");
            $("#aside5").attr("href","#");

            $("#aside6").text("");
            $("#aside6").attr("href","#");

        }
    }
   });
	

   



