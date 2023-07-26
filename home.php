<?php get_header();
// Template Name: home page
?>

            <div class="page">
                <section id="bl-1" class="main">
                    <div class="container flex">
                        <div class="inner">
                            <h1>Благодійна<br>організація<br>«Ми поруч»</h1>
                            <p>Допомагаємо жінкам, які втратили чоловіка на війні, повернутися до повноцінного життя.</p>
                            <div class="photo">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/main-2.png" alt="">
                            </div>
                            <a href="#bl-3" class="button button-dark">Дізнатися більше +</a>
                        </div>
                    </div>
                </section>
                <section id="services" class="services" >
                    <div class="container">
                        <div class="inner">
                            <div class="">
                                <!-- <p class="block-number">02/07</p> -->
                                <h2>Яку допомогу<br>ми надаємо?</h2>
                            </div>
                            
                            <div class="services-items">
                                <div class="services-item service">
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/service-1.png" alt="icon service 1">
                                    </div>
                                    <h3>матеріальна допомога</h3>
                                    <p>Допомагаємо матеріально жінкам, які залишились з дітьми у вигляді разової виплати.</p>
                                </div>
                                <div class="services-item service" >
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/service-2.png" alt="icon service 2">
                                    </div>
                                    <h3>Психологічна допомога</h3>
                                    <p>Надаємо безкоштовні психологічні консультації жінкам особисто та у групах.</p>
                                </div>
                                <div class="services-item service" >
                                    <div class="icon"><img src="<?php echo get_template_directory_uri();?>/assets/images/service-3.png" alt="icon service 3"></div>
                                    <h3>Інформаційна допомога</h3>
                                    <p>Надаємо інформаційну підтримку з питань отримання грошової допомоги та психологічного здоров’я.</p>
                                </div>
                                <div class="services-item service" >
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/service-4.png" alt="icon service 4">
                                    </div>
                                    <h3>консультаційна допомога</h3>
                                    <p>Надаємо безкоштовні юридичні консультації жінкам з питань виплат від держави.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="bl-3" class="work">
                    <div class="container">
                        <a href="" class="button button-dark">Отримати допомогу +</a>
                        <div class="inner flex">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/work-icon.svg" alt="icon sun in the palm">
                            <div class="content">
                                <h2>Як ми працюємо?</h2>
                                <p> <span>Після втрати кожна жінка проходить 5 болючих етапів прийняття, а паралельно стикається з рядом юридичних та матеріальних проблем.</span></p>
                                <p>Втрата близької людини - це сильний шок, який повністю змінює життя людини. Дуже важливо прожити кожний з них, отримати необхідну підтримку. Саме це гарантує повернення до нормального життя.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="bl-4" class="stages">
                    <div class="container">
                        <div class="inner">
                            <!-- <p class="block-number">03/07</p> -->
                            <h2>Що це<br>за етапи?</h2>
                            <div class="stages-slider" >
                                <div class="stage">
                                    <div class="stage-header flex">
                                        <div class="stage-icon">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/stage-icon-1.svg" alt="stage icon 1">
                                        </div>
                                        <h3>
                                            <span>Етап 1</span><br>Заперечення
                                        </h3>
                                    </div>
                                    <p>На цьому етапі жінка заперечує те, що трапилося, не приймає реальності. Часто люди відмовляються від їжі, мають проблеми зі сном. Водночас жінка має займатися важливими питаннями: збирати документи, пояснювати дитині факт смерті батька.</p>
                                    <h4>Що ми робимо?</h4>
                                    <ul>
                                        <li>Надаємо 3 психологічні консультації для визнання втрати, адаптації психіки до нової реальності.</li>
                                        <li>Допомагаємо зібрати необхідні документи (витяг з воєнкомату, свідоцтво про смерть).</li>
                                        <li>Надаємо матеріальну допомогу, якщо в цьому є потреба.</li>
                                    </ul>
                                </div>
                                <div class="stage">
                                    <div class="stage-header flex">
                                        <div class="stage-icon">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/stage-icon-2.svg" alt="stage icon 2">
                                        </div>
                                        <h3>
                                            <span>Етап 2</span><br>Гнів
                                        </h3>
                                    </div>
                                    <p>На цьому етапі жінка відчуває злість на всіх: на світ, на себе та на обставини. Це дуже важкий та небезпечний період. Інколи на цьому етапі виникає заміщення: самопошкодження, вживання алкоголю і тд.</p>
                                    <h4>Що ми робимо?</h4>
                                    <ul>
                                        <li>Надаємо 3 психологічні консультації, які позбавляють жінку від негативних тригерів.</li>
                                        <li>Допомагаємо створити заяву на отримання грошової компенсації від держави.</li>
                                    </ul>
                                </div>
                                <div class="stage">
                                    <div class="stage-header flex">
                                        <div class="stage-icon">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/stage-icon-3.svg" alt="stage icon 3">
                                        </div>
                                        <h3>
                                            <span>Етап 3</span><br>Компроміс
                                        </h3>
                                    </div>
                                    <p>Жінка знаходиться в стані "хибної надії", відмовляється признавати факт смерті, починає вірити в надсили, з'являються думки по типу “а що б було, якщо б я”.</p>
                                    <h4>Що ми робимо?</h4>
                                    <ul>
                                        <li>Надаємо 3 психологічні консультації, які допомагають визнати обставини та відповідальність за своє життя.</li>
                                        <li>Допомагаємо подати заяву на грошову компенсацію, та в разі чого - апеляцію на відмову від надання виплат.</li>
                                    </ul>
                                </div>
                                <div class="stage">
                                    <div class="stage-header flex">
                                        <div class="stage-icon">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/stage-icon-4.svg" alt="stage icon 4">
                                        </div>
                                        <h3>
                                            <span>Етап 4</span><br>Депресія
                                        </h3>
                                    </div>
                                    <p>Найбільш важкий етап: жінка визнає те, що сталось, закривається у собі, стає апатичною. На цьому етапі можуть з'являтися суїцідальні думки, людина відмовляється від спілкування, закривається у собі.</p>
                                    <h4>Що ми робимо?</h4>
                                    <ul>
                                        <li>Надаємо 4 психологічні консультації та пропонуємо заняття в группах для виходу з депресивного стану.</li>
                                    </ul>
                                </div>
                                <div class="stage">
                                    <div class="stage-header flex">
                                        <div class="stage-icon">
                                            <img src="<?php echo get_template_directory_uri();?>/assets/images/stage-icon-5.svg" alt="stage icon 5">
                                        </div>
                                        <h3>
                                            <span>Етап 5</span><br>Прийняття
                                        </h3>
                                    </div>
                                    <p>Фінальний етап. Жінка приймає, наскільки це можливо, ситуацію. Повертається до життя. На цьому етапі також виникає потреба в організації побуту, вирішенні додаткових юридичних питань.</p>
                                    <h4>Що ми робимо?</h4>
                                    <ul>
                                        <li>Надаємо дві психологічні консультації, які допомагають прожити емоції.</li>
                                        <li>Надаємо юридичну консультацію, якщо в цьому є потреба.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="bl-5" class="team">
                    <div class="container fixed">
                        <div class="relative">
                            <!-- <p class="block-number">04/07</p> -->
                            <h2>В цьому нам допомагає наша <br>
                                команда психологів та юристів:</h2>
                        </div>
                        <div class="team-slider">
                            <div class="team-item">
                                <div class="photo">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/tetyna.jpg" alt="">
                                </div>
                                <div class="inner">
                                    <h5>Тетяна Лицишин</h5>
                                    <p>психолог та КПТ-консультант з медичною освітою</p>
                                    <a href="https://myporuch.io/help/" class="more">Детальніше</a>
                                    <a href="https://myporuch.io/help/" class="button button-dark">Отримати допомогу +</a>
                                </div>
                            </div>
                            <div class="team-item">
                                <div class="photo">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/margo.jpeg" alt="">
                                </div>
                                <div class="inner">
                                    <h5>Маргарита Степаненко</h5>
                                    <p>Психолог з вищою освітою, досвід роботи 3 роки. </p>
                                    <a href="https://myporuch.io/help/" class="more">Детальніше</a>
                                    <a href="https://myporuch.io/help/" class="button button-brown">Отримати допомогу +</a>
                                </div>
                            </div>
                            <div class="team-item">
                                <div class="photo">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/photo-3.JPG" alt="">
                                </div>
                                <div class="inner">
                                    <h5>Євгеній Промський</h5>
                                    <p>Юрист адвокатського об'єднання "Юридична компанія АРЕС".</p>
                                    <a href="https://myporuch.io/help/" class="more">Детальніше</a>
                                    <a href="https://myporuch.io/help/" class="button button-dark">Отримати допомогу +</a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="team-bottom">
                            <img class="decor" src="<?php echo get_template_directory_uri();?>/assets/images/decor.svg" alt="">
                            <div class="inner">
                                <h3>80% жінок звертаються до нас у тяжких емоційних станах (депресія, обсесивні розлади, генералізовані тривожні розлади).</h3>
                                <p>Саме тому так важливо, щоб жінка звернулась вчасно.  Поширюйте інформацію про нас.</p>
                                <div class="social">
                                    <a href="https://t.me/+p12XGL9izsJlZTYy"><img src="<?php echo get_template_directory_uri();?>/assets/images/telegram.svg" alt="telegram icon"></a>
                                    <a href="https://www.instagram.com/myporuch/?igshid=YmMyMTA2M2Y%3D"><img src="<?php echo get_template_directory_uri();?>/assets/images/instagram.svg" alt="instagram icon"></a>
                                    <!-- <a href=""><img src="<?php echo get_template_directory_uri();?>/assets/images/twitter.svg" alt="twitter icon"></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="bl-6" class="done donate" style="margin-bottom: 90px;">
                    <div class="container">
                        <h2>Наша робота<br>у цифрах</h2>
                        <div class="done-items">
                            <div class="done-item" style="padding-right: 9px;">
                                <div class="done-icon flex">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/done-icon-1.svg" alt="">
                                </div>
                                <div class="done-inner">
                                    <h3>500 000 грн</h3>
                                    <p>матеріальної допомоги жінкам</p>
                                </div>
                            </div>
                            <div class="done-item">
                                <div class="done-icon flex">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/done-icon-2.svg" alt="">
                                </div>
                                <div class="done-inner">
                                    <h3>100</h3>
                                    <p>психологічних консультацій</p>
                                </div>
                            </div>
                            <div class="done-item">
                                <div class="done-icon flex">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/done-icon-3.svg" alt="">
                                </div>
                                <div class="done-inner">
                                    <h3>50</h3>
                                    <p>юридичних консультацій</p>
                                </div>
                            </div>

                        </div>
                        <a href="https://myporuch.io/join/" class="button button-dark">Отримати допомогу +</a>
                    </div>
                </section>
                <!-- <section id="bl-6" class="join">
                    <div class="container">
                        <div class="inner">
                            <div class="relative">
                                <p class="block-number">05/07</p>
                                <h2>Ми вже допомогли 150 жінкам</h2>
                                <h2>Надали 100 психологічних консультацій</h2>
                                <h2>Та 50 юридичних</h2>
                            </div>
                            <p>Готові доєднатись до нашої команди, як експерт?</p>
                            <div class="join-items">
                                <div class="join-item">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/join-1.png" alt="">
                                </div>
                                <div class="join-item">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/join-2.png" alt="">
                                </div>
                                <div class="join-item">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/join-3.png" alt="">
                                </div>
                            </div>
                            <a href="https://myporuch.io/join/" class="button  button-dark">Доєднатися +</a>
                            
                        </div>
                    </div>
                </section> -->
                <section id="bl-7" class="reports" id="reports">
                    <div class="container">
                        <div class="relative">
                            <!-- <p class="block-number">06/07</p> -->
                            <h2>Звіти</h2>
                        </div>
                        <p>35 жінок отримали матеріальну допомогу у розмірі  485 000 гривень.</p>
                        <div class="inner flex">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/reports-img.png" alt="">
                            <div class="content">
                                <div class="reports-slider">
                                    <div class="reports-item">
                                        <h3>Матеріальна та психологічна<br>допомога для <br> Анастасії Костенко </h3>
                                        <div class="content">
                                            <p>Розмір матеріальної<br> допомоги:  20 000 грн</p>
                                            <p>Кількість наданих юридичних та психологічних консультацій: 15</p>
                                        </div>
                                    </div>
                                    <div class="reports-item">
                                        <h3>Матеріальна та психологічна<br>допомога для <br> Катерини Сиверін</h3>
                                        <div class="content">
                                            <p>Розмір матеріальної<br> допомоги:  10 000 грн</p>
                                            <p>Кількість наданих юридичних та психологічних консультацій: 7</p>
                                        </div>
                                    </div>
                                    <div class="reports-item">
                                        <h3>Матеріальна та психологічна<br>допомога для Тетяни Чоп</h3>
                                        <div class="content">
                                            <p>Розмір матеріальної<br> допомоги:  20 000 грн</p>
                                            <p>Кількість наданих юридичних та психологічних консультацій: 14</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://myporuch.io/category/reports/" class="button button-light">Подивитися усі звіти +</a>  
                            </div> 
                        </div>
                    </div>
                </section>
                <section id="bl-8" class="media">
                    <div class="media-top">
                        <div class="container">
                            <div class="relative">
                                <!-- <p class="block-number">07/07</p> -->
                                <h2>Медіа<br>
                                    «Ми поруч»</h2>
                            </div>
                            
                            <div class="media-slider">
                            <?php
                            $args = array(
                                'category_name' => 'media',
                                'post_type' => 'post',
                                'posts_per_page' => 4
                            );

                            // запрос
                            $query = new WP_Query( $args ); ?>

                            <?php if ( $query->have_posts() ) : ?>
                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="media-item">
                                                                        <div class="media-cover">
                                                                            <a href="<?php the_permalink() ?>"><?php echo the_post_thumbnail();?> </a>                                            </div>
                                                                        <h5><?php the_title();?></h5>
                                                                        <p><?php the_excerpt(); ?></p>
                                                                    </div>
	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'немає актуальних постів' ); ?></p>
