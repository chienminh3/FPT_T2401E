document.getElementById('option1').addEventListener('change', function() {
    document.body.classList.remove('dark-mode');
});

document.getElementById('option1').addEventListener('change', function() {
    document.label.classList.remove('mode-color');
});

document.getElementById('option2').addEventListener('change', function() {
    document.body.classList.add('dark-mode');
});

document.getElementById('option2').addEventListener('change', function() {
    document.label.classList.add('mode-color');
})