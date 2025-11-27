const one = document.querySelector('select[name="one"]');
    const two = document.querySelector('select[name="two"]');
    one.onchange = function () {
        two.querySelectorAll('option').forEach(opt => {
            if (opt.dataset.id != one.value) opt.hidden = true;
            else opt.hidden = false;
        });
    }