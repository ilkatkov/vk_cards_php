window.onload = function () {

    let popupBg = document.querySelector('.popup__bg');
    let popup = document.querySelector('.popup');
    let closePopupButton = document.querySelector('.close-popup');

    const words = ["Адаптив", "Бэкап", "Дамп", "Деплой", "Капча", "Редирект"];

    const values = [
        "процесс адаптации веб-страниц или веб-интерфейса к использованию на экранах различных устройств",
        "резервное копирование проекта для того, чтобы при каких- либо сбоях иметь возможность восстановить данные",
        "файл, содержащий резервную копию системы/базы данных, актуальную на момент его создания",
        "развертывание программного обеспечения на выбранный сервер, где оно будет работать",
        "картинка, предназначенная для проверки пользователя на предмет его реальности",
        "автоматическое перенаправление пользователя куда-либо: на другой сайт или страницу"
    ];

    var pointsEnd = words.length;
    var points = 0;

    const dragCards = document.getElementsByClassName('descCard');
    const wordCards = Array.from(document.getElementsByClassName('wordCard'));

    for (let i = 0; i < words.length; i++) {
        wordCards[i].innerHTML = words[i];
        wordCards[i].value = values[i];
        wordCards[i].inGame = true;
    };

    function shuffle(array) {
        for (let i = array.length - 1; i > 0; i--) {
          const j = Math.floor(Math.random() * (i + 1));
          [array[i], array[j]] = [array[j], array[i]];
        }
      }
      
    shuffle(values);

    for (let i = 0; i < values.length; i++) {
        let card = dragCards[i];
        card.value = values[i];
        card.onclick = function() {
            document.getElementById('popupText').innerHTML = card.value;
            popupBg.classList.add('active');
            popup.classList.add('active');
        }
    };

    for (let i = 0; i < dragCards.length; i++) {
        let drag = dragCards[i];
    
        drag.addEventListener('touchmove', function (ev) {
            var touchLocation = ev.targetTouches[0];
            if (
                touchLocation.pageX < window.innerWidth-drag.offsetWidth/2
                && touchLocation.pageY < window.innerHeight-drag.offsetHeight/2) {
                drag.style.position = 'absolute';
                drag.style.left = touchLocation.pageX - drag.offsetWidth/2 + 'px';
                drag.style.top = touchLocation.pageY - drag.offsetHeight/2 + 'px';
            }

        });

        drag.addEventListener('touchend', function (ev) {
            wordCards.forEach(item => {
                let drags = drag.getBoundingClientRect();
                let items = item.getBoundingClientRect();
                if (
                    drags.bottom > items.top 
                    && drags.right > items.left 
                    && drags.top < items.bottom 
                    && drags.left < items.right)  {
                        if (item.inGame){
                            if (drag.value == item.value) {
                                drag.style.display = 'none';
                                item.innerHTML = "<img src='img/ok.svg' alt='ok'>";
                                item.value = '';
                                item.inGame = false;
                                points++;
                                if (points == pointsEnd) {
                                    window.location.href = "finish.php";
                                }
                            } else {
                                document.getElementById('popupText').innerHTML = "Ошибка!<br><br>Попробуй другую карточку!";
                                popupBg.classList.add('active');
                                popup.classList.add('active');
                            }
                        } 
                    } 
                });
            drag.style.removeProperty('left');
            drag.style.removeProperty('top');
            drag.style.removeProperty('position');
        });
    }

    closePopupButton.addEventListener('click',() => {
        popupBg.classList.remove('active');
        popup.classList.remove('active');
    });
}