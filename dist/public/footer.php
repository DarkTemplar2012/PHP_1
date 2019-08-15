<footer class="b-footer">
  <div class="b-footer_contact" id="contact">
    <div class="b-footer_contact__wrap" itemscope itemtype="http://schema.org/Organization">
      <div class="b-footer_contact__AllUnit wow bounceInRight">
        <div class='b-footer_contact__name' itemprop="name">Ремонт ноутбуков. Сервис центр - AlfaCom</div>
        <div class="b-footer_contact__unitTitle">Адрес:</div>
        <div class="b-footer_contact__unit">
          <a href="https://goo.gl/maps/epoaPbmV8V22" target="_blank" class="b-footer_contact__unitA"
            itemprop="address">РК, г. Алматы, ул.
            Мынбаева, дом 46, офис 112 (под лестницей).</a>
        </div>
      </div>
      <div class="b-footer_contact__AllUnit wow bounceInLeft">
        <div class="b-footer_contact__unitTitle">Телефоны:</div>
        <div class="b-footer_contact__unit">
          <a href="tel:+77273923384" target="_blank" class="b-footer_contact__unitA" itemprop="telephone">+7 727 392
            33 84 городской,</a>
          <a href="tel:+77777433003" target="_blank" class="b-footer_contact__unitA" itemprop="telephone">+7 777 743
            30 03 Денис,</a>
          <a href="tel:+77072615500" target="_blank" class="b-footer_contact__unitA" itemprop="telephone">+7 707 261
            55 00 Алексей.</a>
        </div>
      </div>
      <div class="b-footer_contact__AllUnit wow bounceInRight">
        <div class="b-footer_contact__unitTitle">Почта:</div>
        <div class="b-footer_contact__unit">
          <a href="mailto:service-center@mail.ru" target="_blank" class="b-footer_contact__unitA"
            itemprop="email">service-center@mail.ru</a>
          <a href="mailto:denoms@bk.ru" target="_blank" class="b-footer_contact__unitA"
            itemprop="email">denoms@bk.ru</a>
          <a href="mailto:alexberk@bk.ru" target="_blank" class="b-footer_contact__unitA"
            itemprop="email">alexberk@bk.ru</a>

        </div>
      </div>
      <div class="b-footer_contact__AllUnit wow bounceInLeft">
        <div class="b-footer_contact__unit">Режим работы:</div>
        <div class="b-footer_contact__unitWorkDay">
          <span class="b-footer_contact__workDay">Пн</span>
          <span class="b-footer_contact__workDay">Вт</span>
          <span class="b-footer_contact__workDay">Ср</span>
          <span class="b-footer_contact__workDay">Чт</span>
          <span class="b-footer_contact__workDay">Пт</span>
          <span class="b-footer_contact__workDay">Сб</span>
          <span class="b-footer_contact__workDay">Вс</span>
        </div>
      </div>
    </div>
  </div>


  <div class="b-footer_pages">
    <span class="b-footer_pages__title">Наши страницы</span>
    <div class="b-footer_pages__wrap">
      <a href="index#description" class="b-footer_pages__link">Ремонт ноутбуков</a>
      <a href="remont-computerov#description" class="b-footer_pages__link">Ремонт компьютеров</a>
      <a href="remont-apple#description" class="b-footer_pages__link">Ремонт Apple</a>
      <a href="chistka-ot-pyli#description" class="b-footer_pages__link">Чистка ноутбука</a>
      <a href="pereustanovka-windows#description" class="b-footer_pages__link">Установка Windows</a>
      <a href="pereustanovka-macos#description" class="b-footer_pages__link">Установка macOS</a>
      <a href="zamena-displeya#description" class="b-footer_pages__link">Ремонт матрицы</a>
      <a href="vosstanovlenie-korpusa#description" class="b-footer_pages__link">Ремонт корпуса</a>
      <a href="zamena-klaviatury#description" class="b-footer_pages__link">Ремонт клавиатуры</a>
      <a href="zamena-akkumulyatora#description" class="b-footer_pages__link">Ремонт аккумулятора</a>
      <a href="zamena-bloka-pitaniya#description" class="b-footer_pages__link">Ремонт блока питания</a>
      <a href="zashita-ot-virusov#description" class="b-footer_pages__link">удаление вирусов</a>
      <a href="uskorenie-noutbuka#description" class="b-footer_pages__link">Ноутбук тормозит</a>
    </div>
  </div>
</footer>
<script src="public/js/main.js?v=1.2.1"></script>

<script>
  $(".b-main_description__imgA").on('click', function(e) {
    e.preventDefault;
    $.ajax({
      url: 'views.php',
      // dataType: 'json',
      type: 'POST',
      data: {
        action: this.href
      },
      error: function(data) {
        // alert('no suc')
      },
      success: function(data) {
        // alert('suc')
      }
    });
  })
</script>
</body>

</html>