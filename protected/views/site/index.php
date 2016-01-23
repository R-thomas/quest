<div class="container-fluid bg">
    <header>
        <div class="row bg">
            <div class="row bot">
                <div class="col-md-2 col-sm-4 col-xs-4 col-md-offset-3 col-sm-offset-0 col col-xs-offset-0">
                    <div class="tel_title_div"><p class="tel_title lead">Телефон:</p></div>
                    <p class="tel lead">+7(423) 267 00 66<br />+7(914) 693 75 07</p>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-4 col-md-offset-0 col-sm-offset-0 col col-xs-offset-0">
                    <img class="logo img-responsive center-block" src="../../../images/logo.png"/>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-4" id="adr">
                    <p class="adr_title lead">Адрес:</p>
                    <p class="adr lead">Владивосток , ул. Жигура, 26, <br />7 подъезд (фиолетовый)</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 pos pos1">
                    <p class="main main1 lead1 text-uppercase">Впервые во Владивостоке!</p>
                </div>    
                <div class="col-md-6 col-sm-12 col-xs-12 pos pos2">
                    <p class="main lead1 text-uppercase">Квесты с продолжением!</p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 pos3 text-center">
                    <p class="main lead1 text-uppercase">Вызов, преодоление, победа!</p>
                </div>    
                    <div class="wrap_button"><a href="/site/order" class="submit"><span class="lead2 text-uppercase">Забронировать квест</span></a></div>
                
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="row block2">
                <div class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 col col-xs-offset-0">
                    <h1 class="title_h1 text-uppercase">Оживший квест</h1>
                    <img src="../../../images/arrow.png" width="195" height="19" class="arrow img-responsive center-block"/>
                    <h6 class="block2_h6">Что такое наши квесты?</h6>
                    <p class="block2_p">Это квесты нового формата. Здесь нет привычных ограничений, линий отделяющих игровую зону или меток на неиспользуемых предметах. Это квесты в которых нет выхоленной игровой зоны а обстановка максимально приближенна к реальности.Это квесты где нужно приложить немало усилий что бы сориентироваться в обстановке и принять правильное решение.</p>
                </div>
            </div>
        </section>
        <section>
            <div class="row block3">
                <h2 class="text-uppercase title_h2 lead3"><u>пройди лабиринтами времени, открой другую реальность!</u></h2>
                <div class="col-md-4 col-sm-4 col-xs-12 img1"><h3 class="text-uppercase"><u>Сделай открытие!</u></h3><p class="block3_p">Надоело зависать дома? Все настольные игры давно наскучили? От компьютера уже болят глаза? Сделай для себя открытие в игровом мире!</p></div>
                <div class="col-md-4 col-sm-4 col-xs-12 img2"><h3 class="text-uppercase"><u>Включай мозги!</u></h3><p class="block3_p">City quest — это новый формат развлечений для тебя и твоих друзей! City quest  — квест комнаты. Представь, ты оказался взаперти с кучкой своих друзей, и для того, чтобы выйти тебе не помогут ни связи, ни сила. Включай мозги и найди выход из комнаты!</p></div>
                <div class="col-md-4 col-sm-4 col-xs-12 img3"><h3 class="text-uppercase"><u>Время ограничено!</u></h3><p class="block3_p">У тебя всего час. Час, чтобы выбраться. Час, чтобы доказать, что твоя смекалка на уровне, и в стрессовой ситуации ты сможешь всегда найти выход! Ищи ключи, подсказки, решай головоломки, почувствуй себя в шкуре детектива!</p></div>
            </div>
        </section>
        <section>
            <div class="row block4">
                <div class="col-lg-6 col-md-7 col-sm-8 hidden-xs present">
                <img src="../../../images/present.png" width="438" height="502" class="img-responsive center-block present_img img_pres" />
                </div>
                <div class="col-lg-6 col-md-5 col-sm-4 col-xs-12 present_img"><h4 class="text-uppercase title_h4">Квест в подарок</h4>
                <img src="../../../images/arrow.png" width="210" height="19" class="img-responsive center-block arrow2" />
                <p class="lead4">Подарочный сертификат проекта City quest  является прекрасными подарком, предоставляющим получателю выбор любого квеста в любое время и в любой день.</p>
                <p class="lead4">Стоимость сертификата City quest  – 2500 рублей.</p>
                <p class="lead4">Сертификат может быть доставлен по удобному для Вас адресу в удобное для Вас время. Стоимость доставки – 0 рублей.</p>
                <div class="wrap_button2"><a href="/site/present" class="submit2 text-uppercase">Купить</a></div>
                
                </div>
            </div>
        </section>
        <section>
            <div class="row block5">
                <div class="col-md-12 col-sm-12 col-xs-12 pos">
                    <h5 class="text-uppercase">Стань героем своей истории в компании друзей!</h5>
                    <h5 class="text-uppercase">Игра для любого возраста</h5>
                </div>
            </div>
        
    
            <!--Слайдер-->
            <div class="row block6">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                                
                    <!--Контент слайдера-->
                    <div class="carousel-inner">
            
                    <?php 
                    $i = 0;
                    $j = 10;
                    echo '<div class="item active">';
                    foreach ($model as $iter=>$item)
                      {    
                        $j++;
                        $i++;
                        
                        if($i == 3)
                        {
                            echo '<div class="col-md-4 col-sm-4 col-xs-12">   ';
                            echo '<img src="../../../upload/images/'.$item->image.'" width="282" height="212" class="img-responsive center-block"/>   ';
                            echo '<h5 class="text-uppercase"><u>'.$item->title.'</u></h5>   ';
                            echo '<p>'.$item->description.'</p>   ';
                            echo '</div>   ';
                            echo '</div>   ';
                            $i = 5;
                            continue;
                        }
                        
                        if($i%3 == 0)
                        {
                            $j=0;
                            echo '<div class="item">';
                        }    
                        
                        echo '<div class="col-md-4 col-sm-4 col-xs-12">   ';
                        echo '<img src="../../../upload/images/'.$item->image.'" width="282" height="212" class="img-responsive center-block"/>   ';
                        echo '<h5 class="text-uppercase"><u>'.$item->title.'</u></h5>   ';
                        echo '<p>'.$item->description.'</p>   ';
                        echo '</div>';
                        
                        
                        if($j == 2)
                        {
                            echo '</div>   ';
                        } 
                        
                      }  
                      if($i == 5){
                        echo "<div>";
                      }
                      if($j == 2)
                      echo "<div>";
                    ?>
                    
                    </div>
                    </div>
                    <!--Стрелки влево и вправо-->
                    <a href="#carousel" class="left carousel-control" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#carousel" class="right carousel-control" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
                
                
                
                
                
                
                <div class="col-md-12 col-sm-12 col-xs-12 lead5">
                        <div class="wrap_button3"><a href="/site/order" class="submit3 text-uppercase">Забронировать квест</a></div>
                </div>
            </div>
        </section>
        <section>  
            <div class="row block7">
                    <div class="col-md-6 col-sm-8 col-xs-10 col-md-offset-3 col-sm-offset-2 col-xs-offset-1 feedback">
                        <h5 class="text-uppercase"><u>Гости говорят</u></h5>
                        <p>“Это был наш четвертый поход на подобное мероприятие, но этот квест особенно порадовал, потому что заставил на полную мощность работать все органы чувств. Считаю, что локация атмосферна, все логично и продумано.”</p>
                    </div>
            </div>
        </section>  
        <section>
            <div class="row block8">
                <h5>Как с нами связаться?</h5>
                <img src="../../../images/arrow2.png" width="282" height="19" class="arrow3 img-responsive center-block"/>
                <div class="col-md-4 col-sm-4 col-xs-12 comm1">
                    <div class="cont1_block8"></div>
                    <p class="text-uppercase"><u>...на почту</u></p>
                    <p class="descr">Владивосток , ул. Жигура, 26</p>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 comm2">
                    <div class="cont2_block8"></div>
                    <p class="text-uppercase"><u>...позвони</u></p> 
                    <p class="descr">+7(423) 267 00 66</p>      
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 comm3">
                    <div class="cont3_block8"></div>
                    <p class="text-uppercase"><u>...отправь email</u></p>
                    <p class="descr">Ваш email</p>
                </div>
            </div>
        </section>
    </main>
    <footer>        
        <div class="row footer">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <p>© ООО “Сити квест лабиринт”. ВСЕ ПРАВА ЗАЩИЩЕНЫ</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <p class="text-right">Рекламно-производственная группа IDEA FIX</p>
            </div>
        </div>
    </footer>    
</div>