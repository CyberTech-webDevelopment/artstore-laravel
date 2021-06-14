
    $(document).ready(function() {
        $(".flex-item").click(function() {
            var hiddens = document.getElementsByClassName('hidden');
            var items=document.getElementsByClassName('flex-item');
            for (let i = 0; i < hiddens.length; i++) {
                hiddens[i].style.display = 'none';
                items[i].style.borderColor='#23212126';
            }
            var idname = $(this).attr('id');
            document.getElementById('name-' + idname).style.display = 'block';
            $(this).css('border-color', '#6f06066e');
        })
    });
