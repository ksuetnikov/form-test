<!DOCTYPE html>
<html lang="ru" style="min-height: 100%; height:10000%" >
  <head>
    <meta name="robots" content="noindex">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/png" href="icon.png" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
      integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
      crossorigin=""
    />
    <script
      defer
      src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
      integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
      crossorigin=""
    ></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=94565752-3bf6-445f-96fb-495be77ecc77" type="text/javascript"></script>
    <script src="placemark.js" type="text/javascript"></script>
	  <style>
.result{
    margin-top: -20%;
    margin-left: 5%;
}
:root {
  --color-brand--1: #fcff45;
  --color-brand--2: #00bec4;

  --color-dark--1: #0a151d;
  --color-dark--2: #3f464d;
  --color-light--1: rgb(170, 170, 170);
  --color-light--2: #e8e8e8;
  --color-light--3: rgb(220, 220, 220);
}

* {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}

html {
  font-size: 62.5%;
  box-sizing: border-box;
}

body {
  font-family: 'Roboto', sans-serif;
  color: var(--color-light--2);
  font-weight: 400;
  line-height: 1.6;
  /*height: 100vh;*/
  overscroll-behavior-y: none;

  background-color: #fff;
  padding: 2rem;

  display: flex;
}

/* Основное */
a:link,
a:visited {
  color: var(--color-brand--1);
}

/* Боковая панель */
.sidebar {
  flex-basis: 70rem;
  background-color: var(--color-dark--1);
  padding: 5rem 5rem 3rem 5rem;
  display: flex;
  flex-direction: column;
}

.icon {
  height: 7.5rem;
  align-self: center;
  margin-bottom: 4rem;
}
.form {
  background-color: var(--color-dark--2);
  border-radius: 5px;
  padding: 1.5rem 2.75rem;
  margin-bottom: 1.75rem;

  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0.5rem 2.5rem;

  /* Match height and activity boxes */
  height: 9.25rem;
  transition: all 0.5s, transform 1ms;
}

.form.hidden {
  transform: translateY(-30rem);
  height: 0;
  padding: 0 2.25rem;
  margin-bottom: 0;
  opacity: 0;
}

.form__row {
  display: flex;
  align-items: center;
}

.form__row--hidden {
  display: none;
}

.form__label {
  flex: 0 0 50%;
  font-size: 1.5rem;
  font-weight: 600;
}

.form__input {
  width: 100%;
  padding: 0.3rem 1.1rem;
  font-family: inherit;
  font-size: 1.4rem;
  border: none;
  border-radius: 3px;
  background-color: var(--color-light--3);
  transition: all 0.2s;
}

.form__input:focus {
  outline: none;
  background-color: #fff;
}

.form__btn {
  display: none;
}

.footer__copyright {
  margin-top: auto;
  font-size: 1.3rem;
  text-align: center;
  color: var(--color-light--1);
}

.footer__link:link,
.footer__link:visited {
  color: var(--color-light--1);
  transition: all 0.2s;
}

.footer__link:hover,
.footer__link:active {
  color: var(--color-light--2);
}

/* MAP */
#map {
  flex: 1;
  height: 100%;
  background-color: var(--color-light--1);
}

/* Popup width is defined in JS using options */
.leaflet-popup .leaflet-popup-content-wrapper {
  background-color: var(--color-dark--1);
  color: var(--color-light--2);
  border-radius: 5px;
  padding-right: 0.6rem;
}

.leaflet-popup .leaflet-popup-content {
  font-size: 1.5rem;
}

.leaflet-popup .leaflet-popup-tip {
  background-color: var(--color-dark--1);
}

.running-popup .leaflet-popup-content-wrapper {
  border-left: 5px solid var(--color-brand--2);
}
.cycling-popup .leaflet-popup-content-wrapper {
  border-left: 5px solid var(--color-brand--1);
}

  html {
  height: 100%;
}
.btn-1 {
    background: rgb(6,14,131);
    background: linear-gradient(0deg, rgba(6,14,131,1) 0%, rgba(12,25,180,1) 100%) !important;
    border: none;
}
.btn-1:hover {
    background: rgb(0,3,255);
    background: linear-gradient(0deg, rgba(0,3,255,1) 0%, rgba(2,126,251,1) 100%) !important;
}
.custom-btn {
    width: 130px;
    height: 40px;
    color: #fff;
    border-radius: 5px;
    padding: 10px 25px;
    font-family: 'Lato', sans-serif;
    font-weight: 500;
    background: transparent;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
    box-shadow: inset 2px 2px 2px 0px rgb(255 255 255 / 50%), 7px 7px 20px 0px rgb(0 0 0 / 10%), 4px 4px 5px 0px rgb(0 0 0 / 10%);
    outline: none;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
 height: auto !important;
}

.login-box {
/*position: absolute; */
  top: 30%;
  left: 20%;
  width: 500px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
			  margin-top: 40%;
			  margin-left: 45%;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form.a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box.a:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box.a span {
  position: absolute;
  display: block;
}

.login-box.a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box.a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box.a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box.a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
#popup-cst-ok, #popup-cst-no {
    text-align: center;
    color: black;
    width: 250px;
    height: 30px;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    font-size: large;
    background-color: white;
    border-radius: 8px;
    border: 1px solid;
    display: none;
}

