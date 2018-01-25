
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pig Latin</title>
    <link rel="stylesheet" href="Public/Style/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="Public/Js/app.js"></script>

</head>
<body>
    <div id="all">
        <section class="translate">
            <label for="word-input"><strong>Zadejte slovo pro přeložení</strong></label>
            <div>
                <input id="word-input" type="text" name="sourceWord"/><!-- komentář pro spojení input a button :D
                --><button onclick="TranslateWord()">Přeložit</button>
            </div>

        </section>
        <section id="translation">
            <p> <strong>překlad do Pig latin:</strong></p>
            <p id="translated-words">
        </section>


        </p>
    </div>

</body>
</html>