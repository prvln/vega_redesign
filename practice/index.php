<?php
	require_once('../nutils.php');
	
	printHeader('Практика на предприятии');
?>

<div class="container-md">
        <h2 class="text-center mb-5 mt-3 element-animation"><strong>Практика на предприятии</strong></h2>
        <h5 class="text-muted mt-3 element-animation"><strong>Навигация по отделам:</strong></h5>
            
            <div class="d-flex justify-content-start flex-column flex-lg-row flex-wrap element-animation">  
                    
                    <a href="#second" class="btn btn-outline-secondary my-1 mr-lg-2">Разработка и сопровождение ПО</a>
                    <a href="#third" class="btn btn-outline-secondary my-1 mr-lg-2">Вычислительная техника и ПЛИС</a>
                    <a href="#four" class="btn btn-outline-secondary my-1 mr-lg-2">Комплексный отдел БИУС</a>
                    <a href="#five" class="btn btn-outline-secondary my-1 mr-lg-2">Радиоуправление и радиолокация</a>
                    <a href="#six" class="btn btn-outline-secondary my-1 mr-lg-2">Синтез и обработка РЛИ</a>
                    <a href="#first" class="btn btn-outline-secondary my-1 mr-lg-2">Базовая кафедра</a>
            </div>

      <div class="row featurette practice">
        <div class="col-md-6 ">
          <h2 id="second" class="featurette-heading mb-2 element-animation">Отдел разработки и сопровождения программного обеспечения</h2>
          <p class="element-animation" align="justify">Отдел включает три лаборатории, в каждой из которых создаются как функциональные программы для использования в составе изделий Концерна, так и технологические программы, необходимые для создания, отладки, испытаний или сопровождения функциональных.</p>
          <p class="element-animation" align="justify">

          Программы создаются на основании ТЗ, полученного от заказчика, проектируются ведущими разработчиками, затем реализуются командой программистов, по ним оформляется программная документация и проводятся испытания.</p>
          <p class="element-animation" align="justify">

            В отделе есть команды, специализирующиеся на создании высокопроизводительных систем обработки радиолокационной информации, графических приложений Qt для отображения обстановки операторам и управления решением задач на борту, систем управления, баз данных, программных имитаторов различных устройств, технологических программ для анализа сетевых взаимодействий и зарегистрированной информации. Мы любим автоматизировать и упрощать свою работу, поэтому также ведется несколько разработок системного программного обеспечения.</p>
          <p class="element-animation" align="justify">
            
            Разработка ведется под ОС Astra Linux, Windows, QNX, МСВС. Применяется система контроля версий и непрерывной интеграции на базе GitLab, система отслеживания задач Jira, хранения документации Confluence, и другие обитатели виртуальных машин на общем сервере. После завершения разработки ПО интегрируется в состав изделий на технологических стендах нашего отдела и других, комплексных отделов. Все это, конечно, требует гибкого управления сетевой инфраструктурой и DevOps.</p>
        </div>
        <div class="col-md-3">
          
           
          <img src="../images/devPO.png" class="element-animation card-img-top rounded-3">
          <img src="../images/devPO1.jpg" class="element-animation card-img-top rounded-3"> 
          <img src="../images/devPO2.jpg" class="element-animation card-img-top rounded-3">  
          <img src="../images/devPO3.jpg" class="element-animation card-img-top rounded-3">     
    
        </div>

        <div class="col-md-3">
          <img src="../images/devPO4.jpg" class="element-animation card-img-top rounded-3">
          <img src="../images/devPO5.jpg" class="element-animation card-img-top rounded-3">
          <img src="../images/devPO6.jpg" class="element-animation card-img-top rounded-3">
          <img src="../images/devPO7.jpg" class="element-animation card-img-top rounded-3">
        </div>
      </div>

        <div class="row featurette practice">
        <div class="col-md-8 order-md-2">
          <h2 id="third" class="featurette-heading mb-2 element-animation">Отдел разработки вычислительной техники и программирования ПЛИС</h2>
          <p class="element-animation" align="justify">Отдел занимается специализированными бортовыми  устройствами обработки радиолокационной информации. На практике студенты могут поработать с "железом", которое обрабатывает сигналы от радиолокатора. Для этого &laquo;железа&raquo; используются ПЛИС — программируемые логические интегральные схемы.
          </p>
          <p class="element-animation" align="justify">
            Алгоритм работы таких схем задаётся на самом низком уровне: с помощью программирования транзисторов и вентилей. Это позволяет достичь высокой производительности и надёжности в критически важных системах.
            </p>
          <p class="element-animation" align="justify">
            Программирование ПЛИС сильно отличается от традиционного программирования и позволяет лучше разобраться в аппаратном обеспечении современных компьютеров и специализированных вычислительных систем. ПЛИС применяются не только для обработки радиолокационной информации, с их помощью управляют беспилотными автомобилями, летательными аппаратами и даже майнят биткоины.
            </p>
          <p class="element-animation" align="justify">
            Кроме этого отдел занимается разработкой различных устройств контроля, построенных на базе универсальной или специализированной вычислительной техники.
            </p>
        </div>
        <div class="col-md-4 order-md-1">
          <img src="../images/plis.jpg" class="card-img-top rounded-3 element-animation">
          <img src="../images/plis2.jpg" class="card-img-top rounded-3 element-animation">
          <img src="../images/plis3.jpg" class="card-img-top rounded-3 element-animation">

        </div>
      </div>

      <div class="row featurette practice">
        <div class="col-md-8 ">
          <h2 id="four" class="featurette-heading mb-2 element-animation">Комплексный отдел БИУС</h2> 
          <p class="element-animation" align="justify">Отдел занимается программно-аппаратным комплексом бортовой информационно-управляющей системы.</p>
          <p class="element-animation" align="justify">
          Из множества компонентов, разрабатываемых в других подразделениях и на других предприятиях, отдел собирает и интегрирует единую систему управления. Для этого необходимо разрабатывать общие принципы построения системы, проводить работу с подрядчиками, согласовывать требования к подсистемам, протоколы взаимодействия, процедуры испытаний. При получении компонентов, программных или аппаратных, от посторонних разработчиков проводятся испытания этих компонентов, различные виды проверок, оформляется программная документация. Все эти операции на данный момент практически не автоматизированы, но такая возможность существует.</p>
          <p class="element-animation" align="justify">

            По результатам испытаний проводится работа по согласованию списков необходимых доработок и определяется их приоритетность.</p>
          <p class="element-animation" align="justify">
            
            Еще одним направлением работы отдела является создание инструментальных средств для установки, настройки программного обеспечения на узлах распределенного вычислительного комплекса, мониторинг состояния комплекса, процедур подготовки и переноса необходимых для его функционирования баз данных. Многие из таких программ создаются непосредственно в комплексном отделе.</p>
          <p class="element-animation" align="justify">
            
            Для разработки документации используется Word, LibreOffice, (La)TEX.</p>
        </div>
        <div class="col-md-4">
          <img src="../images/bius.jpg" class="card-img-top rounded-3 element-animation" >
  
        </div>
      </div>
        
        

      <div class="row featurette practice">
        <div class="col-md-6 order-md-2">
          <h2 id="five" class="featurette-heading mb-2 element-animation">Отдел перспектив развития систем радиоуправления и радиолокации</h2>
          <p class="element-animation" align="justify"> В отделе два основных направления работ – во-первых, применение методов искусственного интеллекта в задачах обработки информации и управления, во-вторых, разработка алгоритмов управления БПЛА, мониторинга пространства и применения пространственных приемо-излучающих структур на базе БПЛА.</p>
          <p class="element-animation" align="justify">

            Для создания и моделирования алгоритмов используются средства математического и имитационного моделирования (MatLab, Simulink), библиотеки, фреймворки для машинного обучения и работы с нейронными сетями, нечеткой логики, а также разрабатываются специальные программы для моделирования расчетов, отображения и оценки результатов на языке Python.</p>
          <p class="element-animation" align="justify">
            
            Опыт разработки таких перспективных алгоритмов позволит довольно легко найти себе применение в сфере разработки сложных информационных и управляющих систем самого разного назначения.</p>
        </div>
        <div class="col-md-3 order-md-1">
          <img src="../images/rls.jpg" class="card-img-top rounded-3 element-animation">
          <img src="../images/rls1.jpg" class="card-img-top rounded-3 element-animation">
        </div>
        <div class="col-md-3 order-md-1">
          <img src="../images/rls2.jpg" class="card-img-top rounded-3 element-animation">
        </div>
      </div>

      <div class="row featurette practice">
        <div class="col-md-6 ">
          <h2 id="six" class="featurette-heading mb-2 element-animation">Отдел алгоритмов синтеза и обработки радиолокационных изображений</h2>
          <p class="element-animation" align="justify">Отдел занимается разработкой, моделированием и повышением эффективности алгоритмов обработки радиолокационных сигналов, синтеза и обработки радиолокационных изображений (РЛИ) для радиолокаторов с синтезированной апертурой. То есть локаторов, в которых излучатель перемещается для сканирования некоторой поверхности или пространства. </p>
          <p class="element-animation" align="justify">

          В алгоритмах синтеза и обработки РЛИ есть много общего с обработкой других видов изображений: фотоснимков, голограмм, графических. Познакомившись с основами обработки изображений, вы сможете участвовать в создании моделей, алгоритмов и программ для автофокусировки, повышения разрешающей способности, выявления подвижных целей, распознавания на них объектов и их типов, проводить совместную обработку различных изображений одного объекта или местности. </p>
          <p class="element-animation" align="justify">

          Также в отделе ведется разработка допплеровского измерителя скорости и дальности для посадочного модуля космических кораблей. Такой измеритель позволит обеспечить безопасную посадку космических аппаратов на поверхность планет. В его алгоритмах используется пространственная геометрия, а их реализация должна учитывать динамическое изменение параметров среды. В разработках отдела для построения и отладки математических моделей и алгоритмов в основном используются средства математического моделирования MatLab и MathCad, а для реализации алгоритмов – языки C и C++.
           </p>
        </div>
        <div class="col-md-3">
        <img src="../images/rlspic.jpg" class="card-img-top rounded-3 element-animation">
          <img src="../images/rlspic1.jpg" class="card-img-top rounded-3 element-animation">
        </div>
        <div class="col-md-3">
          <img src="../images/rlspic3.jpg" class="card-img-top rounded-3 element-animation">
          <img src="../images/rlspic.png" class="card-img-top rounded-3 element-animation">
        </div>

      </div>

      <div class="row featurette practice">
        <div class="col-md-8 order-md-2">
          <h2 id="first" id="" class="featurette-heading mb-2 element-animation">Базовая кафедра</h2><p class="element-animation" align="justify"> Наша кафедра – одно из подразделений Института искусственно интеллекта, работающего под эгидой Концерна, в котором можно проходить практику и готовить выпускную работу. Программными продуктами, созданными на кафедре, вы наверняка уже пользовались и будете пользоваться еще больше. CMS для дистанционного обучения, проверки учебных работ преподавателем, прохождение предзащиты, формирование программы нашей секции на Конференции МИРЭА, карта специальности, галерея лучших учебных работ и многие другие сервисы – разработаны и уже используются. Теперь хотелось бы сделать кафедру настоящим &laquo;умным домом&raquo;. </p>
          <p class="element-animation" align="justify">

          Сейчас для этого постоянно дорабатывается сайт кафедры (PHP, JS, CSS, Python, SQLite, PostgreSQL, Docker, Git, COM, REST, семантический поиск), а также создаются несколько мобильных приложений под iOS, Android и телеграм-ботов. Отличие этого направления от остальных в том, что в разработках много графики, пользовательского интерфейса, вы оперативно будете получать обратную связь от пользователей вашего продукта и ощущать получаемую пользу сами, что делает работу гораздо более интересной.</p>
        </div>
        <div class="col-md-4 order-md-1">
          <img src="../images/caf.png" class="element-animation card-img-top rounded-3">

        </div>
      </div>

    </div>
	
<?php
	printFooter();
?>