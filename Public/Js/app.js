
//funkce posílá get požadavek a poté vypisuje přeložený text

function TranslateWord(){
    var sourceWord = $('#word-input').val();
    if(sourceWord.length > 0){
        $.ajax({
            url: 'base.php',
            type: 'get',
            data: { "sourceWord": sourceWord,
            },
            success: function(response){
                $('#translated-words').text(response);
            },
            error: function() {
                alert('něco se pokazilo');
            }
        });
    }

}