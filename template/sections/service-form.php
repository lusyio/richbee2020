<div class="service-form-card">
    <div class="service-form-card__body">
        <div class="service-form-card__img">
            <img src="/images/img-service-form.png" alt="">
        </div>
        <div>
            <p class="service-form-card__title">
                Подберем <b>три варианта разработки</b> по функционалу, срокам и стоимости
            </p>
            <p class="service-form-card__text">
                Оставьте свой номер телефона, чтобы получить <b>индивидуальное коммерческое предложение</b>
            </p>
            <p class="service-form-card__text">
                Это вас ни к чему не обязывает. Получив коммерческое предложение, вы сможете спрогнозировать
                окупаемость разработки и сравнить его с ценами в других компаниях
            </p>
            <form id="serviceForm" class="service-form-form" action="">
                <input id="serviceFormPhone" placeholder="+7 (999) 999-99-99" class="" type="text"
                       minlength="18"
                       required>
                <button class="blick" type="submit">Получить предложение</button>
            </form>
            <p class="service-form-card__footer">
                Нажимая кнопку “Получить предложение” вы даете свое согласие на обработку персональных
                данных и
                соглашаетесь с <a href="#">Политикой конфиденциальности</a>
            </p>
        </div>
    </div>
</div>
<script>
    jQuery(function ($) {
        $('#serviceFormPhone').mask('+7 (000) 000-00-00')
    });

    $('#serviceForm').on('submit', function () {
        let value = $('#serviceForm > input').val();
        $.ajax({
            type: "POST",
            url: '/ajax/',
            data: {
                action: 'offer',
                phone: value
            },
            success: data => {
                $(this).remove();
                $('.service-form-card__footer').before('<p class="service-form-card__text">Мы получили ваш запрос и уже обрабатываем его. <br> \n' +
                    '<b>За вами закреплен личный менеджер - Владислав Карпенко.</b>\n' +
                    'Он свяжется с вами в течение 15 минут, чтобы обсудить детали проекта </p>')
            },
            error: e => {
                console.log(e)
            }
        });
        return false;
    })
</script>
