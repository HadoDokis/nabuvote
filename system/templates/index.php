<?php include("header.php"); ?>

<p class="x-lead">
    Рада громадського контролю формується у складі 15 осіб, відібраних за результатами конкурсу.
    Конкурс з формування складу Ради громадського контролю проводиться шляхом рейтингового
    Інтернет-голосування громадян, які проживають на території України.
</p>

<h2 class="space-top">Порядок голосування і оголошення результатів</h2>

<p class="x-lead">
    Рейтингове Інтернет-голосування проводиться протягом 12 годин через веб-сайт
    Національного антикорупційного бюро України &mdash; <b>2 червня 2016 року з 9:00 до 21:00</b>.
</p>

<!--
<h2 style="color:#f33">Це тестове голосування за несправжніх кандидатів</h2>
-->

<p>
    Будь-який громадянин, який проживає на території України, має право взяти участь у рейтинговому
    Інтернет-голосуванні. Кожен виборець може проголосувати лише один раз і не більше ніж за п'ятнадцять кандидатів.
</p>

<p>
    Обраними до складу Ради громадського контролю за результатами рейтингового Інтернет-голосування
    вважаються п'ятнадцять кандидатів, які набрали найбільшу кількість голосів.
</p>

<p>
    З метою запобігання повторного голосування, бажаючим прийняти участь в рейтинговому Інтернет-голосуванні
    буде запропоновано пройти ряд перевірок, підтвердити адресу своєї електронної пошти та номер мобільного телефону.
    На проходження перевірок і обрання кандидатів відводиться <b>15 хв</b>. Якщо Ви не встигли проголосувати,
    спробу можна повторити за 5 хв.
</p>

<p>
    За результатами конкурсу з формування складу Ради громадського контролю Директор Національного
    антикорупційного бюро України розміщує на офіційному веб-сайті Національного антикорупційного
    бюро України оголошення про результати рейтингового голосування із зазначенням кількості голосів,
    поданих за кожного кандидата.
</p>

<h2 class="space-top">Відкритість і прозорість голосування</h2>

<p>
    Протокол голосування з частково знеособленними данними доступний <a href="public/report.txt">публічно</a>.
</p>

<br>

<div class="candidates_list" style="display:none">
  <h2>Список кандидатів у Раду громадського контролю</h2>
  <table class="table table-striped candidates_table">
    <thead>
      <tr>
        <th>ПІБ</th>
        <th>ІГС</th>
        <th>Досьє</th>
      </tr>
    </thead>
    <tbody>
    <?= candidates_table(); ?>
    </tbody>
  </table>
  <br>
</div>

<div class="well text-center">
    <a href="#" class="btn btn-lg btn-default show-candidates">Cписок кандидатів</a>
    <!-- <a href="step1.php" class="btn btn-lg btn-primary">Розпочати голосування</a> -->
</div>

<?php include("footer.php"); ?>
