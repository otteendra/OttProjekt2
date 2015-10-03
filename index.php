<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Stylesheet.css"/>
    <meta charset="UTF-8">
    <title>Projekt2</title>
    <style>
        h6 {color:red;}
        tbody {color:black;}
        tfoot {color:black;}
        thead {color:black;}
    </style>
</head>
<body>
<!--Teine projekt-->
<main>
    <div>
    <h1>KÕIKIDE <mark>TAGIDE</mark> PROJEKT</h1>
    </div>
        <u><strong><header><abbr title="Tartu Kutsehariduskeskuse">Kooli</abbr> teine projekt</header></strong></u>

    <article>
        <h2>Article</h2>
            <p><dfn>Google Chrome</dfn> is a free, <q>Build a future where people live in harmony with nature.</q> open-source web browser developed by Google, released in 2008.</p>
</article>
    <b><p>Paragraph</p></b>
    <ins><em><footer>Footer</footer></em></ins>
</main>
<br>

<figure>
<img src="http://www.tlu.ee/~kyttim/pildid/eesti_kaart.jpg" alt="pilt" width="400" height="250" alt="lipp" usemap="#eestikaart">
    <figcaption>Fig.1 Eesti kaart.</figcaption>
</figure>
<map name="eestikaart">
    <area shape="rect" coords="0,0,400,250" alt="lipp" href="http://www.estonica.org/media/files/images/19/194069315144-eesti_lipp-enam-crop_png_690x518_q100.jpg">
</map>
<br>

<audio controls>
    <source src="/audio/Ark Patrol - Sinner.mp3" type="audio/mpeg">
    <track src="subtitles_en.vtt" kind="subtitles" srclang="en" label="English">
    <param name="autoplay" value="true">
</audio>

<video width="320" height="240" controls>
    <source src="/video/Rally.mp4" type="video/mp4">
</video>

<h3>Ordered list</h3>
<ol>
    <li>list1</li>
    <li>list2</li>
</ol>
<h3>Unordered list</h3>
<ul>
    <li>List3</li>
    <li>List4</li>
</ul>

<dl>
    <dt>Coffee</dt>
    <dd>Black hot drink</dd>
    <dt>Milk</dt>
    <dd>White cold drink</dd>
</dl>
<h4>Tabel</h4>
<table style="width:100%">
    <caption>Tavaline tabel</caption>
    <thead>
    <tr>
        <th>Tabel</th>
        <th>Tabel</th>
        <th>Tabel</th>
    </tr>
    </thead>
    <tr>
        <td>tabel</td>
        <td>tabel</td>
        <td>1221<bdi>number</bdi>1212</td>
    </tr>
    <tfoot>
    <tr>
        <td>tabel</td>
        <td>tabel</td>
        <td>1221<dialog open>Dialoog</dialog></td>
    </tr>
    </tfoot>
    <tbody>
    <tr>
        <td>tabel</td>
        <td>tabel</td>
        <td>1221</td>
    </tr>
    </tbody>
</table>

<aside>
    <h4>h4 header</h4>
    <p>Paragraph aside.</p>
</aside>
<section>
<h5><>h5 <i>iiiiii</i>header</h5>
    <p><small>ajshfashgfskdjfsjkfh<span style="color:blue;font-weight:bold">bsdf</span>skjfsfjksdfhsdjkfhsd</small></p>
    </section>
<h6>h6 header</h6>

<base href="http://www.google.ee" target="_blank">

<blockquote cite="http://www.worldwildlife.org/who/index.html">
    For 50 years, WWF has been protecting the <time>10:00</time>future of nature. The world's <sub>subscript</sub><sup>superscript</sup>leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.
</blockquote>

<details>
    <summary><s>SUMMARY.</s></summary>
<code>A piece of computer code</code>
</details>

<del><p><bdo dir="rtl">Suvaline tekst</bdo></p></del>

<canvas id="myCanvas" width="200" height="100" style="border:1px solid #000000;">
   <s> YO YO YO YO YO YO YO YO</s>
</canvas><br>

<form action="demo_form.asp" method="get">
    <input list="browsers" name="browser">
    <datalist id="browsers">
        <option value="Internet Explorer">
        <option value="Firefox">
        <option value="Chrome">
        <option value="Opera">
        <option value="Safari">
    </datalist>
    <input type="submit">
</form>

<embed src="helloworld.swf">

    <form>
        <fieldset>
            <legend>Andmed:</legend>
            Nimi: <input type="text"><br>
            Email: <input type="text"><br>
            Sünniaeg: <input type="text"><br>
            <label for="male">Mees</label>
            <input type="radio" name="sex" id="male" value="male"><br>
            <label for="female">Naine</label>
            <input type="radio" name="sex" id="female" value="female"><br><br>
            Turvalisus: <keygen name="security"><br>
                <input type="submit" value="Submit">
        </fieldset>
    </form>

    <iframe src="http://www.w3schools.com">
        <p>plaplapla.</p>
    </iframe><br>

    <kbd>Trükitekst</kbd><br>

    <label for="female">click</label>
    <input type="radio" name="sex" id="female" value="female"><br><br>

    <meter value="2" min="0" max="10">2 out of 10</meter><br>
    <meter value="0.4">40%</meter>

    <nav>
        <a href="/html/">HTML</a> |
        <a href="/css/">CSS</a> |
        <a href="/js/">JavaScript</a> |
        <a href="/jquery/">jQuery</a>
    </nav>

    <script>
        document.write("Tere tore!")
    </script>
    <noscript>Sorry, your browser does not support JavaScript!</noscript>

    <object width="40" height="40" data="helloworld.swf">
    </object>

    <select>
        <optgroup label="Rootsi autod">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
        </optgroup>
        <optgroup label="Saksa autod">
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </optgroup>
    </select>

    <form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0
        <input type="range" id="a" value="50">100
        +<input type="number" id="b" value="50">
        =<output name="x" for="a b"></output>
    </form>

    <pre>
Suvaline tekst, Suvaline tekst, Suvaline tekst, Suvaline tekst
</pre>

    <progress value="22" max="100">
    </progress>
    <samp>Sample output from a computer program</samp><br>

<textarea rows="4" cols="50">
Hello hello world,Hello hello world,Hello hello world,Hello hello world,
</textarea>

    <br>
<button type="button" onclick="alert('Tere-tere!')">Vajuta siia!</button>


<select>
    <option value="üks">üks</option>
    <option value="kaks">kaks</option>
    <option value="kolm">kolm</option>
    <option value="neli">neli</option>
</select>


<hr>
<address>
    Made by <a href="mailto:ott@eendra.ee">Ott-Erik</a><br>
    <a href="http://www.khk.ee">Tartu KHK</a>
</address>
</body>
</html>