$(document).ready(function() {
    $('.summernote').summernote({
        height:350
    });
});
    $('#example').DataTable( );
//delete
function  deleteUser(id){
    if(confirm("Are you sure!")){
        $.post({
            url:"./delete-article.php",
            data:{"id":id},
            success: function(res){
                if(res == 1){
                    console.log("delete")
                    $('tr[data-id="'+id+'"]').remove();
                }
            },
            error :function (err){
                console.error(err);
            }
        })
    }
}
