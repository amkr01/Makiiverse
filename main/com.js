const communities = document.querySelectorAll('.community');

communities.forEach(btn => {
  btn.addEventListener('click', () => {
    communities.forEach(c => c.classList.remove('active'));
    btn.classList.add('active');
    // Aquí puedes cargar la comunidad correspondiente según el valor de data-platform
    const platform = btn.getAttribute('data-platform');
    console.log('Comunidad seleccionada:', platform);
  });
});