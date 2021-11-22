document.addEventListener('DOMContentLoaded', function() {
    $('#edit').on('click', function(e){
        $('.editable').attr('readonly', false)
        $('#submit').css('display', 'block')
        $('#cancel').css('display', 'block')
        $('#edit').css('display', 'none')
    })

    $('#cancel').on('click', function(e){
        $('.editable').attr('readonly', true)
        $('#submit').css('display', 'none')
        $('#cancel').css('display', 'none')
        $('#edit').css('display', 'block')
    })

    $('#delete').on('click', function(e){
        $('#deleteFlag').val('delete')
    })
})
