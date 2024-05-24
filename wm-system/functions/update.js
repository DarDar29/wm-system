/*$(document).ready(function (e){
    e.preventDefault();

    var group_id = $(this).closest('tr').find('.group_id').text();
    console.log(group_id);

    $.ajax({
        method: "POST",
        url: "supplygroupfunc.php"
        data: {
            'click_edit_btn': true,
            'groupid':group_id,
        },
        success: function(response){
            $.each(response, function(key, value){
                $('#group_id').val(value['name']);
                $('#email').val(value['email']);
                $('#phone').val(value['phone']);
            });

            $('#')
        }
    })
})*/

const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

new DataTable('#example');