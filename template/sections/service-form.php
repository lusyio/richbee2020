<div class="service-form-card">
    <div class="service-form-card__body">
        <div class="service-form-card__img">
            <img src="/images/img-service-form.png" alt="">
        </div>
        <div>
            <p class="service-form-card__title">
                <?= $serviceId == '2'
                    ? 'Ответьте на несколько вопросов и получите <b>индивидуальное коммерческое предложение</b>'
                    : 'Подберем <b>три варианта разработки</b> по функционалу, срокам и стоимости' ?>
            </p>
            <p class="service-form-card__text">
                <?= $serviceId == '2'
                    ? 'Вы получите <b>три варианта разработки</b> по функционалу, срокам и стоимости</b>'
                    : 'Оставьте свой номер телефона, чтобы получить <b>индивидуальное коммерческое предложение</b>' ?>
            </p>
            <p class="service-form-card__text">
                Это вас ни к чему не обязывает. Получив коммерческое предложение, вы сможете спрогнозировать
                окупаемость разработки и сравнить его с ценами в других компаниях
            </p>
            <form id="serviceForm" class="service-form-form" action="">
                <input id="serviceFormPhone" placeholder="Введите ваш телефон" class="" type="text"
                       minlength="18"
                       required>
                <button class="blick <?= $serviceId == '2' ? 'btn-online-shop btn-online-shop-primary' : '' ?>"
                        type="submit"><span>Получить предложение</span></button>
            </form>
            <p class="service-form-card__footer">
                <?= $serviceId == '2'
                    ? 'Нажимая кнопку “Получить предложение” вы соглашаетесь с <a href="#">Политикой конфиденциальности</a>'
                    : 'Нажимая кнопку “Получить предложение” вы даете свое согласие на обработку персональных 
                        данных и соглашаетесь с <a href="#">Политикой конфиденциальности</a>' ?>
            </p>
        </div>
    </div>
</div>
<div id="myModal" class="modal online-shop-modal">
    <div class="modal-content">
        <div class="modal-content__body">
            <img class="online-shop-modal__check" src="/images/svg/online-shop/modal/check.svg" alt="">
            <p class="online-shop-modal__title">Спасибо за заявку</p>
            <p class="online-shop-modal__text">Менеджер перезвонит вам в течение 15 минут и предложит вам три
                варианта разработки сайта, а пока что вы можете скачать презентацию нашей компании и познакомиться с
                нами поближе</p>
            <a class="online-shop-modal__img-link" href="/richbee-presentation.pdf">
                <img src="/images/online-shop/modal/presentation.jpg" alt="">
            </a>
            <a class="online-shop-modal__link" href="/richbee-presentation.pdf">Скачать презентацию компании <br>
                [PDF, 1.2 мб]</a>
            <div class="footer__social">
                <div>
                    <a href="https://vk.com/im?media=&sel=-89243398" class="hidden wow fadeIn" target="_blank"><img
                                class="svg" src="/images/svg/vk.svg"/></a>
                    <a href="https://tlgg.ru/@termitFOvlad" class="hidden wow fadeIn" data-wow-delay="0.1s"
                       target="_blank"><img class="svg" src="/images/svg/telegram.svg"/></a>
                    <a href="https://wa.me/79263815773" class="hidden wow fadeIn" data-wow-delay="0.2s"
                       target="_blank"><img class="svg" src="/images/svg/whatsapp.svg"/></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(function ($) {
        $('#serviceFormPhone').mask('+7 (000) 000-00-00')
    });

    $('#serviceForm').on('submit', function () {
        let modal = document.getElementById("myModal");
        let value = $('#serviceForm > input').val();
        modal.style.display = "block";
        document.body.style.overflowY = 'hidden'
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
                modal.style.display = "block";
                document.body.style.overflowY = 'hidden'
            },
            error: e => {
                console.log(e)
            }
        });
        return false;
    })
</script>
