function load_floating_label_input(class_name) {
    const FloatLabel = (() => {

        // add active class and placeholder 
        const handleFocus = (e) => {
            const target = e.target;
            target.parentNode.classList.add('active');
            target.setAttribute('placeholder', target.getAttribute('data-placeholder'));
        };

        // remove active class and placeholder
        const handleBlur = (e) => {
            const target = e.target;
            if (!target.value) {
                target.parentNode.classList.remove('active');
            }
            target.removeAttribute('placeholder');
        };

        // register events
        const bindEvents = (element) => {
            const floatField = element.querySelector('input');
            floatField.addEventListener('focus', handleFocus);
            floatField.addEventListener('blur', handleBlur);
        };

        // get DOM elements
        const init = () => {
            const floatContainers = document.querySelectorAll('.' + class_name);

            floatContainers.forEach((element) => {
                if (element.querySelector('input').value) {
                    element.classList.add('active');
                }

                bindEvents(element);
            });
        };

        return {
            init: init
        };
    })();

    FloatLabel.init();
}

function btn_xem_them(id, name_first, name_affter) {
    $(id).click(function() {
        if ($(this).attr("check") == 'more') {
            $(this).empty();
            if (name_affter == null)
                $(this).append("Ẩn xem thêm<span class='glyphicon glyphicon-chevron-up'>");
            else
                $(this).append(name_affter + " <span class='glyphicon glyphicon-chevron-up'>");
            $(this).attr('check', 'hide');
        } else if ($(this).attr("check") == 'hide') {
            $(this).empty();
            if (name_first == null)
                $(this).append("Xem thêm<span class='glyphicon glyphicon-chevron-down'>");
            else
                $(this).append(name_first + " <span class='glyphicon glyphicon-chevron-down'>");
            $(this).attr('check', 'more');
        }
    });
}