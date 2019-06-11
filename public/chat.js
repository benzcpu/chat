const  chatboxIcon=$(".moveEvent");
const config={getchatTimeDelay:2000}
$('.ch-chatbox .icon').click(function(){
    console.log(this);
    if($(this).hasClass("down")){
        $(this).removeClass("down");
        $('.ch-chatbox .body').css({"height":"300px"});
        $('.ch-chatbox form').css({"display":"block"});
    }else{
        $(this).addClass("down");
        $('.ch-chatbox form').css({"display":"none"});
        $('.ch-chatbox .body').css({"height":"0"});
    }

});

$(".ch-chatbox form").submit(function(event){
    event.preventDefault();
    var me=this;
    getDataChat(me,"action");
    $(me)[0].reset();
});

setInterval(function(){
    getDataChat($(".ch-chatbox form"),"actionget");
},config.getchatTimeDelay)
function getDataChat(me,action){
    var last_message=$(me).attr("data-last-message");
    $.ajax({
        url:$(me).attr(action),
        data:$(me).serialize()+"&last_message="+last_message,
        method:"POST",
        success:function (data) {
            if(data!=""){
                var data=JSON.parse(data);
                console.log(data);
                $(me).attr({"data-last-message":data.last_message});
                var html="";
                $.each(data.resaut,function(idx,item){
                    html=html+'<div class="'+item.self+'">\n';
                        if(item.self=="me"){
                            html=html+ '          <div class="text">'+item.ch_text+'</div>\n';
                        }else{
                            html=html+'           <div class="text">'+item.ch_name+':<span class="text">'+item.ch_text+'</span></div>\n';
                        }
                    html=html+  '        </div>';
                        var text=item.ch_text;
                        console.log(text.length);
                });
                var scoll="";
                if( parseInt($($(me).siblings()[1]).scrollTop())==0 ||parseInt($($(me).siblings()[1]).scrollTop())== parseInt($($(me).siblings()[1])[0].scrollHeight)-parseInt($($(me).siblings()[1])[0].offsetHeight)) {
                    scoll="true"
                }
                    $($(me).siblings()[1]).append(html);
                 if(scoll=="true"){
                    $($(me).siblings()[1]).scrollTop( 100000 );
                }
            }
        }
    });
}