<?php endif; ?>
                            </div>
                            <a href="https://myporuch.io/category/media/" class="button button-dark">Читати повністю +</a>
                        </div>
                    </div>
                    <div class="media-bottom">
                        <div class="container">
                            <!-- <h2>Головне</h2> -->
                            <div class="content">
                                <div class="about-author">
                                    <div class="avatar">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/vernerul-1.jpeg" alt="">
                                    </div>
                                    <h4>уляна вернер</h4>
                                    <p>Засновниця благодійної організації</p>
                                        <blockquote >
                                            <p>Багато фондів допомагають армії, ми з командою вирішили піклуватися про тих, кого наші воїни цінували найбільше. Тисячі жінок втратили свою опору на війні, на жаль, продовжують втрачати. Вважаю своїм обов’язком допомогти цим жінкам, бо маємо можливість.</p>
                                        </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="bl-9" class="press" >
                    <div class="container">
                        <div class="inner">
                            <img class="decor" src="<?php echo get_template_directory_uri();?>/assets/images/decor.svg" alt="">
                            <h2>ЗМІ про нас</h2>
                            <div class="content">
                                <a href="https://news.obozrevatel.com/ukr/society/dopomoga-zhinkam-pid-chas-vijni-yak-otrimati-novu-viplatu.htm" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/images/obozrevatel.png" alt="obozrevatel"></a>
                                <a href="https://www.rbc.ua/rus/styler/ukrayintsi-mozhut-otrimati-shche-odnu-materialnu-1678970920.html" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/images/ukraine.png" alt="ukraine"></a>
                                <a href="https://life.nv.ua/ukr/socium/yak-otrimati-dodatkovi-viplati-pid-chas-viyni-podrobici-novini-ukrajini-50313511.html" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/images/life.png" alt="life"></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
<?php get_footer();?>