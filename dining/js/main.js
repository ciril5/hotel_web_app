var cards = document.getElementsByClassName('card');

for (var i = 0; i < cards.length; i++) {
    var p = cards[i].getElementsByTagName('p')[0];
    if (p.textContent.trim() === '') {
        cards[i].classList.add('hidden');
    }
}