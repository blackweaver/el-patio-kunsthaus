 'use strict';

$(function () {
    let $form = $('form.form'),
        $custom_select = $('.custom-select'),
        $custom_radio = $('.custom-radio'),
        $field_checkbox = $('.field-checkbox'),
        $datepicker = $('.datepicker');
        
    if ($custom_select.length > 0) {
        $custom_select.each(function() {
            let $thisCustomSelect = $(this);
            $thisCustomSelect.selectmenu({
                select: function (event, ui) {
                    validator.element($thisCustomSelect.parent().find('select'))
                }
            }).find("option").first().attr("disabled", true);
            $thisCustomSelect.selectmenu("refresh");
        });
    }
    
    if ($custom_radio.length > 0) {
        // $custom_radio.find("input").checkboxradio().on("change", function (event) {
            // validator.element($(event.target));
        // });
        $custom_radio.find("input").checkboxradio();
    }

    // Add date validator method
    function phoneValidation(value, element) {
        return this.optional(element) || /^\+?1?[0-9_ ]*$/.test(value);
    }
    $.validator.addMethod("PhoneValidator", phoneValidation, $('[data-rule-phone_number]').data('msg-phone_number'));

    function ukDateValidation(value, element) {
        return this.optional(element) || /^(?:(?:(?:(?:31[\/\.](?:0?[13578]|1[02]))|(?:(?:29|30)[\/\.](?:0?[13-9]|1[0-2])))[\/\.](?:1[6-9]|[2-9]\d)\d{2})|(?:29[\/\.]0?2[\/\.](?:(?:(1[6-9]|[2-9]\d)(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))|(?:0?[1-9]|1\d|2[0-8])[\/\.](?:(?:0?[1-9])|(?:1[0-2]))[\/\.](?:(?:1[6-9]|[2-9]\d)\d{2}))$/.test(value);
    }
    $.validator.addMethod("UKDate", ukDateValidation, $('[data-rule-custom_date]').data('msg-custom_date'));
    
    function validUrlValidation(value, element) {
        var url = $.validator.methods.url.bind(this);
        return value == '' || url(value, element) || url('http://' + value, element);
    }
    $.validator.addMethod("ValidCustomUrl", validUrlValidation, $('[data-rule-url_2]').data('msg-url_2'));        

    if ($form.length > 0) {
        // Initiate Validator
        var validator = $form.validate({
            highlight: function (element, errorClass, validClass) {
                if(element.name.indexOf("[]") > 0) {
                    $(element).closest('.boxes-checkboxs').addClass('on-error').removeClass('is-valid');
                } else {
                    $(element).parent().addClass('on-error').removeClass('is-valid');
                }
            },
            unhighlight: function (element, errorClass, validClass) {
                if(element.name.indexOf("[]") > 0) {
                    $(element).closest('.boxes-checkboxs').addClass('is-valid').removeClass('on-error');
                } else {
                    $(element).parent().addClass('is-valid').removeClass('on-error');
                }
            },
            errorPlacement: function (error, element) {
                if (element.siblings(".error-message").length > 0) {
                    element.siblings(".error-message").html(error.text())
                } else {
                    element.closest('.field').find(".error-message").html(error.text());
                }
            },
            submitHandler: function (form) {
                form.submit();
            },
            rules: {
                url_2: {
                    ValidCustomUrl: true,
                },
                phone_number: {
                    PhoneValidator: true
                },
                delivery: {
                    required: true
                },
                'medium[]': {
                    required: true
                },
                'published[]': {
                    required: true
                },
                'frequency[]': {
                    required: true
                },
                'language[]': {
                    required: true
                }
            },
            // messages: {
            //     'language[]': "You must check at least 1 box",
            // },
            ignore: [],
        });

        // Initiate datepicker if exists
        if ($datepicker.length > 0) {
            $datepicker.each(function(index, el){
                let $picker = $(el);
                let $pickerAltField = $picker.siblings('.alt-field-datepicker');


                $picker.datepicker({
                    altField: $pickerAltField,
                    altFormat: 'yy-mm-dd',
                    dateFormat: (window.kunsthaus.currentLang === 'de') ? 'd.m.yy' : 'd/m/yy',
                    changeYear: true,
                    yearRange: 'c-110:c',
                    onSelect: function () {
                        validator.element($(this));
                    },
                    onClose: function () {
                        validator.element($(this));
                    },
                });

                if ($pickerAltField.length > 0 && $pickerAltField.val() != '') {
                    let $altDateArray = $pickerAltField.val().split('-');
                    $picker.datepicker('setDate', new Date($altDateArray[0], parseInt($altDateArray[1]) - 1, $altDateArray[2]));
                }

            }); 
        }
        // Set Every input inside a row to be validated
        refreshValidatorRules();
    }
   
    function refreshValidatorRules() {
        $.validator.addClassRules({
            'required-phone_number': {
                PhoneValidator: true
            },
            'required-url_2': {
                ValidCustomUrl: true
            },
            'required-date': {
                required: true,
                UKDate: true
            },
            'required-text': {
                required: true
            }
        });    
    }

    // Checkbox fee schedule
    $field_checkbox.find("input[type='checkbox']").bind('change', function (event) {
        $(this).parent().toggleClass("is-active", $(this).prop("checked"));
        $(this).prop("checked", $(this).parent().hasClass("is-active"));
    });

    // Radio Person two (paar) Old
    // $("input[type='radio']").change(function(event){
    //     event.preventDefault();
    //     let box = $(".box-person:last-child");
    //     if($(this).hasClass("radio-paar")) {
    //         box.css("display","block");
    //     } else {
    //         box.css("display","none");
    //     }
    // });
    
    // Radio Person two (paar) adjusted for backend, if anything talk with stirling 
    $("input[type='radio']").change(function(event){
        event.preventDefault();
        let box = $(".box-person:last-child");
        let boxInput = box.find('input');
        let boxSelect = box.find('select');
        if($(this).hasClass("radio-paar")) {
            box.css("display","block");
            if (! box.find('.field').hasClass('required')) {
                box.find('.field').addClass('required');
                boxInput.attr('data-rule-required','true');
                boxSelect.attr('data-rule-required','true');
            }
        } else {
            box.css("display","none");
            box.find('.grid-form').find('.field').removeClass('required');
            boxInput.removeAttr('data-rule-required','true');
            boxSelect.removeAttr('data-rule-required','true');
        }
    });

    // Cloning box name
    function updateElementIndex(el, prefix, ndx) {
        var id_regex = new RegExp('(' + prefix + '-\\d+)');
        var replacement = prefix + '-' + ndx;
        if ($(el).attr("for")) $(el).attr("for", $(el).attr("for").replace(id_regex, replacement));
        if (el.id) el.id = el.id.replace(id_regex, replacement);
        if (el.name) el.name = el.name.replace(id_regex, replacement);
    }

    function cloneMore(selector, prefix) {
        var $newElement = $(selector).clone(true),
            total = $('#id_' + prefix + '-TOTAL_FORMS').val();
        $newElement.find('.form-row-index').html(parseFloat(total)+1);
        $newElement.find('.remove-form-row').css({'display':'block'});
        $newElement.find('.on-error').removeClass('on-error');
        $newElement.find(':input').each(function () {
            var name = $(this).attr('name').replace('-' + (total - 1) + '-', '-' + total + '-');
            var id = 'id_' + name;
            $(this).attr({
                'name': name,
                'id': id,
                'aria-invalid': false
            }).val('').removeAttr('checked');
        });
        total++;
        $('#id_' + prefix + '-TOTAL_FORMS').val(total);
        $(selector).after($newElement);

        $newElement.find('.datepicker').removeClass('hasDatepicker').datepicker({
            altField: $newElement.find('.alt-field-datepicker '),
            dateFormat: (window.kunsthaus.currentLang === 'de') ? 'd.m.yy' : 'd/m/yy',
            altFormat: 'yy-mm-dd',
            changeYear : true,
            yearRange: 'c-110:c',
            onSelect: function () {
                validator.element($newElement.find('.datepicker'));
            },
            onClose: function () {
                validator.element($newElement.find('.datepicker'));
            },
        });
        refreshValidatorRules();
        return false;
    }

    // Delete Form Row
    function deleteForm(prefix, btn) {
        var total = parseInt($('#id_' + prefix + '-TOTAL_FORMS').val());
        if (total > 1) {
            btn.closest('.form-row').remove();
            var forms = $('.form-row');
            $('#id_' + prefix + '-TOTAL_FORMS').val(forms.length);
            for (var i = 0, formCount = forms.length; i < formCount; i++) {
                $(forms.get(i)).find(':input').each(function () {
                    updateElementIndex(this, prefix, i);
                });
            }
        }
        return false;
    }
    $(document).on('click', '.add-form-row', function (e) {
        e.preventDefault();
        cloneMore('.form-row:last', $(this).data('form-prefix'));
        return false;
    });
    $(document).on('click', '.remove-form-row', function (e) {
        e.preventDefault();
        deleteForm($(this).data('form-prefix'), $(this));
        return false;
    });
    
});