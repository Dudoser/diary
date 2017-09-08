                    // REG/AUTH PAGE
$(document).ready(function(){
    $('#datepicker').blur(function(){
        var date = $('#datepicker').val();
        // alert(date);
    });
                        // FOR AUTHENTICATION
    // for name
    $(function() {
        function isEmptyAuth(nameClass, text){
            $(nameClass).blur(function(){
                $(nameClass).removeClass();
                var nameLngth = $(nameClass).val().length;
                if(nameLngth <= 1){
                    $('#auth').addClass('notValid');
                    $('#auth').addClass('non');
                    $('#auth').html(text);
                    $('.bg').addClass('notValid');
                    $(nameClass).addClass('notValid');
                } else {
                    $(nameClass).removeClass('notValid');
                    $('.bg').removeClass('notValid');
                    $('#auth').removeClass('notValid');
                    $('#auth').removeClass('non');
                    $('#auth').html('<h2>Вход</h2');
                    $(nameClass).addClass('valid');
                    $('.bg').addClass('valid');
                    $('#auth').addClass('valid');
                }
            });
        }
        isEmptyAuth('#name', 'Ведите пожалуйста ваше имя');
        isEmptyAuth('#pass', 'Введите пожалуйста ваш пароль');
    });
                        //  FOR REGISTRATION
    $(function() {
        function isEmptyReg(nameClass, text){
            $(nameClass).blur(function(){
                $(nameClass).removeClass();
                var nameLngth = $(nameClass).val().length;
                if(nameLngth <= 1){
                    $('#reg-title').addClass('notValid');
                    $('#reg-title').addClass('non');
                    $('#reg-title').html(text);
                    $('.reg').addClass('notValid');
                    $(nameClass).addClass('notValid');
                } else {
                    $(nameClass).removeClass('notValid');
                    $('.reg').removeClass('notValid');
                    $('#reg-title').removeClass('notValid');
                    $('#reg-title').removeClass('non');
                    $('#reg-title').html('<h2>Регистрация</h2');
                    $(nameClass).addClass('valid');
                    $('.reg').addClass('valid');
                    $('#reg-title').addClass('valid');
                }
            });
        }
        isEmptyReg('#name_reg', 'Ведите пожалуйста ваше имя');
        isEmptyReg('#pass_reg', 'Введите пожалуйста ваш пароль');
        isEmptyReg('#email_reg', 'Введите пожалуйста ваш E-mail');

    });
                                //PROFIL PAGE
    $(function() {
        function isEmptyProfil(nameClass, text){
            $(nameClass).blur(function(){
                $(nameClass).removeClass();
                var nameLngth = $(nameClass).val().length;
                if(nameLngth <= 1){
                    $('#as').html(text);
                    $('#as').css({"display":"inline", "position":"absolute", "text-align":"center", "width":"96%"});
                    $(nameClass).addClass('notValid');
                    $('#done').attr("disabled", "disabled");
                } else {
                    $(nameClass).removeClass('notValid');
                    $('#done').removeAttr("disabled", "disabled");
                    $('#as').css("display", "none");
                    $(nameClass).addClass('valid');
                }
            });
        }
        isEmptyProfil('#name-profil', 'Введите пожалуйста ваше имя');
        isEmptyProfil('#pass-profil', 'Введите пожалуйста ваш пароль');
        isEmptyProfil('#email-profil', 'Введите пожалуйста ваш E-mail');
    });
    $("#datepicker").datepicker({
        inline: true,
        changeYear: true,
        changeMonth: true,
    });
   
    jQuery(function ($) {
        $.datepicker.regional['ru'] = {
            closeText: 'Закрыть',
            prevText: '&#x3c;Пред',
            nextText: 'След&#x3e;',
            currentText: 'Сегодня',
            monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
            'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            monthNamesShort: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
            'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
            dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
            dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
            weekHeader: 'Нед',
            dateFormat: 'yy-mm-dd',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['ru']);
    });
    
});