</style>

    <title>Тестовое задание - Форма</title>
  </head>
  <body style="height: auto !important; min-height: 100%;">
    <div class="sidebar">
     <div class="login-box">
  <h2>Введите данные</h2>
  <form id="feedback-form" action="">
        <div class="user-box">
      <input type="text" name="name" maxlength="25">
      <label>Имя</label>
    </div>
    <div class="user-box">
      <input type="tel" name="phone" required="" maxlength="25">
      <label>Телефон</label>
    </div>
   <div class="user-box">
      <input type="text" name="adr" id="adr" required="">
      <label>Адрес</label>
    </div>
  <div class="user-box">
      <input type="text" name="adr2" required="">
      <label>Адрес с карты</label>
    </div>
    <div style="display: flex; justify-content: center;">
  <input class="custom-btn btn-1" id="custom-btn" type="submit" value="Отправить">
  </div>
<input type="hidden" name="code" value="" id="code"/>
  </form>
</div>

    </div>
<div id="map" style=" margin-top: 2.5%; margin-left: 5%;margin-right: 5%; height:500px;box-shadow: 0 15px 25px rgb(0 0 0 / 60%);"> </div>
   
   <div id='popup-cst-ok'>Успешно отправлено &#128512;</div>
   <div id='popup-cst-no'>Произошла ошибка &#128530;</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
//Разрешение для поля с телефоном
 $(document).ready(function() {
$('[name=phone]').bind("change keyup input click", function() {
if (this.value.match(/[^0-9\+\-\)\(]/g)) {
this.value = this.value.replace(/[^0-9\+\-\)\(]/g, '');
}
});
});
//Разрешение для поля с именем
 $(document).ready(function() {
$('[name=name]').bind("change keyup input click", function() {
if (this.value.match(/[^а-яА-Яa-zA-Z\s\-\)\(]/g)) {
this.value = this.value.replace(/[^а-яА-Яa-zA-Z\s\-\)\(]/g, '');
}
});
});

//защита от спама с помощью скрытого поля

let code = document.querySelector('#code');
  document.querySelector('.custom-btn').onclick = function(){ 
    code.value = 'NOSPAM';
  };
</script>
<script>
    $(document).ready(function () {
    $("form").submit(function () {
        // Получение ID формы
        var formID = $(this).attr('id');
        // Добавление решётки к имени ID
        var formNm = $('#' + formID);
        $.ajax({
            type: "POST",
            url: '/send.php',
            data: formNm.serialize(),
            beforeSend: function () {
                // Вывод текста в процессе отправки
               //$(formNm).html('<p style="text-align:center">Отправка...</p>');
               //$('#form')[0].reset();
               $('#custom-btn').val('Идёт отправка');
            },
            success: function (data) {
            //var bgHeader = $('#header').css('background-color');
               // $(formNm).html('<div style="text-align:center; margin: 200px">oki!</div>');
            //   $('#form')[0].reset();
               var bgHeader = $('#popup-cst-ok').css({'display':'flex'});
                    $('#custom-btn').val('Отправить');
                    $('#feedback-form')[0].reset();
            },
            error: function (jqXHR, text, error) {
                // Вывод текста ошибки отправки
                $(formNm).html(error);
                 var bgHeader = $('#popup-cst-no').css({'display':'flex'});
            }
        });
        return false;
    });
});
//закрываем окошки
    $(function(){
    $('body').bind('click', function(){
        var bgHeader = $('#popup-cst-ok').css({'display':'none'});
         var bgHeader = $('#popup-cst-no').css({'display':'none'});
    });
});
</script>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/css/suggestions.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/suggestions-jquery@21.12.0/dist/js/jquery.suggestions.min.js"></script>

<script>
    $("#adr").suggestions({
        token: "1fef57ec32219fc14c4af4c5011234e7322bf04c",
        type: "ADDRESS",
        /* Вызывается, когда пользователь выбирает одну из подсказок */
        onSelect: function(suggestion) {
            console.log(suggestion);
        }
    });
</script>
   
   
 <script>
ymaps.ready(init);

function init() {
    var myPlacemark,
        myMap = new ymaps.Map('map', {
            center: [55.753994, 37.622093],
            zoom: 9
        }, {
            searchControlProvider: 'yandex#search'
        });

    // Слушаем клик на карте.
    myMap.events.add('click', function (e) {
        var coords = e.get('coords');

        // Если метка уже создана – просто передвигаем ее.
        if (myPlacemark) {
            myPlacemark.geometry.setCoordinates(coords);
        }
        // Если нет – создаем.
        else {
            myPlacemark = createPlacemark(coords);
            myMap.geoObjects.add(myPlacemark);
            // Слушаем событие окончания перетаскивания на метке.
            myPlacemark.events.add('dragend', function () {
                getAddress(myPlacemark.geometry.getCoordinates());
            });
        }
        getAddress(coords);
    });

    // Создание метки.
    function createPlacemark(coords) {
        return new ymaps.Placemark(coords, {
            iconCaption: 'поиск...'
        }, {
            preset: 'islands#violetDotIconWithCaption',
            draggable: true
        });
    }

    // Определяем адрес по координатам (обратное геокодирование).
    function getAddress(coords) {
        myPlacemark.properties.set('iconCaption', 'поиск...');
        ymaps.geocode(coords).then(function (res) {
            var firstGeoObject = res.geoObjects.get(0);

            myPlacemark.properties
                .set({
                    // Формируем строку с данными об объекте.
                    iconCaption: [
                        // Название населенного пункта или вышестоящее административно-территориальное образование.
                        firstGeoObject.getLocalities().length ? firstGeoObject.getLocalities() : firstGeoObject.getAdministrativeAreas(),
                        // Получаем путь до топонима, если метод вернул null, запрашиваем наименование здания.
                        firstGeoObject.getThoroughfare() || firstGeoObject.getPremise()
                    ].filter(Boolean).join(', '),
                    // В качестве контента балуна задаем строку с адресом объекта.
                    balloonContent: firstGeoObject.getAddressLine()
                });
        });
    }
}


 </script>
  </body>
</html>
