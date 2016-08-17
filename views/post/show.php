<h1>Show action</h1>
<button class="btn btn-success" id="btn"> Click me...</button>

<?php 

//$this->title = "Article";
//$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset'])

//$this->registerJs("$('.container').append('<p>SHOW!!!</p>' );")


$js = <<<JS
$('#btn').on('click', function(e) {
    $.ajax({
       url: 'index.php?r=post/index',
       data: {test: '123'},
       type: 'POST',
       success: function(res) {
           console.log(res);
       },
       error: function() {
       	    alert('Error!');
       }
    });
});
JS;
$this->registerJs($js);

?>
