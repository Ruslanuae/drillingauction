<?php

/* @var $this yii\web\View */


use app\models\Contacts;
$this->title = 'STIGL - Contacts';
?>

<section>
     <div class="container">
        <div class="title title-contacts">Company contacts</div>
    </div>
</section>



<?php foreach ($contacts as $contact):?>
<section>
<div class="container">
          <div class="row">
          <div class="col-md-7" style="text-align: center;">
          <div style="overflow:hidden;width: 100%;position: relative;"><iframe width="600" height="470" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Dubai+(%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a href="https://embedgooglemaps.com/de/">embedgooglemaps DE</a> & <a href="https://iamsterdamcard.it">http://iamsterdamcard.it/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
            </div>

            <div class="col-md-5">

                    <ul class="contc-acts">
                      <li>
                        <span><img  src="/images/adr.png"></span>
                        <span><b>Address:</b> <?php echo $contact['index_city'],', ', $contact['city'],', ',$contact['street'],', ',$contact['number_home'];?></span>
                      </li>

                      <li>
                          <span><img  src="/images/mai.png"></span>
                          <span>Email: <?php echo $contact['mail'];?></span>
                      </li>

                      <li>
                          <span><img  src="/images/site.png"></span>
                          <span><?php echo $contact['site'];?></span>
                      </li>

                      <li>
                          <span><img class="" src="/images/supp.png"></span>
                          <span>Support: <?php echo $contact['number_s'];?></span>
                      </li>

                    </ul>


            </div>
          </div>
        </div>
</section>


<section>
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="info-contacts">STIGL FZE was established in 2003 with a primary objective of providing support services to the oil, gas and
                        drilling industries as a supplier of oilﬁeld drilling and industrial products. STIGL FZE is Equipment and Service S
                        upplier to the Oil & Gas industry with its main focus on the Drilling and Workover sector.
                        Our Equipment includes the Rental and Sales of Pressure Control Equipment, Downhole Tools,
                        Drill Pipe and Tubulars. STIGL FZE provides the complete well control system solution for all types of well activityt</div>
                  </div>
                </div>
              </div>
          </section>

          <?php endforeach;?>



          



<!--<p>Здесь когда-то будут контакты компании</p>
<p><strong>&nbsp;Как это будет работать?</strong></p>
<p>&nbsp;&nbsp; - Администратор через Админ-панель будет редактировать контакты компании, телефоны, почта и т.п. данные</p>
<p><strong>&nbsp;Можно добавить сюда карту и отметить расположение главного офиса на карте</strong></p>

<p><strong>Если что-то хотите добавить или Вас не устраивает, то опишите просьбу или пожелание в пункте: "4.Контакты" начиная с подпункта "4.1", так мне будет понятнее и проще для формирования дальнейших действий</strong></p>
<p><strong>Для Главной страницы пункт "1.Главная страница" начиная с подпункта "1.1", для страницы "Каталог" -> "2.Каталог" начиная с подпункта "2.1"</strong></p>
<p>Спасибо</p>->