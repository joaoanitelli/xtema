/*$(".menu > ul > li").click(function (e) {
    //remove active from already active
    $(this).siblings().removeClass("active");
    // add active to clicked
    $(this).toggleClass("active");
    // if has sub menu it
    $(this).find("ul").slideToggle();
    // close other sub menu if any open
    $(this).siblings().find("ul").slideUp();
    //remove active class of sub menu items
    $(this).siblings().find("ul").find("li").removeClass("active");
});*/
$(document).ready(function() {
    const $nomePagina = $(".nome-pagina");
    const $listLi = $('.menu > ul > li').not('.dropdown');
    const $listLiDropDownOpcao = $('.menu > ul > li.dropdown .opcao');

    $listLi.click(function () {
        console.log('1')
        const $element = $(this);

        $listLi.removeClass('active');
        $listLiDropDownOpcao.parent().removeClass('active');
        $listLiDropDownOpcao.parent().find('.sub-menu li').removeClass('active');
        $listLiDropDownOpcao.parent().find('.sub-menu').slideUp();
        $('.arrow').css('transform','rotate(0deg)');
        $element .toggleClass('active');

        $nomePagina.text($element.text().trim());
    });
    
    $listLiDropDownOpcao.click(function () {
        //$listLiDropDownOpcao.parent().removeClass('active');
        const $element = $(this).parent();
        
        if ($($element).find('.sub-menu li.active').length === 0){
            $element.toggleClass('active');
            if ($($element).find('.sub-menu').css('display') === 'block') {
                $element.find('.arrow').css('transform','rotate(0deg)')
            }else {
                $element.find('.arrow').css('transform','rotate(180deg)')
            }
        }
        else {
            if ($($element).find('.sub-menu').css('display') === 'block') {
                $element.find('.arrow').css('transform','rotate(0deg)')
            }else {
                $element.find('.arrow').css('transform','rotate(180deg)')
            }
        }

        $($element).find('.sub-menu').slideToggle();

        const $listLiSub = $element.find('.sub-menu li');
        $listLiSub.unbind();
        $listLiSub.click(function () {
            const $liElement = $(this);

            $('.sub-menu li').not($liElement).removeClass('active');
            $listLiDropDownOpcao.parent().not($element).removeClass('active');
            $listLiDropDownOpcao.parent().not($element).find('.arrow').css('transform','rotate(0deg)')
            $listLiSub.removeClass('active');
            $liElement.toggleClass('active');
            $liElement.parent();
            $listLiDropDownOpcao.parent().not($element).find('.sub-menu').slideUp();
            $listLi.removeClass('active');

            $nomePagina.text($liElement.text().trim());
        })
    });

    $('.menu-btn').click(function(e) {
        $('.sidebar').toggleClass('active');
    });

    /*$("#pagina").click(function (e) {
        if ($('.sidebar.active').length > 0) {
            $('.sub-menu').each((i,val)=> {
                if($(val).find('li.active').length === 0){
                    $(val).parent().removeClass('active');
                }
            });
            $('.sub-menu').slideUp();
        }
    });

    $('.menu-btn').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $('.sidebar').toggleClass('active');
        $('.dropdown.active').find('.sub-menu').slideDown();
    }); 

    $('.menu > ul > li').click(function(e) {
        e.stopPropagation();
        
        const $element = $(this);
        const isDropdown = $element.hasClass("dropdown");

        $element.toggleClass('active');
        
        if ($('.menu > ul > li.active').length === 0) $element.toggleClass('active');

        if(isDropdown){
            console.log($($element).hasClass('active'))
            if ($($element).hasClass('active')) {
                if($element.find('.sub-menu').css('display') === 'none')   
                    $($element).find('.sub-menu').slideDown();
                else
                    $($element).find('.sub-menu').slideUp(); 
            } else {
                $($element).find('.sub-menu').slideUp();
            }
        }else {
            $(".nome-pagina").text($element.text().trim());

            if($('.menu > ul > li.active').length > 1) {
                $('.sub-menu').slideUp();
            }

            $('.menu > ul > li').not($element).removeClass('active');
            $('.menu .sub-menu li').removeClass('active');
        }
    });

    $('.menu .sub-menu li').click(function(e) {
        e.stopPropagation();

        const $element = $(this);
        $element.toggleClass('active');

        $(".nome-pagina").text($element.text().trim());
        if ($('.menu .sub-menu li.active').length === 0) $element.toggleClass('active');

        $('.menu > ul > li').not($element.parent().parent()).removeClass('active');
        $('.menu .sub-menu li').not($element).removeClass('active');
        $('.menu > ul > li').not($element).removeClass('fake-active');
        $('.sub-menu').not($element.parent()).slideUp();
        if ($('.sidebar.active').length > 0)
            $element.parent().slideUp();
    });

    $('.sub-menu').click(function(e) {
        e.stopPropagation();
    });*/
});