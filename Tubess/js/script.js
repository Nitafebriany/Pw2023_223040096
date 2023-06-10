const keyword = document.getElementById('keyword');
const searchContainer = document.getElementById('container');

keyword.onkeyup = function() {
    fetch('ajax/search.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((text) => (searchContainer.innerHTML = text));
};