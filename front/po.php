<div>目前位置:首頁>分類網誌><span id="span">健康新知</span></div>
<fieldset>
    <legend>分類網誌</legend>
    <a class="type" data-id="1">健康新知</a>
    <a class="type" data-id="2">菸害防治</a>
    <a class="type" data-id="3">癌症防治</a>
    <a class="type" data-id="4">慢性病防治</a>
</fieldset>
<fieldset>
    <legend>文章列表</legend>
    <div class="list"></div>
    <div class="article"></div>
</fieldset>
<script>
    $(".type").on('click', function() {
        $("#span").text($(this).text())
        let type = $(this).data('id')
        getlist(type)
    })

    function getlist(type) {
        $.post("./api/getlist.php", {
            type
        }, (res) => {
            $(".article").html('')
            $(".list").html(res)
        })
    }

    function getnews(id) {
        $.post("./api/getnews.php", {
            id
        }, (res) => {
            $(".list").html('')
            $(".article").html(res)
        })
    }
</script>