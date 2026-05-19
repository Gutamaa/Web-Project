
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault(); // cegah reload halaman
  const modal = document.getElementById('thankYouModal');
  modal.style.display = 'flex';
  this.reset(); // kosongkan form
});
