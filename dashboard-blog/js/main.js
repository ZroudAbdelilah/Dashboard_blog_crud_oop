$(document).ready(function() {
    $('#example').DataTable();
} );
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

    // // add user
    // $("#add").submit(function(e){
    //     e.preventDefault();
    //     let formData = $(this).serialize();
    //     $.post({
    //         url: './add-article.php',
    //         data:formData,
    //         success: function(res){
    //             let data = JSON.parse(res);
    //             $("tbody").prepend(`
    //             <tr data-id="${data['id']}">
    //                 <td>${data['title']}</td>
    //                 <td>${data['author']}</td>
    //                 <td>${data['content']}</td>
    //                 <td>${data['date']}</td>
    //                 <td>
    //                     <button onclick="updateUser(${data['id']})" class="btn btn-primary">Update</button>
    //                     <button onclick="deleteUser(${data['id']})" class="btn btn-danger">Delete</button>
    //                 </td>
    //             </tr>
    //             `);
    //             $("input").val('');
    //         },
    //         error:function(err){
    //             console.error(err);
    //         }
    //     });
    // };
