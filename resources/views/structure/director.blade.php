
@extends('layouts.app')

@section('content')
{{--<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">--}}
{{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">--}}
{{--<link rel="stylesheet" href="css/director.css"--}}
{{--<script src="http://code.jquery.com/jquery-latest.min.js"></script>--}}
<div class="director__way">
    <a href="{{ URL::to('/') }}">Главная</a>&nbsp;/
    <a href="{{ URL::to('/structure/administration') }}">Административно-управленческий аппарат</a>&nbsp;/
    <a href="{{ URL::to('/structure/director') }}">Матыжанов Кенжехан</a>
</div>
<div>
    <div class="container_1">
        <div class="director">
            <div>
                <div class="director__admin">
                    <div class="director__admin__photo">
                        <img src="../css/img/admins/director.jpg" alt="альтернативный текст">
                    </div>
                    <div class="director__admin__text">
                        <h3>Матыжанов Кенжехан Слямжанович</h3>
                        <p>Директор</p>
                    </div>
                </div>
                <div class="social-networks_admins">
                    <ul>
                        <li> <a href="https://www.google.ru/" target="_blank" class="google"><i class="fa fa-google-plus"></i></a> </li>
                        <li> <a href="https://www.vk.com/" target="_blank" class="vk"><i class="fa fa-vk"></i></a>            </li>
                        <li><a href="https://www.facebook.com/" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li>  <a href="https://www.instagram.com/" target="_blank" class="inst"><i class="fa fa-instagram"></i></a> </li>
                    </ul>
                </div>
                <div class="director__content">
                    <div class="text_review">
                        <p class="desc">К.С. Матыжанов – директор Института литературы и искусства имени М.О.Ауэзова КН МОН РК. Доктор филологических наук. За вклад в развитие духовной культуры Казахстана присвоено почетное звание «Заслуженный деятель Республики Казахстан» (2007).</p>


                        <p class="desc">В 2004 году защитил докторскую диссертацию «Семейно-обрядовый фольклор казахов», рассматривая фольклор казахской семейной традиции и обычаев как целостное явление и впервые комплексно исследуя его поэтические особенности и жанровую систему. Кенжехан Матыжанов – автор более 200 научных и научно-популярных статей в отечественных и зарубежных изданиях по проблемам казахского фольклора и литературы, истории культуры, этнологии, музееведения, языковой политики. Автор книг «Қазақтың отбасы фольклоры» («Семейно-обрядовый фольклор казахов», 2007), «Рухани уыз (Казахский детский фольклор)» (1995), «Алтын сандық (Золотой сундук)» (1996 г., в соавт.), «Тал бесіктен жер бесікке дейін (От колыбельной до причитания. О семейно-обрядовом фольклоре казахов)» (1996), «Ел қазынасы – ескі сөз (Образцы казахского фольклора в собрании В.В.Радлова)» (1997 г., в соавт.), «Игровые элементы в казахском фольклоре» (1997) и др.</p>

                        <p class="desc">Трудовую деятельность К.С. Матыжанов начал педагогом, стаж работы в сфере науки более 21 года. На различных руководящих должностях стаж работы – 26 лет. С 1990 по 1999 годы был ученым секретарем Отделения общественных наук Национальной академии наук, доцентом Казахского педагогического института им. Абая, сотрудником отдела внутренней политики аппарата Президента и Кабинета Министров РК, заместителем председателя Комитета языков при Кабинете Министров РК, начальником Управления по развитию государственного языка в Государственном комитете по национальной политике РК, консультантом по языковой политике в отделе социально-культурного развития аппарата Правительства РК, заместителем директора Департамента по координации языковой политики Министерства образования, культуры и здравоохранения РК, начальником отдела Департамента по развитию языков Министерства культуры, информации и общественного согласия РК.</p>

                        <p class="desc">Кенжехан Матыжанов внес весомый вклад в разработку законодательной базы и формирование концепции языковой политики. Был постоянным членом государственной терминологической и ономастической комиссий.</p>

                        <p class="desc">С 1999 по 2005 годы работал заместителем директора по науке Центрального государственного музея Республики Казахстан, директором Музея Первого Президента Республики Казахстан, заместителем директора Департамента культуры г. Алматы.</p>

                        <p class="desc">С 2005 по 2018 годы – начальник Управления по развитию языков города Алматы, руководитель Управления внутренней политики Акимата города Алматы, первый заместитель Председателя Алматинского городского филиала НДП «Нур Отан», депутат городского Маслихата города Алматы, руководитель научно-инновационного центра «Рухани жаңғыру» КазНУ им. аль-Фараби.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(".text_review").each(function(){
        var review_full = jQuery(this).html();
        var review = review_full;
        if( review.length > 500 )
        {
            review = review.substring(0, 1850);
            jQuery(this).html( review + '<div class="read_more"> показать больше </div>' );
        }
        jQuery(this).append('<div class="full_text" style="display: none;">' + review_full + '</div>');
    });
    jQuery(".read_more").click(function(){
        jQuery(this).parent().html( jQuery(this).parent().find(".full_text").html() );
    });
</script>
@endsection