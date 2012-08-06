
/**var arrowimages={down:['downarrowclass', 'arrow-down.gif', 25], right:['rightarrowclass', 'arrow-right.gif']}**/

//var arrowimages={down:['downarrowclass', 'arrow-down.gif', 25], right:['rightarrowclass', 'arrow-right.gif']}


var jquerycssmenu={

    fadesettings: {overduration: 400, outduration: 100}, //duration of fade in/ out animation, in milliseconds



    buildmenu:function(menuid/*, arrowsvar*/){
        jQuery(document).ready(function($){
            var $mainmenu=$("#"+menuid+">ul")
            var $headers=$mainmenu.find("ul").parent()
            $headers.each(function(i){
                var $curobj=$(this)
                var $subul=$(this).find('ul:eq(0)')
                this._dimensions={w:this.offsetWidth, h:this.offsetHeight, subulw:$subul.outerWidth(), subulh:$subul.outerHeight()}
                this.istopheader=$curobj.parents("ul").length==1? true : false
                $subul.css({top:/*this.istopheader? this._dimensions.h+"px" : */'41px'})
                /*$curobj.children("a:eq(0)").css(this.istopheader? {paddingRight: arrowsvar.down[2]} : {}).append(
                 '<img src="'+ (this.istopheader? arrowsvar.down[1] : arrowsvar.right[1])
                 +'" class="' + (this.istopheader? arrowsvar.down[0] : arrowsvar.right[0])
                 + '" style="border:0;" />'
                 )*/

                $curobj.hover(
                    function(e){
                        var $targetul=$(this).children("ul:eq(0)")
                        this._offsets={left:$(this).offset().left/*, top:$(this).offset().top*/}
                        var menuleft=this.istopheader? 0 : this._dimensions.w
                        menuleft=(this._offsets.left+menuleft+this._dimensions.subulw>$(window).width())? (this.istopheader? -this._dimensions.subulw+this._dimensions.w : -this._dimensions.w) : menuleft
                        $targetul.css({left:menuleft+"px"}).fadeIn(jquerycssmenu.fadesettings.overduration)
                    },
                    function(e){
                        $(this).children("ul:eq(0)").fadeOut(jquerycssmenu.fadesettings.outduration)
                    }
                ) //end hover
            }) //end $headers.each()
            $mainmenu.find("ul").css({display:'none', visibility:'visible'})

            if (!$('#myjquerymenu > ul > li').hasClass("active_round"))
            {
                $('#myjquerymenu > ul > li:eq(0)').addClass("active_round")
            }

            $('#myjquerymenu > ul > li > ul > li > ul').css({top:0})
            $('#myjquerymenu > ul > li > ul > li').has('.subsub > li')
                .append('<img src="/public/img/main_img/arrow-right.gif" class="rightarrowclass" style="border:0;" />')

            $('#myjquerymenu > ul > li').hover(
                function(){
                $('#myjquerymenu > ul > li').removeClass();
                $(this).addClass("active")

            },
            function(){
                $('#myjquerymenu > ul > li').removeClass();
                $(this).addClass("active_round")
            })



        }) //end document.ready
    }
}

//build menu with ID="myjquerymenu" on page:
jquerycssmenu.buildmenu("myjquerymenu"/*, arrowimages*/)






