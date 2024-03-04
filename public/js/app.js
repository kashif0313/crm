function selectAll()
{
    var selectAll = document.getElementById('all-checkbox');
    if (selectAll.checked == true)
    {
        var valuecheckbox = document.querySelectorAll('#user-checkbox');
        valuecheckbox.forEach(function(checkbox) {
        checkbox.checked = true;
        });
    }
    else
    {
        var value = document.querySelectorAll('#user-checkbox');
         value.forEach(function(checkbox) {
        checkbox.checked = false;
    });
    }
    
}


document.addEventListener('livewire:navigated', () => {
    initFlowbite();
});





  